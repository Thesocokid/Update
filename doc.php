<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

if(isset($_POST["submit"])){
	
$user_id = $_SESSION["userid"];
$docName = $_POST['docName'];
$location = $_POST['location'];
$city = $_POST['city'];
$phone = $_POST['phone'];


$sql = "INSERT INTO user_docinfo(docName,location,city,phone,user_id)VALUES ('$docName' ,'$location','$city', '$phone','$user_id')";






if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: dashboard.php");
	exit();
}

}








?>