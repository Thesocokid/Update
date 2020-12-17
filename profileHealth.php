<?php
$con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
session_start();

if(isset($_POST["submit"])){




$user_id = $_SESSION["userid"];
$medicalConditions = $_POST['medicalConditions'];
$currentWeight = $_POST['currentWeight'];
$targetWeight = $_POST['targetWeight'];
$bloodPressure = $_POST['bloodPressure'];
$targetBloodPressure = $_POST['targetBloodPressure'];
$heartRate = $_POST['heartRate'];
$bloodSugar = $_POST['bloodSugar'];
$targetBloodSugar = $_POST['targetBloodSugar'];
$targetCalories = $_POST['targetCalories'];
$age = $_POST['age'];
$height = $_POST['height'];

$sql = "INSERT INTO user_data(user_id,medicalConditions,currentWeight,targetWeight,bloodPressure,targetBloodPressure,heartRate,bloodSugar,targetBloodSugar,targetCalories,age,height)
	VALUES ('$user_id','$medicalConditions','$currentWeight','$targetWeight' ,'$bloodPressure' ,'$targetBloodPressure', '$heartRate','$bloodSugar' ,'$targetBloodSugar', '$targetCalories', '$age', '$height')";


		

if(!mysqli_query($con,$sql)){
	
header("location: profile.php");
	exit();
}
else{
$_SESSION["medicalCondition"] = $_POST['medicalConditions'];
header("location: profile.php");
	exit();
}
}

?>