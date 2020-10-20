@extends('layout')

@section('content')
<form role="search" class="visible-xs">
    <div class="form-group">
        <div class="input-group">
            <input
            type="search"
            class="form-control input-lg"
            placeholder="Ваш запрос"
            />
            <div class="input-group-btn">
            <button class="btn btn-default btn-lg" type="submit">
                <i class="glyphicon glyphicon-search"></i>
            </button>
            </div>
        </div>
    </div>
</form>

<h2>Рейтинг фильмов</h2>
<hr>

<table class="table table-striped">
    <thead>
        <tr>
            <th></th> 
            <th>Фильм</th>
            <th class="text-center">Год</th>
            <th class="text-center">Рейтинг</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="col-lg-1">
                <img class="img-responsive img-thumbnail" src="img/inter.png" alt="Интерстеллар">
            </td>
            <td><a href="#">Интерстеллар</a></td>
            <td class="text-center"><a href="#">2014</a></td>
            <td class="text-center"><a href="#">8,1</a></td>
        </tr>
        <tr>
            <td class="col-lg-1">
                <img class="img-responsive img-thumbnail" src="img/max.png" alt="Интерстеллар">
            </td>
            <td><a href="#">Безумный макс</a></td>
            <td class="text-center"><a href="#">2014</a></td>
            <td class="text-center"><a href="#">8,1</a></td>
        </tr>
        <tr>
            <td class="col-lg-1">
                <img class="img-responsive img-thumbnail" src="img/matrix.png" alt="Интерстеллар">
            </td>
            <td><a href="#">Матрица</a></td>
            <td class="text-center"><a href="#">2014</a></td>
            <td class="text-center"><a href="#">8,1</a></td>
        </tr>
    </tbody>
</table>
@endsection