<?php
class reminders extends CI_Controller
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
  if($reminder)
  {
  foreach($reminder as $row)
  {
      $rid= $row->id;
          $email= $row->Email;
		  $name = $row->Name;

         $this->emailmodel->sendRemainderEmail($email,$name);
          $this->mreminders->mark_reminded($rid);
		  }
    }
	else
	{
	$rid= $row->id;
	$this->db->where('id', $rid)->update('course', array('Mail_status' => 1));
	}
  }
  
  
  }

