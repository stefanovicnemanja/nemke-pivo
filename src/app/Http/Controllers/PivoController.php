<?php

namespace Nemke\Pivo\App\Http\Controllers;

// use Illuminate\View;
use Nemke\Pivo\App\Models\Beer;
use Nemke\Pivo\App\Models\Dog;
use Nemke\Pivo\App\Models\PornStar;


class PivoController
{
	var $beer;


	function __construct(Beer $beer)
	{
		$this->beer = $beer;
	}


	public function index()
	{
		$beers = $this->beer->all();

		return view('pivo::index', compact('beers'));
	}


	public function single($id)
	{
		$beer = $this->beer->singleBeer($id);

		return view('pivo::single', compact('beer'));
	}
}