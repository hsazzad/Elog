<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mreport extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
 
   public function viewUser()
    {
          
         
     $query = $this->db->select('*')->from('user')->get();
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