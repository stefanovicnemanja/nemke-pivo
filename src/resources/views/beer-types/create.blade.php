

@extends('pivo::layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

						<a href="/beertype">Врати на почетну </a>
						<form action="/beertype" method="post">
							<label for="beertype-type">Унеси врсту пива</label><br />
							<input type="text" name="beertype-type" id="beertype-type" /><br />

							
							<input type="submit" value="Упиши">
						</form>
						
				 You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
