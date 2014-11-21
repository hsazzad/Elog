<?php
class forgetPassword extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
      $this->load->library('input');
    $this->load->library('email');
    $this->load->model('mreminders');
	$this->load->model('emailmodel');
  }
 		public function forget()
	{
		if (isset($_GET['info'])) {
               $data['info'] = $_GET['info'];
              }
		if (isset($_GET['error'])) {
              $data['error'] = $_GET['error'];
              }
		
		$this->load->view('forget',$data);
	} 
  
  public function doforget()
	{
		$this->load->helper('url');
		$email= $_POST['email'];
		$q = $this->db->query("select * from user where Email='" . $email . "'");
        if ($q->num_rows > 0) {
            $r = $q->result();
            $user=$r[0];
			$this->emailmodel->resetpassword($user);
			$info= "Kata laluan telah di reset dan dihantar ke : ". $email;
			redirect('/forgetPassword/forget?info=' . $info, 'refresh');
        }
		$error= "Alamat email ini tidak wujud dalam pangkalan data ";
		redirect('/forgetPassword/forget?error=' . $error, 'refresh');
		
	} 
  
  
  }

?>