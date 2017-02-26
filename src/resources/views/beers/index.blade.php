@extends('pivo::layout')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
						<a href="/beer/create">Упиши ново пиво</a>

						<p>Овде су сва пива.</p>

						<a href="../beertype">Овде можете видети све врсте</a><br><br>

						<ul>
							<?php foreach($beers as $beer) : ?>

							<li><a href="/beer/<?php echo $beer['id']; ?>"> {{$beer['brand']}}</a> {{'На стању има'. ' ' .$beer['stock'].' '. 'ком.'}} </li>

							<?php endforeach; ?>
						</ul>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection