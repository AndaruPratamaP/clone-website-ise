<?php

namespace App\Core\Application\Services\BionixRoadshow;

use App\Core\Application\FileUpload\FileUpload;
use App\Core\Application\Services\Event\EventService;
use App\Core\Application\Services\Payment\CreatePaymentRequest;
use App\Core\Application\Services\Payment\PaymentService;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use App\Core\Application\Services\BionixRoadshow\BionixRdRegistrationRequest;
use App\Core\Application\Services\BionixRoadshow\BionixRdDpRequest;
use App\Core\Application\Services\BionixRoadshow\BionixRdPelunasanRequest;
use App\Core\Domain\Models\Eloquents\BionixCoupon\BionixCoupon;
use App\Core\Domain\Models\Eloquents\User\User;
use App\Core\Domain\Models\Eloquents\BionixRoadshow\BionixRoadshow;
use App\Core\Domain\Models\Eloquents\Payment\Payment;
use App\Exceptions\IseException;
use Carbon\Carbon;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\UploadedFile;

class BionixRdService
{
  private EventService $eventService;
  private PaymentService $paymentService;
  private $event_id = '3e003d84-884c-4762-aa7a-66f8a7458e88';

  public function __construct(EventService $eventService, PaymentService $paymentService)
  {
    $this->eventService = $eventService;
    $this->paymentService = $paymentService;
  }

  public function getPeserta($user_id)
  {
    $peserta = BionixRoadshow::where('ketua_id', $user_id)->firstOrFail();

    return $peserta;
  }

  public function getAllPeserta($search, $entries, $orderby, $order)
  {
    $columns = ['full_name', 'email', 'team_name'];

    $paginate = BionixRoadshow::join('users', 'bionix_roadshow.ketua_id', '=', 'users.id')
      ->join('status_types', 'bionix_roadshow.status_type_id', '=', 'status_types.id')
      ->where(function ($q) use ($search, $columns) {
        foreach ($columns as $column) {
          $q->orWhere($column, 'like', '%' . $search . '%');
        }
      })
      ->orderBy($this->sanitizeOrderBy($orderby), $this->sanitizeOrder($order))
      ->paginate($entries);

    return $paginate;
  }

  protected function sanitizeOrderBy($orderby)
  {
    $allowedColumns = ['bionix_roadshow.created_at', 'bionix_roadshow.team_name', 'full_name', 'status_type_id'];
    return in_array($orderby, $allowedColumns) ? $orderby : 'bionix_roadshow.created_at';
  }

  protected function sanitizeOrder($order)
  {
    return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
  }

  public function countRegistered()
    {
        $count = BionixRoadshow::count();

        return $count;
    }

    public function countVerified()
    {
        $count = BionixRoadshow::whereBetween('status_type_id', [22, 29])->count();

        return $count;
    }

