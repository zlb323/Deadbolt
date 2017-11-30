<?php
echo "testing";
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://com.example.zach1.deadbolt/';
// --- Use your token from Firebase here
$token = 'z6r78MuaafvpmcqAmEpzTQ0VI7kbYRV7mdEJgShz';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
echo $arduino_data;
echo "t";
// --- $arduino_data_post = $_POST['name'];
// --- Set up your Firebase url structure here
$firebasePath = '/';
/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->push($firebasePath, $arduino_data);
echo $response;
echo "testst";
sleep(2);
?>
