<?php 

$name = $_POST['fullname'];
$email = $_POST['email'];
$date_of_birth = $_POST['birthday'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$data = [
    // ['Name', 'Email', 'Date of Birth', 'Gender', 'Country'], 
    [$name, $email, $date_of_birth, $gender, $country]
];

$file = fopen("userdata.csv", "w");

foreach ($data as $line) {
  fputcsv($file, $line);
}

fclose($file);

print_r($_POST);