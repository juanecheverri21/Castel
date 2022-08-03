<?php

require_once "Login_Controller.php";

class Controller {

    public function Login($option){
        return Login_Controller::Main($option);
    }

}

?>