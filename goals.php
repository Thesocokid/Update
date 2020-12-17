<!DOCTYPE html>
<html lang="en">
<head>
  <?php session_start();?>
    <title>eFitnessFriend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <!-- Link for the css folder -->
<link rel="stylesheet" type="text/css" href="goals.css">
<div id="page-wrap">  
</head>
<body>                                                                          

<!-- Padding for goals -->
<style>
.jumbotron {
  background-color: #4169E1;
  color: #fff;
  padding: 100px 25px;
}

.container-fluid {
  padding: 10px 50px;
}
</style>




                                                                                   <!--NAVAGATION BAR-->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="dashboard.html">eFitnessFriend</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="goals.php">Goals</a></li>
        <li><a href="meals.php">Meals</a></li>
        <li><a href="edata.php">eData</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="logout.php">Logout</a></li> 
      </ul>
    </div>
  </div>
</nav>

                                                            <!--Scrollspy "udpade nav bar when scrolling-->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div id="Dashboard" class="container-fluid">
<div id="Goals" class="container-fluid">
<div id="Meals" class="container-fluid">
<div id="iData" class="container-fluid">
<div id="Settings" class="container-fluid">







                                                                 <!-- INSERT CODE HERE -->



<h1 class="a">Goals</h1>

<!------ Table for current/target goals -------->
<div class="container text-center">
  
  <div class="container">
    <div class="container text-center">         
      <table class="table table-bordered table table-striped">
        <thead>
          <tr>
            <th><b>Current Stats:</b></th>
          </tr>
        </thead>
        <tbody>

                           <?php   
                  
            $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
            $user_id = $_SESSION["userid"];
            $query = "SELECT * FROM user_data where `user_id`= $user_id";
            $query_run = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($query_run)){
                                        

                      $weight = $row['currentWeight'];          
                      $bloodPressure = $row['bloodPressure'];   
                      $currentBloodPressure = $row['targetBloodPressure'];   
                      $calorieBurn = $row['targetCalories']; 
                      $targetWeight = $row['targetWeight'];  
                      $targetBloodPressure = $row['targetBloodPressure'];  
                      $targetBloodSugar = $row['targetBloodSugar']; 
            

                 
                  }
                    ?>
          <tr>
            <td>Current Weigth:<?php echo $weight ?> </td>
          </tr>
          <tr>
            <td>Blood Pressure:<?php echo $bloodPressure ?></td>
          </tr>
          <tr>
            <td>Blood Sugar: <?php echo $currentBloodPressure ?></td>
          </tr>
          <tr>
            <td>Calories Burned: <?php echo $calorieBurn ?></td>
          </tr>
        </tbody>
      </table>
    <div class="container text-center">         
      <table class="table table-bordered table table-striped">
        <thead>
          <tr>
            <th><b>Goals:</b></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Desired Weigth: <?php echo $targetWeight ?></td>
          </tr>
          <tr>
            <td>Desired Blood Pressure:<?php echo $targetBloodPressure ?></td>
          </tr>
          <tr>
            <td>Desired Blood Sugar:<?php echo $targetBloodSugar ?></td>
          </tr>
          <tr>
            <td>Desired Calories to Burn :<?php echo $calorieBurn ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>

<!--Middle container-->
                
    <div class= "col-sm-3 col-md-6" >
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <h1> Easy Workouts </h1>
             </div>
                            
                            <p>10 min walk</p>
                            <p>10 push-ups</p>
                            <p>10 sit ups </p>
                            <p>20 jumping jacks</p>
                            <p>5 mountain climbers</p>
                            <div class="panel-footer">
                            <p><b> Calories burned 50 </b></p>
                            </div>
 
       
      </div>
    </div>
  

    <div class= "col-sm-3 col-md-6" >
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <h1> Intermediate Workouts </h1>
          </div>
           <div class="panel-body">

                            <p>15 min run</p>
                            <p>30 push-ups</p>
                            <p>20 sit ups </p>
                            <p>40 jumping jacks</p>
                            <p>15 mountain climbers</p>
                            <div class="panel-footer">
                            <p><b> Calories burned 100 </b></p>
             </div>         </div>
           </div>
         </div>
       </div>

           <div class= "col-sm-3 col-md-6" >
      <div class="panel panel-default text-center">
        <div class="panel-heading">
            <h1> Hard Workouts </h1>
          </div>
           <div class="panel-body">

                            <p>30 min run</p>
                            <p>50 push-ups</p>
                            <p>50 sit ups </p>
                            <p>50 jumping jacks</p>
                            <p>30 mountain climbers</p>
                            <div class="panel-footer">
                            <p><b> Calories burned 300 </b></p>
                            </div>
             </div>
           </div>
         </div>
       </div>



<!--Bottom container-->

                <div class="container text-center">
                  <div class="Sticking-container well">
                    <h3> Tips to stick with your diet plan!</h3>
                      <h5> Obesity:</h5>
                      <h4> It's okay to have on cheat meal per week and even a cheat day, eating healthy 
                        all the time can suck and get very boring. If you can balance out a day or even a meal
                        where you can eat fried food go for it! You need to remember to control your eating habits,
                        such as what you eat and when you eat it. For example, eating junk food late at night is not okay!</h4>
                  </div>
                </div>

                <div class="container text-center">
                  <div class="Sticking-container well">
                    <h3> Tips on keeping up with your workout!</h3>
                      <h5> Obesity:</h5>
                      <h4> Try to do your workouts around the same time of the day, that way you can easily fix a schedule for your 
                        workouts that can still revolve around your job, friends, etc. Try to do wokrouts that you enjoy doing and
                        seem easy but effiecient, in order for you to achieve your goal as soon as possible.</h4>
                  </div>
                </div>

</div>







                                                            <!--Up-arrow return to top-->
<style>
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #f4511e;
}
</style>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Back To The Top</a></p>
</footer>





</html> <!--END-->