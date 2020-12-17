<?php
session_start();
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');

if(!$con){

	echo 'Databse Not Connected To Server';
}

	
$user_id = $_SESSION["userid"];
$nameOnCard = $_POST['nameOnCard'];
$cardNumber = $_POST['cardNumber'];
$expirationDate = $_POST['expirationDate'];
$cVV = $_POST['cVV'];
$streetAddress = $_POST['streetAddress'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipCode = $_POST['zipCode'];


$sql = "INSERT INTO user_payment(user_id,nameOnCard,cardNumber,expirationDate,cVV,streetAddress,city,state,zipCode)
VALUES ('$user_id','$nameOnCard' ,'$cardNumber','$expirationDate','$cVV','$streetAddress' ,'$city','$state' ,'$zipCode')";







if(!mysqli_query($con,$sql)){
	
header("location: dashboard.php");
	exit();
}
else{
header("location: profile.php");
	exit();
}


?>