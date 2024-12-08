<?php
class Home extends Controller
{
    private $appointmodel;
    private $contactusmodel;
    public function index()
    {
        $this->model("specialization_model");
        $specializaitonmodel = new SpecializationModel();
        $results = $specializaitonmodel->getSpecialization();
        $this->view('home_view', $results);
    }
}
/*a
 *param = hello c
 controller-> method (parameter = param) 
 */
