<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
       
		
 }
     public function index(){
                   $this->load->view('vhome');
        
    }
   
  
}

?>




