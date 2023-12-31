<?php
    class Core {
        //Note: URL FORMAT - ./controller/method/parameters...
        protected $currentController = "Home";
        protected $currentMethod = "index";
        protected $parameters = [];
        public function __construct () {
            if($this->getURL()!=NULL){
            $url = $this->getURL();
            
            // check the controller exist or not
            if(file_exists(APPROOT.'/controllers/'.ucwords($url[0]).'.php')){
                //if the controller exist
                $this->currentController = ucwords($url[0]);

                // unset the controller in the url
                 
                unset($url[0]);
                
                // to check comment below code
                //print_r($url);

                //call the controller
                require_once APPROOT.'/controllers/'.$this->currentController.'.php';

                //intestiate controller (string to object)
                $this->currentController = new $this->currentController;

                //check whether the methid exists in the controller or not
                if(isset($url[1])){
                    if (method_exists($this->currentController,$url[1])) {
                        $this->currentMethod = $url[1];

                        //unset the method in url
                        unset($url[1]);
                        // to check comment below code
                        //print_r($url);
                    }
                }
                //get parameter list
                if(!empty($url)){
                $this->parameters = $url ? array_values($url) : [];
                // call method and pass the parameter list
                
                }
                call_user_func_array([$this->currentController,$this->currentMethod],$this->parameters);
            }
        }
            else{
                require_once(APPROOT.'/views/home_view.php');
            }
        }
        public function getURL () {
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'],'/');
                $url = filter_var($url,FILTER_SANITIZE_URL);
                $url = explode('/',$url);
                return $url;
            }    
        }
    }
    
?>