<?php
	namespace AoC;

	use Bolt\Files;

	abstract class Helper
	{
		private int $day;

		public function __construct(int $day)
		{
			$this->day = $day;
		}

		protected function filename(string $override = null): string
		{
			return isset($override) ? $override : ROOT . "data/" . str_pad($this->day, 2, "0", STR_PAD_LEFT) . "/input";
		}

		protected function load(string $override = null): string
		{
			return trim((new Files())->load($this->filename($override)));
		}

		abstract public function run(): Result;
	}
?>
