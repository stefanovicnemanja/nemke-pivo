
@extends('pivo::layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
							
						<a href="/beertype/create">Упиши нову врсту</a>

						<p>Овде су излистане све врсте пива.</p>

						<a href="../beer">Врати на списак свих пива</a><br><br>

						<ul>
							<?php foreach($beertypes as $beertype) : ?>

							<li><a href="/beertype/<?php echo $beertype['id']; ?>"><?php echo $beertype['type_name']; ?></a></li>

							<?php endforeach; ?>
						</ul>
					    
				 You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection