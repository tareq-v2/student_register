<?php
include('database.php');

function makeid($tableName, $fieldName, $prefix, $length)
	{
		// ITEM-00001
	 	$sql=$this->link->query("SELECT MAX($fieldName)  FROM $tableName");
	 	$fetch=$sql->fetch_array();
	 	$MaxID=$fetch[0]; // id
	 	$prefix_length=strlen($prefix); // 5
	 	//echo $prefix_length;

	 	// substr('Nahian',2) => hian
	 	$onlyId=substr($MaxID,$prefix_length);  // Output: 00001 (str)
	 	//echo $onlyId;
	 	$new=(int)($onlyId);  // 00001 => 1
	 	//echo $new;
	 	$new++;
	 	$id_length=strlen($new); // 1

	 	$number_of_zero=$length-($prefix_length + $id_length);
	 	//echo $number_of_zero;

	 	$zero=str_repeat('0',$number_of_zero);
	 	//echo $zero;

	 	$newId=$prefix.$zero.$new;
	 	//echo $newId;
	 	
	 	return($newId);
	}

    $newId = makeid('gallery','id','P-','7');

    echo $newId;

?>