<?php
echo "testing";
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://com.example.zach1.deadbolt/';
// --- Use your token from Firebase here
$token = '';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
echo $_GET['arduino_data'];
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
sleep(2);
?>