  public function registerDp(BionixRdDpRequest $request)
  {
    // check if user already registered
    $registered = BionixRoadshow::where('ketua_id', auth()->user()->id)->first();
    $user_has_event = $this->eventService->isUserOnEvent($this->event_id, auth()->user()->id);

    if ($registered || $user_has_event) {
      IseException::throw('Anda sudah terdaftar', 3100);
    }

    $user = User::find(auth()->user()->id);
    $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $request->getTeamName());
    $ketua_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);

    ///////////////////////////////////////////
    $payment_proof = FileUpload::create(
      $request->getPaymentFile(),
      'bionixrddp',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'Payment_' . $team_friendly_name
    );
    $payment_proof->upload();

    $payment_request = new CreatePaymentRequest(
      auth()->user()->id,
      $this->event_id,
      $request->getNominalDp(), //dp bionix
      $payment_proof->getUrl(),
      Carbon::now()
        ->timezone('Asia/Jakarta')
        ->addDays(1),
      1,
      1
    );

    $payment = $this->paymentService->create_payment($payment_request);
    $coupon = BionixCoupon::where('coupon', $request->getPromoCode())->where('sekolah', $request->getSchool())->first();
    /////////////////////////////////////////
    $bionixrd_peserta = BionixRoadshow::create([
      'id' => Uuid::uuid4()->toString(),
      'ketua_id' => $user->id,
      'payment_id' => $payment,
      'status_type_id' => '21', // BionixRegistered
      'team_name' => $request->getTeamName(),
      'school' => $request->getSchool(),
      'bank_account' => $request->getRekName(),
      'dp_amount' => $request->getNominalDp(),
      'promo_code' => $coupon->code,
      'payment_method' => $request->getPaymentMethod(),
      'payment_proof_dp' => $payment_proof->getUrl(),
    ]);

    $this->eventService->registerUserToEvent($this->event_id, auth()->user()->id);

    return $bionixrd_peserta;
  }

  public function registerPelunasan(BionixRdPelunasanRequest $request)
  {
    $user = User::find(auth()->user()->id);
    // check if user already registered
    $ketua = BionixRoadshow::where('ketua_id', $user->id)->first();
    $status_type = (int) $ketua->status_type_id;

    if ($status_type > 26 || $status_type == 25 || $status_type == 24) {
      IseException::throw('Anda sudah Mengisi Form Pelunasan', 3100);
    } elseif ($status_type == 21) {
      IseException::throw('Harap tunggu admin untuk mengkonfirmasi dp', 3200);
    } elseif ($status_type != 22 && $status_type != 26) {
      IseException::throw('Mohon lakukan Dp Bionix Roadshow dahulu', 3300);
    }

    $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $ketua->team_name);

    $payment_proof_pelunasan = FileUpload::create(
      $request->getBukti(),
      'bionixrd',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'Payment_' . $team_friendly_name
    );
    $payment_proof_pelunasan->upload();

    $promo = BionixRoadshow::where('ketua_id', auth()->user()->id)->first()->promoCode;
    $jumlah_dp = Payment::where('user_id', auth()->user()->id)->first()->bill;
    //check deadline promo
    if (Carbon::now()->timezone('Asia/Jakarta') > $promo->deadline) {
      $payment_request = new CreatePaymentRequest(
        auth()->user()->id,
        $this->event_id,
        $jumlah_dp, // harga tiket(non promo) - jumlah dp
        $payment_proof_pelunasan->getUrl(),
        Carbon::now()
          ->timezone('Asia/Jakarta')
          ->addDays(1),
        1,
        1
      );
    } else {
      $payment_request = new CreatePaymentRequest(
        auth()->user()->id,
        $this->event_id,
        $jumlah_dp, // harga tiket(promo)- jumlah dp
        $payment_proof_pelunasan->getUrl(),
        Carbon::now()
          ->timezone('Asia/Jakarta')
          ->addDays(1),
        1,
        1
      );
    }
    $payment = $this->paymentService->create_payment($payment_request);

    $bionixrd_peserta = BionixRoadshow::where('ketua_id', $user->id)->update([
      'payment_id' => $payment,
      'status_type_id' => '24', // RegisteredPelunasan
      'payment_proof_pelunasan' => $payment_proof_pelunasan->getUrl(),
    ]);

    return $bionixrd_peserta;
  }

  public function registerBerkas(BionixRdRegistrationRequest $request)
  {
    // check if user already registered
    $user = User::find(auth()->user()->id);
    // check if user already registered
    $timroadshow = BionixRoadshow::where('ketua_id', $user->id)->first();
    $status_type = (int) $timroadshow->status_type_id;

    if ($status_type == 27 || $status_type == 28) {
      IseException::throw('Anda sudah Meregis berkas', 3100);
    } elseif ($status_type == 24) {
      IseException::throw('Harap tunggu admin untuk mengkonfirmasi pembayaran', 3200);
    } elseif ($status_type != 25 && $status_type != 29) {
      IseException::throw('Mohon lakukan Pelunasan Roadshow dahulu', 3300);
    }

    $user = User::find(auth()->user()->id);

    $ketua_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);
    $member_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $user->full_name);
    $team_friendly_name = preg_replace('/[^A-Za-z0-9\-]/', '', $timroadshow->team_name);

    $ketua_student_card = FileUpload::create(
      $request->getLeadStudentCard(),
      'bionixroadshow',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'StudentCard_' . $ketua_friendly_name
    );
    $ketua_student_card->upload();

    $ketua_poster = FileUpload::create(
      $request->getLeadPoster(),
      'bionixroadshow',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'CV_' . $ketua_friendly_name
    );
    $ketua_poster->upload();

    $ketua_follow = FileUpload::create(
      $request->getLeadIgProof(),
      'bionixroadshow',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'CV_' . $ketua_friendly_name
    );
    $ketua_follow->upload();

    $member_student_card = FileUpload::create(
      $request->getMemberStudentCard(),
      'bionixroadshow',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'StudentCard_' . $ketua_friendly_name
    );
    $member_student_card->upload();

    $member_poster = FileUpload::create(
      $request->getMemberPoster(),
      'bionixroadshow',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'CV_' . $ketua_friendly_name
    );
    $member_poster->upload();

    $member_follow = FileUpload::create(
      $request->getMemberIgProof(),
      'bionixroadshow',
      auth()->user()->id . Carbon::now()->timezone('Asia/Jakarta'),
      'CV_' . $ketua_friendly_name
    );
    $member_follow->upload();

    $bionixrd_peserta = BionixRoadshow::where('ketua_id', $user->id)->update([
      'status_type_id' => '27', // Registered Berkas
      'ketua_twibbon_link' => $request->geLeadTwibbon(),
      'anggota_full_name' => $request->getMemberName(),
      'anggota_email' => $request->getMemberEmail(),
      'anggota_wa' => $request->getMemberPhoneNumber(),
      'anggota_twibbon_link' => $request->getMemberTwibbon(),
      'ketua_student_card' => $ketua_student_card->getUrl(),
      'ketua_poster_file' => $ketua_poster->getUrl(),
      'ketua_follow_ig_proof' => $ketua_follow->getUrl(),
      'anggota_student_card' => $member_student_card->getUrl(),
      'anggota_poster_file' => $member_poster->getUrl(),
      'anggota_follow_ig_proof' => $member_follow->getUrl(),
    ]);

    return $bionixrd_peserta;
  }

  public function updateStatus($user_id, $status_type_id)
  {
    $bionixrd_peserta = BionixRoadshow::where('ketua_id', $user_id)->first();

    $bionixrd_peserta->status_type_id = $status_type_id;
    $bionixrd_peserta->save();

    return $bionixrd_peserta;
  }

  public function acceptDp($user_id)
  {
    $this->updateStatus($user_id, 22);
  }

  public function rejectDp($user_id)
  {
    $bionixrdpeserta = BionixRoadshow::where('ketua_id', $user_id);
    $userHasEvent = UserHasEvent::where('user_id', $user_id )->where('event_id','3e003d84-884c-4762-aa7a-66f8a7458e88');
    $bionixrdpeserta->delete();
    $userHasEvent->delete();
  }

  public function acceptPelunasan($user_id)
  {
    $this->updateStatus($user_id, 25);
  }

  public function rejectPelunasan($user_id)
  {
    $this->updateStatus($user_id, 26);
  }
  public function acceptBerkas($user_id)
  {
    $this->updateStatus($user_id, 28);
  }

  public function rejectBerkas($user_id)
  {
    $this->updateStatus($user_id, 29);
  }

  public function isValidCoupon($sekolah, $promo_code): bool
  {
    // $coupon = BionixCoupon::where('coupon', $promo_code)->first();
    $coupon = BionixCoupon::where('coupon', $promo_code)->where('sekolah', $sekolah)->first();

    if (!$coupon) {
      IseException::throw('Kode Promo tidak ditemukan', 3100);
      return false;
    }

    if($coupon->sekolah != $sekolah){
      IseException::throw('Kode Promo tidak valid', 3101);
      return false;
    }

    if (Carbon::now()->timezone('Asia/Jakarta') > $coupon->deadline) {
      IseException::throw('Kode Promo sudah tidak berlaku', 3102);
      return false;
    }

    return true;
  }

  public function getDaftarSekolah()
  {
    $sekolahs = BionixCoupon::pluck('sekolah')->toArray();

    // dd($sekolahs);

    return $sekolahs;
  }

  public function getHargaPelunasan()
  {
    $user = User::find(auth()->user()->id);
    $timroadshow = BionixRoadshow::where('ketua_id', $user->id)->first();

    $bionix_coupon = $timroadshow->promoCode;
    $date = $bionix_coupon->deadline;
    $discount = $bionix_coupon->discount;

    if(Carbon::now()->timezone('Asia/Jakarta') > $date){
      return 100000 - $timroadshow->dp_amount;
    } else {
      return (100000 - $discount) - $timroadshow->dp_amount;
    }

    return true;
  }
}
