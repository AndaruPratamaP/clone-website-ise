<?php

namespace App\Http\Controllers\Pages\Dashboard\Icon;

use Livewire\Component;

class GtsDashboard extends Component
{
    public bool $isOpen = false;
    public bool $isRegistered = false;
    public $date;

    public function render()
    {
        return view('livewire.dashboard.my.icon.gts')->layout('layouts.dashboard.base');
    }

    public function boot()
    {
        $this->isOpen = \Carbon\Carbon::now() < \App\Core\Domain\Models\Eloquents\Event\Event::find('a4a6c7cf-0208-11ee-a848-346f24386225')->value('start_date');

        if ($this->isOpen) {
            $this->date = \App\Core\Domain\Models\Eloquents\Event\Event::find('a4a6c7cf-0208-11ee-a848-346f24386225')->value('start_date');
        } else {
            $this->date = \App\Core\Domain\Models\Eloquents\Event\Event::find('a4a6c7cf-0208-11ee-a848-346f24386225')->value('end_date');
        }

        $this->isRegistered = \App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent::where('user_id', auth()->user()->id)->where('event_id', 'a4a6c7cf-0208-11ee-a848-346f24386225')->exists();
    }
}
