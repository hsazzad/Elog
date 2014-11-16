<?php
class mreminders extends CI_Model
{
  public function get_days($day)
  {
<<<<<<< HEAD
    $day_start = date('Y-m-90');
=======
    $day_start = date('Y-m-d', $day);
>>>>>>> origin/master
  $Mail_status="0";
   // $day_end = date('Y-m-d 23:59:59', $day);
    return $this->db->select('*')
      ->from('course')
<<<<<<< HEAD
	 //  ->where('Course_Date <', $day_start)
      ->where('Course_Date >',  $day)
=======
	   ->where('Course_Date <', $day_start)
   //   ->where('Course_Date >', $day_end)
>>>>>>> origin/master
      ->where('Mail_status =', $Mail_status)
      ->get()->result();
	  

      
  }

  public function mark_reminded($rid)
  {
    return $this->db->where('id', $rid)->update('course', array('Mail_status' => 1));
  }
}?>