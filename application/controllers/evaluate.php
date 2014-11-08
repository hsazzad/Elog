<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class evaluate extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
		$this->load->model ('mevaluate'); 
		
 }
     public function index(){
	  $this->load->model ('mevaluate'); 
  $data ['query']=$this->mevaluate->search();	
                   $this->load->view('vevaluate', $data);
        
    }
   
  
}

?>




