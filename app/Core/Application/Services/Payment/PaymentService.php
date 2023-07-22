<?php

namespace App\Core\Application\Services\Payment;

use App\Core\Application\Services\Event\EventService;
use App\Core\Domain\Models\Eloquents\Payment\Payment;
use Ramsey\Uuid\Uuid;

class PaymentService
{
    private EventService $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function create_payment(CreatePaymentRequest $request)
    {
        $id = Uuid::uuid4()->toString();
        
        $payment = Payment::create([
            'id' => $id,
            'user_id' => $request->getUserId(),
            'event_id' => $request->getEventId(),
            'bill' => $request->getBill(),
            'payment_proof_file' => $request->getPaymentProofFile(),
            'deadline' => $request->getDeadline(),
            'bank_list_id' => $request->getBankListId(),
            'payment_status_id' => $request->getPaymentStatusId(),
        ]);

        return $id;
    }
}
