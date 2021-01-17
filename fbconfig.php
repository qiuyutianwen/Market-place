<?php

require_once __DIR__ . '/vendor/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' => '830689571103351',           //Replace {your-app-id} with your app ID
  'app_secret' => '3191d39933fbd814c239f0a6a059865a',   //Replace {your-app-secret} with your app secret
  'graph_api_version' => 'v5.0',
  'default_access_token' => 'EAALzgfzN4ncBAGzTrmuqCI9Y2vNcxLsVmPg6sE9WSQIXB8Pqn8N7GdV8dBsvN4Y5ofrZAIgHxLm09TGDGaThKlQETJEQhY9FMWQY1DQ9hE1exl0AuSYdxElmpHDeiUU9IwQZAhFVJhKaKp7w2rPiXJBPOsPZCMeuqWU7k7ReZAY0nO2IKZBnJ51k9kKycrZBccuKtIZBckONoRmOnL28rYlI2T0j4lHcrYK6yO7C8EmQAZDZD',
]);

$helper = $fb->getRedirectLoginHelper();
$login_url = $helper->getLoginUrl("https://sleepy-meadow-98391.herokuapp.com/test2.php");

try {

// Get your UserNode object, replace {access-token} with your token
  $accesstoken = $helper->getAccessToken();
  if(isset($accesstoken)){
    $_SESSION['access_token'] = (string)$accesstoken;
    header('Location:test2.php');
  }

} catch(Exception $exc) {
        // Returns Graph API errors when they occur
  echo $exc->getTraceAsString();
  exit;
}

?>
