<?php
session_start();

if ($_SESSION['email'] == true) {
} else {
  header('location:seeker_signin.php');
}
include('include/header3.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>JobPortal</title>
 
  <link rel="stylesheet" href="css/seeker.css">
  
</head>

<style>
  .button {
    background-color: #4CAF50;
    /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    font-family: Raleway-SemiBold;
  }
</style>



<body id="bod">
  <div id="posts">
    <h1></h1>
    <?php
    include("connection/db.php");
    
    $user_email = $_SESSION['email'];
    $query2 = mysqli_query($conn, "select id from job_seeker where email='$user_email'");
    $user_id = mysqli_fetch_array($query2);

    $query = mysqli_query($conn, "select j.job_title, j.creator_email, j.description, j.openings, j.salary,
    a.status from job_seeker s, jobs j, applicant a 
    where a.user_id=s.id and a.job_post_id=j.job_id");

    while ($row = mysqli_fetch_array($query)) {
      $creator = $row['creator_email'];
      $query1 = mysqli_query($conn, "select photo from company where email='$creator'");
      $path = mysqli_fetch_array($query1);
    ?>






           <!-- single-job-content -->
           <div class="single-job-items mb-30">
                                    <div class="job-items">
                                        <div class="company-img">
                                            <a href="#"><img src="assets/img/icon/job-list3.png" alt=""></a>
                                        </div>
                                        <div class="job-tittle job-tittle2">
                                            <a href="#">
                                                <h4><?php echo $row['job_title'] ?></h4>
                                            </a>
                                            <ul>
                                                
                                                <li><?php echo $row['openings'] ?></li>
                                                <li><?php echo $row['description'] ?></li>
                                                <li><?php echo $row['salary'] ?> $</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="items-link items-link2 f-right">
                                    <?php if ($row['status']=='selected'){?>
            <p style="color:green">Selected</p>
          <?php } elseif($row['status']=='applied') { ?>
            <p style="color:blue">Applied</p>
          <?php } else {?>
            <p style="color:gray">Not Selected</p>
          <?php } ?>
                                        <span>7 hours ago</span>
                                    </div>
                                </div>

                                <!-- single-job-content -->


    <?php  } ?>
  </div>
</body>