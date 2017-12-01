<?php
require '.\vendor\autoload.php';
use Kreait\Firebase\Configuration;
use Kreait\Firebase\Firebase;

$config = new Configuration();
$config->setAuthConfigFile('smart-deadbolt-firebase-adminsdk-3x472-f785a41a6f.json');

//$config->setFirebaseSecret('z6r78MuaafvpmcqAmEpzTQ0VI7kbYRV7mdEJgShz');

$firebase = new Firebase('https://smart-deadbolt.firebaseio.com/', $config);
echo $firebase->get('locked');
echo $_GET['arduino_data'];
$firebase->set([
    'locked' => "t"
    ], '');
?>
