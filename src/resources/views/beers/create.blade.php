

@extends('pivo::layout')

@section('content')
	<a href="/beer">vrati na pocetnu </a>
	<form action="/beer" method="post">
		<label for="beer-brand">Enter Brand of beer:</label><br />
		<input type="text" name="beer-brand" id="beer-brand" /><br />

		<label for="beer-description">Enter description of beer:</label><br />
		<textarea name="beer-description" id="beer-description"></textarea><br />
		
		<select name="beer-type" id="beer-type">
			<option value="0" disabled="disabled" active="active">Select Beer Type</option>
			<option value="1">Amber Ale</option>
			<option value="2">American Pale Ale</option>
			<option value="3">Baltic Porter</option>
			<option value="4">Berliner Weisse</option>
			<option value="5">Biere de Garde</option>
			<option value="6">Blonde Ale</option>
			<option value="7">Bock</option>
			<option value="8">Brown Ale</option>
			<option value="9">Dark lager</option>
			<option value="10">Doppelbock</option>
			<option value="11">Double IPA</option>
			<option value="12">Dunkel</option>
			<option value="13">Dunkelweizen</option>
			<option value="14">English Bitter</option>
			<option value="15">ESB</option>
			<option value="16">Foreign Stout</option>
			<option value="17">Imperial Stout</option>
			<option value="18">India Pale Ale</option>
			<option value="19">Irish Dry Stout</option>
			<option value="20">Maibock</option>
			<option value="21">Marzen</option>
			<option value="22">Pale lager</option>
			<option value="23">Pilsener</option>
			<option value="24">Porter</option>
			<option value="25">Saison</option>
			<option value="26">Stout</option>
			<option value="27">Vienna lager</option>
			<option value="28">Weissbier</option>
			<option value="29">Witbier</option>
		</select><br />
		
		<input type="submit">
	</form>
@endsection
