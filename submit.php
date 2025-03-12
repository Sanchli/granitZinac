<?php
var_dump($_POST);
?>


    //sanitize the input
<?php
$nameSanitized = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$nameSanitized = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$emailSanitized = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$phoneNumberSanitized = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$messageSanitized = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>


    //Email validating
<?php
//sanitized email input
$emailSanitized = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);


//validating emailsantized
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
    echo("$emailSanitized is a valid email address");
} else {
    echo("$emailSanitized is an invalid email address");
}
?>


<?php

$formatedNumber = preg_replace("/[^0-9]/", '', $phoneNumberSanitized);


$phoneNumberSanitized = filter_var($_POST['phone'], FILTER_VALIDATE_INT);


if (!filter_var($_POST['phone'])) ;

