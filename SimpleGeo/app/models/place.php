<?php

class Place extends AppModel {

    var $name = 'Place';
    var $primaryKey = '_id';
    var $useDbConfig = 'mongo';
    var $useTable = false;

    function schema() {
        $this->_schema = array(
            '_id' => array('type' => 'integer', 'primary' => true, 'length' => 40),
            'name' => array('type' => 'string'),
            'longitude' => array('type' => 'integer'),
            'latitude' => array('type' => 'integer'),
        );
        return $this->_schema;
    }
}

?>