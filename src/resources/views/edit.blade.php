

@extends('pivo::layout')

@section('content')


	<a href="/beer/<?php echo $beer['id']; ?>">Врати на пиво <?php echo $beer['brand']; ?></a>
	<form action="/beer/<?php echo $beer['id']; ?>" method="post">


		<label for="beer-brand"> Unesite novo pivo umesto <?php echo $beer['brand']; ?></label><br>		
		<input type="text" name="beer-brand" value="<?php echo $beer['brand']; ?>"><br>

		<label for="beer-description"> Unesite novi opis piva</label><br>	
		<textarea name="beer-description" id="beer-description" value="<?php echo $beer['description']; ?>"></textarea><br>

		<input type="text" name="beer-type" value="<?php echo $beer['type_id']; ?>"><br>
		<input type="submit">

	</form>
@endsection