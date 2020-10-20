@extends('layout')

@section('content')
  <!-- NewFilmsSection-->
  <h2>
    Новые фильмы <!-- Title of NewFilmsSection-->
  </h2>
  <hr />
  <!-- New Films -->
  <div class="row">
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/max.png" alt="max" />
      <div class="film_label">Безумный макс</div>
    </div>
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/cloud.png" alt="max" />
      <div class="film_label">Облычный атлас</div>
    </div>
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/inter.png" alt="max" />
      <div class="film_label">Интерстеллар</div>
    </div>
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/matrix.png" alt="matrix" />
      <div class="film_label">Матрица</div>
    </div>
  </div>
  <div class="margin-8"></div> <!-- Just empty space -->
  <!-- endNewFilmsSection-->

  <!-- NewSeriesSection -->
  <h2>
    Новые сериалы <!-- Title of NewSeriesSection -->
  </h2>
  <hr />
  <!-- New Series -->
  <div class="row">
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/breakingbad.png" alt="max" />
      <div class="film_label">Во все тяжкие</div>
    </div>
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/dead.png" alt="max" />
      <div class="film_label">Ходячие мертыецы</div>
    </div>
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img//silicon.png" alt="max" />
      <div class="film_label">Силикон</div>
    </div>
    <div class="films_block col-lg-3 col-md-3 col-sm-3 col-xs-6">
      <img src="img/xfiles.png" alt="max" />
      <div class="film_label">Люди икс</div>
    </div>
  </div>
  <div class="margin-8"></div> <!-- Just an empty space -->
  <!-- endNewSeriesSection-->

  <section>
    @foreach ($articles as $article)
      <article>
        <a href="#"><h3>{{ $article->title }}</h3></a>
        <hr />
        <p>
          {{ $article->excerpt }}
        </p>
        <a href="articles/{{ $article->id }}" class="btn btn-warning pull-right">Читать</a>
        <div class="clear"></div>
      </article>
    @endforeach
  </section>
@endsection