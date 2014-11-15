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
  public function index(){
	 $this->load->view('vcoursedetail');
    }
     public function detail($ID){
	  $this->load->model ('mcoursedetail'); 


$data['coursedetail']=$this->mcoursedetail->viewCourseDetail($ID);
                   $this->load->view('vcoursedetail', $data);
				  
				   
        
    }
   
   
}

?>




