<?php

class UserController 
{
    
    public function actionIndex() 
    {   
        require_once (ROOT . '/views/login/index.php');
        return true;
    }
    
}
?>