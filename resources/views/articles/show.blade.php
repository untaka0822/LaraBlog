<!-- resouces/views/articles/show.blade.php -->
@extends('layout')
 
@section('content')
    <h1>{{ $article->title }}</h1>
 
    <hr/>
 
    <article>
        <div class="body">{{ $article->body }}</div>
    </article>
 
    <br>
 
    {!! Html::link_to(action('ArticlesController@edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}

@stop