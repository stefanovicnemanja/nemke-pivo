<?php

namespace Nemke\Pivo\App\Models;

class Beer
{
	public function all()
	{
		return array(
			"jelen",
			"lav",
			"erdinger",
			"pilsner"
		);
	}


	public function singleBeer($id)
	{
		$all = $this->all();

		return array(
			'id' => $id,
			'name' => $all[$id]
		);
	}
}