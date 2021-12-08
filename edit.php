<?php

if(isset($_GET["edit"]))
  {
    $select = $db->link->query("SELECT * FROM register_form where `id` = '".$_GET["edit"]."'");
    $fetch=$select->fetch_array(); 
  }
  
?>