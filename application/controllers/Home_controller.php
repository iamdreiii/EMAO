<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->database();
      }
	public function home()
	{
        
            if(!file_exists(APPPATH.'views/Home/home.php')){
                show_404();
            }
            $config = array();
            $config["base_url"] = base_url() . "Home";
            $config["total_rows"] = $this->Home_model->get_count();
            $config["per_page"] = 9;
            $config["uri_segment"] = 2;
            $config['full_tag_open'] = '<ul class="pagination generic-pagination justify-content-center">';        
            $config['full_tag_close'] = '</ul>';        
            $config['first_link'] = 'First';        
            $config['last_link'] = 'Last';        
            $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['first_tag_close'] = '</span></li>';        
            $config['prev_link'] = '&laquo';        
            $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['prev_tag_close'] = '</span></li>';        
            $config['next_link'] = '&raquo';        
            $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['next_tag_close'] = '</span></li>';        
            $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['last_tag_close'] = '</span></li>';        
            $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
            $config['cur_tag_close'] = '</a></li>';        
            $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
            $config['num_tag_close'] = '</span></li>';
            $this->pagination->initialize($config);
            $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $data["links"] = $this->pagination->create_links();
            $data['blog'] = $this->Home_model->get_authors($config["per_page"], $page);
            //$data['allsched'] = $this->Vaccination_model->vaccine_sched();
            //$data['user'] = $this->User_model->getuser();
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header', $data);
            $this->load->view('Home/home',$data);
            $this->load->view('Home/footer');
	}
    public function blogsingle($param)
	{
        $page = "blogsingle"; 
        if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
            show_404();
        }
        $data['user'] = $this->User_model->getuser();
        $data['blogsingle'] = $this->Home_model->getpostsingle($param);
        $data['comments'] = $this->Home_model->fetchannouncement_comment($param);
        $this->load->view('Home/header',$data);
        $this->load->view('Home/'.$page, $data);
        $this->load->view('Home/footer');
	}
    public function about()
	{
        $page = "about"; 

            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
            $data['about'] = $this->Setting_model->getdata();
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
		    $this->load->view('Home/'.$page);
            $this->load->view('Home/footer');
	}
    public function contactus()
	{
        $page = "contact"; 

            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
           
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header', $data);
		    $this->load->view('Home/'.$page, $data);
            $this->load->view('Home/footer');
	}
    public function privacypolicy()
	{
        $page = "privacy"; 

            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
		    $this->load->view('Home/'.$page);
            $this->load->view('Home/footer');
	}
    public function faq()
	{
        $page = "faq"; 

            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
            $data['user'] = $this->User_model->getuser();
            $data['faqs'] = $this->Faq_model->fetchfaq();
            $this->load->view('Home/header',$data);
		    $this->load->view('Home/'.$page, $data);
            $this->load->view('Home/footer');
	}
    public function terms()
	{
        $page = "terms"; 

            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header',$data);
		    $this->load->view('Home/'.$page);
            $this->load->view('Home/footer');
	}
    public function animalhealth()
	{
        if(!file_exists(APPPATH.'views/Animal/animalhealth.php')){
            show_404();
        }
        $config = array();
        $config["base_url"] = base_url() . "Animal-Health-Tips";
        $config["total_rows"] = $this->Animal_model->get_count();
        $config["per_page"] = 9;
        $config["uri_segment"] = 2;
        $config['full_tag_open'] = '<ul class="pagination generic-pagination justify-content-center">';        
        $config['full_tag_close'] = '</ul>';        
        $config['first_link'] = 'First';        
        $config['last_link'] = 'Last';        
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['first_tag_close'] = '</span></li>';        
        $config['prev_link'] = '&laquo';        
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['prev_tag_close'] = '</span></li>';        
        $config['next_link'] = '&raquo';        
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['next_tag_close'] = '</span></li>';        
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['last_tag_close'] = '</span></li>';        
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';        
        $config['cur_tag_close'] = '</a></li>';        
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';        
        $config['num_tag_close'] = '</span></li>';
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["links"] = $this->pagination->create_links();
        $data['animalhealth'] = $this->Animal_model->get_authors($config["per_page"], $page);
        //$data['allsched'] = $this->Vaccination_model->vaccine_sched();
        //$data['user'] = $this->User_model->getuser();
        $data['user'] = $this->User_model->getuser();
        $this->load->view('Home/header',$data);
        $this->load->view('Animal/animalhealth',$data);
        $this->load->view('Home/footer');
	}
    public function ahtsingle($param)
	{
        $page = "ahtsingle"; 

            if(!file_exists(APPPATH.'views/Animal/'.$page.'.php')){
                show_404();
            }
            $data['user'] = $this->User_model->getuser();
            $data['ahtsingle'] = $this->Animal_model->get_tips_single($param);
            $this->load->view('Home/header',$data);
		    $this->load->view('Animal/'.$page, $data);
            $this->load->view('Home/footer');
	}
    public function addannouncement_comment(){
        $id = $this->input->post('id');
        $chkadd = $this->Home_model->save_announcement_comment($id);
        if($chkadd){
            $this->session->set_tempdata('user_success','Commented',1);
            redirect('Blog-Single/'.$id);
        }else{
            $this->session->set_tempdata('user_failed','Commented',1);
            redirect('Blog-Single/'.$id);
        }
        
    }
    public function calendar()
	{
        $page = "calendar"; 
            if(!file_exists(APPPATH.'views/Home/'.$page.'.php')){
                show_404();
            }
            $data['result'] = $this->db->get("schedule_list")->result();
            foreach ($data['result'] as $key => $value) {
                $data['data'][$key]['title'] = $value->title;
                $data['data'][$key]['description'] = $value->description;
                $data['data'][$key]['start'] = $value->start_datetime;
                $data['data'][$key]['end'] = $value->end_datetime;
                $data['data'][$key]['backgroundColor'] = "#00a65a";
            }
            $data['user'] = $this->User_model->getuser();
            $this->load->view('Home/header', $data);
		    $this->load->view('Home/'.$page, $data);
            $this->load->view('Home/footer');
	}
    public function dispersalconsultation()
	{
        $this->form_validation->set_error_delimiters('<div class="text text-danger">','</div>');
        $this->form_validation->set_rules('lastname', 'lastname', 'required');
        $this->form_validation->set_rules('firstname', 'lastname', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
        $this->form_validation->set_rules('brgy', 'barangay', 'required');
        $this->form_validation->set_rules('street', 'street', 'required');
        $this->form_validation->set_rules('type', 'type', 'required');
        $this->form_validation->set_rules('age', 'age', 'required');
        $this->form_validation->set_rules('message', 'description', 'required');
        if ($this->session->logged_in && $this->session->access == 'ca')
        {
            if ($this->form_validation->run() == FALSE)
            {
                $page = "consultation"; 
                if(!file_exists(APPPATH.'views/Home/'.$page.'.php'))
                {
                    show_404();
                }
                $data['type'] = $this->Animal_model->getanimalspecies();
                $data['barangay'] = $this->Home_model->getbarangay();
                $data['user'] = $this->User_model->getuser();
                $this->load->view('Home/header',$data);
                $this->load->view('Home/'.$page, $data);
                $this->load->view('Home/footer');
            }else{
                $chkinsert = $this->Dispersal_model->consultationinsert();
                if($chkinsert == true){ 
                    $datenow = date('M d, Y');
                    $name = $this->input->post('firstname').', '.$this->input->post('lastname');
                    $contact = $this->input->post('phone');
                    $email = $this->input->post('email');
                    $address = $this->input->post('brgy').', '.$this->input->post('street');
                    $type = $this->input->post('type');
                    $age = $this->input->post('age');
                    $lastdispersal = $this->input->post('lastdispersal'); 
                    $this->load->library('Pdf');
                    $pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
                    $pdf->SetCreator(PDF_CREATOR);
                    $pdf->SetAuthor('Municipal Agriculture Office - Pola');
                    $pdf->SetTitle('Dispersal Consultation Slip');
                    $pdf->SetSubject('Slip');
                    $pdf->SetKeywords('TCPDF, PDF, dispersal, slip, consultation');
                    $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
                    $pdf->setFooterData(array(0,64,0), array(0,64,128));
                    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
                    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
                    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
                    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
                    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
                    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
                    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
                    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
                    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
                        require_once(dirname(__FILE__).'/lang/eng.php');
                        $pdf->setLanguageArray($l);
                    }
                    $pdf->setFontSubsetting(true);
                    $pdf->SetFont('dejavusans', '', 12, '', true);
                    $pdf->AddPage();
                    $tbl = <<<EOD
                    <html>
                    <html>
                    <head>
                    <title>D:\uploadedFiles\ff7ae9929fa96bf6968343350515124-b6b1abd6ec2b8eae\p1gjdgrmdr1e7qk59g0kjhl19vi4.pdf</title>
                    <style type="text/css">
                    .header {
                        width: 100%;
                        margin-top: 0px;
                    }
                    .wrapper {
                        width: 100%;
                        margin-top: 0px;
                    }
                    .logo {
                        top: 0px;
                        position: left;
                    }
                    .logo img {
                        width: 50px;
                    }
                    .header-text {
                        text-align: center;
                        font-weight:bold; 
                        font-family:Arial; 
                        font-size:20px; 
                        color:#000000"
                    }
                    .subheader {
                        text-align: center;
                        font-family:Arial; 
                        font-size:13px; 
                        color:#000000"
                    }
                    </style>
                    </head>
                    <body><br><br><br>
                            <table>
                                <tr>
                                    <th colspan="3"></th>
                                    <th><strong>Date : </strong>$datenow</th>
                                </tr>
                            </table><br><br>
                            <table>
                                <tr>
                                    <th><strong>Client Information : </strong></th>
                                    
                                </tr>
                            </table><br><br>
                            <table>
                                <tr>
                                    <th><strong>Name : </strong>$name</th>
                                    <th><strong>Contact No. : </strong>$contact</th>
                                </tr>
                                <tr>
                                    <td><strong>Email : </strong>$email</td>
                                    <td><strong>Address : </strong>$address</td>
                                </tr>
                            </table><br><br>
                            <strong>Animal Dispersal Information :</strong><br><br>
                            <table>
                                <tr>
                                    <th><strong>Species : </strong>$type</th>
                                    <th><strong>Age : </strong>$age</th>
                                </tr>
                                <tr>
                                    <td><strong>Last Dispersal : </strong>$lastdispersal</td>
                                </tr>
                            </table>
                    </body>
                    </html>
                    EOD;
                    $pdf->writeHTML($tbl, true, false, false, false, '');
                    
                    $filename = "$email-appointmentslip.pdf";
                    $filelocation = FCPATH . '/assets/upload/output/';
                    $outfile = $filelocation.'/'.$filename;
                    $pdf->Output($outfile, 'F');
                    $this->session->set_tempdata("user_success","Consultation Form Submitted",1); 
                    redirect('Dispersal-Consultation');
                }else{ 
                    $this->session->set_tempdata("user_failed","Failed to Submit Form",1); 
                    redirect('Dispersal-Consultation'); 
                } 
            }
        }
	}
    public function map(){
        $page = "map"; 
                if(!file_exists(APPPATH.'views/Home/'.$page.'.php'))
                {
                    show_404();
                }
                $this->load->view('Home/'.$page);
    }
}
