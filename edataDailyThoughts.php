<?php
 $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');


 function setUserComments($con){
 	if(isset($_POST['commentSubmit'])){
	$user_id = $_SESSION["userid"];
 	$date = $_POST['date'];
 	$comment = $_POST['comment'];

 	$sql = "INSERT INTO user_dailythoughts (user_id, date, comment) VALUES ('$user_id','$date', '$comment')";
 	$result = $con->query($sql);	


 	}



 }

 function getUserComments($con){

 	$sql = "SELECT * FROM user_dailythoughts";
 	$result = $con->query($sql);
 		$user_id = $_SESSION["userid"];
 	while ($row = $result->fetch_assoc()){
 		echo "<div class='comment-box'><p>";
 echo "<p>" . $_SESSION["useruid"] . "</p>";
 	    echo $row['date']."<br></br>";
 		echo $row['comment']. "<br>";
 		echo "<p> ------------------------------</p>";
 		echo "</p></div>";
 	
 	}
 
 }


 ?>