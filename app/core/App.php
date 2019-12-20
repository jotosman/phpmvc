<?php

class App {
    public function __construct()
    {
        //var_dump($_GET); ini memasuki variable dr url 
	$url = $this->parseURL();
	var_dump($url); //ini  menampilkan variable url dgn lbh sederhana
    }

    public function parseURL()
    {
	if( isset($_GET['url']) ) {
	    $url = rtrim($_GET['url'], '/');
	    $url = filter_var($url, FILTER_SANITIZE_URL);
	    $url = explode('/', $url);
	    return $url;
	}
    }
}
