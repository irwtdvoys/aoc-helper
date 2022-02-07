<?php
	namespace AoC\Utils;

	class Position4d extends Position3d
	{
		public int $w = 0;

		public function __construct(int $x = 0, int $y = 0, int $z = 0, int $w = 0)
		{
			parent::__construct($x, $y, $z);

			$this->w = $w;
		}

		public function __toString(): string
		{
			return $this->x . "," . $this->y . "," . $this->z . "," . $this->w;
		}
	}
?>
