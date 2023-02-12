<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_controller extends CI_Controller {

    public function cron()
    {
        $chkemail =  $this->Contact_model->chkemail();
        foreach($chkemail as $row){
        $dbdate =  date('Y-m-d', strtotime($row['calvingstart']));
        $in3days = date('Y-m-d', strtotime("+3 days"));//date('Y-m-d', strtotime("+3 days")) before 3days
        
        if($dbdate == $in3days){
        $datedb =  implode(',', Array($row['calvingstart']));
        $animaltype = implode(',', Array($row['type']));
        $email = implode(',', Array($row['email']));
        $name = implode(',', Array($row['owner']));
        $mobileno = implode(',', Array($row['contact']));
        $this->load->library('email'); 
        $this->email->from('dept.of.agriculture.polaormin@gmail.com', 'Municipal Agriculture Office - Pola'); 
        $this->email->to($email);
        $this->email->subject('Animal Dispersal Due Date'); 
        $this->email->message("<p>Dear $name<p>
        <p>This is a reminder from Municipal Agriculture Office - Pola about your Animal Type : [<strong>$animaltype</strong>] Estimated Dispersal Due Date on [<strong>$datedb</strong>].We will be paying a visit to check on your animal. If you have any questions or follow-up about the visitation date please reply to this email or give us a call at [<strong>09*********</strong>.</p>
        
            "); 
        $emailsent = $this->email->send();
        if($emailsent)
        {
            $ch = curl_init();
                $parameters = array(
                    'apikey' => '2f078b916b6bf21f0ef9057205fff57d', //Your API KEY
                    'number' => $mobileno,
                    'message' => 'Municipal Agriculture office - Pola : Your Animal Type : '.$animaltype.' Estimated Dispersal Period on '.$datedb.'. Please be reminded that we will be paying a visit to check your animal',
                    'sendername' => 'SEMAPHORE'
                );
                curl_setopt( $ch, CURLOPT_URL,'https://semaphore.co/api/v4/messages' );
                curl_setopt( $ch, CURLOPT_POST, 1 );
                //Send the parameters set above with the request
                curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $parameters ) );
                // Receive response from server
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_exec( $ch );
                curl_close ($ch);
                //Show the server response for testing purposes
                //echo $output;
        }
     
    }
    }
    }
    public function message()
        {
                $number = $this->input->post('phone');
                $message = $this->input->post('message');
                $url = 'https://api.itexmo.com/api/broadcast';
                $ch = curl_init($url);
                $jsonData = array(
                        'Email' => 'gobison.marcandrei@gmail.com',
                        'Password' => 'Departmentofagriculture123',
                        "Recipients" => [$number],
                        "Message" => "Sample Message",
                        'ApiCode'=> 'TR-MARCG192454_PDN7B'
                );
                $jsonDataEncoded = json_encode($jsonData);
                var_dump($jsonDataEncoded);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                $result =  curl_exec($ch);
        }

}