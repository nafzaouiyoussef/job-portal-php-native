
<?php
include('include/header.php');
include('connection/db.php');
include('term_and_condition.php');
define ('SITE_ROOT', realpath(dirname(__FILE__)));

if (isset($_POST['submit'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $mobileno = $_POST['mobileno'];
  $address = $_POST['address'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $dob = $_POST['dob'];
  $age = $_POST['age'];
  $qualification = $_POST['qualification'];
  $stream = $_POST['stream'];
  $passingyear = $_POST['passingyear'];
  $cgpa = $_POST['cgpa'];
  $aboutme = $_POST['aboutme'];
  $skills = $_POST['skills'];
  
  $targetResume = SITE_ROOT.'../seekerFiles/resumes/'.$_FILES['resume']['name'];
  $resume = '../seekerFiles/resumes/'.$_FILES['resume']['name'];

  //Encrypt Password
  move_uploaded_file($_FILES['resume']['tmp_name'], $targetResume);


  $query = mysqli_query($conn, "insert into job_seeker(fname, lname, email, password, mobileno, address, country, city,
  state, dob, age, qualification, stream, passingyear, cgpa, aboutme, skills, resume) values
  ('$fname','$lname','$email','$password','$mobileno','$address','$country','$city','$state','$dob', '$age','$qualification','$stream',
  '$passingyear','$cgpa','$aboutme','$skills','$resume')");

  if ($query) {
    echo "<script>alert('Now you can login!')</script>";
    header('location:seeker_signin.php');
  } else {
    echo "<script>alert('Some error occured please try again!')</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 
  <link rel="stylesheet" href="css/seeker_signup.css">
  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
  <style>
    .registerSeeker input,
    textarea {
      border: 1px solid #eee;
      border-left: 3px solid;
      border-radius: 5px;
    }

    .registerSeeker input:valid,
    textarea:valid {
      border-left-color: black;
    }

    .registerSeeker input:optional,
    textarea:optional {
      border-left-color: #999999;
    }

    .registerSeeker input:invalid,
    textarea:invalid {
      border-left-color: red;
    }
  </style>
</head>

<body>
<div class="formbold-main-wrapper">

  <div class="formbold-form-wrapper">
    <form id="registerSeeker" method="post" action="seeker_signup.php" name="SeekerRegistration" enctype="multipart/form-data" onsubmit="return passvalidation(event); return validateEmail(event);">
      
      <div class="title">CREATE YOUR PROFILE</div>
      <p class="sub-head"> Personal details </p>
      <div class="formbold-input-flex">
        <div>
          <label for="firstname" class="formbold-form-label"> First Name </label>
          <input
            type="text"
            id="fname" name="fname"
            placeholder="Your first name"
            class="formbold-form-input"
          />
        </div>

        <div>
          <label for="lastname" class="formbold-form-label"> Last Name </label>
          <input
            type="text"
            id="lname" name="lname"
            placeholder="Your last name"
            class="formbold-form-input"
          />
        </div>
      </div>

      <div class="formbold-input-flex">
        <div>
            <label for="email" class="formbold-form-label"> Email </label>
            <input
            type="email"
            name="email"
            id="email"
            placeholder="example@email.com"
            class="formbold-form-input"
            />
        </div>

        <div>
        <label for="Mobile Number" class="formbold-form-label">Mobile Number</label>
        <input
            type="text"
            id="mobileno" name="mobileno"
            placeholder="0612345678"
            class="formbold-form-input"
            />
              </div>
      </div>
      <div class="formbold-input-flex">
      <div>
                <input class="form-control" type="password" id="password" name="password" minlength="8" placeholder="Password *" onchange="return passvalidation(event);" required>
              </div>

              <div>
                <input class="form-control" type="password" id="cpassword" name="cpassword" minlength="8" placeholder="Confirm Password *" required>
                <span id="pwd">
              </div>
      </div>

      <div class="formbold-input-flex">
      <div>
                <textarea class="form-control" type="text" rows="4" id="aboutme" name="aboutme" placeholder="Brief intro about yourself"></textarea>
              </div>

              <div>
                <textarea style="height:110px" type="text" class="form-control" rows="4" id="address" name="address" placeholder="Address"></textarea>
              </div>
      </div>
      <div class="formbold-input-flex">
      <div>
                <label>Date of birth:</label>
                <input class="form-control" type="date" id="dob" min="1960-01-01" max="1999-01-31" name="dob" placeholder="Date Of Birth *" value="" onchange="return calAge();" required>
              </div>

        <div>
        <label for="age" class="formbold-form-label">Age</label>
        <input class="form-control" id="age" name="age" placeholder="Age" value="" readonly>
        <div>
                
              </div>
      
              </div>
            </div>
     
      <div class="formbold-mb-3">
      <div>
                <select name="country" class="countries form-control" id="countryId">
                  <option value="">Select Country</option>
                </select>
              </div>

      </div>
      <div class="formbold-mb-3">
      <div>
      <select name="state" class="states form-control" id="stateId">
                  <option value="">Select State</option>
                </select>
              </div>

      </div>
      <div class="formbold-mb-3">
      <div>
      <select name="city" class="cities form-control" id="cityId">
                    <option value="">Select City</option>
                </select>
              </div>
      </div>




<p class="sub-head"> Education details </p>

      <div class="formbold-mb-3">
      <div>
                <label style="margin-top:23px">Passing Year:</label>
                <input class="form-control" type="date" id="passingyear" max="2020-10-31" name="passingyear" placeholder="Passing Year *" required>
              </div>

      </div>
      <div class="formbold-mb-3">
      <div>
                <input class="form-control" type="text" id="qualification" name="qualification" placeholder="Highest Qualification *" required>
              </div>

      </div>
      <div class="formbold-mb-3">
      <div>
                <input class="form-control" type="text" id="stream" name="stream" placeholder="Stream *" required>
              </div>
      </div>

      <div class="formbold-mb-3">
        <label style="margin-top:23px">skills:</label>
      <div>
      
                <textarea style="margin-top:35px" type="text" class="form-control" rows="4" id="skills" name="skills" placeholder="Enter Skills"></textarea>
              </div>
              <div>
                <input class="form-control" type="number" id="cgpa" name="cgpa" placeholder="Cumulative Grade Point Average *" name="price" min="4.00" step=".01" required>
              </div>
              <div>
                <label>Upload Resume:</label>
                <input type="file" id="file" name="resume" class="formbold-form-file" onchange="return filetypeValidation(event);return filetypeValidation(event)" required>
                <p id="output" style="font-size:14px;"></p>
                <label style="color: red; font-size:14px;">File Format PDF Only!</label>
              </div>
              <div>
                <label style="font-size:16px "><input type="checkbox">&nbsp;I accept all the <a href="#modalWindow"  style="color: red; font-size:14px;">terms & conditions</a></label>
              </div>
      </div>

      <button class="formbold-btn" type="submit" name="submit" id="submit">Apply Now</button>
      <p id="text-center">Already have an account?&emsp14;<a href="seeker_signin.php">Sign in </a></p>
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    display: block;
    margin: 0 auto 45px;
  }

  .formbold-input-wrapp > div {
    display: flex;
    gap: 20px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input::placeholder,
  select.formbold-form-input,
  .formbold-form-input[type='date']::-webkit-datetime-edit-text,
  .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
  .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
    color: rgba(83, 99, 135, 0.5);
  }

  .formbold-form-input:focus {
    border-color: #6a64f1;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #07074D;
    font-weight: 500;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-form-file-flex {
    display: flex;
    align-items: center;
    gap: 20px;
  }
  .formbold-form-file-flex .formbold-form-label {
    margin-bottom: 0;
  }
  .formbold-form-file {
    font-size: 14px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-form-file::-webkit-file-upload-button {
    display: none;
  }
  .formbold-form-file:before {
    content: 'Upload file';
    display: inline-block;
    background: #EEEEEE;
    border: 0.5px solid #FBFBFB;
    box-shadow: inset 0px 0px 2px rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 3px 12px;
    outline: none;
    white-space: nowrap;
    -webkit-user-select: none;
    cursor: pointer;
    color: #637381;
    font-weight: 500;
    font-size: 12px;
    line-height: 16px;
    margin-right: 10px;
  }

  .formbold-btn {
    text-align: center;
    width: 100%;
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #6a64f1;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }

  .formbold-w-45 {
    width: 45%;
  }
</style>

  <script type="text/javascript">
    function validatePhone(event) {
      //event.keycode will return unicode for characters and numbers like a, b, c, 5 etc.
      //event.which will return key for mouse events and other events like ctrl alt etc. 
      var key = window.event ? event.keyCode : event.which;
      if (event.keyCode == 8 || event.keyCode == 46 || event.keyCode == 37 || event.keyCode == 39) {
        // 8 means Backspace
        //46 means Delete
        // 37 means left arrow
        // 39 means right arrow
        return true;
      } else if (key < 48 || key > 57 || event.shiftkey == true) {
        // 48-57 is 0-9 numbers on your keyboard.
        return false;
      } else return true;
    }
  </script>
  <script type="text/javascript">
    function calAge() {
      var dob = document.SeekerRegistration.dob.value;
      var today = new Date();
      var birthDate = new Date(dob);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      document.SeekerRegistration.age.value = age;
    }
  </script>
  <script type="text/javascript">
    function passvalidation(event) {
      var str = document.getElementById("password").value;
      if (str.match(/[a-z]/g) && str.match(
          /[0-9]/g) && str.match(
          /[^a-zA-Z\d]/g) && str.length >= 8)
        return true;
      else
        alert("Password must contain minimum 8 characters with atleast 1 digit and 1 special character");
      document.getElementById("password").value = '';
      return false;
    }
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    $("#registerSeeker").on("submit", function(e) {
      e.preventDefault();
      if ($('#password').val() != $('#cpassword').val()) {
        $('#pwd').html("Password Mismatch!").css('color', 'red')
      } else {
        $(this).unbind('submit').submit();
      }
    });
  </script>

  <script type="text/javascript">
    function validateEmail(event) {
      var emailText = document.getElementById('email').value;
      var pattern = /^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/;
      if (pattern.test(emailText)) {
        return true;
      } else {
        alert('Bad email address: ' + emailText);
        document.getElementById('email').value = '';
        return false;
      }

    }
  </script>

  <script type="text/javascript">
    function filetypeValidation() {
      var fileInput =
        document.getElementById('file');

      var filePath = fileInput.value;

      // Allows only pdf file type 
      var allowedExtension = /(\.pdf)$/i;
      if (!allowedExtension.exec(filePath)) {
        alert('Invalid file type');
        fileInput.value = '';
        return false;
      }
    }
  </script>


  <script src="//geodata.solutions/includes/countrystatecity.js"></script>

</body>

</html>

