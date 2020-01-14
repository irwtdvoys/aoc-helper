<?php
	namespace AoC;

	class Result
	{
		public $part1;
		public $part2;

		public function __construct($part1 = null, $part2 = null)
		{
			$this->part1 = $part1;
			$this->part2 = $part2;
		}

		public function output()
		{
			echo("Part 1: " . $this->part1 . PHP_EOL);
			echo("Part 2: " . $this->part2 . PHP_EOL);
		}
	}
?>
