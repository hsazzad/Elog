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
		   $this->db->from('course');   
    $this->db->where('UID', $UID);
    return $this->db->get()->result();
}
public function viewCoursedetail2($UID)
    {
		   $this->db->from('course');   
    $this->db->where('UID', $UID);
    return $this->db->get()->result();
}

public function show()
    {
	
         $cid= $_GET['cid'];
   	  
        $query = $this->db->get_where('course', array('id' => $cid));
		 return $query->result() ;
}
public function mdo_approve()
    {
	 $val= $_POST['val'];
      $Status= "Dalam Proses";
       $cid= $_POST['cid'][$val];
	   $Supervisor_Grade= $_POST['Supervisor_Grade'][$val];
	   
	   $this->db->where('id', $cid);
	$res=$this->db->update('course', array('Supervisor_Grade' => $Supervisor_Grade,'Status' => $Status) ); 
if($res!=0)	  
       {       return true;
}
else
{return false;}	
}


}
?>