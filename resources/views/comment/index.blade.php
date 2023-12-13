@extends('layout')
@section('content')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Дата</th>      
      <th scope="col">Заголовок статьи</th>
      <th scope="col">Текст</th>
      <th scope="col">Автор</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($comments as $comment)
    <tr>
      <th scope="row">{{$comment->created_at}}</th>
      @foreach ($articles as $article)
      @if($comment->article_id == $article->id)      
        <td>{{$article->title}}</a></td>
      @endif
      @endforeach
      <td>{{$comment->text}}</td>
      <td>{{$comment->getUserId()->name}}</td>
      <td>
        @if (!$comment->accept == 1)
        <a href="/comment/accept/{{$comment->id}}" class="btn btn-secondary">Одобрить</a>
        @else
        <a href="/comment/reject/{{$comment->id}}" class="btn btn-danger">Отклонить</a>
        @endif
      </td>
    </tr>
    @endforeach    
  </tbody>
</table>
{{$comments->links()}}
@endsection