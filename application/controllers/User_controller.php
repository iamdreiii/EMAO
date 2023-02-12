<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {

    public function __construct() 
    {
      parent::__construct();
      $this->load->helper('url', 'form');
    }
    public function login()
    {
          $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
          $this->form_validation->set_rules('password', 'password', 'required');
          if($this->form_validation->run() == FALSE){
                $page = "login"; 
              if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
                  show_404();
              }
              if($this->session->logged_in === true){
                redirect(base_url());
              }else{
              $data['user'] = $this->User_model->getuser();
              $this->load->view('Home/header',$data);
              $this->load->view('User/'.$page);
              }
          }else{
            $user_id = $this->User_model->login();
            if ($user_id) {
                
                $user_data = array(
                    'id' => $user_id['id'],
                    'unique_id' => $user_id['unique_id'],
                    'username' => $user_id['username'],
                    'first_name' => $user_id['first_name'],
                    'last_name' => $user_id['first_name'],
                    'email' => $user_id['email'],
                    'fullname' => $user_id['first_name'].' '.$user_id['last_name'],
                    'access' => $user_id['usertype'],
                    'status' => $user_id['status'],
                    'pic_file' => $user_id['pic_file'],
                    'date_registered' => $user_id['date_registered'],
                    'logged_in' => true
                );
              if ($user_id['usertype'] == 'user') {
                // $this->session->set_userdata($user_data);
                // $this->session->set_tempdata('user_success','Logged In as '.$this->session->username,1);
                // redirect('Home');
                if ($user_id['status'] == 'active') {
                  $this->session->set_userdata($user_data);
                  $this->session->set_tempdata('user_success','Logged In as '.$this->session->username,2);
                  redirect('Home');
                }elseif($user_id['status'] == 'inactive'){
                    $this->session->set_tempdata('login_failed','Please Verify your Account First!',3);  
                    redirect('Login');
                }
              }elseif ($user_id['usertype'] == 'admin'){
                $this->session->set_userdata($user_data);
                $this->session->set_tempdata('user_success','Logged In as '.$this->session->username,1);
                redirect('Admin');
              }elseif ($user_id['usertype'] == 'ca'){
                if ($user_id['status'] == 'active') {
                    $this->session->set_userdata($user_data);
                $this->session->set_tempdata('user_success','Logged In as '.$this->session->username,1);
                redirect('Home');
                }elseif($user_id['status'] == 'inactive'){
                    $this->session->set_tempdata('user_failed','Please Verify your Account First!',1);  
                    redirect('Login');
                }
                }
            }else{
                $this->session->set_tempdata('user_failed',' Incorrect Email or Password ',1);  
                redirect('Login'); 
            }
          
          }
    }
    public function logout()
    {
      $date = date("m/d/Y,h:i:s A");
      $status = 'inactive';
      $this->User_model->logoutUser($status ,$date);
      $this->session->unset_userdata('id');
      $this->session->unset_userdata('unique_id');
      $this->session->unset_userdata('username');
      $this->session->unset_userdata('email');
      $this->session->unset_userdata('access');
      $this->session->unset_userdata('pic_file');
      $this->session->unset_userdata('logged_in');
      $this->session->set_tempdata('user_info','Logged Out',1);
      redirect(base_url()); 
    }
    public function signup()
    {
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');
        $this->form_validation->set_rules('username', 'Username Already Exists,', 'required|trim|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email Already Exists,', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]|max_length[30]');
        $this->form_validation->set_rules('password_confirm', 'Confirm Password', 'required|matches[password]');
        $this->form_validation->set_rules('usertype', 'usertype', 'required');
        if($this->form_validation->run() == FALSE){
              $page = "signup"; 
            if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
                show_404();
            }
            if($this->session->logged_in === true){
              redirect(base_url());
            }else{
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
            $this->load->view('User/'.$page);
            }
        }else{
             $from_email = "dept.of.agriculture.polaormin@gmail.com"; 
             $to_email = $this->input->post('email');
             $contact = $this->input->post('contact');
             $subject = "Email Verification";   
       
             //Load email library 
             $this->load->library('email'); 
       
             $this->email->from($from_email, 'Municipal Agriculture Office- Pola'); 
             $this->email->to($to_email);
             $this->email->subject($subject);
              
             $this->email->message("
                        
                        <!DOCTYPE html>
            <html>
            <head>
              
              <title>Email Confirmation</title>
              <meta name='viewport' content='width=device-width, initial-scale=1'>
              <style type='text/css'>
              @media screen {
                @font-face {
                  font-family: 'Source Sans Pro';
                  font-style: normal;
                  font-weight: 400;
                  src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
                }

                @font-face {
                  font-family: 'Source Sans Pro';
                  font-style: normal;
                  font-weight: 700;
                  src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
                }
              }
              body,
              table,
              td,
              a {
                -ms-text-size-adjust: 100%; /* 1 */
                -webkit-text-size-adjust: 100%; /* 2 */
              }
              table,
              td {
                mso-table-rspace: 0pt;
                mso-table-lspace: 0pt;
              }
              img {
                -ms-interpolation-mode: bicubic;
              }
              a[x-apple-data-detectors] {
                font-family: inherit !important;
                font-size: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
                color: inherit !important;
                text-decoration: none !important;
              }
              div[style*='margin: 16px 0;'] {
                margin: 0 !important;
              }
              body {
                width: 100% !important;
                height: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
              }
              table {
                border-collapse: collapse !important;
              }

              a {
                color: #1a82e2;
              }

              img {
                height: auto;
                line-height: 100%;
                text-decoration: none;
                border: 0;
                outline: none;
              }
              </style>
            </head>
            <body style='background-color: #e9ecef;'>
              <div class='preheader' style='display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;'>
                Email Verification!
              </div>
              <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                <tr>
                  <td align='center' bgcolor='#e9ecef'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                      <tr>
                        <td align='left' bgcolor='#ffffff' style='padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;'>
                          <h1 style='margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;'>Confirm Your Email Address</h1>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td align='center' bgcolor='#e9ecef'>
                    <table border='0' cellpadding='0' cellspacing='0' width='100%' style='max-width: 600px;'>
                      <tr>
                        <td align='left' bgcolor='#ffffff' style='padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;'>
                          <p style='margin: 0;'>Tap the button below to confirm your email address. If you didn't create an account with <a href=".base_url().">Municipal Agriculture Office</a>, you can safely delete this email.</p>
                        </td>
                      </tr>
                      <tr>
                        <td align='left' bgcolor='#ffffff'>
                          <table border='0' cellpadding='0' cellspacing='0' width='100%'>
                            <tr>
                              <td align='center' bgcolor='#ffffff' style='padding: 12px;'>
                                <table border='0' cellpadding='0' cellspacing='0'>
                                  <tr>
                                    <td align='center' bgcolor='#1a82e2' style='border-radius: 6px;'>
                                      <a href='".base_url()."emailactivation/".$to_email."' target='_blank' style='display: inline-block; padding: 16px 36px; font-family: Source Sans Pro, Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;'>Activate Account</a>
                                    </td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                      
                      <tr>
                        <td align='left' bgcolor='#ffffff' style='padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf'>
                          <p style='margin: 0;'>Municipal Agriculture Office,<br> Pola Oriental Mindoro</p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                
              </table>
            </body>
            </html>"); 
           $register = $this->User_model->register();

           if ($this->email->send() && $register) {
            $this->session->set_tempdata('success','Confirmation Email Sent!',3);
            redirect('Login');
           
           }else{
             $this->session->set_tempdata('user_failed','Registration Failed',3);
            redirect('Signup');
           }
        }
    
    }
    public function forgotpassword()
    {
          $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
          $this->form_validation->set_rules('email', 'Email', 'required');
          if($this->form_validation->run() == FALSE){
              $page = "forgotpassword"; 

              if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
                  show_404();
              }
              $data['user'] = $this->User_model->getuser();
              
              $this->load->view('Home/header',$data);
              $this->load->view('User/'.$page);
              
          }else{
              $expire = time() + (60 * 1);
              $from_email = "dept.of.agriculture.polaormin@gmail.com";
              $to_email = $this->input->post('email');
              $subject = "Password Reset Link";   
              $salt="this_Is_mao_system_id_salt_encrypt";
              $encrypted_email = base64_encode($to_email . $salt);
              $chkemail=$this->db->query('SELECT email FROM user WHERE email="'.$to_email.'"');
              $chkemail = $chkemail->num_rows();
              if($chkemail == '0'){
                  $this->session->set_tempdata('failed','Email does not exist!',1);
                  redirect('Forgot-Password');
              }else{
              $insertcode = $this->db->query('INSERT INTO tbl_codes (email, expire) VALUES ("'.$to_email.'", "'.$expire.'")');
              if($insertcode == FALSE){
                  $this->session->set_tempdata('failed','Error',1);
                  redirect('Forgot-Password');
              }else{
              $this->load->library('email'); 
        
              $this->email->from($from_email, 'Municipal Agriculture Office - Pola'); 
              $this->email->to($to_email);
              $this->email->subject($subject);
                
              $this->email->message("<!DOCTYPE html>
              <html>
              <head>
              <style>
              .button {
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
              }
              
              .button1 {
                  background-color: #4CAF50;
                
              } 
              </style>
              </head>
              <body>
              <p>Hi $to_email,</p>
              <p>You recently requested to reset the password for your account. Click the button below to proceed.</p>
              <table width='100%' cellspacing='0' cellpadding='0'>
                  <tr>
                      <td>
                          <table cellspacing='0' cellpadding='0'>
                              <tr>
                              <a href='".base_url()."Reset-Password/".$encrypted_email."' target='_blank' class='button button1' style='color: white;'>Reset Password</a>
                              </tr>
                          </table>
                      </td>
                  </tr>
              </table>
              <p>OR use the link below</p>
              <p>".base_url()."Reset-Password/".$encrypted_email."</p>
      
              <p>If you did not request a password reset, please ignore this email or reply to let us know. This password reset link is only valid for the next 30 minutes.</p>
              <p>Thanks, the Municipal Agriculture Office team</p>
              </body>
              </html>"); 
            if ($this->email->send()) {
              $this->session->set_tempdata('success','Password Recovery Email Sent',1);
              redirect('Forgot-Password');
              //TRIAL
              //redirect('codevalidate?id="'.$encrypted_email.'"');
            }else{
              $this->session->set_tempdata('failed','Failed to send password recovery link',1);
              redirect('Forgot-Password');
            }
          }
          }
          }
    }
    public function changepassword()
    {
          $password = $this->input->post('password');
          $email = $this->uri->segment(3);    
          $salt="this_Is_mao_system_id_salt_encrypt";
          $decrypted_id_raw = base64_decode($email);
          $decrypted_email = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
          $timeexpire = time();
          $chk['data'] = $this->Reset_model->fetchcodes($decrypted_email);
          if($chk < $timeexpire){
              show_404();
          }else{
            if($this->form_validation->run() == FALSE){
              $page = "changepassword"; 
              if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
                  show_404();
              }
              
              $data['user'] = $this->User_model->getuser();
              $this->load->view('Home/header',$data);
              $this->load->view('User/'.$page);
              
            }else{
              $query = $this->User_model->changepassword($password, $decrypted_email);
              if ($query === TRUE) {
                    $this->session->set_tempdata('user_success','Password Changed',1);
                    redirect('Login');
                  }else{
                      $this->session->set_tempdata('user_failed','Failed to Change Password',1);
                      redirect('Reset-Password/'.$email);
                  }
                    }
          }
              
    }
    public function changepasswordnow()
    {
        $salt="this_Is_mao_system_id_salt_encrypt";
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $decrypted_id_raw = base64_decode($email);
        $decrypted_email = preg_replace(sprintf('/%s/', $salt), '', $decrypted_id_raw);
        $passencrypt = md5($password);
        $del = $this->db->query("DELETE FROM `tbl_codes` where `email` = '$decrypted_email'");
        $query = $this->db->query("update `user` set `password` = '$passencrypt' where `email` = '$decrypted_email' ");
        if ($query && $del) {
            $this->session->set_tempdata('user_success','Password Changed',1);
            redirect('Login');
            }else{
                $this->session->set_tempdata('user_failed','Failed to Change Password',1);
            redirect('Login');
            }
    } 
    public function userprofile()
    {
        if ($this->session->logged_in === TRUE && $this->session->access === 'user' || $this->session->access === 'ca') {
        $page = "userprofile"; 

          if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
              show_404();
          }
          $data['userCstat'] = $this->Dispersal_model->getuserCstat();
          $data['user'] = $this->User_model->getuser();
          $data['ltopics'] = $this->Forum_model->getpostuser_limit();
          $data['myquestions'] = $this->Forum_model->userquestionfetch();
          $data['qcount'] =  count($data['myquestions']);
          $data['user'] = $this->User_model->getuser();
          $data['category'] = $this->Pet_model->getcategory();
          $data['allpet'] = $this->Pet_model->get_user_pet();
          $data['qcategory'] = $this->Forum_model->fetchcategories();
          $data['qforum'] = $this->Forum_model->fetchforums();
          $this->load->view('Home/header',$data);
          $this->load->view('User/'.$page, $data);
          $this->load->view('Home/footer');
        }else{
          redirect(base_url());
        }
    }
    public function getsubcategory(){ 
      // POST data 
      $postData = $this->input->post();
      // get data 
      $data = $this->Pet_model->getsubcategory($postData);
      echo json_encode($data); 
  }
    public function usersetting()
    {
      $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
      $this->form_validation->set_rules('phone', 'phone', 'required');
      $this->form_validation->set_rules('brgy', 'barangay address', 'required');
      $this->form_validation->set_rules('username', 'username', 'required');
      $this->form_validation->set_rules('firstname', 'email', 'required');
      $this->form_validation->set_rules('lastname', 'lastname', 'required');
      $this->form_validation->set_rules('midname', 'middle name', 'required');
      //$this->form_validation->set_rules('photo', 'photo', 'required');
      if ($this->session->logged_in == true && $this->session->access == 'user' || $this->session->access == 'ca') {
        if($this->form_validation->run() == FALSE){ 
        $page = "settings"; 
          if(!file_exists(APPPATH.'views/User/'.$page.'.php')){
              show_404();
          }
          $data['barangay'] = $this->Home_model->getbarangay();
          $data['userCstat'] = $this->Dispersal_model->getuserCstat();
          $data['user'] = $this->User_model->getuser();
          $data['ltopics'] = $this->Forum_model->getpostuser_limit();
          $data['myquestions'] = $this->Forum_model->getuserquestions();
          $data['qcount'] =  count($data['myquestions']);
          
          $this->load->view('Home/header',$data);
          $this->load->view('User/'.$page, $data);
          $this->load->view('Home/footer');
        
      }else{
          $config['upload_path'] = './assets/useruploads';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size'] = 2000;
          $config['max_width'] = 1500;
          $config['max_height'] = 1500;
          $this->load->library('upload', $config);
          $this->upload->do_upload('photo');
          
          $updata =  $this->upload->data();
          $data['pic_file'] = $updata['file_name'];

          $chkupdate = $this->User_model->updateinfo($data);
          if($chkupdate){
                $this->session->set_tempdata('user_success','User Information Updated',2);
              redirect('User-Setting');
          }
            
          
      }
    }
    }
    public function updateinfo()
    {
          $config['upload_path'] = 'assets/useruploads/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = 1024 * 10;
          $config['max_width'] = 1024 * 10;
          $config['max_height'] = 1024 * 10;
          $this->load->library('upload', $config);
          
          if (empty($this->upload->do_upload('img'))) {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_tempdata('user_failed','User Photo Is Empty',2);
              redirect('User-Setting');
          } else {
              
              $updata =  $this->upload->data();
              $data['pic_file'] = $updata['file_name'];

              $chkupdate = $this->User_model->updateinfo($data);
              if($chkupdate){
                  $this->session->set_tempdata('user_success','User Information Updated',2);
                  redirect('User-Setting');
              }
            
          }
      }
    public function changeprofile()
    {
          $config['upload_path'] = 'assets/useruploads/';
          $config['allowed_types'] = 'gif|jpg|png|jpeg';
          $config['max_size'] = 1024 * 10;
          $config['max_width'] = 1024 * 10;
          $config['max_height'] = 1024 * 10;
          $this->load->library('upload', $config);
          
          if (empty($this->upload->do_upload('photo'))) {
              $error = array('error' => $this->upload->display_errors());
              $this->session->set_tempdata('user_failed','User Photo Is Empty',2);
              redirect('User-Setting');
          } else {
              $updata =  $this->upload->data();
              $data['pic_file'] = $updata['file_name'];
              $chkupdate = $this->User_model->changeprofile($data);
              if($chkupdate){
                  $this->session->set_tempdata('user_success','User Information Updated',2);
                  redirect('User-Setting');
              }
            
          }
    }
    public function updatepass(){
     
        $npass = $this->input->post('npassword');
        $cpass = $this->input->post('cpassword');
        if($npass === $cpass){
          $chk = $this->User_model->updatepass($cpass);
          if($chk){
            $this->session->set_tempdata('user_success','Password Updated',1);
            redirect('User-Setting');
          }else{
            $this->session->set_tempdata('user_success','Password Update Failed',1);
            redirect('User-Setting');
          }
        }
    }
    public function requestaccountdeletion(){
      $chkreq = $this->User_model->requestaccountdeletion();
      if($chkreq){
        $this->session->set_tempdata('user_success','Account Deleted', 1);
        redirect('Logout');
      }
    }
    public function updateemail(){
      $chkreq = $this->User_model->updateemail();
      if($chkreq){
        $this->session->set_tempdata('user_success','Email Updated', 1);
        redirect('Logout');
      }
    }
    public function activateemail($email){
      $chkactivation = $this->User_model->activate_email($email);
      if ($chkactivation) {
          $this->session->set_tempdata('success','Account Activated!',1);
          redirect('Login');
         }else{
           $this->session->set_tempdata('user_failed','Activation Failed',1);
          redirect('Signup');
         }
  }
}