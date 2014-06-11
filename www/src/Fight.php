<?php

class Fight  {

    protected $_zombie;
    protected $_human;

public function __construct( Zombie $zombie, Human $human){ 
    $this->_zombie = $zombie;
        $this->_human = $human;
}



}

?>
