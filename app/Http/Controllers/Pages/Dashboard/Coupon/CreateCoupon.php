<?php

namespace App\Http\Controllers\Pages\Dashboard\Coupon;

use Illuminate\Support\Facades\Date;
use Livewire\Component;

class CreateCoupon extends Component
{
    public string $coupon_code;
    public string $school_name;
    public string $end_date;

    protected $rules = [
        'coupon_code' => 'required|min:1|max:255',
        'school_name' => 'required|min:1|max:255',
        'end_date' => 'required|min:1|max:255',
    ];

    public function render()
    {
        return view('livewire.dashboard.admin.coupon.create-coupon')->layout('layouts.dashboard.admin.base');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate($this->rules);
        dd($this);
        // $response = $this->store();
        // if (!$response) {
        //     if ($this->msg["error"] == "")
        //         $this->msg["error"] = 'Something went wrong!';
        //     return;
        // }
        // $this->shortened = "https://ise-its.com/go/" . $response->getShortUrl();
        // $this->is_done = true;
        // $this->msg["success"] = 'Your message has been sent!';
    }
}
