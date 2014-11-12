<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller {
   function __construct()
 {
   parent:: __construct();
   if($this->session->userdata('UID')==''){
            redirect('login'); }
        $this->load->helper(array('form', 'url'));
        $this->load->database();
		$this->load->model ('madmin'); 
 }
     public function index(){
	  $this->load->model ('madmin'); 
  $res=$this->madmin->search();
				
				if($res!=0)  
{
$data ['query']=$this->madmin->search();	  
         $this->load->view('vadmin', $data);
				   }
				   else
				   {
				    $this->load->view('vadmin2');
				   }
				
    }
    public function do_approve()
    {
	
	  $this->load->model ('madmin'); 
	   $res = $this->madmin->mdo_approve();
	if( $res==1)
	{
	redirect('admin');
	}
    }
  
}

?>




