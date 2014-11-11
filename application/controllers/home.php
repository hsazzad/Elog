<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
    $this->load->model('homemodel');
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
       
		
 }
     public function index(){
                   $this->load->view('vhome');
        
    }
   
   function verify($verificationText=NULL){  
  $noRecords = $this->homemodel->verifyEmailAddress($verificationText);  
  if ($noRecords > 0){
   $error = array( 'success' => "Email Verified Successfully!"); 
  }else{
   $error = array( 'error' => "Sorry Unable to Verify Your Email!"); 
  }
  $data['errormsg'] = $error; 
  $this->load->view('index.php', $data);   
 }
  
}

?>




