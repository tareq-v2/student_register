<?php

if(isset($_POST["update"]))
  {
    $admissionDate = $_POST['admissionDate'];
    $birthId = $_POST['birthId'];
    $studentName = $_POST['studentName'];
    $fatherName = $_POST['fatherName'];
    $motherName = $_POST['motherName'];
    $religion = $_POST['religion'];
    $gender = $_POST['gender'];
    $birthDate = $_POST['birthDate'];
    $nationality = $_POST['nationality'];
    $house = $_POST['house'];
    $village = $_POST['village'];
    $postOffice = $_POST['postOffice'];
    $postCode = $_POST['postCode'];
    $thana = $_POST['thana'];
    $district = $_POST['district'];
    $pHouse = $_POST['pHouse'];
    $pVillage = $_POST['pVillage'];
    $pPostOffice = $_POST['pPostOffice'];
    $pPostCode = $_POST['pPostCode'];
    $pThana = $_POST['pThana'];
    $pDistrict = $_POST['pDistrict'];
    $ageOfAdmission = $_POST['ageOfAdmission'];
    $prevSchool = $_POST['prevSchool'];
    $prevClass = $_POST['prevClass'];
    $desireClass = $_POST['desireClass'];
    $desireGroup = $_POST['desireGroup'];
    $session = $_POST['session'];
    $mobile = $_POST['mobile'];
    $studentId = $_POST['studentId'];
    $studentUid = $_POST['studentUid'];
    $hostel = $_POST['hostel'];
    $transfer = $_POST['transfer'];

     // working with images name
     $father_id   = $_FILES['fatherId']['name'];
     $mother_id  = $_FILES['motherId']['name'];
     $tc  = $_FILES['tc']['name'];
     $student_image  = $_FILES['student_image']['name'];
     $tmp_father_id   = $_FILES['fatherId']['tmp_name'];
     $tmp_mother_id  = $_FILES['motherId']['tmp_name'];
     $tmp_tc  = $_FILES['tc']['tmp_name'];
     $tmp_student_name  = $_FILES['student_image']['tmp_name'];

    // define my file path with extension
    $path0 = "img/fatherId/$studentUid.jpg";
    $path1 = "img/motherId/$studentUid.jpg";
    $path2 = "img/tc/$studentUid.jpg";
    $path3 = "img/studentImg/$studentUid.jpg";

    $sql = $db->link->query("REPLACE INTO `register_form`(`admission_date`, `birth_id`, `student_name`, `father_name`, `mother_name`, `religion`, `gender`, `date_of_birth`, `nationality`, `house`, `village`, `postOffice`, `postCode`, `thana`, `district`, `pHouse`, `pVillage`, `pPostOffice`, `pPostCode`, `pThana`, `pDistrict`, `admission_date_age`, `prev_school`, `prev_class`, `desire_class`, `desire_group`, `session`, `mobile`, `student_id`, `student_uid`, `hostel`, `transfer`, `fatherId`, `motherId`, `tc`, `studentimage`) VALUES ('$admissionDate','$birthId','$studentName','$fatherName','$motherName','$religion','$gender','$birthDate','$nationality', '$house', '$village', '$postOffice', '$postCode', '$thana', '$district', '$pHouse', '$pVillage', '$pPostOffice', '$pPostCode', '$pThana', '$pDistrict', '$ageOfAdmission','$prevSchool','$prevClass','$desireClass','$desireGroup','$session','$mobile','$studentId','$studentUid','$hostel','$transfer','$father_id', '$mother_id', '$tc', '$student_image')");
    if($sql){  
      move_uploaded_file($tmp_father_id, $path0);
      move_uploaded_file($tmp_mother_id, $path1);
      move_uploaded_file($tmp_tc, $path2);
      move_uploaded_file($tmp_student_name, $path3);
      echo "Update Successfully";
    }else{
      echo "Update Unsuccessful";
    }
  }

?>