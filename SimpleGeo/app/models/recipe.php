<?php

class Recipe extends AppModel {
    
    var $name = 'Recipe';
    var $primaryKey = '_id';
    var $useDbConfig = 'mongo';
 
    function schema() {
        $this->_schema = array(
            '_id' => array('type' => 'integer', 'primary' => true, 'length' => 40),
            'title' => array('type' => 'string'),
            'body' => array('type' => 'text'),
            'numbered' => array('type' => 'integer'),
        );
        return $this->_schema;
    }
}

?>