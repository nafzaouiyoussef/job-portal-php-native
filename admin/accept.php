
<?php
/*
include("connection/db.php");


$id = $_GET['id'];

$query = mysqli_query($conn, "update company set verified =1 where id = $id");

$query1 = mysqli_query($conn, "select email, password from company where id = $id");
while( $row = mysqli_fetch_array($query1) ){
    $to_email = strval($row['email']);
    $password = strval($row['password']);
}

$content = "<h4>Your Company has been verified as a Legtimate one!</h4><br>
Here are your login credentials as per your registration: <br> Email: ".$to_email."<br>
Password: ".$password."<br><br> Please do not share these with anyone. <br> Regards
Job-Portal Administrator";

$email = new \SendGrid\Mail\Mail();
$email -> setFrom("jobportal1000@gmail.com", "Job-Portal Admin");
$email -> setSubject("Job Portal Verification Complete!");
$email -> addTo($to_email, "");
$email -> addContent("text/html", $content);

$sendgrid = new \SendGrid("Enter Sengrid API Key here");

try{
    $response = $sendgrid -> send($email);
    echo "<script>alert('Email sent Sucessfully!')</script>";
    header('location: uv_company.php');
} catch(Exception $e){
    print $e -> getMessage();
}

?>

*/


include("connection/db.php");

$id = $_GET['id'];

$stmt = $conn->prepare("UPDATE company SET verified = 1 WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$query1 = mysqli_query($conn, "SELECT email, password FROM company WHERE id = $id");
$to_email = '';
$password = '';
while ($row = mysqli_fetch_array($query1)) {
    $to_email = strval($row['email']);
    $password = strval($row['password']);
}

if (!filter_var($to_email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('Invalid email address!')</script>";
} else {
    $content = "<h4>Your Company has been verified as a Legitimate one!</h4><br>
    Here are your login credentials as per your registration: <br> Email: ".$to_email."<br>
    Password: ".$password."<br><br> Please do not share these with anyone. <br> Regards
    Job-Portal Administrator";

    $email = new \SendGrid\Mail\Mail();
$email->setFrom("jobportal1000@gmail.com", "Job-Portal Admin");
$email->setSubject("Job Portal Verification Complete!");
$email->addTo($to_email, $to_name);
$email->addContent("text/html", $content);

$sendgrid = new \SendGrid("Enter Sendgrid API Key here");

try {
    $response = $sendgrid->send($email);
    echo "Email sent successfully!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

}
?>
