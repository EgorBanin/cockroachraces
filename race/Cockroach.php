<?php declare(strict_types=1);

namespace race;

class Cockroach
{

	private float $pos = 0;
	public function __construct(
		private string $name,
		private float    $speed,
		private float    $stamina,
	)
	{

	}

	public function run(): int
	{
		$this->pos += $this->speed;
		if ($this->speed > 1) {
			$this->speed = max($this->speed * $this->stamina, 1);
		}

		return (int) $this->pos;
	}
}