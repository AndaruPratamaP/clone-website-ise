<?php

namespace App\Http\Controllers\Pages\Dashboard\Coupon;

use App\Http\Controllers\Presentation\ShortenerController;

class CouponTable extends ShortenerController
{
    public string $search = '';
    public string $orderby = '';
    public string $order = '';
    public int $entries = 10;
    
    public function render()
    {
        return view('livewire.dashboard.admin.coupon.coupon-table',[
            'shorteners' => $this->index($this->search, $this->entries, $this->orderby, $this->order),
        ])->layout('layouts.dashboard.admin.base');
    }
}
