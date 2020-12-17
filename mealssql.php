<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

	
$user_id = $_SESSION["userid"];
$friedegg = $_POST['friedegg'];
$berrysmoothie = $_POST['berrysmoothie'];
$burrito = $_POST['burrito'];
$chickensalad = $_POST['chickensalad'];
$tunamelt = $_POST['tunamelt'];
$riceandlentils = $_POST['riceandlentils'];
$killet = $_SESSION["killet"];
$chickenalfredo = $_POST['chickenalfredo'];
$shoyuramen = $_POST['shoyuramen'];
$foodCalories = $_POST['foodCalories'];





$sql = "INSERT INTO user_meals(user_id,friedegg,berrysmoothie,burrito,chickensalad,tunamelt,riceandlentils,killet,chickenalfredo,shoyuramen,foodCalories)
VALUES ('$user_id','$friedegg' ,'$berrysmoothie','$burrito','$chickensalad','$tunamelt' ,'$riceandlentils','$killet','$chickenalfredo','$shoyuramen','$foodCalories')";







if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: meals.php");
	exit();
}


?>