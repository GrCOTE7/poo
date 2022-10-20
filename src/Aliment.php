<?php

/**
 * Fruit (POO) - (ɔ) Online FORMAPRO - GrCOTE7 - 2022.
 */

namespace App;

abstract class Aliment
{
	private string $name;
	private string $color;
	private float $weight;

	public function __construct(string $name, string $color, float $weight)
	{
		$this->name   = strtolower($name);
		$this->color  = strtolower($color);
		$this->weight = $weight;
	}

	public function getName(): string
	{
		return ucfirst($this->name);
	}

	public function getColor(): string
	{
		return ucfirst($this->color);
	}

	public function getWeight(): float
	{
		return $this->weight;
	}

	public function setWeight($weight)
	{
		$this->weight = $weight;

		return $this;
	}

	public function getKilo(): float
	{
		return $this->weight / 1e3;
	}
}