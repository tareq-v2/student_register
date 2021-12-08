<?php

include('database.php');
$db = new dbconnection();
$fetch[0] = $fetch[1] = $fetch[2] = $fetch[3] =  $fetch[4] = $fetch[5] = $fetch[6] = $fetch[7] = $fetch[8] = $fetch[9] = $fetch[10] = $fetch[11] = $fetch[12] = $fetch[13] = $fetch[14] = $fetch[15] = $fetch[16] = $fetch[17] = $fetch[18] = $fetch[19] = $fetch[20] = $fetch[21] = $fetch[22] = $fetch[23] = $fetch[24] =$fetch[25] = $fetch[26] = $fetch[27] = $fetch[28] = $fetch[29] = $fetch[30] = $fetch[31] = $fetch[32] = "";
		
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
    <title>Student Details</title>
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
      form input{
        border: none !important;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
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
    <div>
       <?php
          if(isset($_GET["view"]))
          {
            $select = $db->link->query("SELECT * FROM register_form where `id` = '".$_GET["view"]."'");
            $fetch=$select->fetch_array(); 
          }
          ?>
          <div class="container">
          <form method="POST" enctype="multipart/form-data" class='bg-light py-2'>
            
            <!-- row 3 -->
            <div class="row">
              <div class="col-12 col-md-4">
                <label for="studentName">Student Name:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="text" class="form-control" name="studentName" value="<?php print $fetch[3] ?>">
              </div>
            </div><!-- row 1 -->
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

            <!-- row 4 -->
            <div class="row">
              <div class="col-12 col-md-4">
                <label for="fatherName">Father's Name:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="text" class="form-control" name="fatherName" value="<?php print $fetch[4] ?>">
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
            <!-- row 8 -->
            <div class="row">
              <div class="col-12 col-md-4">
                <label for="gender" style="margin-right: 20px; font-weight: bold;">Gender:</label>
              </div>
              <div class="col-12 col-md-8">
              <div class="form-group">
                  <select class="form-control" id="gender"style="border: none !important;">
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
                <input type="text" class="form-control" name="birthDate" value="<?php print $fetch[8] ?>">
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
            <div class="container">
            <div class="row justify-content-end">
              <div class="col-12 col-md-4">
                <button class="btn btn-info btn-block" style="width: 100%; margin: 8px 0;">Print</button>
              </div>
            </div>
            </div>
          </form> 
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>