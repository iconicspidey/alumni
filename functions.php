<?php
add_theme_support('post-thumbnails');
set_post_thumbnail_size(200, 200); // Thumbnail size (width, height)
add_image_size('custom-size', 300, 200, true); // Custom image size

function voctech_send_email($data = []){
  // send email

  if (!isset($data['email']) || !isset($data['subject']) || !isset($data['message'])) {
    return ['errored'=>true, 'message'=>'Cannot send email. One or more values missing'];
  }

  if (empty($data['email']) || empty($data['subject']) || empty($data['message'])) {
    return ['errored'=>true, 'message'=>'Cannot send email. One or more values missing'];
  }

  $email = str_replace("'",'"', $data['email']);
  $subject = str_replace("'",'"', $data['subject']);
  $message = str_replace("'",'"', $data['message']);


  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://script.google.com/macros/s/AKfycbz3LMDqWj2FPG2V5-3w5iFiuRm_VzSv0EwD2eIIk03hkU_wde79IR8pSsQwKgj4kzRP/exec',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
      "sk":"vb_57dhdj06c1g4yu4312u501134be78eb5dcdf30989c387c0dhdh3",
      "email": "'.$email.'",
      "subject": "'.$subject.'",
      "body": "'.$message.'"
  }',
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json'
    ),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return $response;
}
