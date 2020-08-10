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
    <title>Registered Voters- EVS Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="lib/w3.css">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/AdminCss.css">
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
    $sql = "select registrationID,matricno,surname,othername,email from register";
    $result = mysqli_query($conn,$sql);

  ?>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="RegisteredVoters.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
      
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
        <li ><a class="app-menu__item" href="OfficialPosition.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Official Position</span></a>
          
        </li>
        
        <li ><a class="app-menu__item" href="RegisterCandidate.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Register Candidates</span></a></li>
        <li ><a class="app-menu__item " href="President.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Registered Candidates</span></a>
          
       
       
        <li><a class="app-menu__item active" href="RegisteredVoters.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Registered Voters</span></a></li>
        
        <li><a class="app-menu__item" href="Results.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Results</span></span></a></li>
        
        
        
        
      </ul>
    </aside>
    <main class="app-content">
      <br>
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Admin Dashboard</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Admin Dashboard</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Registered Voters</h3>
            <div class="w3-container" style="float:right;margin-top:-40px;">
            
            <div class="w3-dropdown-hover">
            <button class="w3-btn w3-black">Filter By</button>
            <div class="w3-dropdown-content w3-border">
              <a href="RegisteredVoters.php">Registered Voters</a>
              <a href="Voters.php">Voters</a>
              <a href="NonVoters.php">Non Voters</a>
            </div>
          </div>
          </div>
            <p></p>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                  <th class="th">SERIAL NUMBER</th>
                    <th class="th">MATRIC NO</th>
                    <th class="th">SURNAME</th>
                    <th class="th">OTHER NAMES</th>
                    <th class="th">E-MAIL ADDRESS</th>
                    
                  </tr>
                </thead>
                
                <tbody>
                <?php
                if(mysqli_num_rows($result) > 0){
                 while($row = mysqli_fetch_array($result)){
                  
                
                echo "<tr>";
                       echo   "<td>" .$row['registrationID']. "</td>";
                       echo   "<td>".$row['matricno']. "</td>"; 
                       echo   "<td>".$row['surname']. "</td>";
                       echo   "<td>".$row['othername']. "</td>";
                       echo   "<td>" .$row['email']."</td>";
                          
                                
                               
              echo "</tr>";
 
                           }
                          }
                           else
                           {
                              echo "0 results";
                           }
                           mysqli_close($conn);
                        ?>
                </tbody>

              </table>
            </div>
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