<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class coursedetail extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
 }
 
     public function detail(){
$this->load->model ('mcoursedetail'); 	  
$UID = $_POST['cid'];

$data['coursedetail']=$this->mcoursedetail->viewCourseDetail($UID);
                   $this->load->view('vcoursedetail', $data);
				   
        
    }
   
     public function detail2(){
$this->load->model ('mcoursedetail'); 
$this->mcoursedetail->show();	  


$data['coursedetail']=$this->mcoursedetail->show();	
                   $this->load->view('vcoursedetail', $data);
				   
        
    }
   
}

?>




