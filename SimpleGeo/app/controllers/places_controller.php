<?php
// controllers/recipes_controller.php

require_once "simplegeo_constants.php";
require_once "Services/SimpleGeo.php";


class PlacesController extends AppController {

	var $name = 'Places';
	var $uses = array("User", "Place");

	function index() {



		$client = new Services_SimpleGeo(OAUTH_KEY, SECRET);
		$this->set('place', serialize($client->getAddress(40.016983, -105.27753)));


	}

	function add() {

		$id = $_GET["uid"];
		$user =  $this->User->find('first', array("conditions" => array("User._id" => $_GET["uid"])));
		if (!empty($this->data)) {

		} else {
			$this->set("user", $user["User"]);
		}

	}

}
?>