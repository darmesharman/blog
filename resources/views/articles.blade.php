@extends('layout')

@section('content')   
    <h2>Статьи</h2>
    @auth
        <a href="/articles/create" class="btn btn-warning btn-lg pull">Добавить статью</a>
    @endauth
    <hr>

    @forelse ($articles as $article)
        <div class="row">
            <div class="well clearfix">
                <div class="text-center">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ $article->excerpt }}</p>
                    @foreach ($article->tags as $tag)
                        <a href="{{ route('articles.index', ['tag' => $tag->name]) }}" 
                            class="btn btn-outline-primary btn-sm">
                            #{{ $tag->name }}
                        </a>                        
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <a href="/articles/{{ $article->id }}" class="btn btn-lg btn-warning pull-right">Подробнее</a>
                    
                </div>
            </div>
        </div>
    @empty
        <div class="row text-center">
            <p>Sorry there is no artilces with this tag yet :(</p>
        </div>
    @endforelse
@endsection