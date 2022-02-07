<?php
	namespace AoC\Utils;

	class Styling
	{
		const BLACK = "30";
		const RED = "31";
		const GREEN = "32";
		const YELLOW = "33";
		const BLUE = "34";
		const MAGENTA = "35";
		const CYAN = "36";
		const WHITE = "37";

		const BG_BLACK = "40";
		const BG_RED = "41";
		const BG_GREEN = "42";
		const BG_YELLOW = "43";
		const BG_BLUE = "44";
		const BG_MAGENTA = "45";
		const BG_CYAN = "46";
		const BG_WHITE = "47";

		const RESET = "0;0";

		const TYPE_STANDARD = "0";
		const TYPE_BOLD = "1";
		const TYPE_ITALIC = "3";
		const TYPE_UNDERLINE = "4";
		const TYPE_STRIKETHROUGH = "9";

		public static function format(array $format, string $string): string
		{
			return "\e[" . implode(";", $format) . "m" . $string . "\e[" . self::RESET . "m";
		}

		public static function colour(string $string, string $colour = self::RESET, string $type = self::TYPE_STANDARD)
		{
			return "\e[" . $type . ";" . $colour . "m" . $string . "\e[" . self::RESET . "m";
		}
	}
?>
