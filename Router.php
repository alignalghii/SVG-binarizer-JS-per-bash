<?php

require_once 'Controller.php';

class Router
{
	public function __construct(string $method, array $queryData, string $postBody, Controller $controller)
	{
		$this->controller = $controller;
		$this->method     = $method;
		$this->queryData  = $queryData;
		$this->postBody   = $postBody;
	}

	public function run()
	{
		switch ($this->method) {
			case 'GET' : return $this->controller->view();
			case 'POST': return $this->controller->ajax($this->postBody);
			default    : echo "Router error: unknown HTTP method [{$this->method}]";
		}
	}
}
