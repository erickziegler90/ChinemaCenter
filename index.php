<?php
 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	require "Config/Autoload.php";
	require "Config/Config.php";

	use Config\Autoload as Autoload;
	use Config\Router 	as Router;
	use Config\Request 	as Request;
		
	Autoload::start();

	session_start();

	require_once(VIEWS_PATH."header.php");

	Router::Route(new Request());

	require_once(VIEWS_PATH."footer.php");


	////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// $api = file_get_contents('https://api.themoviedb.org/3/genre/movie/list?&api_key=7e5de46aba8f155b486beee9b4b4cc4f', true);
	// $data = json_decode($api);
	// // echo '<pre>';
	// // echo var_dump($data);
	// // echo '</pre>';
	
	// echo '<h2>generos</h2>';

	// $generos = $data->{'genres'};

	// echo ' <select>';
	// foreach( $generos as $genero){		
	// 	// echo '<pre>';
	// 	// echo var_dump($genero);
	// 	// echo '</pre>';
	// 	// echo $genero->{'id'} . " " . $genero->{'name'} . "<br>";
	// 	echo "<option value= " . $genero->{'id'} . ">". $genero->{'name'} ."</option>";
	// }
	// echo ' </select>';

	// echo '<h2>Peliculas</h2>';
	// $api = file_get_contents('https://api.themoviedb.org/3/movie/now_playing?with_genres=53&api_key=7e5de46aba8f155b486beee9b4b4cc4f', true);
	// $data = json_decode($api);
	// echo '<pre>';
	// echo var_dump($data);
	// echo '</pre>';

	
?>