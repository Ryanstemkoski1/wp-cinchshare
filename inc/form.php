<?php
   
   // Ajax started//
   add_action( 'wp_ajax_get_ajaxLoginform', 'get_ajaxLoginform' );

   function get_ajaxLoginform() {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://app.cinchshare.com/frontEnd/login/userName',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('Username' => 'hhhstarhhh47@gmail.com','password' => '123123123'),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
  }