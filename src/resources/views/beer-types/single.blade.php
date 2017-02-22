

@extends('pivo::layout')

@section('content')

	<p>Ође ти је једно пиво. БА!</p>

	<p> Припада врсти <?php echo $beertype['type_name']; ?> <br> <a href="/beertype/<?php echo $beertype['id']; ?>/edit">Промени: <?php echo $beertype['type_name']; ?></a></p> 

	<a href="/beertype"><< Назад на све врсте.</a>

@endsection
