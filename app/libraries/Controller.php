<?php
/*
 * Base Controller
 * Loades the models and views
 */

 class Controller {
     //Load model
     public function model($model){
       //require model
       require_once '../app/models/' .$model . '.php';

       //Instatiate model
       return new $model();
     }

     //Load view
     public function view($view, $data = []){
        //Check for the view file
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        } else {
            //view does not exist
            die('Veiw does not exist');
        }
     }
     
 }
 