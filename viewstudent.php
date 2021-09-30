<?php
include('database.php');
$db = new dbconnection();
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Registered Students</title>
    
  </head>
  <body>
  <div class="container-fluid">
  <header class="container px-0">
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
    </header>
   	 <div class="row">
		<div class="col-12">
			<div class="form-title-layer m-3">
				<h5 class="text-center"><i class="fas fa-users"></i>&nbsp;&nbsp;All Registered Students</h5>
			</div>
		</div>
	</div>
    <div style="overflow-x: scroll;">
    <table class="table table-bordered">
        <tr>
            <td>ID</td>
            <td>Admission Date</td>
            <td>Birth ID No</td>
            <td>Student Name</td>
            <td>Father's Name</td>
            <td>Father's ID</td>
            <td>Mother's Name</td>
            <td>Mother's ID</td>
            <td>Religion</td>
            <td>Gender</td>
            <td>Date of Birth</td>
            <td>Nationality</td>
            <td>Present Address</td>
            <td>Parmanent Address</td>
            <td>Age of Admission Date</td>
            <td>Previous School Name</td>
            <td>Previous Class Name</td>
            <td>Admission Desire Class</td>
            <td>Admission Desire Group</td>
            <td>Session</td>
            <td>T.C No and Date</td>
            <td>Mobile</td>
            <td>Student ID</td>
            <td>Student UID</td>
            <td>Hostel</td>
            <td>Transport Service</td>
            <td>Student Image</td>
            <td>Action</td>
        </tr>
        <?php
        $sql=$db->link->query("SELECT * FROM register_form");
        while($fetch=$sql->fetch_array())
        {?>
        <tr>
            <td><?php echo $fetch[0];?></td>
            <td><div style="height: 80px; overflow-y: scroll;"><?php echo $fetch[1];?></div></td>
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
            <td><img src="img/studentImg/<?php echo $fetch[22];?>.jpg" height="50" width="50"></td>
            <td>
                <a href="index.php?edit=<?php echo $fetch[0];?>" class="btn btn-sm btn-info" style="display: block; margin-bottom: 4px;">Edit</a>
                <a href="index.php?del=<?php echo $fetch[0];?>" type="button" class="btn btn-sm btn-warning">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
   </div>
   <footer style="background-color: #000; padding: 10px 0; margin-top: 20px;">
  <h6 class="text-center" style="color: #fff;">Developed By <span style="color: orange; font-weight: bold;">SBIT</span></h6>
</footer>
   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>