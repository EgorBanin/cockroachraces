<?php declare(strict_types=1);

namespace engine;

class Render implements \race\Render
{

	public function render(string $text)
	{
		system('clear');
		echo $text;
	}
}