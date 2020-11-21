@extends('layout')

@section('content')
<form action="{{ route('payment.store') }}" method="post" class="text-center">
    @csrf

    <button class="btn btn-primary btn-lg">
        Make payment
    </button>
</form>
@endsection
