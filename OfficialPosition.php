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
    <title>Official Position- EVS Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/w3.css">
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
    
    $sql1 = "select officialname from official_position where officialname='President'";
    $sql2 = "select officialname from official_position where officialname='Vice President Academics'";
    $sql3 = "select officialname from official_position where officialname='Vice President Administration'";
    $sql4 = "select officialname from official_position where officialname='Director of Socials'";
    $sql5 = "select officialname from official_position where officialname='Director of Welfare'";
    $sql6 = "select officialname from official_position where officialname='General Secretary'";
    $sql7 = "select officialname from official_position where officialname='Treasurer'";
    $sql8 = "select officialname from official_position where officialname='Provost'";
    $sql9 = "select officialname from official_position where officialname='Sports Director Male'";
    $sql10 = "select officialname from official_position where officialname='Sports Director Female'";
    $sql11 = "select officialname from official_position where officialname='Public Relations Officer'";
    $sql12 = "select officialname from official_position where officialname='Chaplain'";
    $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);
    $result3 = mysqli_query($conn,$sql3);
    $result4 = mysqli_query($conn,$sql4);
    $result5 = mysqli_query($conn,$sql5);
    $result6 = mysqli_query($conn,$sql6);
    $result7 = mysqli_query($conn,$sql7);
    $result8 = mysqli_query($conn,$sql8);
    $result9 = mysqli_query($conn,$sql9);
    $result10 = mysqli_query($conn,$sql10);
    $result11 = mysqli_query($conn,$sql11);
    $result12 = mysqli_query($conn,$sql12);
  ?>

    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="OfficialPosition.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
      
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
          <p class="app-sidebar__user-designation">Administrator</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item " href="HomePageAdmin.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li ><a class="app-menu__item active" href="OfficialPosition.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Official Position</span></a>
          
        </li>
        
        <li ><a class="app-menu__item" href="RegisterCandidate.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Register Candidates</span></a></li>
        <li ><a class="app-menu__item" href="President.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Registered Candidates</span></a>
          
        
        
        <li><a class="app-menu__item" href="RegisteredVoters.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Registered Voters</span></a></li>
        
        <li><a class="app-menu__item" href="Results.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Results</span></span></a></li>
        
        
        
        
      </ul>
    </aside>
    <main class="app-content">
      <br>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Admin Dashboard</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Admin Dashboard</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
            
            <?php 
              if(mysqli_num_rows($result1) > 0){
                while($row = mysqli_fetch_array($result1)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#" >Link</a>--></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result2) > 0){
                while($row = mysqli_fetch_array($result2)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;" >
          <?php 
              if(mysqli_num_rows($result3) > 0){
                while($row = mysqli_fetch_array($result3)){
                      echo   "<h3 class='tile-title' style='margin-top:margin-top:-20px'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"> </div>
            <div class="tile-footer"><!--<a class="btn btn-primary"  href="#">Link</a>--></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;" >
          <?php 
              if(mysqli_num_rows($result4) > 0){
                while($row = mysqli_fetch_array($result4)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"> </div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result5) > 0){
                while($row = mysqli_fetch_array($result5)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result6) > 0){
                while($row = mysqli_fetch_array($result6)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
       
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result7) > 0){
                while($row = mysqli_fetch_array($result7)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result8) > 0){
                while($row = mysqli_fetch_array($result8)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result9) > 0){
                while($row = mysqli_fetch_array($result9)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result10) > 0){
                while($row = mysqli_fetch_array($result10)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result11) > 0){
                while($row = mysqli_fetch_array($result11)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
      
        <div class="col-md-3">
          <div class="tile" style="width:200px;height:200px;">
          <?php 
              if(mysqli_num_rows($result12) > 0){
                while($row = mysqli_fetch_array($result12)){
                      echo   "<h3 class='tile-title'>" .$row['officialname']. "</h3>";
                }
               } 
            ?>
            <div class="tile-body"></div>
            <div class="tile-footer"><!--<a class="btn btn-primary" href="#">Link</a>--></div>
          </div>
        </div>
       
      
       
      </div>
      
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/myjs.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    
   
  </body>
</html>