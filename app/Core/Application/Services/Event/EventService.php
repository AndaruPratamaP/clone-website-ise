<?php

namespace App\Core\Application\Services\Event;

use App\Core\Domain\Models\Eloquents\Event\Event;
use App\Core\Domain\Models\Eloquents\UserHasEvent\UserHasEvent;
use Carbon\Carbon;

class EventService
{
    public function isUserOnEvent(string $event_id, string $user_id)
    {
        return UserHasEvent::where('user_id', $user_id)->where('event_id', $event_id)->exists();
    }

    public function isEventOpen(string $event_id)
    {
        $event = Event::find($event_id);
        return Carbon::now() > $event->start_date;
    }

    public function getEventDate(string $event_id)
    {
        $event = Event::find($event_id);
        return $this->isEventOpen($event_id) ? $event->end_date : $event->start_date;
    }

    public function registerUserToEvent(string $event_id, string $user_id)
    {
        return UserHasEvent::create([
            'user_id' => $user_id,
            'event_id' => $event_id,
        ]);
    }
}
