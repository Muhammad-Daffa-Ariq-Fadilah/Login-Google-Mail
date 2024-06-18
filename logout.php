<?php
session_start();
require 'vendor/autoload.php';
$client = new Google_Client();
$client->setClientId(getenv('GOOGLE_CLIENT_ID'));
$client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
$client->setRedirectUri(getenv('GOOGLE_REDIRECT_URI'));
$client->addScope('email');
$client->addScope('profile');
if (isset($_SESSION['token'])){
    $client->setAccessToken($_SESSION['token']);
    $client->revokeToken();
}
session_destroy();
header('Location: login_btn.php');
exit();
?>