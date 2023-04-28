<?php

namespace App\Http\Controllers\Pages;

trait BaseController
{
    public $toastQueue = [];

    public function dispatchToast(string $type, string $title, string $text = "", string $toast_type = "toastr")
    {
        $this->dispatchBrowserEvent("{$toast_type}-toast", [
            'type' => $type,
            'title' => $title,
            'text' => $text,
        ]);
    }

    public function emitDataToAlpine(string $key, string $value)
    {
        // usage : add to attribute of root : x-on:alpine-data.window="$event.detail.key = $event.detail.value"
        $this->dispatchBrowserEvent('alpine-data', [
            'key' => $key,
            'value' => $value,
        ]);
    }

    public function dispatchQueueToast()
    {
        foreach ($this->toastQueue as $toast) {
            $this->dispatchToast($toast['type'], $toast['title'], $toast['text']);
        }
    }

    public function addQueueToast(string $type, string $title, string $text = "")
    {
        array_push($this->toastQueue, [
            'type' => $type,
            'title' => $title,
            'text' => $text,
        ]);
    }
}
