<?php

class Login_Controller{

    private function __construct(){}

    public static function Main($option){
        
        $login = new Login_Controller();
        switch ($option) {
            case 0:
                $result = $login->Consult();
                break;
            case 1:
                $result = $login->Insert();
                break;
            case 2:
                $result = $login->Update();
                break;
            case 3:
                $result = $login->Delete();
                break;
        }
        return $result;
    }
    public function Consult()
    {
       
    }

    public function Insert()
    {
   
    }
    
    public function Update()
    {
       
    }

    public function Delete()
    {
      

    }
}

?>