<?php
class Reminders extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
      $this->load->library('input');
    $this->load->library('email');
    $this->load->model('mreminders');
	$this->load->model('emailmodel');
  }
  public function index()
  {
    if(!$this->input->is_cli_request())
  {
      echo "This script shows that the cron job is running for email reminder." . PHP_EOL;
      return;
  }
  $timestamp = strtotime("+90 days");
  $reminder = $this->mreminders->get_days($timestamp);
  if(!empty($reminder))
  {
      $rid=$reminder->id;
	  $query1 = $this->db->get_where('course', array('id' => $rid));
foreach ($query1->result() as $row1)
{
          $sgrade= $row1->Supervisor_Grade;
		  $uname =  $row1->Name;
}
 $query2 = $this->db->get_where('user', array('Name' => $uname));
foreach ($query2->result() as $row2)
{
          $email= $row2->Email;
		  $name = $row2->Name;


	  
	 
         $this->emailmodel->sendRemainderEmail($email,$name);
          $this->mReminders->mark_reminded($rid);
    }
  }
  }
}
