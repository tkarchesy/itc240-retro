<?php 
// config.php

//database credentials here
include 'credentials.php';

// this defines the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
	case "index.php":
		$title="My Home Page";
		$pageID="My Home Page";
		break;
	case "daily.php":
		$title="Daily Grind";
		$pageID="Daily Grind";
		break;
	case "contact.php":
		$title="Contact Me";
		$pageID="Contact Me";
		break;
	case "survey.php":
		$title="Survey";
		$pageID="Survey";
		break;
	case "coinlist.php":
		$title="Coins";
		$pageID="Early American Coins";
		break;
	case "404.php":
		$title="The Lost Page";
		$pageID="You Lost?";
		break;
	default: 
		$title = THIS_PAGE;
     	$pageID="By Default";
}

//Dynamic Nav Links
function MakeLinks($arr, $prefix='', $suffix ='', $exception='')
{
	$myReturn = '';
	foreach($arr as $link => $label)
	{
		if(THIS_PAGE==$link)
		{
			$myReturn .= $exception . '<a href="' . $link . '">' . $label . '</a>'.$suffix;
				
		}else{
			$myReturn .= $prefix . '<a href="' . $link . '">' . $label . '</a>' . $suffix;
				
		}
	}
	return $myReturn;
}

//Navagation Array-one of what may become many
$nav1['index.php']="Home";
$nav1['daily.php']="Daily Dialog";
$nav1['contact.php']="Contact";
$nav1['survey.php']="Survey";
$nav1['coinlist.php']="Coins";

//Safe Email Function
function safeEail($to,$subject,$message, $replyTo)
{
//safe-email-test1.php
$today = date("Y-m-d H:i:s");
$to= 'twkarchesy@gmail.com';
$replyTo = 'tkarchesy@gmail.com';
$subject = 'Clever subject goes here';
$content = 'Equally clever content goes here';
$response = mail($to,$subject,$message, $replyTo);
return $response;
}

?>