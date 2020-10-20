@extends('layout')

@section('content')   
<h2> {{ $article->title }} </h2>
<a href="{{ route('articles.edit', $article) }}" class="btn btn-warning btn-lg">Изменить</a>
<hr>
<div class="row">
    <div class="well clearfix">
        <div class="col-lg-12 col-md-12">
        <p> {{ $article->body }} </p>
        </div>
    </div>
</div>

@endsection