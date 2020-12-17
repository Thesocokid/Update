<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

	
$user_id = $_SESSION["userid"];
$monthly = $_POST['monthly'];
$quartly = $_POST['quartly'];
$annual = $_POST['annual'];



$sql = "INSERT INTO user_plans(user_id,monthly,quartly,annual)
VALUES ('$user_id','$monthly' ,'$quartly','$annual')";







if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: profile.php");
	exit();
}


?>