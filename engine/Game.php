<?php declare(strict_types=1);

namespace engine;

class Game
{
	public function __construct(
		private $tick,
	)
	{
	}

	public function run(int $delayMs)
	{
		$run = true;
		$gameover = function () use(&$run) {
			$run = false;
		};
		$delay = $delayMs * 1000;

		while ($run) {
			($this->tick)($gameover);
			usleep($delay);
		}
	}
}