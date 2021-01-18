<?php
session_start();
require_once './vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '{app-id}', // Replace {app-id} with your app id
  'app_secret' => '{app-secret}',
  'default_graph_version' => 'v3.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$callbackUrl = htmlspecialchars('https://sleepy-meadow-98391.herokuapp.com/fbcallback.php');
$loginUrl = $helper->getLoginUrl($callbackUrl, $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>
