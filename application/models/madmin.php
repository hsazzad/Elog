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
    return $query->result() ;
}
  public function mdo_approve()
    {
	$Status = "In Progress";
	$id=$this->input->post('id');
    $Supervisor_Grade=$this->input->post('Supervisor_Grade'); 
	$data = array( 
'Status' => $Status, 
'Supervisor_Grade' => $Supervisor_Grade
); 
$this->db->where('id', $id); 
$res=$this->db->update('course', $data); 
	
	
			 if($res!=0)	  
       {       return true;
}
else
{return false;}

 }
}
?>