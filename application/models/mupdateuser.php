<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mupdateuser extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
 
   public function viewUserID($UID)
    {
        
    $this->db->from('user');   
    $this->db->where('UID', $UID);
    return $this->db->get()->result();
   	  
        
}

 public function updateUserID($UID,$data)
    {
      
   	     $this->db->where('UID',$UID);
		 $this->db->update('user',$data); 
		   
}


}
?>