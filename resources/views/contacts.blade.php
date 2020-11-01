@extends('layout')

@section('content')
    <form role="search" class="visible-xs">
        <div class="form-group">
            <div class="input-group">
                <input type="search" class="form-control input-lg" placeholder="Ваш запрос"/>
                <div class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>

    @if (session('message'))
        <div class="text-success text-lg-center alert-success">
            <h1>{{ session('message') }}</h1>
        </div>
    @endif
    <h1>Контакты</h1>
    <hr>
    <p>Отправьте ваш отзыв о портале</p>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf

        @guest
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" class="form-control input-lg" required>
                @error('name')
                    <div class="text-small alert-danger">{{ $message }}</div>
                @enderror

                <input type="email" name="email" placeholder="Ваше email" class="form-control input-lg" id="input_second" required>
                @error('email')
                    <div class="text-small alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @else 
            <div class="form-group">
                <input type="hidden" name="name" placeholder="Ваше имя" class="form-control input-lg" value="{{ Auth::user()->name }}" required>
                @error('name')
                    <div class="text-small alert-danger">{{ $message }}</div>
                @enderror

                <input type="hidden" name="email" placeholder="Ваше email" class="form-control input-lg" id="input_second"  value="{{ Auth::user()->email }}"required>
                @error('email')
                    <div class="text-small alert-danger">{{ $message }}</div>
                @enderror
            </div>
        @endguest
        <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Ваше сообщение" required></textarea>  
            @error('message')
                <div class="text-small alert-danger">{{ $message }}</div>
            @enderror              
        </div>
        <button class="btn btn-lg btn-warning pull-right">Отправить</button>
    </form>
@endsection
