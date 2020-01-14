<?php
	namespace AoC;

	use Bolt\Curl;
	use Bolt\Files;
	use Exception;

	class Tools
	{
		public static function fetch($parameters)
		{
			$day = $parameters->day;

			$curl = new Curl();

			$local = ROOT . "data/" . str_pad($day, 2, "0", STR_PAD_LEFT) . "/input";

			if (file_exists($local))
			{
				throw new Exception("Input file already exists");
			}

			$options = array(
				CURLOPT_URL => $_ENV['AOC_URL'] . $_ENV['AOC_YEAR'] . "/day/" . $day . "/input",
				CURLOPT_CUSTOMREQUEST => "GET",
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_CONNECTTIMEOUT => 5,
				CURLOPT_HTTPHEADER => array(
					"Cookie: session=" . $_ENV['AOC_COOKIE']
				),
				CURLOPT_HEADER => false
			);

			$result = $curl->fetch($options);

			if ($result->code() !== 200)
			{
				throw new Exception(trim($result->body()), $result->code());
			}

			(new Files())
				->create($local, $result->body());
		}
	}
?>
