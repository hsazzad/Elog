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
   
  date_default_timezone_set('Asia/Kuala_Lumpur'); 
  $timestamp = strtotime("-3 month");
 
  $reminder = $this->mreminders->get_days($timestamp);
  if(!empty($reminder))
  {
  foreach($reminder as $row)
  {

      $rid= $row->id;

echo   $rid;
	
	  $query1 = $this->db->get_where('course', array('id' => $rid));
foreach ($query1->result() as $row1)
{
          $sgrade= $row1->Supervisor_Grade;
		
}

 $query2 = $this->db->get_where('user', array('Grade' => $sgrade));
foreach ($query2->result() as $row2)
{
          $email= $row2->Email;
		  $name = $row2->Name;

echo $email;
	  
	 
         $this->emailmodel->sendRemainderEmail($email,$name);
          $this->mreminders->mark_reminded($rid); 
		  }
    
  } 
  }
  
  else{
  echo "no data";
  }
  }
  
  
  
  }

