<?php
class emailmodel extends CI_Model {

 function emailmodel(){
  parent::__construct();
  $this->load->library('email');
  $this->load->helper('security');
  $this->load->library('encrypt');
 }


 function sendVerificatinEmail($email,$verificationText){
  
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'mega3.kubri.net',
     'smtp_port' => 465,
     'smtp_user' => 'admin@sylobpsm.com', // change it to yours
     'smtp_pass' => '01082003', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
  
  
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");
  $this->email->from('admin@sylobpsm.com', "Admin sylobpsm");
  $this->email->to($email);  
  $this->email->subject("Pengesahan Email");
  $this->email->message("Sila klik pada URL di bawah atau tampalkan ke dalam pelayar anda untuk mengesahkan Alamat E-mel anda\n\n http://www.sylobpsm.com/index.php/verify/".$verificationText."\n"."\n\nTerima Kasih\nAdmin Sylobpsm");
  $this->email->send();
//  echo $this->email->print_debugger();
 }
 
 function sendRemainderEmail($email,$name){
  
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'mega3.kubri.net',
     'smtp_port' => 465,
     'smtp_user' => 'admin@sylobpsm.com', // change it to yours
     'smtp_pass' => '01082003', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
 $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
          $this->email->to($email);
          $this->email->from('admin@sylobpsm.com', "Admin sylobpsm");
          $this->email->subject("Peringatan Pengesahan Latihan");
          $this->email->message(" Sila buat penilaian Latihan untuk kakitangan ".$name.", Sila   klik disini http://sylobpsm.com ");
          $this->email->send();
 // echo $this->email->print_debugger();
 }
 function resetpassword($user)
	{
	
	$config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'mega3.kubri.net',
     'smtp_port' => 465,
     'smtp_user' => 'admin@sylobpsm.com', // change it to yours
     'smtp_pass' => '01082003', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
	       $this->load->library('email', $config);
		
		$this->load->helper('string');
		$password= random_string('alnum', 8);
		$passwordsha1 = $this->encrypt->sha1($password);
		$this->db->where('UID', $user->UID);
		$this->db->update('user',array('password'=>$passwordsha1));
		$this->load->library('email');
		$this->email->from('admin@sylobpsm.com', 'Admin sylobpsm');
		$this->email->to($user->Email); 	
		$this->email->subject('Reset Password');
		$this->email->message('Anda telah meminta untuk menukar kata laluan, ini kata lauan baru anda : '. $password);	
		$this->email->send();
		
	} 
}
?>