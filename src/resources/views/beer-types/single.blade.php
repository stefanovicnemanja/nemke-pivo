

@extends('pivo::layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
						
						
					<p>Ође ти је једно пиво. БА!</p>

					<p> Припада врсти <?php echo $beertype['type_name']; ?> <br> <a href="/beertype/<?php echo $beertype['id']; ?>/edit">Промени: <?php echo $beertype['type_name']; ?></a></p> 

					<a href="/beertype"><< Назад на све врсте.</a>
					    
				 You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
