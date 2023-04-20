@extends('layouts.app')

@section('content')
    <div>
        <div x-data="{ open: false }">
            <button @click="open = !open">Expand</button>

            <span x-show="open" class="text-blue-500 font-montserrat">
                Content...
            </span>
        </div>
    </div>
@endsection
