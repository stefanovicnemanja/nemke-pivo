<?php

namespace Nemke\Pivo\App\Http\Controllers;

// use Illuminate\View;
use Nemke\Pivo\App\Models\BeerType;
use Illuminate\Http\Request;


class BeerTypeController
{
	var $beertype;

	var $request;

	// U svojstvo $beertype smesta model BeerType
	function __construct(BeerType $beertype, Request $request)
	{
		// beertypese zove po svojstvu zato sto je tako lakse, a ovo sluzi samo da bi moglo da mu se pristupi iz svih metoda ove klase
		$this->beertype = $beertype;			

		$this->request = $request;
	}


	public function index()
	{
		$beertypes = $this->beertype->all();

		// dd($beertypes);

		return view('pivo::beer-types/index', compact('beertypes'));
	}


	// public function single($id)
	// {
	// 	$beertype= $this->beertype->singleBeer($id);

	// 	return view('pivo::single', compact('beer'));
	// }


	public function create()
	{
		return view('pivo::beer-types/create');
	}


	public function store()
	{
		$this->beertype->type_name = $this->request->input('beertype-type');

		$this->beertype->save();

		return redirect()->action('\Nemke\Pivo\App\Http\Controllers\BeerTypeController@index'); 
	}


	public function show($id)
	{
		$beertype= $this->beertype->where('id',$id)->firstOrFail();

		return view('pivo::beer-types/single', compact('beertype'));
	}


	public function edit($id)
	{
		$beertype= $this->beertype->where('id',$id)->firstOrFail();

		return view('pivo::beer-types/edit', compact('beertype'));

	}


	public function update($id)
	{
		$beertype= $this->beertype->where('id', $id)->firstOrFail();
		// $beertype= Beer::find($id);
		// $beer= $this->beertype->find($id);

		$beertype->type_name = $this->request->input('beertype-type');

		$beertype->save();

		return redirect()->action('\Nemke\Pivo\App\Http\Controllers\BeerTypeController@index');
	}


	public function destroy($id)
	{

		// $beertype= $this->beertype->find($id);

		// $beertype->delete();

		$beertype= $this->beertype;

		$beertype->destroy($id);

		return redirect()->action('\Nemke\Pivo\App\Http\Controllers\BeerTypeController@index');
	}
}
