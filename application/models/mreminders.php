<?php
class mreminders extends CI_Model
{
  public function get_days($day)
  {
    $day_start = date('Y-m-d 00:00:00', $day);
  $Mail_status="0";
    $day_end = date('Y-m-d 23:59:59', $day);
    return $this->db->select('*')
      ->from('course')
	   ->where('Course_Date <', $day_start)
      ->where('Course_Date >', $day_end)
      ->where('Mail_status =', $Mail_status)
      ->get()->result();
      
  }

  public function mark_reminded($rid)
  {
    return $this->db->where('id', $rid)->update('course', array('Mail_status' => 1));
  }
}
