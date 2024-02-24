<?php
    class Controller {
        public function model($model) {
            if(file_exists('../app/models/'.$model.'.php')){
            require_once '../app/models/'.$model.'.php';
            // return new $model;
            }
            else{
                die('Corresponding model does not exist'.$model);
            }
            //intestiate the model and pass it as model variable to the controller 
            
        }
        
        public function view($view,$data = []) {
            if(file_exists('../app/views/'.$view.'.php')){
                require_once "../app/views/".$view.'.php';
            }
            else{
                require_once "../app/views/error_view.php";
            }
        }
    }
    