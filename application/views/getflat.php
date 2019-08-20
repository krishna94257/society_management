<?php
  foreach($p as $row)
  {
	  $arr[] = $row['flat_name'];
	 
	// echo $ar = arr[];
	
	  
  }
  echo json_encode($arr);
?>
