<?php
include('database.php');
$db = new dbconnection();

// if(isset($_POST["search"]))
// {
//   $data = $_POST['getData'];
//   $selectData = $db->link->query("SELECT * FROM student_register
//    WHERE `student_name` = '%{$data}%'");
// }


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <title>Register Students</title>
    <style>
      th, td{
        font-size: 11px;
      }
    </style>
  </head>
  <body>
  <div class="container-fluid">
    <!-- <header class="container px-0">
      <div class="row justify-content-center bg-info m-2">
        <div class="col-3 d-none d-md-block">
          <a href="index.php"><img src="img/logoSDMS2015.png" alt="logo"></a>
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
    </header> -->
   	 <div class="row">
		<div class="col-9">
			<div class="form-title-layer m-3">
				<h5 class="text-center"><i class="fas fa-users"></i>&nbsp;&nbsp;All Registered Students</h5>
			</div>
		</div>
    
    <div>
    </div>
	</div>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#example').DataTable();
      } );
    </script>
    <div class="container-fluid mx-2">
    <table id="example" class="display">
          <thead>
          <tr>
              <th>ID</th>
              <th>Admission Date</th>
              <th>Birth Reg. No</th>
              <th>Student's Name</th>
              <th>Father's Name</th>
              <th>Mother's Name</th>
              <th>Religion</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Nationality</th>
              <th>House</th>
              <th>Village</th>
              <th>Post Office</th>
              <th>Post Code</th>
              <th>Thana</th>
              <th>District</th>
              <th>Parmanent House</th>
              <th>Parmanent Village</th>
              <th>Parmanent Post Office</th>
              <th>Parmanent Post Code</th>
              <th>Parmanent Thana</th>
              <th>Parmanent District</th>
              <th>Age of Admission Date</th>
              <th>Previous School Name</th>
              <th>Previous Class Name</th>
              <th>Admission Desire Class</th>
              <th>Admission Desire Group</th>
              <th>Session</th>
              <th>Mobile</th>
              <th>Student ID</th>
              <th>Student UID</th>
              <th>Hostel</th>
              <th>Transport Service</th>
              <th>Father's ID</th>
              <th>Mother's ID</th>
              <th>T.C</th>
              <th>Student Image</th>
              <th>Action</th>
          </tr>
          </thead>
          <?php
          $sql=$db->link->query("SELECT * FROM register_form");
          while($fetch=$sql->fetch_array())
          {?>
          <tr>
              <td><?php echo $fetch[0];?></td>
              <td><div><?php echo $fetch[1];?></div></td>
              <td><?php echo $fetch[2];?></td>
              <td><?php echo $fetch[3];?></td>
              <td><?php echo $fetch[4];?></td>
              <td><?php echo $fetch[5];?></td>
              <td><?php echo $fetch[6];?></td>
              <td><?php echo $fetch[7];?></td>
              <td><?php echo $fetch[8];?></td>
              <td><?php echo $fetch[9];?></td>
              <td><?php echo $fetch[10];?></td>
              <td><?php echo $fetch[11];?></td>
              <td><?php echo $fetch[12];?></td>
              <td><?php echo $fetch[13];?></td>
              <td><?php echo $fetch[14];?></td>
              <td><?php echo $fetch[15];?></td>
              <td><?php echo $fetch[16];?></td>
              <td><?php echo $fetch[17];?></td>
              <td><?php echo $fetch[18];?></td>
              <td><?php echo $fetch[19];?></td>
              <td><?php echo $fetch[20];?></td>
              <td><?php echo $fetch[21];?></td>
              <td><?php echo $fetch[22];?></td>
              <td><?php echo $fetch[23];?></td>
              <td><?php echo $fetch[24];?></td>
              <td><?php echo $fetch[25];?></td>
              <td><?php echo $fetch[26];?></td>
              <td><?php echo $fetch[27];?></td>
              <td><?php echo $fetch[28];?></td>
              <td><?php echo $fetch[29];?></td>
              <td><?php echo $fetch[30];?></td>
              <td><?php echo $fetch[31];?></td>
              <td><?php echo $fetch[32];?></td>
              <td>
                <img src="img/fatherId/<?php echo $fetch[29];?>.jpg" height="50" width="50"></td>
              <td>
                <img src="img/motherId/<?php echo $fetch[29];?>.jpg" height="50" width="50">
              </td>
              <td>
                <img src="img/tc/<?php echo $fetch[29];?>.jpg" height="50" width="50">
              </td>
              <td>
                <img src="img/studentImg/<?php echo $fetch[29];?>.jpg" height="50" width="50">
              </td>
              <td>
                  <a href="index.php?edit=<?php echo $fetch[0];?>" style="display: block; margin-bottom: 2px;" class="btn btn-sm btn-info">Edit</a>
                  <a href="singleView.php?view=<?php echo $fetch[0];?>" style="display: block; margin-bottom: 2px;" class="btn btn-sm btn-info">View</a>
                  <a href="index.php?del=<?php echo $fetch[0];?>" type="button" class="btn btn-sm btn-warning">Delete</a>
              </td>
          </tr>
          <?php
          }
          ?>
    </table>
    </div>
   </div>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>