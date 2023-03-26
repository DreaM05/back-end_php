<?php

$subject = 'MY TEST EMAIL';

echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";

$firstName = 'Oleksii';
$text1 = "firstName: {$firstName}" . "\n";
$text2 = 'Hello';
$text3 = ' my';
$text4 = ' dear';
$text5 = ' friend';
$text6 = 'How';
$text7 = ' are';
$text8 = ' you';

$message = $text1 . $text2 . $text3 . $text4 . $text5 . "." . $text6 . $text7;
$message .= $text8 . "?";

echo $message;

$headers = 'From: bibliotekar473@gmail.com';
mail('o.v.osypchuk@student.khai.edu',$subject,$message,$headers);

//rnvhfdieifcyioin - password