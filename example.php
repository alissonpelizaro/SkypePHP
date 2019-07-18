<?php

header("Content-Type: text/plain");
require("skype.class.php");

$username = "Your username";
$password = "Your password";

$skype = new Skype($username, $password);

// DEBUG:
//$skype->sendMessage("8:live:dev1_373", "oi");
//$skype->imprime();

print_r($skype->getConversationsList());
