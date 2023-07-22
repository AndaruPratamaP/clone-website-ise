<?php

namespace App\Core\Application\Services\Payment;

class CreatePaymentRequest
{
    private string $user_id;
    private string $event_id;
    private float $bill;
    private string $payment_proof_file;
    private string $deadline;
    private int $bank_list_id;
    private int $payment_status_id;

    public function __construct(
        string $user_id,
        string $event_id,
        float $bill,
        string $payment_proof_file,
        string $deadline,
        int $bank_list_id,
        int $payment_status_id
    ) {
        $this->user_id = $user_id;
        $this->event_id = $event_id;
        $this->bill = $bill;
        $this->payment_proof_file = $payment_proof_file;
        $this->deadline = $deadline;
        $this->bank_list_id = $bank_list_id;
        $this->payment_status_id = $payment_status_id;
    }

    public function getUserId(): string
    {
        return $this->user_id;
    }

    public function getEventId(): string
    {
        return $this->event_id;
    }

    public function getBill(): float
    {
        return $this->bill;
    }

    public function getPaymentProofFile(): string
    {
        return $this->payment_proof_file;
    }

    public function getDeadline(): string
    {
        return $this->deadline;
    }

    public function getBankListId(): int
    {
        return $this->bank_list_id;
    }

    public function getPaymentStatusId(): int
    {
        return $this->payment_status_id;
    }
}
