<?php
    class Controller {
        public function model($model) {
            
            if(file_exists(APPROOT.'/models/'.$model.'.php')){
            require_once APPROOT.'/models/'.$model.'.php';
            // return new $model;
            }
            else{
                die('Corresponding model does not exist'.$model);
            }
            //intestiate the model and pass it as model variable to the controller 
            
        }
        public function view($view, $data = []) {
            if(file_exists(APPROOT.'/views/'.$view.'.php')){
                require_once APPROOT."/views/".$view.'.php';
            }
            else{
                die('Corresponding view does not exist');
            }
        }
    }
    
?>