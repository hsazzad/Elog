<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courseview extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
		$this->load->model ('mcourseview'); 
		
 }
     public function index(){
	  $this->load->model ('mcourseview'); 


$data ['query']=$this->mcourseview->viewCourse();
                   $this->load->view('courseview', $data);
				  
				   
        
    }
   
   
}

?>




