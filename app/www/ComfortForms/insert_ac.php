<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $BuildingID=$_POST['BuildingID'];
 $RoomID=$_POST['RoomID'];
 $Temp=$_POST['Temp'];
 $q=mysql_query("INSERT INTO `ac` (`BuildingID`,`RoomID`,`Temp`) VALUES ('$BuildingID','$RoomID','$Temp')");
 if($q)
  echo "ok";
 else
  echo "error";
 }
 ?>