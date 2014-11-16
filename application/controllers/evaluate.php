<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class evaluate extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
		$this->load->model ('mevaluate'); 
		
 }
     public function index(){
	  $this->load->model ('mevaluate'); 
  $res=$this->mevaluate->search();

$data ['query']=$this->mevaluate->search();
                   $this->load->view('vevaluate', $data);
				  
				   
        
    }
   
    public function do_approve()
    {
	
	  $this->load->model ('mevaluate'); 
	   $res = $this->mevaluate->mdo_approve();
	if( $res==1)
	{
	redirect('evaluate');
	}
	
    
    }
	 public function show()
    {
	
  $this->load->model ('mevaluate'); 
  $this->mevaluate->show();
$cid= $_POST['cid'];
$data ['query']=$this->mevaluate->show();
                   $this->load->view('vevaluate', $data);
	
    
    }
  
}

?>




