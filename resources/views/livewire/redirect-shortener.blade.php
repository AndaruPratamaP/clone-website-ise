@extends('layouts.only-layout')
@section('content')
<div>
    <p class="text-red-500 text-2xl">Redirecting to {{ $long_url }}</p>
    <script>
        setTimeout(() => {
            window.location.href = '{{ $long_url }}';
        }, 3000);
    </script>
</div>
@endsection
