<?php
// controllers/recipes_controller.php

require_once "simplegeo_constants.php";
require_once "Services/SimpleGeo.php";


class PlacesController extends AppController {

	var $name = 'Places';
	var $uses = array("User");

	function index() {

		$id = $_REQUEST["uid"];
		$user =  $this->User->find("first", array("conditions" => array("User._id" => $_REQUEST["uid"])));

		$client = new Services_SimpleGeo(OAUTH_KEY, SECRET);
		$this->set('place', serialize($client->getAddress()));


	}

	function add() {

		$id = $_REQUEST["uid"];
		$user =  $this->User->find("first", array("conditions" => array("User._id" => $_REQUEST["uid"])));
		if (!empty($this->data)) {

//			$this->User->set(array("_id" => $id));
//			$this->User->set(array("favorite_places" =>
//				array("name" => "test",
//					  "longitude" => 1234,
//					  "latitude" => 5678)));
			$this->set("user", $user["User"]);
			$this->User->save();
		} else {
			$this->set("user", $user["User"]);
		}

	}

}
?>