<?php
//safe-email-test.php

/*
 * 
 * This is a file designed to test a custom function named safeEmail().
 *
 * safeEmail() avoids sender domain spoofing, which prevents mail from being 
 * misidentified as spam and therefore deleted before arrival.
 *
 * This file will sent two emails to the email address identified in the 
 * variable $to below.

 * The first email will be formatted as text and the second as HTML.

 * The function safeEmail() is referenced in an include file enabling 
 * the function to be copied and pasted into your config file after testing.

*/

include 'safe-email-functions.php'; //stores safeEmail() & process_post()

$today = date("Y-m-d H:i:s");

//place email where the form will sent to
$to = 'xxx@seattlecentral.edu';

//place email to simulate the user on the form
$replyTo = 'xxx@example.com';

//--- END CONFIG AREA --- you should not need to change anything below this line --


$subject = 'Test Text Email, includes ReplyTo: ' . $today;

$message = 'Test Message Here.  Below should be a carriage return or two: ' . PHP_EOL . PHP_EOL .
'Here is some more text.  Hopefully BELOW the carriage return!
';

$response = safeEmail($to, $subject, $message, $replyTo,'text');

if($response)
{
    echo 'hopefully Text email sent!<br />';
}else{
   echo 'Trouble with Text email!<br />'; 
}

$message = '<html>
                <head>
                    <title>Required title</title>
                </head>
                <body>
                    <h1>Hopefully my HTML email!</h1>
                    <p>Clever content goes here</p>
                    <p>Clever content goes here</p>
                    <p>Clever content goes here</p>
                </body>

            </html>';

$subject = 'Test HTML Email, includes ReplyTo: ' . $today;

$response = safeEmail($to, $subject, $message, $replyTo,'html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}
