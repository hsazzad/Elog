<?php
class Appointment_model extends CI_Model
{
  public function get_days_appointments($day)
  {
    $day_start = date('Y-m-d 00:00:00', $day);
    $day_end = date('Y-m-d 23:59:59', $day);
    return $this->db->select('*')
      ->from('appointments')
      ->where('start_time <', $day_start)
      ->where('start_time >', $day_end)
      ->get()->result();
      
  }

  public function mark_reminded($appointment_id)
  {
    return $this->db->where('id', $appointment_id)->update('appointments', array('is_reminded' => 1));
  }
}
