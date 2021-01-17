<!DOCTYPE html>
<html>
<head>
  <title>
    My Name
  </title>
</head>

<body>
  <h1>Get My Name from Facebook</h1>

<?php

require_once __DIR__ . '/vendor/autoload.php';

$fb = new \Facebook\Facebook([
  'app_id' => '830689571103351',           //Replace {your-app-id} with your app ID
  'app_secret' => '3191d39933fbd814c239f0a6a059865a',   //Replace {your-app-secret} with your app secret
  'graph_api_version' => 'v5.0',
  'default_access_token' => 'EAALzgfzN4ncBAGzTrmuqCI9Y2vNcxLsVmPg6sE9WSQIXB8Pqn8N7GdV8dBsvN4Y5ofrZAIgHxLm09TGDGaThKlQETJEQhY9FMWQY1DQ9hE1exl0AuSYdxElmpHDeiUU9IwQZAhFVJhKaKp7w2rPiXJBPOsPZCMeuqWU7k7ReZAY0nO2IKZBnJ51k9kKycrZBccuKtIZBckONoRmOnL28rYlI2T0j4lHcrYK6yO7C8EmQAZDZD',
]);


try {

// Get your UserNode object, replace {access-token} with your token
  $response = $fb->get('/me', '{access-token}');

} catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // Returns Graph API errors when they occur
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // Returns SDK errors when validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$me = $response->getGraphUser();

       //All that is returned in the response
echo 'All the data returned from the Facebook server: ' . $me;

       //Print out my name
echo 'My name is ' . $me->getName();

?>

</body>
</html>
