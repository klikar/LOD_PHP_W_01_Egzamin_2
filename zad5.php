<?php

include_once './User.php';

class VIPUser extends User {
    public $VIPUser;
    
    function __construct($name, $surname, $mail, $VIPUser)
    parent::__construct($name, $surname, $mail);

}


