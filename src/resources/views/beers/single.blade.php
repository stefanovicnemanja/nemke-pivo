

@extends('pivo::layout')

@section('content')
	<p>Ође ти је једно пиво. БА!</p>

	<p> <?php echo $beer['brand']; ?> <a href="/beer/<?php echo $beer['id']; ?>/edit">Промени <?php echo $beer['brand']; ?></a></p> 

	<p>Припада врсти: {{ $beerType }}</p>

	<a href="/beer"><< Назад на сва пива.</a>
@endsection
