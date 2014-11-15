<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class updateuser extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
	
		
 }
     public function viewuser($ID){
	  $this->load->model ('mupdateuser'); 


$data['userView']=$this->mupdateuser->viewUserID($ID);
                   $this->load->view('vupdateuser', $data);
				  
				 
        
    }
	public function updateUser(){
	  $this->load->model ('mupdateuser'); 
	    $uid =$this->input->post('UID');
$data = array(
'Name' => $this->input->post('Name'),
'ID' => $this->input->post('ID'),
'Grade' => $this->input->post('Grade'),
'Date' => $this->input->post('Date'),
'Unit' => $this->input->post('Unit'),
'UID' => $this->input->post('UID'),
'Email' => $this->input->post('Email')

);

$this->mupdateuser->updateUserID($uid,$data);
                   $this->load->view('vadminview');
				  
				   
        
    }
	
	
	 public function deleteUser($ID){
	  $this->load->model ('mupdateuser'); 


$data['coursedetail']=$this->mupdateuser->viewUserID($ID);
                   $this->load->view('vupdateuser', $data);
				  
				   
        
    }
   
   
}

?>




