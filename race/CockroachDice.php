<?php declare(strict_types=1);

namespace race;

class CockroachDice
{
	public function roll()
	{
		$speed = rand(1, 6);
		$stamina = rand(1, 6);
	}
}