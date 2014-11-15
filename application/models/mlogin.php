<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mlogin extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 $this->load->library('encrypt');
		 $this->load->helper('security');
    }
    public function validate(){
       

        $UID = $this->input->post('UID');
        $Passw =$this->input->post('Password');
		$passht2=htmlspecialchars($Passw);
         $encpassword=$this->encrypt->sha1($passht2);
		 $User_type = $this->input->post('User_type');
		 if ($User_type=="User")
		 {
         $query = $this->db->get_where('user', array('UID' => $UID));
		 
		 $num=$query->num_rows();
         if($num>0){
         foreach ($query->result() as $row)
{
    $pass=$row->Password;
	$Status=$row->active_status;
}

        if( $pass==$encpassword)
        {
		$Stat="T";
		if($Status==$Stat)
		{
		$row = $query->row();
            $data = array(
                   
                    'Name' => $row->Name,
                    'Password' => $row->Password,
                    'UID' => $row->UID,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
			}
			else
			{
			return 2;
			}
        }
		else
		{
	
		 return false;
         }
		 }
         }
		 if ($User_type=="Admin")
		 {
         $query = $this->db->get_where('admin', array('UID' => $UID));
		 
		 $num=$query->num_rows();
         if($num>0){
         foreach ($query->result() as $row)
{
    $pass=$row->Password;
}

        if( $pass==$encpassword)
        {
		$row = $query->row();
            $data = array(
                   
                    'Name' => $row->Name,
                    'Password' => $row->Password,
                    'UID' => $row->UID,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
		else
		{
	
		 return false;
         }
		 }
         }
		
		
        // If the previous process did not validate
        // then return false.
		
        else
		{
		 return false;
         }
    }
}
?>