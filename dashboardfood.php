<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}


$foodType = $_POST['foodType'];
$foodCalories = $_POST['foodCalories'];
$user_id = $_SESSION["userid"];

$sql = "INSERT INTO user_meals(foodType,foodCalories,user_id)VALUES ('$foodType', '$foodCalories','$user_id')";






if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: dashboard.php");
	exit();
}










?>