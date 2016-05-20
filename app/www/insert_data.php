<?php
$con = mysql_connect('localhost','root','');
mysql_select_db('phonegap',$con);

 $title= mysql_real_escape_string($_REQUEST['title']);
 $duration=mysql_real_escape_string($_REQUEST['duration']);
 $price=mysql_real_escape_string($_REQUEST['price']);
 $sql = "INSERT INTO course_details (title,duration,price) VALUES ('$title','$duration','$price')"
 $q=mysql_query($sql);


 if($q==true){
  echo "ok";
 else
  echo "error";
 }

?>