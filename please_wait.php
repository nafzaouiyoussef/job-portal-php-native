<?php
include 'include/header.php';
include 'connection/db.php';

define('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['submit'])) {
  $cname = $_POST['company_name'];
  $stream = $_POST['buisness_stream'];
  $website = $_POST['website'];
  $date = $_POST['dob'];
  $desc = $_POST['desc'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $p_no = $_POST['Phone_no'];
  $pass = $_POST['cpassword'];

  $targetPhoto = SITE_ROOT . '/companyFiles/profilePics/' . $_FILES['photo']['name'];
  $targetDoc = SITE_ROOT . '/companyFiles/formDocs/' . $_FILES['doc']['name'];

  $photo = 'admin/companyFiles/profilePics/' . $_FILES['photo']['name'];
  $doc = 'admin/companyFiles/formDocs/' . $_FILES['doc']['name'];

  move_uploaded_file($_FILES['photo']['tmp_name'], $targetPhoto);
  move_uploaded_file($_FILES['doc']['tmp_name'], $targetDoc);

  $query = "INSERT INTO company (name, stream, website, date, description, country, email, phone, password, photo, form_doc, verified)
    VALUES ('$cname', '$stream', '$website', '$date', '$desc', '$country', '$email', '$p_no', '$pass', '$photo', '$doc', 0)";

  if (mysqli_query($conn, $query)) {
    echo "<script>alert('Admin has been notified!')</script>";
  } else {
    echo "<script>alert('Some error occurred. Please try again!')</script>";
  }
}
?>

<link rel="stylesheet" href="css/seeker_signup.css">

<body>
  <div class="formcontainer" style="height: 400px;">
    <br><br><br><br><br><br><br>
    <p class="sub-head">
      Please wait, your details will be verified and your login credentials will
      be sent via email shortly!
    </p>
  </div>
</body>

<form action="" method="POST" enctype="multipart/form-data">
  <!-- add your form fields here -->
</form>
