@extends('layout')
@section('content')
<div class="alert-danger">
    @if ($errors->any())
      @foreach($errors->all() as $error)
      <ul>
        <li>{{$error}}</li>
      </ul>
      @endforeach
    @endif
  </div>
  <form action="/article" method="POST">
      @csrf
      <div class="mb-3">
        <label for="exampleInputDate" class="form-label">Дата:</label>
        <input type="date" class="form-control" id="exampleInputDate" name="date" value="{{date('Y-m-d')}}">
      </div>
      <div class="mb-3">
          <label for="exampleInputTitle" class="form-label">Заголовок:</label>
          <input type="text" class="form-control" id="exampleInputTitle" name="title">
      </div>
      <div class="mb-3">
          <label for="exampleInputShortDesc" class="form-label">Краткое описание:</label>
          <input type="text" name="shortDesc" class="form-control" id="exampleInputShortDesc">
      </div>
      <div class="mb-3">
        <label for="exampleInputText" class="form-label">Текст:</label>
        <input type="text" class="form-control" id="exampleInputText" name="text">
      </div>
    <button type="submit" class="btn btn-primary">Добавить</button>
  </form>
@endsection