<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class report extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
       
        $this->load->database();
	
		
 }
     public function index(){
	  //$this->load->model ('mreport'); 

//$data['User']=$this->madminview->viewUser();
 $this->load->view('vreport');
				 
				   
        
    }
   
   
}

?>




