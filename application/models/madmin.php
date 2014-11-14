<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class madmin extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
 
   public function search()
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
  public function mdo_approve()
    {
	 
	  
	   $Supervisor_Grade= $_POST['Supervisor_Grade'];
	

$res=$this->db->update('course','Supervisor_Grade' => $Supervisor_Grade); 
	
	
			 if($res!=0)	  
       {       return true;
}
else
{return false;}

 }
}
?>