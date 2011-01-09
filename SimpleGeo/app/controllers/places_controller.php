<?php
// controllers/recipes_controller.php

require_once "simplegeo_constants.php";
require_once "Services/SimpleGeo.php";


class PlacesController extends AppController {

	var $name = 'Places';

	function index() {

		$client = new Services_SimpleGeo(OAUTH_KEY, SECRET);
		$this->set('place', serialize($client->getAddress(40.016983, -105.27753)));


	}

	function add() {

		if (!empty($this->data)) {

		} else {

			print_r($_GET["uid"]);

		}

	}

}
?>