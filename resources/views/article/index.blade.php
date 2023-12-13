@extends('layout')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Заголовок</th>
      <th scope="col">Краткое описание</th>
      <th scope="col">Описание</th>
    </tr>
  </thead>
  <tbody>
    @foreach($articles as $article)
    <tr>
      <th scope="row">{{$article->date}}</th>
      <td><a class="nav-link" href="/article/{{$article->id}}">{{$article->title}}</a></td>
      <td>{{$article->shortDesc}}</td>
      <td>{{$article->text}}</td>
    </tr>
    @endforeach    
  </tbody>
</table>
{{$articles->links()}}
@endsection