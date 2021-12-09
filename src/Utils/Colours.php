<?php
	namespace AoC\Utils;

	class Colours
	{
		const BLACK = "30";
		const RED = "31";
		const GREEN = "32";
		const YELLOW = "33";
		const BLUE = "34";
		const MAGENTA = "35";
		const CYAN = "36";
		const WHITE = "37";

		const RESET = "0;0";

		const TYPE_STANDARD = "0";
		const TYPE_BOLD = "1";

		public static function colour(string $string, string $colour = self::RESET, string $type = self::TYPE_STANDARD)
		{
			return "\e[" . $type . ";" . $colour . "m" . $string . "\e[" . self::RESET . "m";
		}
	}
?>
