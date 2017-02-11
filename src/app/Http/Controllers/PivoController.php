<?php

namespace Nemke\Pivo\App\Http\Controllers;

// use Illuminate\View;
use Nemke\Pivo\App\Models\Beer;
use Nemke\Pivo\App\Models\Dog;
use Nemke\Pivo\App\Models\PornStar;


class PivoController
{
	var $beer;


	function __construct(Beer $beer)	// Prihvata klasu i promenljivu iz modela pivo
	{
		$this->beer = $beer;			// Dobije vrednost promenljive
	}


	public function index()
	{
		$beers = $this->beer->all();

		return view('pivo::index', compact('beers'));
	}


	// public function single($id)
	// {
	// 	$beer = $this->beer->singleBeer($id);

	// 	return view('pivo::single', compact('beer'));
	// }


	public function create()
	{
		return view('pivo::create');
	}


	public function store()
	{
		//
	}


	public function show($id)
	{
		$beer = $this->beer->singleBeer($id);

		return view('pivo::single', compact('beer'));
	}


	public function edit($id)
	{
		$beer = $this->beer->singleBeer($id);

		return view('pivo::edit', compact('beer'));
	}


	public function update($id)
	{
		//
	}


	public function destroy($id)
	{
		//
	}
}
