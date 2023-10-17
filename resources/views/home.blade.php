@extends('layouts.master')
@section("content")
    @auth
        <p>Добро пожаловать <b>{{ Auth::user()->name }}</b></p>
    @endauth
@endsection
