<?php

$host='Localhost';
$user='root';
$pass='';
$db='informing';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo 'connected successfully to informing database';

$sql="insert into contact(NAME,EMAIL,MESSAGE) values ('SHIVANGI VERMA','shivangiverma490@gmail.com','nyc website')";
$query=mysqli_query($con,$sql);
if($query)
	  echo 'data inserted successfully';
?>