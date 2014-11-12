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
	if($this->input->post('val'))
	{ 
	  $this->load->model ('madmin'); 
	   $res = $this->madmin->mdo_approve();
	if( $res==1)
	{
	redirect('admin');
	}
	} 
	else {
   
     $this->load->library('cezpdf');

	  $val2= $_POST['val2'];
	   $UID= $_POST['UID'][$val2];
		$this->cezpdf->ezText('Report', 20, array('justification' => 'center'));
		$this->cezpdf->ezSetDy(-10);

		$this->cezpdf->selectFont('include/fonts/Helvetica.afm');
		
		$this->cezpdf->ezSetMargins(120,70,90,50);
		$this->cezpdf->ezText('Employee Name: ' .$UID,14);

		$this->cezpdf->ezStream();
   
   
   
   
}
    }
	
	
  
}

?>




