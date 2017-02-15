

@extends('pivo::layout')

@section('content')
	<a href="/beertype">Врати на почетну </a>
	<form action="/beertype" method="post">
		<label for="beertype-type">Унеси врсту пива</label><br />
		<input type="text" name="beertype-type" id="beertype-type" /><br />

		
		<input type="submit" value="Упиши">
	</form>
@endsection
