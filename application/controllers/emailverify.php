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
   $error = "Email anda telah disahkan"; 
  }else{
   $error = "Maaf.. terdapat email anda tidak dpapt disahkan"; 
  }
  $data['errormsg'] = $error; 
  $this->load->view('verifysuccess', $data);   
 }
  
}

?>




