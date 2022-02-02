@extends('layouts.main-layout')
@section('content')
    
    <div id="app" class="ms-container">
        
        {{-- Register form --}}
        <h2>REGISTER</h2>
        <form action="" method="POST">

            <label for="name">Name</label>
            <input type="text" name="name" placeholder="name">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" name="password_confirmation" placeholder="password confirmation">
            <input type="submit" class="btn-success" value="REGISTRATI">
        </form>

        <br><hr class="bg-white"><br>

        {{-- Login form --}}
        <h2>LOGIN</h2>
        <form action="" method="POST">

            <label for="email">Email</label>
            <input type="text" name="email" placeholder="email">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password">
            <input type="submit" class="btn-success" value="LOGIN">
        </form>

    </div>

@endsection