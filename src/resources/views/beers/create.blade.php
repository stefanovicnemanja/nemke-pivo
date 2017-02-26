

@extends('pivo::layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
						<a href="/beer">Врати на почетну </a>
						<form action="/beer" method="post">
							<label for="beer-brand">Унесите бренд пива:</label><br />
							<input type="text" name="beer-brand" id="beer-brand" /><br />

							<label for="beer-description">Унесите опис пива:</label><br />
							<textarea name="beer-description" id="beer-description"></textarea><br />

							<label for="stock">Унесите стање:</label><br />
							<input type="text" name="stock" id="stock" /><br />

							<label for="stock">Унесите државу порекла:</label><br />
							<input type="text" name="origin" id="origin" /><br />
							
							<select name="beer-type" id="beer-type">
								<option value="0" disabled="disabled" active="active">Врста којој припада</option>

								@foreach($beerTypes as $type)
								<option value="{{ $type['id'] }}">{{ $type['type_name'] }}</option>
								@endforeach

							</select><br />
							
							<input type="submit" value="Сачувај">
						</form>
				 You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
