<?php

require_once("./oop-example.php");
require_once("./non-oop-example.php");


$member = new OOPMember; 
$vipMember = new VIPMember;
$unregisteredMember = new UnregisteredUser;
$freeMember = new FreeMember;


echo "Normal Member Book limit: " . $member->bookLimit() . "\n";
echo "VIP Member Book limit: " . $vipMember->bookLimit() . "\n";
echo "Unregistered Member Book limit: " . $unregisteredMember->bookLimit() . "\n";
echo "Free Member Book limit: " . $freeMember->bookLimit() . "\n";

echo "\n";

?>