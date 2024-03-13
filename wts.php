<?php

class ControllerWinstarWts extends Controller {
    public function index(){
     $data=array();
        $this->response->setOutput($this->load->view('winstar/wts',$data));        
    }

}
?>