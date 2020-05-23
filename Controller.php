<?php

class Controller
{
	public function view() {require 'view.php';}

	public function ajax(string $postBody)
	{
		`find . -name 'ball--*-*.*' -mmin +1 -delete`; // Deleting too old temporary files @TODO reconsider

		$stamp = time() . '-' . rand();
		$extlessPath = "var/ball--$stamp";
		$svgFile = fopen("$extlessPath.svg", 'w');
			fwrite($svgFile, $postBody);
		fclose($svgFile);
		`convert $extlessPath.svg $extlessPath.png`;
		header('Content-Type: application/json');
		echo json_encode(['downloadLink' => "$extlessPath.png"]);
	}
}
