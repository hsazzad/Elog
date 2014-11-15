<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login extends CI_Controller {
 
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	
	
	public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('vlogin', $data);
    }
        
        public function process(){
            
            
      
        $this->load->model('mlogin');
        
        $result = $this->mlogin->validate();
       
        if($result == 1){
             
           $msg = $this->input->post ('UID');
           $User_type = $this->input->post('User_type');
		 if ($User_type=="User")
		 {
           
        redirect('courseview');
            }
			 elseif ($User_type=="Admin")
		 {
            redirect('adminview');
       
            }
			
			
			else{
           
          $msg = '<font color= #DC1558 >Username atau email tidak padan.</font><br />';
            $this->index($msg);
			
        }   
        }
		elseif($result == 2)
		{
		
<<<<<<< HEAD
		 $msg = '<font color= #DC1558 >Your Email is not verified. Please check your Email to verify.</font><br />';
=======
		 $msg = '<font color= #DC1558 >Alamat email anda masih belum disahkan. Sila periksa inbox email anda click pada link yg diberikan.</font><br />';
>>>>>>> 8e1112164258ac8bccc1916de816c3d6e4bcedd3
            $this->index($msg);
		}
		
		else{
           
          $msg = '<font color= #DC1558 >Username atau email tidak padan.</font><br />';
            $this->index($msg);
			
        }       
    }
	public function do_logout(){
       $this->load->library('session');
       $data = array(
                   
                      'Name' => '',
                    'Password' => '',
                    'UID' => '',
              
                 'validated' => false  
                    );
            $this->session->unset_userdata($data);
        $this->session->sess_destroy();
		unset($this->session->userdata); 
        redirect('login');
      

    }
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */