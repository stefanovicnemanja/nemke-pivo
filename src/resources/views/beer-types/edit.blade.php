

@extends('pivo::layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
						
						<a href="/beertype/<?php echo $beertype['id']; ?>">Врати на пиво <?php echo $beertype['type_name']; ?></a>
						<form action="/beertype/<?php echo $beertype['id']; ?>" method="post">
							<input type="hidden" name="_method" value="PATCH">

							<label for="beertype-type_name"> Унесите нову врсту пива уместо <?php echo $beertype['type_name']; ?></label><br>		
							<input type="text" name="beertype-type" value="<?php echo $beertype['type_name']; ?>"><br>

							<input type="submit" value="Унеси">
						</form>

					    <form action="/beertype/{{ $beertype['id'] }}" method="post">
							<input type="submit" name="delete-button" value="Обриши јебену <?php echo $beertype['type_name']; ?> врсту"> </input>
					        <input type="hidden" name="_method" value="DELETE">
					    </form>
					    
				 You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>



@endsection