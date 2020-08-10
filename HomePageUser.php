<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Home Page- EVS User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">

<?php
  $registrationID;
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "electronic_voting_system";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "select count(registrationID) as totalRegistrars from register";
  $sql2 = "select count(registrationID) as voted from register where votestatus = 'voted'";
  $sql3 = "select count(registrationID) as notVoted from register where votestatus = 'not-voted'";
  $sql4 = "select count(partyredid) as partyid from party_registration";
  $sql5 = "select count(candidateregid) as candidateid from register_candidate";
  $sql6 = "select count(id) as officialid from official_position";
  $registeredVoters = mysqli_query($conn,$sql); 
  $voted = mysqli_query($conn,$sql2);
  $notVoted = mysqli_query($conn,$sql3);
  $partyid = mysqli_query($conn,$sql4);
  $candidateid = mysqli_query($conn,$sql5);
  $officialid = mysqli_query($conn,$sql6);
?>


  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="HomePageAdmin.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
    
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
      <li class="app-search">
        <input class="app-search__input" type="search" placeholder="Search">
        <button class="app-search__button"><i class="fa fa-search"></i></button>
      </li>
      <!-- User Menu-->
      <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
        <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
          <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
          <li><a class="dropdown-item" href="index.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
      <br>
      <div class="app-sidebar__user"><!--<img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">-->
        <div>
          <p class="app-sidebar__user-name">Oladipo Seun</p>
          <p class="app-sidebar__user-designation">User</p>
        </div>
      </div>
      <ul class="app-menu">
            <li><a class="app-menu__item active" href="HomePageUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item " href="OfficialPositionUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Official Position</span></a></li>
           
            <li><a class="app-menu__item " href="RegisterCandidateUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Candidates</span></a></li>
            <li ><a class="app-menu__item" href="Voting.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Voting</span></a>
              
            </li>

            <li><a class="app-menu__item " href="ResultsUser.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Results</span></a></li>
            
      </ul>
    </aside>
  <main class="app-content">
    <br>
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> User Dashboard</h1>
        
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">User Dashboard</a></li>
      </ul>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4><a href="OfficialPositionUser.php" style="text-decoration:none;">Official Position</a></h4>
                <?php
                    if(mysqli_num_rows($officialid) > 0){
                      while($row = mysqli_fetch_array($officialid)){
                         echo "<p>"."<b>".$row["officialid"]."</b>"."</p>";
                       }
                    }
              ?>
              </div>
            </div>
          </div>
          
      <div class="col-md-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
          <div class="info">
            <h4><a href="RegisterCandidateUser.php" style="text-decoration:none;">Registered Candidates</a></h4>
            <?php
                    if(mysqli_num_rows($candidateid) > 0){
                      while($row = mysqli_fetch_array($candidateid)){
                         echo "<p>"."<b>".$row["candidateid"]."</b>"."</p>";
                       }
                    }
              ?>
          </div>
        </div>
      </div>
      
  
      <div class="col-md-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4><a href="#" style="text-decoration:none;">Registered Voters</a></h4>
              <?php
                    if(mysqli_num_rows($registeredVoters) > 0){
                      while($row = mysqli_fetch_array($registeredVoters)){
                         echo "<p>"."<b>".$row["totalRegistrars"]."</b>"."</p>";
                       }
                    }
              ?>
              
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        
      <div class="col-md-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
          <div class="info">
            <h4><a href="#" style="text-decoration:none;">Voters</a></h4>
            <?php
                    if(mysqli_num_rows($voted) > 0){
                      while($row = mysqli_fetch_array($voted)){
                         echo "<p>"."<b>".$row["voted"]."</b>"."</p>";
                       }
                    }
              ?>
              
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
          <div class="info">
            <h4><a href="#" style="text-decoration:none;">Non-Voters</a></h4>
            <?php
                    if(mysqli_num_rows($notVoted) > 0){
                      while($row = mysqli_fetch_array($notVoted)){
                         echo "<p>"."<b>".$row["notVoted"]."</b>"."</p>";
                       }
                    }
              ?>
          </div>
        </div>
      </div>
      
     
    </div>
         <!-- <div class="w3-container ">
          <div style="width: 90px;height: 90px;margin: 16px;padding: 16px;"class="w3-card w3-black"><img src="images/politicalparties.png" alt="PDP" style="width:50px;height:50px;">
            <div style="width: 200px;height: 90px;margin: 16px;padding: 16px;margin-left:62px;margin-top:-55px;"  class="w3-card w3-white "><p><b>Political Parties</b></p><span class="w3-badge w3-dark-grey">9</span>
            </div>
          </div>
          </div>

          <div class="w3-container candidatedashboardalign"> 
            <div style="width: 90px;height: 90px;margin: 16px;padding: 16px;"class="w3-card w3-black"><img src="images/candidate.png" alt="PDP" style="width:50px;height:50px;">
              <div style="width: 200px;height: 90px;margin: 16px;padding: 16px;margin-left:62px;margin-top:-55px;"  class="w3-card w3-white "><p><b>Candidates</b></p><span class="w3-badge w3-dark-grey">9</span>
              </div>
            </div>
          </div>

          <div class="w3-container participatedpartiesdashboardalign"> 
            <div style="width: 90px;height: 90px;margin: 16px;padding: 16px;"class="w3-card w3-black"><img src="images/participatedparties.png" alt="PDP" style="width:50px;height:50px;">
              <div style="width: 200px;height: 90px;margin: 16px;padding: 16px;margin-left:62px;margin-top:-55px;"  class="w3-card w3-white "><p><b>Participated Parties</b></p><span class="w3-badge w3-dark-grey">9</span>
              </div>
            </div>
          </div>

          <div class="w3-container"> 
            <div style="width: 90px;height: 90px;margin: 16px;padding: 16px;"class="w3-card w3-black"><img src="images/registeredvoters.png" alt="PDP" style="width:50px;height:50px;">
              <div style="width: 200px;height: 90px;margin: 16px;padding: 16px;margin-left:62px;margin-top:-55px;"  class="w3-card w3-white "><p><b>Registered Voters</b></p><span class="w3-badge w3-dark-grey">9</span>
              </div>
            </div>
          </div>

          <div class="w3-container votersdashboardalign"> 
            <div style="width: 90px;height: 90px;margin: 16px;padding: 16px;"class="w3-card w3-black"><img src="images/voters.png" alt="PDP" style="width:50px;height:50px;">
              <div style="width: 200px;height: 90px;margin: 16px;padding: 16px;margin-left:62px;margin-top:-55px;"  class="w3-card w3-white"><p><b>Voters</b></p><span class="w3-badge w3-dark-grey">9</span>
              </div>
            </div>
          </div>

          <div class="w3-container nonvotersdashboardalign"> 
            <div style="width: 90px;height: 90px;margin: 16px;padding: 16px;"class="w3-card w3-black"><img src="images/voters.png" alt="PDP" style="width:50px;height:50px;">
              <div style="width: 200px;height: 90px;margin: 16px;padding: 16px;margin-left:62px;margin-top:-55px;"  class="w3-card w3-white"><p><b>Non-Voters</b></p><span class="w3-badge w3-dark-grey">9</span>
              </div>
            </div>
          </div>-->
        
  </main>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>
  
 
</body>
</html>