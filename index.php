<?php

include('database.php');
$db = new dbconnection();
$fetch[0] = $fetch[1] = $fetch[2] = $fetch[3] =  $fetch[4] = $fetch[5] = $fetch[6] = $fetch[7] = $fetch[8] = $fetch[9] = $fetch[10] = $fetch[11] = $fetch[12] = $fetch[13] = $fetch[14] = $fetch[15] = $fetch[16] = $fetch[17] = $fetch[18] = $fetch[19] = $fetch[20] = $fetch[21] = $fetch[22] = $fetch[23] = $fetch[24] = "";

if(isset($_POST["add"])){
  $admissionDate = $_POST['admissionDate'];
  $birthId = $_POST['birthId'];
  $studentName = $_POST['studentName'];
  $fatherName = $_POST['fatherName'];
  $fatherId = $_POST['fatherId'];
  $motherName = $_POST['motherName'];
  $motherId = $_POST['motherId'];
  $religion = $_POST['religion'];
  $gender = $_POST['gender'];
  $birthDate = $_POST['birthDate'];
  $nationality = $_POST['nationality'];
  $presentAddress = $_POST['presentAddress'];
  $parmanentAddress = $_POST['parmanentAddress'];
  $ageOfAdmission = $_POST['ageOfAdmission'];
  $prevSchool = $_POST['prevSchool'];
  $prevClass = $_POST['prevClass'];
  $desireClass = $_POST['desireClass'];
  $desireGroup = $_POST['desireGroup'];
  $session = $_POST['session'];
  $tcNo = $_POST['tcNdate'];
  $mobile = $_POST['mobile'];
  $studentId = $_POST['studentId'];
  $studentUid = $_POST['studentUid'];
  $hostel = $_POST['hostel'];
  $transfer = $_POST['transfer'];

  $sql = $db->link->query("INSERT INTO `register_form`(`admission_date`, `birth_id`, `student_name`, `father_name`, `father_id`, `mother_name`, `mother_id`, `religion`, `gender`, `date_of_birth`, `nationality`, `present_address`, `parmanent_address`, `admission_date_age`, `prev_school`, `prev_class`, `desire_class`, `desire_group`, `session`, `tc_no`, `mobile`, `student_id`, `student_uid`, `hostel`, `transfer`) VALUES ('$admissionDate','$birthId','$studentName','$fatherName','$fatherId','$motherName','$motherId','$religion','$gender','$birthDate','$nationality','$presentAddress','$parmanentAddress','$ageOfAdmission','$prevSchool','$prevClass','$desireClass','$desireGroup','$session','$tcNo','$mobile','$studentId','$studentUid','$hostel','$transfer')");
  if($sql){   
    $path = "img/studentImg/$studentId.jpg";
    move_uploaded_file($_FILES['student_image']['tmp_name'], $path);
    echo "Add Successfully";
  }else{
    echo "Add Unsuccessful";
  }
}
if(isset($_POST["update"])){
  $admissionDate = $_POST['admissionDate'];
  $birthId = $_POST['birthId'];
  $studentName = $_POST['studentName'];
  $fatherName = $_POST['fatherName'];
  $fatherId = $_POST['fatherId'];
  $motherName = $_POST['motherName'];
  $motherId = $_POST['motherId'];
  $religion = $_POST['religion'];
  $gender = $_POST['gender'];
  $birthDate = $_POST['birthDate'];
  $nationality = $_POST['nationality'];
  $presentAddress = $_POST['presentAddress'];
  $parmanentAddress = $_POST['parmanentAddress'];
  $ageOfAdmission = $_POST['ageOfAdmission'];
  $prevSchool = $_POST['prevSchool'];
  $prevClass = $_POST['prevClass'];
  $desireClass = $_POST['desireClass'];
  $desireGroup = $_POST['desireGroup'];
  $session = $_POST['session'];
  $tcNo = $_POST['tcNdate'];
  $mobile = $_POST['mobile'];
  $studentId = $_POST['studentId'];
  $studentUid = $_POST['studentUid'];
  $hostel = $_POST['hostel'];
  $transfer = $_POST['transfer'];

  $sql = $db->link->query("REPLACE INTO `register_form`(`admission_date`, `birth_id`, `student_name`, `father_name`, `father_id`, `mother_name`, `mother_id`, `religion`, `gender`, `date_of_birth`, `nationality`, `present_address`, `parmanent_address`, `admission_date_age`, `prev_school`, `prev_class`, `desire_class`, `desire_group`, `session`, `tc_no`, `mobile`, `student_id`, `student_uid`, `hostel`, `transfer`) VALUES ('$admissionDate','$birthId','$studentName','$fatherName','$fatherId','$motherName','$motherId','$religion','$gender','$birthDate','$nationality','$presentAddress','$parmanentAddress','$ageOfAdmission','$prevSchool','$prevClass','$desireClass','$desireGroup','$session','$tcNo','$mobile','$studentId','$studentUid','$hostel','$transfer')");
  if($sql){   
    $path = "img/studentImg/$studentId.jpg";
    move_uploaded_file($_FILES['student_image']['tmp_name'], $path);
    echo "Update Successfully";
  }else{
    echo "Update Unsuccessful";
  }
}

