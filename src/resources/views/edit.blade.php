

@extends('pivo::layout')

@section('content')
	<a href="/beer/<?php echo $beer['id']; ?>">Врати на пиво <?php echo $beer['name']; ?></a>
	<form action="/beer">
		<input type="text" value="<?php echo $beer['name']; ?>">
		<input type="submit">
	</form>
@endsection