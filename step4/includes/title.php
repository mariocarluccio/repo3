<?php 

$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');  	// prende il nome del file e toglie l'elstensione del file 

$title = str_replace('_', ' ', $title);

if ($title == 'index') {
	$title = 'banvenuti!';


}


$title = ucwords($title);