<?php
class emailmodel extends CI_Model {

 function emailmodel(){
  parent::__construct();
  $this->load->library('email');
 }


 function sendVerificatinEmail($email,$verificationText){
  
  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'ssl://smtp.gmail.com',
     'smtp_port' => 465,
     'smtp_user' => 'sharkcreep87@gmail.com', // change it to yours
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
  $this->email->message("Sila klik pada URL di bawah atau tampalkan ke dalam pelayar anda untuk mengesahkan Alamat E-mel anda\n\n http://www.sylobpsm.com/index.php/verify/".$verificationText."\n"."\n\nThanks\nAdmin Team");
  $this->email->send();
//  echo $this->email->print_debugger();
 }
}
?>