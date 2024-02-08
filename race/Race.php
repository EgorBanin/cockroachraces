<?php declare(strict_types=1);

namespace race;

class Race
{

	private array $lines;

	public function __construct(
		private int $distance,
		private array $cockroaches,
		private Render $render,
	)
	{
	}

	public function go(): bool
	{
		$finish = false;
		foreach ($this->cockroaches as $i => $cockroach) {
			$pos = $cockroach->run();
			$this->line($i, $pos);
			if ($pos >= $this->distance) {
				$finish = true;
			}
		}

		$this->render->render(implode("\n", $this->lines));

		return $finish;
	}

	private function line(int $i, int $pos)
	{
		$this->lines[$i] = str_repeat('-', $this->distance);
		$this->lines[$i][$pos] = 'o';
	}
}