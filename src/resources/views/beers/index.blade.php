@extends('pivo::layout')

@section('content')
<a href="/beer/create">Упиши ново пиво</a>

<p>Овде су сва пива.</p>

<ul>
	<?php foreach($beers as $beer) : ?>

	<li><a href="/beer/<?php echo $beer['id']; ?>"><?php echo $beer['brand']; ?></a></li>

	<?php endforeach; ?>
</ul>
@endsection