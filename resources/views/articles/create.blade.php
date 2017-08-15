@extends('layout')
 
@section('content')
    <h1>Write a New Article</h1>
 
    <hr/>
 
<form method="POST" action="" accept-charset="UTF-8">
    <input name="_token" type="hidden" value="pEUyvKqFqjlcEfh2lvIkGEeI3rWAAwdbgo3XicvW">
 
    <div class="form-group">
        <label for="title">Title:</label>
        <input class="form-control" name="title" type="text" id="title">
    </div>
 
    <div class="form-group">
        <label for="body">Body:</label>
        <textarea class="form-control" name="body" cols="50" rows="10" id="body"></textarea>
    </div>
 
    <div class="form-group">
        <label for="published_at">Publish On:</label>
        <input class="form-control" name="published_at" type="date" value="2015-03-04" id="published_at">
    </div>
 
    <div class="form-group">
        <input class="btn btn-primary form-control" type="submit" value="Add Article">
    </div>
</form>

@endsection