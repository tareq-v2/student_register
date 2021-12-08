<?php

if(isset($_GET["del"]))
  {
    $del = $db->link->query("DELETE FROM register_form where `id` = '".$_GET["del"]."'");
        if($del)
        {
            $path0 = "img/fatherId/".$_GET["del"].".jpg";
            $path1 = "img/motherId/".$_GET["del"].".jpg";
            $path2 = "img/tc/".$_GET["del"].".jpg";
            $path3 = "img/studentImg/".$_GET["del"].".jpg";
            unlink($path0);
            unlink($path1);
            unlink($path2);
            unlink($path3);
            echo "Delete Successfully";
            echo "<script>location='/student_register/viewstudent.php';</script>";
        }
        else 
        {
            echo "Delete Unsuccessful";
        }
          
  }
		
?>