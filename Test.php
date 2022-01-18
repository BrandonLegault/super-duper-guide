<?php

function autoloader( $class )
{
	require_once 'Controllers\Players.php';
	require_once 'Controllers\Controller.php';
	require_once 'Controllers\PlayerArrayController.php';
	require_once 'Controllers\PlayerFileController.php';
	require_once 'Controllers\PlayerJSONController.php';
	require_once 'Models\Model.php';
	require_once 'Models\PlayerArray.php';
	require_once 'Models\PlayerFile.php';
	require_once 'Models\PlayerJSON.php';
	require_once 'Views\View.php';
	require_once 'Views\ViewInterface.php';
	require_once 'Views\CLIView.php';
	require_once 'Views\HTMLView.php';
}

spl_autoload_register( 'autoloader' );

$players = Players::get( 'array', 'cli' );

echo $players->display();
