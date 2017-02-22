@extends('pivo::layout')

@section('content')
<a href="/beer/create">Упиши ново пиво</a>

<p>Овде су сва пива.</p>

<a href="../beertype">Овде можете видети све врсте</a><br><br>

<ul>
	<?php foreach($beers as $beer) : ?>

	<li><a href="/beer/<?php echo $beer['id']; ?>"> {{$beer['brand']}}</a> {{'На стању има'. ' ' .$beer['stock'].' '. 'ком.'}} </li>

	<?php endforeach; ?>
</ul>
@endsection