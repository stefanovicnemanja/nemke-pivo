
@extends('pivo::layout')

@section('content')
<a href="/beertype/create">Упиши нову врсту</a>

<p>Овде су излистане све врсте пива.</p>

<a href="../beer">Врати на списак свих пива</a><br><br>

<ul>
	<?php foreach($beertypes as $beertype) : ?>

	<li><a href="/beertype/<?php echo $beertype['id']; ?>"><?php echo $beertype['type_name']; ?></a></li>

	<?php endforeach; ?>
</ul>
@endsection