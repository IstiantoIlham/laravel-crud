@extends('layout.app')
@section('content')
    <div>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <input type="text" name="name" id="name" />
            <input type="email" name="email" id="name">
            <input type="password" name="password" id="password">
            <input type="password" name="password_confirmation" id="confirm-password" />
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
