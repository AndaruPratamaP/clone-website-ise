<?php

namespace App\Http\Controllers\Pages\Dashboard\Coupon;

use App\Http\Controllers\Presentation\Dashboard\CouponController;

class CouponTable extends CouponController
{
    public string $search = '';
    public string $orderby = '';
    public string $order = '';
    public int $entries = 10;
    
    public function render()
    {
        return view('livewire.dashboard.admin.coupon.coupon-table',[
            'coupons' => $this->index($this->search, $this->entries, $this->orderby, $this->order),
        ])->layout('layouts.dashboard.admin.base');
    }
}
