<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mcoursedetail extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
 
   public function viewCoursedetail($UID)
    {
         
   	  
		  $course = $this->db->get_where('course', array('id' => $UID));
		   return $course->result() ;
        
}


}
?>