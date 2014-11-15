<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mcourseinfo extends CI_Model {
   
    function mcourseinfo() {
        parent:: __construct();
		$this->load->helper(array('form', 'url'));
            }
 
public function do_upload()
	{
		$config = array(
            'upload_path'   => './files/',
            'allowed_types' => 'gif|jpg|png|pdf|docx|doc'
        );
		
		$this->load->library('upload', $config);
        
		$this->upload->do_upload('Cert_file');
		 $upload_data = $this->upload->data();              
                                             
        $this->load->helper('date');
$Mail_status = "0";
	 $Status = "Pending";
	 $UID=$this->input->post('UID');
                       $Coursename=$this->input->post('Coursename'); 
						$course_catagory=$this->input->post('course_catagory');					   
                       $Place_type=$this->input->post('Place_type');
                       $Satisfaction=$this->input->post('Satisfaction');
                       $Knowledge=$this->input->post('Knowledge');
					   $Course_Date=$this->input->post('Course_Date');
					   $Comments=$this->input->post('Comments');
                         
          
$this->db->insert('course', array(
        
		'UID' => $UID,
        'Coursename' => $Coursename,
		'course_catagory' => $course_catagory,
        'Place_type' => $Place_type,
        'Satisfaction' => $Satisfaction,
        'Knowledge' => $Knowledge,
    'Cert_file' => $upload_data['file_name'],
        'Course_Date' => date('Y-m-d', strtotime($Course_Date)),
           'Comments' => $Comments,
		   'Status' => $Status,
		   'Mail_status' => $Mail_status
     ));                  
           
                
                }
                 
}
?>

