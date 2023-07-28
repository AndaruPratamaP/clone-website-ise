<?php

namespace App\Http\Controllers\Presentation\Dashboard;

use App\Core\Domain\Models\Eloquents\BionixCoupon\BionixCoupon;
use App\Core\Domain\Models\Eloquents\BionixRoadshow\BionixRoadshow;
use App\Core\Domain\Models\Facades\UserAccount;
use App\Exceptions\IseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Throwable;

class CouponController extends Component
{
    public array $msg = [
        "error" => "",
        "success" => ""
    ];

    public function index(string $search, int $entries, string $orderby, string $order)
    {
        return $this->getAllCoupons($search, $entries, $orderby, $order);
    }

    public function getAllCoupons($search, $entries, $orderby, $order)
    {
        $columns = ['code', 'sekolah'];

        $paginate = BionixCoupon::select('*')
            ->where(function ($q) use ($search, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'like', '%' . $search . '%');
                }
            })
            ->orderBy($this->sanitizeOrderBy($orderby), $this->sanitizeOrder($order))
            ->paginate($entries);

        $paginate->map(function ($coupon) {
            $coupon->used = BionixRoadshow::where('promo_code', $coupon->code)->count();
        });

        return $paginate;
    }

    protected function sanitizeOrderBy($orderby)
    {
        $allowedColumns = ['created_at', 'code', 'school'];
        return in_array($orderby, $allowedColumns) ? $orderby : 'created_at';
    }

    protected function sanitizeOrder($order)
    {
        return in_array(strtolower($order), ['asc', 'desc']) ? strtolower($order) : 'asc';
    }
    
    public function delete($code)
    {
        $coupon = BionixCoupon::where('code', $code)->first();
        $coupon->delete();

        return redirect()
            ->route('admin.coupon.table')
            ->with('toastr-toast', [
                'type' => 'success',
                'title' => 'Berhasil menghapus',
                'text' => 'Kupon berhasil dihapus',
            ]);
    }
}
