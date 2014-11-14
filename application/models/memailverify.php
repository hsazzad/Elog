<?php
class memailverify extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
 
 function verifyEmailAddress($verificationcode){  
  $sql = "update user set active_status='T' WHERE email_verification_code=?";
  $this->db->query($sql, array($verificationcode));
  return $this->db->affected_rows(); 
 }
 
}
?>