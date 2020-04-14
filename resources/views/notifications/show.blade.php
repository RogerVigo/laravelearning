@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Show all notifications</h1>

        @forelse($notifications as $notification)
            <ul>
                @if($notification->type==='App\Notifications\PaymentReceived')
                    <h3>We have received a payment {{$notification->data['amount']}} for you</h3>
                @endif
            </ul>

        @empty
            <h2>You dont have unread notifications</h2>
        @endforelse
    </div>

@endsection