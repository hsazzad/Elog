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
	
       $cid= $_POST['cid'];
	   $Supervisor_Grade= $_POST['Supervisor_Grade'];
	   echo $cid;
	   echo $Supervisor_Grade;
	   $this->db->where('id', $cid);
$this->db->update('course', 'Supervisor_Grade' => $Supervisor_Grade); 

		
}
?>