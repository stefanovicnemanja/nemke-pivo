

@extends('pivo::layout')

@section('content')

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
@endsection
