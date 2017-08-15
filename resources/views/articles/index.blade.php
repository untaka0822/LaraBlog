<!-- resouces/views/articles/index.blade.php -->
 
@extends('layout')
 
@section('content')
    <h1>Articles</h1>
 
    <hr/>
    
    <a href="articles/create" class="btn btn-primary">新規作成</a>
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
@endsection
