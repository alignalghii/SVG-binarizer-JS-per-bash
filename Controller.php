<?php

class Controller
{
	public function view() {require 'view.php';}

	public function ajax(string $postBody)
	{
		$svgFile = fopen('var.svg', 'w');
			fwrite($svgFile, $postBody);
		fclose($svgFile);
		system('convert var.svg var.png');
		header('Content-Type: text/plain');
		echo json_encode(['downloadLink' => 'var.png']);
	}
}
