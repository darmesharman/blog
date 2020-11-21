@extends('layout')

@section('content')   
    <h3>Your notifications:</h3>
    <ul>
        @forelse ($unreadNotifications as $notification)
            @if ($notification->type === 'App\Notifications\PaymentReceived')
                <li>Your payment was received</li>
            @endif
        @empty
            ...
        @endforelse
    </ul>
    <ul>
        @forelse ($readNotifications as $notification)
            @if ($notification->type === 'App\Notifications\PaymentReceived')
                <li style="color: silver">Your payment was received</li>
            @endif
        @empty
            ...
        @endforelse
    </ul>
@endsection