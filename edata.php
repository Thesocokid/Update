<!DOCTYPE html>
<html lang="en">
   <head>
      <title>eFitnessFriend - eData</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <!-- Link for the css folder -->
      <link rel="stylesheet" type="text/css" href="edata.css">
   </head>
   <body>
      <!-- Padding for idata -->
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
      <?php   
         session_start(); 
         ?>
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
   </body>
   <!--Scrollspy "udpade nav bar when scrolling-->
   <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      <div id="Dashboard" class="container-fluid">
      <div id="Goals" class="container-fluid">
      <div id="Meals" class="container-fluid">
      <div id="iData" class="container-fluid">
      <div id="Settings" class="container-fluid">
      <!-- INSERT CODE HERE -->
      <h1 class="a">eData</h1>
      <div class="container">
         <div class="row">
            <div class="col-sm-6 text-center well">
               <div class="col-sm-6">
                  <div class="image-container">
                     <div class="image">
                        <img src="https://cdn.discordapp.com/attachments/713497950361354335/724736492747882667/demoUser.jpg" class="img-thumbnail" alt="user image">
                     </div>
                  </div>
               </div>
               <?php   
                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM users where `usersID`= $user_id";
                  $query_run = mysqli_query($con, $query);
                  while($row = mysqli_fetch_array($query_run)){
                    $usersName = $row['usersName'];          
                  }
                  
                  ?>
               <div class="col-sm-6 text-left">
                  <div class="spacer"></div>
                  <p>Name: <?php echo $usersName ?></p>
                  <p>Age: 25</p>
                  <p>Height: 5'10"</p>
                  <p>Weight: 425
                  <p>
               </div>
               <!-- Data Modal -->
               <div id="dataModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content text-left">
                        <div class="modal-header text-center">
                           <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Data Confirmation</h4>
                        </div>
                        <div class="modal-body">
                           <p id="datinput">
                           </p>
                        </div>
                        <div class="modal-footer">
                           <div class="col-sm-6">
                              <button type="button" class="btn btn-primary btn-dat-can" data-dismiss="modal">Cancel</button>
                           </div>
                           <div class="col-sm-6">
                              <button type="button" class="btn btn-primary btn-dat" data-dismiss="modal">Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- eDATA INPUT FORM -->
               <div class="col-sm-12 text-center">
                  <h3>Data Input</h3>
                  <div class="col-sm-4 text-right">
                     <h4><b>Blood Sugar</b></h4>
                     <h4><b>Weight</b></h4>
                     <h4><b>Blood Pressure</b></h4>
                     <h4><b>Heart Rate</b></h4>
                  </div>
                  <div class="col-sm-7 text-left">
                     <form action=edatainput.php method="post">
                        <div class="input-group row">
                           <div class="col-sm-11">
                              <input id="bsug" type="number" min= "0" class="form-control input-sm" name="bsug" placeholder="Blood Sugar (mmol/L)">
                           </div>
                           <div class="col-sm-11">
                              <input id="wght" type="number" min= "0" class="form-control input-sm" name="wght" placeholder="Weight (lbs)">
                           </div>
                        </div>
                        <div class = "input-inline">
                           <div class="col-sm-6">
                              <input id="sbp" type="number" min= "0" class="form-control fc-l input-sm" name="sbp" placeholder="Systolic bp">
                           </div>
                           <div class="col-sm-6">
                              <input id="dbp" type="number" min= "0" class="form-control fc-r input-sm" name="dbp" placeholder="Diastolic bp">
                           </div>
                           <div class="col-sm-4">
                              <input id="restHeart" type="number" min= "0" class="form-control fc-l input-sm" name="restHeart" placeholder="Rest rate">
                           </div>
                           <div class="col-sm-4">
                              <input id="minHeart" type="number" min= "0" class="form-control fc-r input-sm" name="minHeart" placeholder="Min  rate">
                           </div>
                           <div class="col-sm-4">
                              <input id="maxHeart" type="number" min= "0" class="form-control fc-r input-sm" name="maxHeart" placeholder="Max  rate">
                           </div>
                           <input class="btn btn-primary btn-block" data-toggle="modal " type ="submit" value="Submit" data-target="#readMoreModal"></input>
                        </div>
                        </form>
                        
                        <script>
                           function myFunction() {
                             alert("Sucscess! Your data has been recorded!");
                           }
                        </script>
                     
                     <div class="col-sm-3"></div>
                     <!-- <button id="submitdata" type="button" class="btn btn-primary btn-dat" data-toggle="modal" data-target="#dataModal">Submit Data</button> -->
                  </div>
               </div>
               <script type="text/javascript">
                  $(document).ready(function() {
                    $("#submitdata").click(function() {
                      var p = $("#dataModal #datinput");
                      var HTMLStructure = "<h4>You are adding </h4>";
                      $.each($("input[name='datum']"), function() {
                        HTMLStructure += '<br>' + $(this).attr('placeholder') + ': ' + $(this).val();
                      });
                      $(p).html(HTMLStructure);
                    });
                  });
               </script>
            </div>


            <!-- CHARTS/GRAPHS -->
            <div class="col-sm-6">
               <!--  <form class="form-inline">
                  <label class="mr-sm-2" for="graphSelect">Progress</label>
                  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="graphSelect" name="graphSelect">
                    <option value=1>Weight</option>
                    <option value=2>Blood Sugar</option>
                    <option value=3>Blood Pressure</option>
                    <option value=4>Resting Heart Rate</option>
                  </select>
                  </form> -->
               <!-- Line Chart -->
               <script src="https://www.gstatic.com/charts/loader.js"></script>
               <select id="menu">
                  <option selected>weight</option>
                  <option>bloodSugar</option>
                  <option>bloodPressure</option>
                  <option>heartRate</option>
               </select>
               <div id="chart_div"></div>

                <?php   

                  $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                  $user_id = $_SESSION["userid"];
                  $query = "SELECT * FROM user_edata where `user_id`= $user_id";
                  $query_run = mysqli_query($con, $query);

                  $timestamps = array();
                  $weights = array();
                  $bsugs = array();
                  $sbps = array();
                  $dbps = array();
                  $restHearts = array();
                  $minHearts = array();
                  $maxHearts = array();
                   
                  while($row = mysqli_fetch_array($query_run)){
                  
                  array_push($timestamps, $row['timestamp']);
                  array_push($weights, $row['wght']);
                  array_push($bsugs, $row['bsug']);
                  array_push($sbps, $row['sbp']);
                  array_push($dbps, $row['dbp']);
                  array_push($restHearts, $row['restHeart']);
                  array_push($minHearts, $row['minHeart']);
                  array_push($maxHearts, $row['maxHeart']);
                  
                  // $bsug = $row['bsug'];
                  // $wght = $row['wght'];
                  // $id = $row['id'];


                  }
                ?>


               <script>
                  google.charts.load('current', {
                    packages: ['corechart']
                  }).then(function () {        
                    


                    var timestampsPHP = [<?php echo '"'.implode('","', $timestamps).'"' ?>];

                    var weightsPHP = [<?php echo '"'.implode('","', $weights).'"' ?>];
                    var weightsArr = [['Date', 'Weight']];

                    var bsugsPHP = [<?php echo '"'.implode('","', $bsugs).'"' ?>];
                    var bsugsArr = [['Date', 'Blood Sugar']];

                    var sbpsPHP = [<?php echo '"'.implode('","', $sbps).'"' ?>];
                    var dbpsPHP = [<?php echo '"'.implode('","', $dbps).'"' ?>];
                    var bloodArr = [['Date', 'Systolic bp', 'Diastolic bp']];

                    var minHeartsPHP = [<?php echo '"'.implode('","', $minHearts).'"' ?>];
                    var maxHeartsPHP = [<?php echo '"'.implode('","', $maxHearts).'"' ?>];
                    var restHeartsPHP = [<?php echo '"'.implode('","', $restHearts).'"' ?>];
                    var hrArr = [['Date', 'Resting Heart Rate', {id:'i0', type:'number', role:'interval'}, {id:'i1', type:'number', role:'interval'}]];

                    var i;
                    for(i=0; i< <?php echo sizeof($timestamps) ?>; i++){
                      weightsArr.push([timestampsPHP[i], parseInt(weightsPHP[i])]);
                      bsugsArr.push([timestampsPHP[i], parseInt(bsugsPHP[i])]);
                      bloodArr.push([timestampsPHP[i], parseInt(sbpsPHP[i]), parseInt(dbpsPHP[i])]);
                      hrArr.push([timestampsPHP[i], parseInt(restHeartsPHP[i]), parseInt(minHeartsPHP[i]), parseInt(maxHeartsPHP[i])]);
                    }
                    

                    var dataDefault = google.visualization.arrayToDataTable(weightsArr);
                      
                    var dataBloodSugar = google.visualization.arrayToDataTable(bsugsArr);
                      
                    var dataBloodPressure = google.visualization.arrayToDataTable(bloodArr);
                      
                    var dataHeartRate = google.visualization.arrayToDataTable(hrArr);
                                
                    var options = { 
                      legend: 'none',
                      chartArea : {
                        left: 40,
                        top: 20,
                        width: '85%',
                        height: '87%'
                      },
                      curveType: 'function',
                      lineWidth: 3,
                      intervals: { 'style':'bars', 'color': 'FF0000', lineWidth: '2' },
                      width: 600,
                      height: 550
                    };
                    
                    var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
                    
                    var menu = document.getElementById('menu');
                    menu.addEventListener('change', drawChart, false);
                    
                    drawChart();
                    function drawChart() {
                      switch (menu.selectedIndex) {              
                        case 1:
                          console.log('bloodSugar');
                          chart.draw(dataBloodSugar, options);
                          break;
                      
                        case 2:
                          console.log('bloodPressure');
                          chart.draw(dataBloodPressure, options);
                          break;
                      
                        case 3:
                          console.log('heartRate');
                          chart.draw(dataHeartRate, options);
                        break;
                      
                        default:
                            console.log('default');
                            chart.draw(dataDefault, options);
                        }  
                      }
                  });
               </script>             
            </div>











         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-sm-6">
               <div class="col-sm-12  text-center well">
                  <!-- HEALTH CONNECT - DOCTOR SELECT -->
                  <h3>Health Connect</h3>
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <?php   
                           $con = mysqli_connect('127.0.0.1', 'root','','e_fitness_friend');
                           $user_id = $_SESSION["userid"];
                           $query = "SELECT * FROM user_docInfo where `user_id`= $user_id";
                           $query_run = mysqli_query($con, $query);
                           while($row = mysqli_fetch_array($query_run)){
                             $docName = $row['docName'];          
                             $location = $row['location'];   
                             $city = $row['city'];   
                             $phone = $row['phone']; 
                           }
                        ?>
                        <p> Name: <?php echo $docName ?></p>
                        <p> Location: <?php echo $location ?></p>
                        <p> City: <?php echo $city ?></p>
                        <p> Phone Number: <?php echo $phone ?></p>
                        <button id="conbutton" type="button" class="btn btn-primary active" data-toggle="modal" data-target="#connectModal">Update Doctor Information</button>
                     </div>
                  </div>
               </div>
               <div id="connectModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content text-left">
                        <div class="modal-header text-center">
                           <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Connect to Provider</h4>
                        </div>
                        <form action="edataDoctor.php" method="post">
                           <div class="modal-body">
                              <div class="panel panel-default">
                                 <div class="panel-body">
                                    <div class="col-sm-9 text-left">
                                       <input type="text" name = "docName" placeholder="Doctor's Name" required>
                                       <input type="text" name = "location"  placeholder="Location" required>
                                       <input type="text" name = "city"  placeholder="City" required>
                                       <input type="text" name = "phone"  placeholder="Phone Number" required>
                                       <button type ="submit" name="submit">Submit</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12  text-center well">

              
                  <h3>Share Settings</h3>
                  <div class="panel panel-default">
                     <div class="panel-body">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8 text-left">
                           <div class="checkbox">
                              <label><input name="setchk" type="checkbox" value="Blood Sugar" disabled>Blood Sugar</label>
                           </div>
                           <div class="checkbox">
                              <label><input name="setchk" type="checkbox" value="Weight" disabled>Weight</label>
                           </div>
                           <div class="checkbox">
                              <label><input name="setchk" type="checkbox" value="Blood Pressure" disabled>Blood Pressure</label>
                           </div>
                           <div class="checkbox">
                              <label><input name="setchk" type="checkbox" value="Resting Heart Rate" disabled>Resting Heart Rate</label>
                           </div>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                           <button id="shrUpdt" type="button" class="btn btn-primary btn-hc active" data-toggle="modal" data-target="#shareModal" disabled>Update</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Share Modal -->
               <div id="shareModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                     <div class="modal-content text-left">
                        <div class="modal-header text-center">
                           <button type="button" class="close text-right" data-dismiss="modal">&times;</button>
                           <h4 class="modal-title">Share Settings Confirmation</h4>
                        </div>
                        <div class="modal-body">
                           <p id="shrinput">
                           </p>
                        </div>
                        <div class="modal-footer">
                           <div class="col-sm-6">
                              <button type="button" class="btn btn-primary btn-dat-can" data-dismiss="modal">Cancel</button>
                           </div>
                           <div class="col-sm-6">
                              <button type="button" class="btn btn-primary btn-dat" data-dismiss="modal">Confirm</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <script>
                  $(document).ready(function() {
                    $("#shrUpdt").click(function() {
                      var c = $("#shareModal #shrinput");
                      var HTMLStructure = "<h4>You have selected: </h4>";
                        $.each($("input[name='setchk']:checked"), function() {
                          HTMLStructure += '<br>' + $(this).val();
                        });
                        $(c).html(HTMLStructure);
                    });
                  });
               </script>
            </div>
            <div class="col-sm-6 col-md-offset-0 text-center well">
               <h3>Daily Thoughts</h3>
               <div class="panel panel-default">
                  <div class="panel-body panel-heighta">
                  <div class="bottom-container well">

                    <div class="form-group">

                      <label for="comment">Status:</label>
                    <?php   
                    include 'edataDailyThoughts.php';  
                    echo "<form method='POST' action='".setUserComments($con)."'>
                          <input type='hidden' name='uid' value='Anonymous'>
                          <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                          <textarea name='comment'></textarea><br>
                          <button type='submit' class='btn btn-primary btn-dat' name='commentSubmit'>Comment</button>
                          </form>";

                          getUserComments($con);
                          
                      ?>
                    </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--Up-arrow return to top-->
   </body>
   <style>
      footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
      }
   </style>
   <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
      <p>Back To The Top</a></p>
   </footer>
</html>
<!--END-->