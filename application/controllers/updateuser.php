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
	public function do_approve()
    {
	$val= $_POST['val'];
	$UID = $_POST['UID'][$val];
	  $this->load->model ('mcoursedetail'); 
	   $res = $this->mcoursedetail->mdo_approve();
	if( $res==1)
	{
	$this->load->model ('mcoursedetail'); 	  

$data['coursedetail']=$this->mcoursedetail->viewCourseDetail($UID);
                   $this->load->view('vcoursedetail', $data);
	}
	} 
	
	public function detail(){
$this->load->model ('mcoursedetail'); 	  
$UID = $_GET['UID'];

$data['coursedetail']=$this->mcoursedetail->viewCourseDetail($UID);
                   $this->load->view('vcoursedetail', $data);
				 
    }
	public function updateUser(){
	  $this->load->model ('mupdateuser'); 
	    
		$val= $_POST['val'];
       $UID= $_POST['UID'][$val];
	   $Name= $_POST['Name'][$val];
	   $ID= $_POST['ID'][$val];
	   
	   $Date= $_POST['Date'][$val];
	   $Unit= $_POST['Unit'][$val];
	  
	    
		
  $this->db->where('UID',$UID);
		$res= $this->db->update('user',array ('Name' => $Name, 'ID' => $ID, 'Date' => $Date,'Unit' => $Unit)); 
 if($res>0)	  
       {      
	  redirect('adminview');
	   
}
}
	 public function delete()
    {
     $UID = $_GET['UID'];

   $this->db->delete('user', array('UID' => $UID)); 
   
 redirect('adminview');
    
 }
   
   
}

?>




