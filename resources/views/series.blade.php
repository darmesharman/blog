@extends('layout')

@section('content')
    <form role="search" class="visible-xs">
        <div class="form-group">
            <div class="input-group">
                <input type="search" class="form-control input-lg" placeholder="Ваш запрос"/>
                <div class="input-group-btn">
                    <button class="btn btn-default btn-lg" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>
    
    <h2>Сериалы</h2>
    <hr>
    <div class="row">
        <div class="well clearfix">
            <div class="col-lg-3 col-md-2 text-center">
                <img class="img-thumbnail" src="img/breakingbad.png" alt="Breaking Bad">
                <p>
                    Во все тяжкие
                </p>
            </div>
            <div class="col-lg-9 col-md-10">
                <p>
                    Премьера фильма состоялась 26 октября 2014 года в Лос-Анджелесе. Фильм окупился в прокате и заслужил положительные отзывы кинокритиков и высокие оценки зрителей, в том числе некоторых учёных. «Интерстеллар» получил ряд премий и номинаций на премии, в том числе «Оскар» за лучшие спецэффекты.
                </p>
            </div>
            <div class="col-lg-12">
                <a href="#" class="btn btn-lg btn-warning pull-right">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="well clearfix">
            <div class="col-lg-3 col-md-2 text-center">
                <img class="img-thumbnail" src="img/dead.png" alt="Walking Dead">
                <p>
                    Ходячие мертыецы
                </p>
            </div>
            <div class="col-lg-9 col-md-10">
                <p>
                    Премьера фильма состоялась 26 октября 2014 года в Лос-Анджелесе. Фильм окупился в прокате и заслужил положительные отзывы кинокритиков и высокие оценки зрителей, в том числе некоторых учёных. «Интерстеллар» получил ряд премий и номинаций на премии, в том числе «Оскар» за лучшие спецэффекты.
                </p>
            </div>
            <div class="col-lg-12">
                <a href="#" class="btn btn-lg btn-warning pull-right">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="well clearfix">
            <div class="col-lg-3 col-md-2 text-center">
                <img class="img-thumbnail" src="img/silicon.png" alt="Silicon">
                <p>
                    Силикон
                </p>
            </div>
            <div class="col-lg-9 col-md-10">
                <p>
                    Премьера фильма состоялась 26 октября 2014 года в Лос-Анджелесе. Фильм окупился в прокате и заслужил положительные отзывы кинокритиков и высокие оценки зрителей, в том числе некоторых учёных. «Интерстеллар» получил ряд премий и номинаций на премии, в том числе «Оскар» за лучшие спецэффекты.
                </p>
            </div>
            <div class="col-lg-12">
                <a href="#" class="btn btn-lg btn-warning pull-right">Подробнее</a>
            </div>
        </div>
    </div>
@endsection