if(isset($_GET["edit"]))
  {
    $select = $db->link->query("SELECT * FROM register_form where `id` = '".$_GET["edit"]."'");
    $fetch=$select->fetch_array(); 
  }

if(isset($_GET["del"]))
{
  $del = $db->link->query("DELETE FROM register_form where `id` = '".$_GET["del"]."'");
      if($del)
      {
          $path="img/studentImg/".$_GET["del"].".jpg";
          unlink($path);
          echo "Delete Successfully";
      }
      else 
      {
          echo "Delete Unsuccessful";
      }
      echo "<script>location='/holycrescent';</script>";
        
}
		
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Register Form</title>
  </head>
  <style>
    .row{
      margin: 10px 0;
    }
    @media only screen
      and (min-device-width : 320px)
      and (max-device-width : 768px) {
        h2{
            margin-top: 5px;
            font-size: 13px !important;
            font-family: serif;
        }
        header .col-7 p{
          font-size: 9px !important;
        }
        li{
          font-size: 7px !important;
          font-family: serif;
        }
      }
  </style>
  <body>
    <header class="container px-0">
      <div class="row justify-content-center bg-info m-2">
        <div class="col-3 d-none d-md-block">
          <img src="img/logoSDMS2015.png" alt="logo">
        </div>
        <div class="col-7">
          <h2 class="display-5">Holy Crescent School</h2>
          <p>Shahid Shahid ullah Sarak, Feni sadar, Feni.</p>
          <span>
            <ul>
              <li>EIIN: 131302</li>
              <li style="margin-left: 20px;">Phone: 01715023389</li>
            </ul>
          </span>
        </div>
      </div>
    </header>
    <div class="container">
      <h6 class="text-center" style="box-shadow: 1px solid #000; margin-top: 10px;">Admission Register Form</h6>
      <form method="POST" enctype="multipart/form-data" class='bg-light py-2' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <!-- row 1 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="admissionDate">Admission Date:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="date" class="form-control" name="admissionDate" value="<?php print $fetch[1] ?>">
          </div>
        </div>
        <!-- row 2 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="birthId">Birth ID No:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="birthId" value="<?php print $fetch[2] ?>">
          </div>
        </div>
        <!-- row 3 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="studentName">Student Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="studentName" value="<?php print $fetch[3] ?>">
          </div>
        </div>
         <!-- row 4 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="fatherName">Father's Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="fatherName" value="<?php print $fetch[4] ?>">
          </div>
        </div>
         <!-- row 5 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="">Father's ID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="fatherId" value="<?php print $fetch[5] ?>">
          </div>
        </div>
         <!-- row 6 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="motherName">Mother's Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="motherName" value="<?php print $fetch[6] ?>">
          </div>
        </div>
         <!-- row 7 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="motherId">Mother's ID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="motherId" value="<?php print $fetch[7] ?>">
          </div>
        </div>
        <!-- row 8 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="religion">Religion:</label>
          </div>
          <div class="col-12 col-md-4">
            <div class="form-group">
              <label for="religion">Select your religion here</label>
              <select class="form-control" id="religion" name="religion">
                <option value="Muslim">Muslim</option>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
                <option value="Bhudda">Bhudda</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <label for="gender" style="margin-right: 20px; font-weight: bold;">Gender:</label>
            <div class="form-group">
              <select class="form-control" id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select>
            </div>
          </div>
        </div>
        <!-- row 9 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="birthDate">Date of Birth:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="date" class="form-control" name="birthDate" value="<?php print $fetch[10] ?>">
          </div>
        </div>
        <!-- row 10 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="nationality">Nationality:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="nationality" value="<?php print $fetch[11] ?>">
          </div>
        </div>
        <!-- row 11 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="presentAddress">Present Address:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="presentAddress" value="<?php print $fetch[12] ?>">
          </div>
        </div>
        <!-- row 12 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="parmanentAddress">Parmanent Address:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="parmanentAddress" value="<?php print $fetch[13] ?>">
          </div>
        </div>
        <!-- row 13 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="ageOfAdmission">Age of Admission Date:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="ageOfAdmission" value="<?php print $fetch[14] ?>">
          </div>
        </div>
        <!-- row 14 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="prevSchool">Previous School Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="prevSchool" value="<?php print $fetch[15] ?>">
          </div>
        </div>
         <!-- row 15 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="prevClass">Previous Class Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="prevClass" value="<?php print $fetch[16] ?>">
          </div>
        </div>
        <!-- row 16 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="desireClass">Admission Desire Class:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="desireClass" value="<?php print $fetch[17] ?>">
          </div>
        </div>
        <!-- row 17 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="desireGroup">Admission Desire Group:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="desireGroup" value="<?php print $fetch[18] ?>">
          </div>
        </div>
         <!-- row 18 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="session">Session:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="session" value="<?php print $fetch[19] ?>">
          </div>
        </div>
         <!-- row 19 -->
         <div class="row
         
         ">
          <div class="col-12 col-md-4">
            <label for="tcNdate">T.C No and Date:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="tcNdate" value="<?php print $fetch[20] ?>">
          </div>
        </div>
         <!-- row 20 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="mobile">Mobile:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="mobile" value="<?php print $fetch[21] ?>">
          </div>
        </div>
        <!-- row 21 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="studentId">Student ID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="studentId" value="<?php print $fetch[22] ?>">
          </div>
        </div>
        <!-- row 22 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="studentUid">Student UID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="studentUid" value="<?php print $fetch[23] ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="student_image">Student Image:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="file" class="form-control" name="student_image">
          </div>
        </div>
        <!-- row 23 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="hostel">Hostel:</label>
          </div>
          <div class="col-12 col-md-3">
          <div class="form-group">
              <select class="form-control" id="hostel" name="hostel">
                <option value="yes">Yes</option>
                <option value="no">No</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-2">
            <label for="transfer">Transport Service:</label>
          </div>
          <div class="col-12 col-md-3">
            <div class="form-group">
                <select class="form-control" id="transfer" name="transfer">
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
        <div class="row justify-content-end">
          <div class="col-12 col-md-4">
            <button class="btn btn-info btn-block" style="width: 100%; margin: 8px 0;" name="add">Submit</button>
          </div>
        </div>
        </div>
        <div class="row">
				<div class="col-12" style="text-align: center;">
					<button class="btn btn-success" name="update">Update</button>
					<input type="button" class="btn btn-info" name="show" onclick="return viewStudent()" value="View">
				</div>
			</div>
    </form>
  </div>
<footer style="background-color: #000; padding: 10px 0; margin-top: 20px;">
  <h6 class="text-center" style="color: #fff;">Developed By <span style="color: orange; font-weight: bold;">SBIT</span></h6>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
  function viewStudent()
		{
      window.location.href = 'viewstudent.php';
		}
</script>
  </body>
</html>