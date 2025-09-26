<?php

class contact extends ServerController
{
    public function __construct()
    {
    }

    public function index()
    {
        if ($this->requestMethod === 'post') {
            //if the post data is JSON, use this
            
            $body = $this->getPostData()->post;
            $email = validator::GetInputValueString(@$body, 'email');
            $name = validator::GetInputValueString(@$body, 'name');
            $phone = validator::GetInputValueString(@$body, 'phone');
            $message = validator::GetInputValueString(@$body, 'message');
            
            if ($name === '' || strlen($name) < 4) {
                return helper::Output_Error(null, 'Valid full name is required');
            }
            if ($phone === '' || strlen($phone) < 6 || strlen($phone) > 16) {
                return helper::Output_Error(null, 'A valid phone number is required');
            }
            if ($email === '' || !validator::IsEmail($email)) {
                return helper::Output_Error(null, 'A valid email is required');
            }
            if ($message === '' || strlen($message) < 10) {
                return helper::Output_Error(null, 'Message must be more than 10 characters');
            }

            if(isset($body->service)){
                return $this->sendRequest($body);
            }else{
                return $this->sendContact($body);
            }
            /* $message = helper::contactForm($fullname, $email, $phone, $desc, $subject);
            $to = 'clintoneyituoyo@gmail.com';
            $sendMessage = helper::SendMail($message, $to, $subject, true);
            if ($sendMessage) {
                return helper::Output_Success(['status' => 'Your Message was sent successfully']);
            } else {
                return helper::Output_Error(null, 'There was an error during sending your message please try again');
            } */
        }
        $this->loadView('contact');
    }

    private function sendRequest($body){
        $curl = curl_init();

        $data = [
            'service' => $body->service,
            'name' => $body->name,
            'email' => $body->email,
            'phone' => $body->phone,
            'message' => $body->message,
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/service-request/submit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $decodedResponse = json_decode($response, true);
        if($decodedResponse['status'] == 'success'){
            return helper::Output_Success(['status' => 'success', 'message' => $decodedResponse['message']]);
        }else{
            return helper::Output_Error(null, $decodedResponse['message']);
        }
    }

    private function sendContact($body){
        $curl = curl_init();

        $data = [
            'name' => $body->name,
            'email' => $body->email,
            'phone' => $body->phone,
            'message' => $body->message,
        ];

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://tslapi.ufainiibom.com/api/contact/submit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => array(
              'Accept: application/json'
            ),
          ));
        
          $response = curl_exec($curl);
          curl_close($curl);
          $decodedResponse = json_decode($response, true);
          if($decodedResponse['status'] == 'success'){
              return helper::Output_Success(['status' => 'success', 'message' => $decodedResponse['message']]);
          }else{
              return helper::Output_Error(null, $decodedResponse['message']);
          }
          
    }
}
