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
    <title>Register Candidates- EVS User</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="lib/w3.css">
    <link rel="stylesheet" href="css/AdminCss.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
  <?php

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
            
            $candidatereg;
            $stmt = $conn->prepare("insert into register_candidate values(?,?,?,?)");
            $stmt ->bind_param("issss",  $candidatereg, $_POST["officialposition"], $_POST["candidatefullname"],$_POST["candidateimage"]); 
           
            $stmt->execute();
           
            $sql = "select abbreviation from party_registration";
           
            $result = mysqli_query($conn,$sql);
            $sql1 = "select candidateregid,officialposition,candidatefullname,candidateimage from register_candidate";
            $sql2 = "select candidateregid from register_candidate";
            $sql3 = "select officialname from official_position";
            $result1 = mysqli_query($conn,$sql1);
            $result2 = mysqli_query($conn,$sql2);
            $result3 = mysqli_query($conn,$sql3);
      ?>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="Voting.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
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
      <li><a class="app-menu__item " href="HomePageUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
            <li><a class="app-menu__item " href="OfficialPositionUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Official Position</span></a></li>
            
            <li><a class="app-menu__item active" href="RegisterCandidateUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Candidates</span></a></li>
            <li ><a class="app-menu__item " href="Voting.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Voting</span></a>
              
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
        <div class="col-md-6">
                
                <div class="tile">
                  <h3 class="tile-title">Registered Candidate</h3>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                      <th>ID</th>
                        <th>Official Position ID</th>
                        
                        <th>Candidate Full Name</th>
                      
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(mysqli_num_rows($result1) > 0){
                     while($row = mysqli_fetch_array($result1)){
                      
                    
                    echo "<tr>";
                    echo   "<td>" .$row['candidateregid']. "</td>";
                           echo   "<td>" .$row['officialposition']. "</td>";
                           
                           echo   "<td>".$row['candidatefullname']. "</td>";
                                                                
                  echo "</tr>";
     
                               }
                              }
                               else
                               {
                                  echo "0 results";
                               }
                               mysqli_close($conn);
                            ?>
                                  </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
      </div>
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