<?php declare(strict_types=1);

require __DIR__ . '/autoload.php';

$anatoly = new \race\Cockroach('Anatoly', 10.0, 0.5);
$oleg = new \race\Cockroach('Oleg', 5.0, 1.0);
$race = new \race\Race(
	100,
	[
		$anatoly,
		$oleg,
	],
	new \engine\Render,
);

$game = new \engine\Game(function (Closure $gameover) use ($race) {
	if ($race->go()) {
		$gameover();
	}
});
$game->run(500);



