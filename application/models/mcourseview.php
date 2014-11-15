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
   	  
		  $course = $this->db->get_where('course', array('UID' => $UID));
		   return $course->result() ;
        
}
public function viewall()
 {
 
  $query = $this->db->select('*')->from('course')->get();
	 $num=$query->num_rows();

 if($num>0){
		
		 return $query->result() ;
		  }
		  else
		  {
		   return false;
		  }
		     return true;
	
 
 
 
 }


}
?>