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
			"pisner"
		);
	}


	public function singleBeer($id)
	{
		$all = $this->all();

		return $all[$id];
	}
}