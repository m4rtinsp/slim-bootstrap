<?php

$app->get('/', function() use ($app){
	// $books = \Book::all();

	// echo $books->toJson();

	$result = $app->db->query("SELECT * FROM books");

	foreach ($result as $item) {
		var_dump($item['title']);
		var_dump($item['author']);
		var_dump('----');
	}

	$app->render('index.php');
});

$app->run();