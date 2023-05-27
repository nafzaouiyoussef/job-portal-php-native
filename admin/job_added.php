<?php 
session_start();
include("connection/db.php");

$email = $_SESSION['email'];
$jobTitle = $_POST['jobTitle'];
$desc = $_POST['desc'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$salary = $_POST['salary'];
$openings = $_POST['openings'];

// Get the uploaded image data
$imageName = $_FILES['image']['name'];
$imageType = $_FILES['image']['type'];
$imageTmp = $_FILES['image']['tmp_name'];

// Move the uploaded file to the images directory
$targetDirectory = "./images/";
$targetFilePath = $targetDirectory . $imageName;
move_uploaded_file($imageTmp, $targetFilePath);

// Insert the data into the database
$query = mysqli_query($conn, "INSERT INTO jobs(creator_email, job_title, description, country, state, city, openings, salary, image) 
VALUES ('$email', '$jobTitle', '$desc', '$country', '$city', '$state', '$openings', '$salary', '$targetFilePath')");

if($query){
    echo "Data Inserted Successfully!";
} else {
    echo "Error!";
}
?>
