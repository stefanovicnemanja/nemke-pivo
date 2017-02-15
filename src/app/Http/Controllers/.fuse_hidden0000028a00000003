<?php

namespace Nemke\Pivo\App\Http\Controllers;

// use Illuminate\View;
use Nemke\Pivo\App\Models\Beer;
use Illuminate\Http\Request;


class PivoController
{
	var $beer;

	var $request;


	function __construct(Beer $beer, Request $request)	// U svojstvo $beer smesta model Beer
	{
		$this->beer = $beer;			// beer se zove po svojstvu zato sto je tako lakse, a ovo sluzi samo da bi moglo da mu se pristupi iz svih metoda ove klase

		$this->request = $request;
	}


	public function index()
	{
		$beers = $this->beer->all();

		// dd($beers);

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
		$this->beer->brand = $this->request->input('beer-brand');
		$this->beer->description = $this->request->input('beer-description');
		$this->beer->type_id = $this->request->input('beer-type');

		$this->beer->save();

		// return redirect()->action('\Nemke\Pivo\App\Http\Controllers\PivoController@index'); 
	}


	public function show($id)
	{
		$beer = $this->beer->where('id',$id)->firstOrFail();

		return view('pivo::single', compact('beer'));
	}


	public function edit($id)
	{
		$beer = $this->beer->where('id',$id)->firstOrFail();

		return view('pivo::edit', compact('beer'));
	}


	public function update(Request $request,$id)
	{
		$this->beer->brand = $this->$request->input('beer-update');

		$this->beer->save();

		Session::flash('flash_message', 'Task successfully added!');

    	return redirect()->back();
	}


	public function destroy($id)
	{
		//
	}
}
