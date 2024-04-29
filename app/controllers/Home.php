<?php
class Home extends Controller {
    private $appointmodel;
    private $contactusmodel;
    public function __construct() {
          session_start(); 
    }
    public function index(){
        
        $this->view('home_view');
    }
    
}
/*a
 *param = hello c
 controller-> method (parameter = param) 
 */
