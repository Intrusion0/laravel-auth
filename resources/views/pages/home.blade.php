@extends('layouts.main-layout')
@section('content')
    
    <div id="app" class="ms-container">
        
        @auth
            <div class="ms-container-auth">
               Ciao {{ Auth::user()->name }}
            </div>
        @else
            <div class="ms-container-auth">
                Se vuoi continuare, registrati o fai il login
            </div>
        @endauth

        {{-- Register form --}}
        <h2>REGISTER</h2>
        <form action="{{ route('register') }}" method="POST">

            @method('POST')
            @csrf

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name" value="mario">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email" value="mario@gmail.com">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" value="password">
            <label for="password-confirm">Confirm password</label>
            <input type="password" name="password_confirmation" placeholder="password confirmation" value="password">
            <input type="submit" class="btn-success" value="REGISTRATI">
        </form>

    </div>

@endsection