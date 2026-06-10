<?php
// Collect data from form
$mpesa_message = $_POST['mpesa_message'];
$first_name = $_POST['first_name'];
$reg_number = $_POST['reg_number'];
$degree_program = $_POST['degree_program'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Prepare data line for storage
$data = "$mpesa_message, $first_name, $reg_number, $degree_program, $phone, $email\n";

// Make sure the data folder exists
$dir = __DIR__ . '/data';
if (!is_dir($dir)) {
    mkdir($dir, 0700, true);
}

// Save data to file
file_put_contents($dir . '/submissions.txt', $data, FILE_APPEND | LOCK_EX);

// Redirect to Thank You page
header("Location: thankyou.html");
exit;
?>
