@extends('layout')
@section('content')
    <p>Имя: <b>{{$data['name']}}</b></p>
    <p>Адрес: <b>{{$data['address']}}</b></p>
    <p>Телефон: <b>{{$data['phone']}}</b></p>
    <p>Почта: <b>{{$data['email']}}</b></p>
@endsection