<?php

/**
 * Fruit (POO) - (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App;

class Fruit extends Aliment
{
	private bool $is_comestible = false;

	public function __construct(string $name, string $color, float $weight, bool $is_comestible = false)
	{
		parent::__construct($name, $color, $weight);
		$this->is_comestible = $is_comestible;
	}

	public function is_comestible()
	{
		return $this->is_comestible;
	}
}