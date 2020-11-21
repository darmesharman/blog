@extends('layout')

@section('content')
<h2> {{ $article->title }} </h2>
<p class="text-muted"> Posted by {{ $article->user->name }} </p>
<hr>
<div class="row">
    <div class="well clearfix">
        <div class="col-lg-12 col-md-12">
            <p> {{ $article->body }} </p>
        </div>
    </div>
</div>

<div id="tags">
    @foreach($article->tags as $tag)
        <a href="{{ route('articles.index', ['tag' => $tag->name]) }}"
            class="btn btn-outline-primary btn-sm">
            #{{ $tag->name }}
        </a>
    @endforeach
</div>

@can('update', $article)
    <form action="{{ route('articles.edit', $article) }}" method="get">
        @csrf

        <button class="btn btn-success btn-lg pull-left">
            Изменить
        </button>
    </form>
@endcan

@can('delete', $article)
    <form action="{{ route('articles.destroy', $article) }}" method="post">
        @csrf            
        @method('delete')
        
        <button class="btn btn-danger btn-lg pull-right">
            Удалить
        </button>
    </form>
@endcan
@endsection