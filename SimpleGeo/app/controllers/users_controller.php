<?php
/*
 * Created on Jan 9, 2011
 *
 */

 class UsersController extends AppController {
 	var $name = "Users";

 	function index() {
 		$this->set("users", $this->User->find('all'));
 	}

 	function add() {
 		if (!empty($this->data)) {
 			if ($this->User->save($this->data)) {
 				$this->Session->setFlash("User has been saved.");
 				$this->redirect(array("action" => "index"));
 			}
 		}
 	}
 }

?>
