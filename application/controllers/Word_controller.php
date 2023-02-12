<?php
defined('BASEPATH') or exit('No direct script access allowed');
include_once(APPPATH . "third_party/PhpWord/TemplateProcessor.php");
include_once(APPPATH . "third_party/PhpWord/Settings.php");
include_once(APPPATH . "third_party/PhpWord/Shared/ZipArchive.php");
include_once(APPPATH . "third_party/PhpWord/Shared/Text.php");
include_once(APPPATH . "third_party/PhpWord/Exception/Exception.php");
include_once(APPPATH . "third_party/PhpWord/IOFactory.php");
class Word_controller extends CI_Controller
{	
	public function generatepdf()
	{
		$datenow = date('M d, Y');
		$name = 'Andrei';
		$contact = '1234423423';
		$email = 'asdsrdsfdfds';
		$address = 'sasasasas';
		$type = 'sasas';
		$age = 'asdsd';
		$lastdispersal = 'assas'; 
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
		$time = time();
		$filename = "$time-pdfexample.pdf";
		$filelocation = FCPATH . '/assets/upload/output/';
		$outfile = $filelocation.'/'.$filename;
		$pdf->Output($outfile, 'F');
	}
	public function generatefile()
	{
        $date = date('M d, Y');
		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(FCPATH . '/assets/upload/template.docx');
		$templateProcessor->setValues([
			'datenow' => $date,
			'name'      => 'Sample',
			'contact'   => '089342342',
			'address'   => 'Pola',
			'email'	    => 'email',
			'species'	=> 'type',
			'age'		=> '2',
			'lastdispersal'	=> $date
		]);
		//header("Content-Disposition: attachment; filename=consultationslip.docx");
        $date1 = 'sample';
		//$templateProcessor->saveAs('php://output');
		//WORKING SAVE TO DIR
        $filename = "$date1-consultationslip.docx";
        $templateProcessor->saveAs(FCPATH . '/assets/upload/output/'.$filename);
		
	}
    public function unlink()
    {
        $email = 'marcandrei.gobison@gmail.com';
        //unlink(FCPATH . '/assets/upload/output/consultationslip.docx');
        unlink(FCPATH . '/assets/upload/output/'."$email".'-consultationslip.docx');
    }

	public function sendmailfile()
	{
			$from_email = "municipalagricultureoffice.pola@gmail.com"; 
			$to_email = 'marcandrei.gobison@gmail.com';
			$subject = "Dispersal Appointment Slip";   
	
			//Load email library 
			$this->load->library('email'); 
	
			$this->email->from($from_email, 'Municipal Agriculture Office- Pola'); 
			$this->email->to($to_email);
			$this->email->subject($subject);
			
			$this->email->message(""); 
			$this->email->attach(base_url().'assets/upload/output/'.$to_email.'-appointmentslip.pdf');
		   	$send = $this->email->send();
			if($send){
				unlink(FCPATH . '/assets/upload/output/'."$to_email".'-appointmentslip.pdf');
			}
	}
	// =========================================================================
	public function backup()
	{
		$this->load->dbutil();

        $prefs = array(     
                'format'      => 'zip',             
                'filename'    => 'emao-pola.sql'
              );
        $backup =& $this->dbutil->backup($prefs); 

        $db_name = 'backup-on-'. date("Y-m-d-H-i-s") .'.zip';
        $save = '/upload/_tmp/'.$db_name;

        $this->load->helper('file');
        write_file($save, $backup); 


        $this->load->helper('download');
        force_download($db_name, $backup); 
	}
	// ====================================================
	public function sms()
	{
		$ch = curl_init();
		$parameters = array(
			'apikey' => '2f078b916b6bf21f0ef9057205fff57d', //Your API KEY
			'number' => '09813349788',
			'message' => 'I just sent my first message with Semaphore',
			'sendername' => 'SEMAPHORE'
		);
		curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
		curl_setopt( $ch, CURLOPT_POST, 1 );

		//Send the parameters set above with the request
		curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );

		// Receive response from server
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
		$output = curl_exec( $ch );
		curl_close ($ch);

		//Show the server response for testing purposes
		echo $output;
	}
	public function generateid(){
		$unique_id = 'MAO'.date('y').'-'.substr(md5(microtime()), rand(0,25), 6);
		echo $unique_id;
	}
	public function newemail(){
			$from_email = "municipalagricultureoffice.pola@gmail.com"; 
			$to_email = 'marcandrei.gobison@gmail.com';
			$subject = "Trial Email";   
	
			//Load email library 
			$this->load->library('email'); 
	
			$this->email->from($from_email, 'Municipal Agriculture Office- Pola'); 
			$this->email->to($to_email);
			$this->email->subject($subject);
			
			$this->email->message("Message from localhost"); 
		   	$send = $this->email->send();
			if($send){
				echo 'sent';
			}else{
				echo 'failed';
			}
	}
}
// OUTPUT SEMAPHORE
// [{"message_id":147805325,"user_id":26676,"user":"municipalagricultureoffice.pola@gmail.com","account_id":26538,"account":"EMAO","recipient":"639813349788","message":"I just sent my first message with Semaphore","sender_name":"Semaphore","network":"Smart","status":"Pending","type":"Single","source":"Api","created_at":"2022-12-04 21:29:30","updated_at":"2022-12-04 21:29:30"}]