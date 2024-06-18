<?php
require 'vendor/autoload.php';
require_once('load_env.php');
session_start();
$client = new Google_Client();
$client->setClientId(getenv('GOOGLE_CLIENT_ID'));
$client->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
$client->setRedirectUri(getenv('GOOGLE_REDIRECT_URI'));
$client->addScope('email');
$client->addScope('profile');
$client->setPrompt('select_account');
if (!isset($_GET['code'])){
    $authUrl = $client->createAuthUrl();
    header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
    exit();
}
$token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
if (isset($token['error'])){
    echo 'Error fetching access token: ' . htmlspecialchars($token['error']);
    exit();
}
$client->setAccessToken($token);
if ($client->isAccessTokenExpired()){
    echo 'Access token expired.';
    exit();
}
$oauth2 = new Google_Service_Oauth2($client);
$userInfo = $oauth2->userinfo->get();
$_SESSION['email'] = $userInfo->email;
$_SESSION['name'] = $userInfo->name;
header('Location: index.php');
exit();
?>