<?php
 class appointment extends Controller{
    public function index($make=null){
      if($make!=null){
        $this->view('bookdoc_view');
      }
      else{
        $this->view('appointdoctordetail_view'); 
      exit();
      }
 }
 

}
?>