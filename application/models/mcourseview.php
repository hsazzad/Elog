<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mcourseview extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
 
   public function viewCourse()
    {
          $UID=$this->session->userdata('UID');
   	  
		  $query = $this->db->get_where('course', array('UID' => $UID));
		   return $query->result() ;
        
}


}
?>