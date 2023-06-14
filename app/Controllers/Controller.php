<?php

namespace App\Controllers;

class Controller{

    public function view(string $path , array $params = null)
    {
       ob_start(); 
       $path = str_ireplace('.', DIRECTORY_SEPARATOR, $path);
       require VIEWS . $path . '.php';
       if($params){
        $params = extract($params);
       }
       $content = ob_get_clean();
       require VIEWS . 'layout.php';
    }

}
