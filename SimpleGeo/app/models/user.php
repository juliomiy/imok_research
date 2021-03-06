<?php
/*
 * Created on Jan 9, 2011
 *
 */

 class User extends AppModel {

 	var $name = "User";
    var $primaryKey = "_id";
    var $useDbConfig = "mongo";
    var $useTable = false;

    function schema() {
        $this->_schema = array(
            "_id" => array("type" => "integer", "primary" => true, "length" => 40),
            "first_name" => array("type" => "string"),
            "last_name" => array("type" => "string"),
            "email" => array("type" => "string"),
            "favorite_places" => array(
            	"name" => array("type" => "string"),
            	"longitude" => array("type" => "integer"),
            	"latitude" => array("type" => "integer")
            )
        );
        return $this->_schema;
    }

 }

?>
