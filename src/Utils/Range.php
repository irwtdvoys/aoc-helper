<?php
	namespace AoC\Utils;

	class Range
	{
		public ?int $min;
		public ?int $max;

		public function __construct(int $min = null, int $max = null)
		{
			$this->min = $min;
			$this->max = $max;
		}

		public function add(int $value): void
		{
			$this->min = !isset($this->min) ? $value : min($this->min, $value);
			$this->max = !isset($this->max) ? $value : max($this->max, $value);
		}
	}
?>
