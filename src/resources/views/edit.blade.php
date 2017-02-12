

@extends('pivo::layout')

@section('content')


	<a href="/beer/<?php echo $beer['id']; ?>">Врати на пиво <?php echo $beer['brand']; ?></a>
	<form action="/beer" method="post">
		<input type="text" name="beer-update" value="<?php echo $beer['brand']; ?>">
		<input type="submit">
	</form>
@endsection