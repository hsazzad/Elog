<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class courseview extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
	
		
 }
     public function index(){
	  $this->load->model ('mcourseview'); 

$data['course']=$this->mcourseview->viewCourse();
 $this->load->view('courseview', $data);
				 
				   
        
    }
	
	public function viewallcourse(){
	$this->load->model ('mcourseview'); 
	$data['allcourse']=$this->mcourseview->viewall();
			 $this->load->view ('courseview2' ,$data);
	
	}
   
   
}

?>




