@extends('welcome')

@section('contenent-main')

    <div id="login">
        <div>
            <h1 style="text-align: center; font-size: 50px">LOGIN</h1>
            <input type="email" id="input_email" placeholder="email">
            <input type="password" id="input_password" placeholder="password">
            <input type="submit" id="submit" value="LOGIN">
        </div>

@endsection