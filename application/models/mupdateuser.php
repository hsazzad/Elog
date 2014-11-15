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
         
   	  
		  $user = $this->db->get_where('user', array('UID' => $UID));
		   return $user->result() ;
        
}


}
?>