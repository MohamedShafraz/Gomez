<?php
class Home extends Controller
{

    public function __construct()
    {
    }
    public function index()
    {
        $this->view('home_view');
    }
    public function about()
    {
        $this->view('home_view');
    }
}
/*a
 *param = hello c
 controller-> method (parameter = param) 
 */
