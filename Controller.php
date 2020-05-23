<?php

class Controller
{
	public function view() {require 'view.php';}

	public function ajax(string $postBody)
	{
		$stamp = time() . '-' . rand();
		$extlessPath = "var/ball--$stamp";
		$svgFile = fopen("$extlessPath.svg", 'w');
			fwrite($svgFile, $postBody);
		fclose($svgFile);
		system("convert $extlessPath.svg $extlessPath.png");
		header('Content-Type: application/json');
		echo json_encode(['downloadLink' => "$extlessPath.png"]);
	}
}
