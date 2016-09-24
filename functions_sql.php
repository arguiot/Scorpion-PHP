<?php
function sql_connect($host, $dbname, $pass, $return) {
	// Connection to the database
	try
	{
	    $bdd = new PDO("mysql:host=" . $host . ";dbname=" . $dbname . ";pass=" . $pass . ";charset=utf8", $dbname, $pass);
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}
	if ($return = 1)
	{
		return $bdd;
	}
}
function sql_query($bdd, $query) {
	$data = $bdd->query($query);
	return $data;
}
function sql_rowCount($data) {
	$count = $data->rowCount();
	return $count;
}