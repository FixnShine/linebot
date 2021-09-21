 <?php
  

function send_LINE($msg){
 $access_token = 'UE2uftXYtTAs5b6lWRAPVmAVedtvZMCUtlKL1q2Ap2Ei0vQuyM2708QpeMiaY2oVYS7dbSaBbhtjsD69XxUAKiPGud+eUsg/U9hePxEK2SVIb6RJ4PvAgKDOciJdH2Ll7VMAbbNQhhked1epbwQaRQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Ua796c40f906c0eba1bd2f4bbaeedde62',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
