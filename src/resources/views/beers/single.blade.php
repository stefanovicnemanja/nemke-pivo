

@extends('pivo::layout')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
						<p>Ође ти је једно пиво. БА!</p>

						<p> <?php echo $beer['brand']; ?> <a href="/beer/<?php echo $beer['id']; ?>/edit">Промени <?php echo $beer['brand']; ?></a></p> 

						<p>Припада врсти: {{ $beerType }}</p>

						<a href="/beer"><< Назад на сва пива.</a>				
				 You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
