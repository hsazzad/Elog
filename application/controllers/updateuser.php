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
     public function viewuser(){
	  $this->load->model ('mupdateuser'); 
  $ID = $_GET['UID'];

$data['userView']=$this->mupdateuser->viewUserID($ID);
                   $this->load->view('vupdateuser', $data);
				 
        
    }
	public function updateUser(){
	  $this->load->model ('mupdateuser'); 
	    
		$val= $_POST['val'];
       $UID= $_POST['UID'][$val];
	   $Name= $_POST['Name'][$val];
	   $ID= $_POST['ID'][$val];
	   $Grade= $_POST['Grade'][$val];
	   $Date= $_POST['Date'][$val];
	   $Unit= $_POST['Unit'][$val];
	  
	    
		echo $UID;
  $this->db->where('UID',$UID);
		$res= $this->db->update('user',array ('Name' => $Name, 'ID' => $ID)); 
 if($res>0)	  
       {      
	  redirect('adminview');
	   
}
}
                
				   
  
	
	
	 public function deleteUser($ID){
	  $this->load->model ('mupdateuser'); 


$data['coursedetail']=$this->mupdateuser->viewUserID($ID);
                   $this->load->view('vupdateuser', $data);
				  
				   
        
    }
   
   
}

?>




