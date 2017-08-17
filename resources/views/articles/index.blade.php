<!-- resouces/views/articles/index.blade.php -->
 
@extends('layout')
 
@section('content')
    <h1>Articles</h1>
 
    <hr/>
   
    {!! link_to('articles/create', '新規作成', ['class' => 'btn btn-primary']) !!}
   
    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{ url('articles', $article->id) }}">
                    {{ $article->title }}
                </a>
            </h2>
            <div class="body">
                {{ $article->body }}
            </div>
        </article>
    @endforeach
@stop
