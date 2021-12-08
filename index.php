<?php

include('database.php');
$db = new dbconnection();
$fetch[0] = $fetch[1] = $fetch[2] = $fetch[3] =  $fetch[4] = $fetch[5] = $fetch[6] = $fetch[7] = $fetch[8] = $fetch[9] = $fetch[10] = $fetch[11] = $fetch[12] = $fetch[13] = $fetch[14] = $fetch[15] = $fetch[16] = $fetch[17] = $fetch[18] = $fetch[19] = $fetch[20] = $fetch[21] = $fetch[22] = $fetch[23] = $fetch[24] =$fetch[25] = $fetch[26] = $fetch[27] = $fetch[28] = $fetch[29] = $fetch[30] = $fetch[31] = $fetch[32] = "";


include('add.php');
include('update.php');
include('edit.php');
include('delete.php');
		
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
    .multipartData label{
    font-size: 11px !important;
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
          <p>Shahid Shahidullah Kaisar Road, Feni Sadar, Feni.</p>
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
            <label for="birthId">Birth Registration No:</label>
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
            <label for="">Father's NID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="file" class="form-control" name="fatherId">
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
            <label for="motherId">Mother's NID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="file" class="form-control" name="motherId">
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
            <input type="date" class="form-control" name="birthDate">
          </div>
        </div>
        <!-- row 10 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="nationality">Nationality:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="nationality" value="<?php print $fetch[9] ?>">
          </div>
        </div>
        <div class="row multipartData">
          <div class="col-12 col-md-4">
            <label style="font-size: 15px !important; margin-top: 25px;">Present Address:</label>
          </div>
          <div class="col-12 col-md-8" style="padding: 0;">
            <div class="row">
              <div class="col-2">
                <label for="house">House</label>
                <input type="text" class="form-control" name="house" value="<?php print $fetch[10] ?>">
              </div>
              <div class="col-2">
                <label for="village">Village</label>
                <input type="text" class="form-control" name="village" value="<?php print $fetch[11] ?>">
              </div>
              <div class="col-2">
                <label for="postOffice">Post Office</label>
                <input type="text" class="form-control" name="postOffice" value="<?php print $fetch[12] ?>">
              </div>
              <div class="col-2">
                <label for="postCode">Post Code</label>
                <input type="text" class="form-control" name="postCode" value="<?php print $fetch[13] ?>">
              </div>
              <div class="col-2">
                <label for="thana">Thana</label>
                <input type="text" class="form-control" name="thana" value="<?php print $fetch[14] ?>">
              </div>
              <div class="col-2">
                <label for="district">District</label>
                <input type="text" class="form-control" name="district" value="<?php print $fetch[15] ?>">
              </div>
            </div>
          </div>
        </div>
        <!-- Parmanent address -->
        <div class="row multipartData">
          <div class="col-12 col-md-4">
            <label style="font-size: 15px !important; margin-top: 25px;">Parmanent Address:</label>
          </div>
          <div class="col-12 col-md-8" style="padding: 0;">
            <div class="row">
              <div class="col-2">
                <label for="pHouse">House No</label>
                <input type="text" class="form-control" name="pHouse" value="<?php print $fetch[16] ?>">
              </div>
              <div class="col-2">
                <label for="pVillage">Parmanent Village</label>
                <input type="text" class="form-control" name="pVillage" value="<?php print $fetch[17] ?>">
              </div>
              <div class="col-2">
                <label for="pPostOffice">Parmanent Post Office</label>
                <input type="text" class="form-control" name="pPostOffice" value="<?php print $fetch[18] ?>">
              </div>
              <div class="col-2">
                <label for="pPostcode">Parmanent Post Code</label>
                <input type="text" class="form-control" name="pPostCode" value="<?php print $fetch[19] ?>">
              </div>
              <div class="col-2">
                <label for="pthana">Parmanent thana</label>
                <input type="text" class="form-control" name="pThana" value="<?php print $fetch[20] ?>">
              </div>
              <div class="col-2">
                <label for="pDistrict">Parmanent District</label>
                <input type="text" class="form-control" name="pDistrict" value="<?php print $fetch[21] ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="ageOfAdmission">Age of Admission Date:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="ageOfAdmission" value="<?php print $fetch[22] ?>">
          </div>
        </div>
        <!-- row 14 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="prevSchool">Previous School Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="prevSchool" value="<?php print $fetch[23] ?>">
          </div>
        </div>
         <!-- row 15 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="prevClass">Previous Class Name:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="prevClass" value="<?php print $fetch[24] ?>">
          </div>
        </div>
        <!-- row 16 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="desireClass">Admission Desire Class:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="desireClass" value="<?php print $fetch[25] ?>">
          </div>
        </div>
        <!-- row 17 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="desireGroup">Admission Desire Group:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="desireGroup" value="<?php print $fetch[26] ?>">
          </div>
        </div>
         <!-- row 18 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="session">Session:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="session" value="<?php print $fetch[27] ?>">
          </div>
        </div>
         <!-- row 19 -->
         <div class="row
         
         ">
          <div class="col-12 col-md-4">
            <label for="tcNdate">T.C No and Date:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="file" class="form-control" name="tc">
          </div>
        </div>
         <!-- row 20 -->
         <div class="row">
          <div class="col-12 col-md-4">
            <label for="mobile">Mobile:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="mobile" value="<?php print $fetch[28] ?>">
          </div>
        </div>
        <!-- row 21 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="studentId">Student ID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="studentId" value="<?php print $fetch[29] ?>">
          </div>
        </div>
        <!-- row 22 -->
        <div class="row">
          <div class="col-12 col-md-4">
            <label for="studentUid">Student UID:</label>
          </div>
          <div class="col-12 col-md-8">
            <input type="text" class="form-control" name="studentUid" value="<?php print $fetch[30] ?>">
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
                <option value="no">No</option>
                <option value="yes">Yes</option>
              </select>
            </div>
          </div>
          <div class="col-12 col-md-2">
            <label for="transfer">Transport Service:</label>
          </div>
          <div class="col-12 col-md-3">
            <div class="form-group">
                <select class="form-control" id="transfer" name="transfer">
                  <option value="no">No</option>
                  <option value="yes">Yes</option>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function viewStudent()
        {
          window.location.href = 'viewstudent.php';
        }
    </script>
  </body>
</html>