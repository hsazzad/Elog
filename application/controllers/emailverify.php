<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class emailverify extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
    $this->load->model('memailverify');
   
        $this->load->helper(array('form', 'url'));
       
		
 }
   
   
   function verify($verificationText){  
  $noRecords = $this->memailverify->verifyEmailAddress($verificationText);  
  if ($noRecords > 0){
   $error = "Email Verified Successfully!"; 
  }else{
   $error = "Sorry Unable to Verify Your Email!"; 
  }
  $data['errormsg'] = $error; 
  $this->load->view('success', $data);   
 }
  
}

?>




