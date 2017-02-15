

@extends('pivo::layout')

@section('content')
	<a href="/beer">vrati na pocetnu </a>
	<form action="/beer">
		<input type="text">
		<input type="submit">
	</form>
@endsection
