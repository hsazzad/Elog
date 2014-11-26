<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class mevaluate extends CI_Model{
  function __construct(){
        parent::__construct();
		 $this->load->database();
		 
    }
 
   public function search()
    {
          $UID=$this->session->userdata('UID');
   	  
		  $query1 = $this->db->get_where('user', array('UID' => $UID));
foreach ($query1->result() as $row1)
{
          $egrade= $row1->Grade;
}
	$Status = "Dalam Proses";
		  $query2 = $this->db->get_where('course', array('Supervisor_Grade' => $egrade, 'Status' => $Status));
	 
	$num=$query2->num_rows();
         if($num>0){
		
		 return $query2->result() ;
		  }
		  else
		  {
		   return false;
		  }
		     return true;
}

public function mdo_approve()
    {
	
	
	$Status = "Selesai";
  
    $val= $_POST['val'];
       $cid= $_POST['cid'][$val];
	   $Supervisor_comment= $_POST['Supervisor_comment'][$val];
		
		$this->db->where('id', $cid); 
$res=$this->db->update('course',array ('Supervisor_comment' => $Supervisor_comment, 'Status' => $Status)); 
    
	 if($res!=0)	  
       {       return true;
}
else
{return false;}
}
 public function show()
    {
	
         $cid= $_GET['cid'];
   	  
        $query = $this->db->get_where('course', array('id' => $cid));
		 return $query->result() ;
}
}
?>