<?php

namespace Nemke\Pivo\App\Http\Controllers;

// use Illuminate\View;
use Nemke\Pivo\App\Models\Beer;
use Nemke\Pivo\App\Models\BeerType;
use Illuminate\Http\Request;


class PivoController
{
	var $beer;

	var $beerType;

	var $request;

	// U svojstvo $beer smesta model Beer
	function __construct(Beer $beer, BeerType $beerType, Request $request)	
	{	
		// beer se zove po svojstvu zato sto je tako lakse, a ovo sluzi samo da bi moglo da mu se pristupi iz svih metoda ove klase
		$this->beer = $beer;

		$this->beerType = $beerType;

		$this->request = $request;

	}


	public function index()
	{
		$beers = $this->beer->all();
// dd($beers);

		$error = 0;

		foreach ($beers as $vopi) {
   			 
				if (is_null($vopi->stock)){

					$error++;
				}

		}

		if($error == count($beers)){

				return view('pivo::beers/message');

				}
		else{

				return view('pivo::beers/index', compact('beers'));

				}
							
	}


	// public function single($id)
	// {
	// 	$beer = $this->beer->singleBeer($id);

	// 	return view('pivo::single', compact('beer'));
	// }


	public function create()
	{
		$beerTypes = $this->beerType->all();

		return view('pivo::beers/create', compact('beerTypes'));
	}


	public function store()
	{
		$this->beer->brand = $this->request->input('beer-brand');
		$this->beer->description = $this->request->input('beer-description');
		$this->beer->type_id = $this->request->input('beer-type');
		$this->beer->stock = $this->request->input('stock');
		$this->beer->origin = $this->request->input('origin');



		$this->beer->save();

		return redirect()->action('\Nemke\Pivo\App\Http\Controllers\PivoController@index'); 
	}


	public function show($id)
	{
		$beer = $this->beer->where('id',$id)->firstOrFail();

		$beerType = $this->beerType->where('id', $beer['type_id'])->first();

		$beerType = $beerType['type_name'];

		return view('pivo::beers/single', compact('beer', 'beerType'));
	}


	public function edit($id)
	{	
		$beerTypes = $this->beerType->all();	

		$beer = $this->beer->where('id',$id)->firstOrFail();

		return view('pivo::beers/edit', compact('beer', 'beerTypes'));

	}


	public function update($id)
	{
		$beer = $this->beer->where('id', $id)->firstOrFail();
		// $beer = Beer::find($id);     
		// $beer= $this->beer->find($id);

		$beer->brand = $this->request->input('beer-brand');
		$beer->description = $this->request->input('beer-description');
		$beer->type_id = $this->request->input('beer-type');
		$beer->stock = $this->request->input('stock');
		$beer->origin = $this->request->input('origin');

		$beer->save();

		return redirect()->action('\Nemke\Pivo\App\Http\Controllers\PivoController@index');
	}


	public function destroy($id)
	{

		// $beer = $this->beer->find($id);

		// $beer->delete();

		$beer = $this->beer;

		$beer->destroy($id);

		// $beer = $this->request->input('delete-button')->destroy();

		return redirect()->action('\Nemke\Pivo\App\Http\Controllers\PivoController@index');
	}
}
