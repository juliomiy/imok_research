<?php

	require_once "Constants.php";
	require_once "Services/SimpleGeo.php";

	$client = new Services_SimpleGeo(OAUTH_KEY, SECRET);

	print_r($client->getAddress(40.016983, -105.27753));

?>
