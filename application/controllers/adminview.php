<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminview extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
	
		
 }
     public function index(){
	  $this->load->model ('madminview'); 

$data['User']=$this->madminview->viewUser();
 $this->load->view('vadminview', $data);
				 
				   
        
    }
   
   
}

?>




