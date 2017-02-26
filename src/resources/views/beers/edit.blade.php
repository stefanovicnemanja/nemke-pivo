

@extends('pivo::layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
						<a href="/beer/<?php echo $beer['id']; ?>">Врати на пиво <?php echo $beer['brand']; ?></a>
						<form action="/beer/<?php echo $beer['id']; ?>" method="post">
							<input type="hidden" name="_method" value="PATCH">

							<label for="beer-brand"> Унесите ново пиво уместо <?php echo $beer['brand']; ?></label><br>		
							<input type="text" name="beer-brand" value="<?php echo $beer['brand']; ?>"><br>

							<label for="beer-description"> Унесите нови опис пива</label><br>	
							<textarea name="beer-description" id="beer-description" > <?php echo $beer['description']; ?> </textarea><br>

							<select name="beer-type" id="beer-type">
								<option value="0" disabled="disabled">Врста којој припада</option>

								@foreach($beerTypes as $type)
								<option value="{{ $type['id'] }}" @if($beer['type_id'] == $type['id']) selected="selected" @endif>{{ $type['type_name'] }}</option>
								@endforeach

							</select><br />

							<label for="origin"> Произведено у {{ $beer['origin'] }} </label><br>		
							<input type="text" name="origin" value="{{ $beer['origin'] }}"><br>

							<label for="stock"> На стању тренутно:{{ $beer['stock'] }} ком. </label><br>		
							<input type="text" name="stock" value="{{ $beer['stock'] }}"><br>

							<input type="submit" value="Унеси">
						</form>

					    <form action="/beer/{{ $beer['id'] }}" method="post">
							<input type="submit" name="delete-button" value="Обриши јебенo <?php echo $beer['brand']; ?> пиво"> </input>
					        <input type="hidden" name="_method" value="DELETE">
					    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection