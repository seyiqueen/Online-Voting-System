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
  <title>Voting- EVS User</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="lib/w3.css">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .mySlides {
      display: none
    }
  </style>
</head>

<body class="app sidebar-mini rtl">
  <?php
  session_start();
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


  $president = "select * from official_position where officialname = 'President'";
  $res = mysqli_query($conn, $president);
  $vpresidentacad = "select * from official_position where officialname = 'Vice President Academics'";
  $res1 = mysqli_query($conn, $vpresidentacad);
  $vpadmin = "select * from official_position where officialname = 'Vice President Administration'";
  $res2 = mysqli_query($conn, $vpadmin);
  $dos = "select * from official_position where officialname = 'Director of Socials'";
  $res3 = mysqli_query($conn, $dos);
  $dow = "select * from official_position where officialname = 'Director of Welfare'";
  $res4 = mysqli_query($conn, $dow);
  $gs = "select * from official_position where officialname = 'General Secretary'";
  $res5 = mysqli_query($conn, $gs);
  $t = "select * from official_position where officialname = 'Treasurer'";
  $res6 = mysqli_query($conn, $t);
  $p = "select * from official_position where officialname = 'Provost'";
  $res7 = mysqli_query($conn, $p);
  $sdm = "select * from official_position where officialname = 'Sports Director Male'";
  $res8 = mysqli_query($conn, $sdm);
  $sdf = "select * from official_position where officialname = 'Sports Director Female'";
  $res9 = mysqli_query($conn, $sdf);
  $pro = "select * from official_position where officialname = 'Public Relations Officer'";
  $res10 = mysqli_query($conn, $pro);
  $chap = "select * from official_position where officialname = 'Chaplain'";
  $res11 = mysqli_query($conn, $chap);

  $sql = "select * from register_candidate where officialposition = 'President'";
  $result = mysqli_query($conn, $sql);
  $sql1 = "select * from register_candidate where officialposition = 'Vice President Academics'";
  $result1 = mysqli_query($conn, $sql1);
  $sql2 = "select * from register_candidate where officialposition = 'Vice President Administration'";
  $result2 = mysqli_query($conn, $sql2);
  $sql3 = "select * from register_candidate where officialposition = 'Director of Socials'";
  $result3 = mysqli_query($conn, $sql3);
  $sql4 = "select * from register_candidate where officialposition = 'Director of Welfare'";
  $result4 = mysqli_query($conn, $sql4);
  $sql5 = "select * from register_candidate where officialposition = 'General Secretary'";
  $result5 = mysqli_query($conn, $sql5);
  $sql6 = "select * from register_candidate where officialposition = 'Treasurer'";
  $result6 = mysqli_query($conn, $sql6);
  $sql7 = "select * from register_candidate where officialposition = 'Provost'";
  $result7 = mysqli_query($conn, $sql7);
  $sql8 = "select * from register_candidate where officialposition = 'Sports Director Male'";
  $result8 = mysqli_query($conn, $sql8);
  $sql9 = "select * from register_candidate where officialposition = 'Sports Director Female'";
  $result9 = mysqli_query($conn, $sql9);
  $sql10 = "select * from register_candidate where officialposition = 'Public Relations Officer'";
  $result10 = mysqli_query($conn, $sql10);
  $sql11 = "select * from register_candidate where officialposition = 'Chaplain'";
  $result11 = mysqli_query($conn, $sql11);

  $positions = "select * from official_position";
  $pos = mysqli_query($conn, $positions);

  ?>
  <!-- Navbar-->
  <header class="app-header"><a class="app-header__logo" href="Voting.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left">
      <p style="float:left">EVS</p>
    </a>
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
    <div class="app-sidebar__user">
      <!--<img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">-->

      <div>
        <p class="app-sidebar__user-name"><?php echo $_SESSION['surname'] . " " . $_SESSION['othername']; ?> </p>
        <p class="app-sidebar__user-designation">User</p>
      </div>
    </div>
    <ul class="app-menu">
      <li><a class="app-menu__item " href="HomePageUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
      <li><a class="app-menu__item " href="OfficialPositionUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Official Position</span></a></li>

      <li><a class="app-menu__item " href="RegisterCandidateUser.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Candidates</span></a></li>
      <li><a class="app-menu__item active" href="Voting.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Voting</span></a>

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
    <!--main div -->
    <div class="w3-content" style="max-width:900px;position:relative">
      <!-- first slide Prsident-->

      <?php
                if (mysqli_num_rows($pos) > 0) {
                  while ($rows = mysqli_fetch_array($pos)) {
                    echo '
<div class="mySlides">
        <div class="row">
          <div class="col-md-12">
            <div class="tile">
              <div class="tile-body">'
                    . $rows['officialname'] . '
              </div>
            </div>
          </div>
        </div>
    
        <div class="row">';
          

          $cands = "select * from register_candidate where officialposition = '" . $rows['id'] . "'";
        //   echo $row['officialname'];
        // echo  $cands;
            $cand = mysqli_query($conn, $cands);
          
          if (mysqli_num_rows($cand) > 0) {
            while ($row = mysqli_fetch_array($cand)) {

              echo '<div class="col-md-4">
                   <div class="tile">
                     <div class="tile-body">
                 
       
                   <div class="w3-container w3-center" style="background-color:#009688;">
                     
                     <img src="Images/' . $row['candidateimage'] . '"alt="show" style="width:100%;height:150px;">
                     <p></p>
                     <h5 style="color:white">' . $row['candidatefullname'] . '</h5>
                     <button id = "' . $row['candidateregid'] . "-" . $rows['id'] . '" style="background-color:white;color:black"class="vote w3-btn w3-small">Vote</button>
                     
                 
       
                 </div>
               </div>
               
                         </div>
                       </div>';
            }
          } else {
          }

        



echo '</div>
      </div>';

        
                  }
                }
      ?>

    
     



      <div class="w3-center">
        <div class="w3-section">
          <!--<button class="w3-btn" id="prev" onclick="plusDivs(-1)">❮ Prev</button>
               <button class="w3-btn" id="next" onclick="plusDivs(1)">Next ❯</button>-->
        </div>
        <button class="w3-btn demo" onclick="currentDiv(1)">1</button>
        <button class="w3-btn demo" onclick="currentDiv(2)">2</button>
        <button class="w3-btn demo" onclick="currentDiv(3)">3</button>
        <button class="w3-btn demo" onclick="currentDiv(4)">4</button>
        <button class="w3-btn demo" onclick="currentDiv(5)">5</button>
        <button class="w3-btn demo" onclick="currentDiv(6)">6</button>
        <button class="w3-btn demo" onclick="currentDiv(7)">7</button>
        <button class="w3-btn demo" onclick="currentDiv(8)">8</button>
        <button class="w3-btn demo" onclick="currentDiv(9)">9</button>
        <button class="w3-btn demo" onclick="currentDiv(10)">10</button>
        <button class="w3-btn demo" onclick="currentDiv(11)">11</button>
        <button class="w3-btn demo" onclick="currentDiv(12)">12</button>
      </div>

    </div>
  </main>
  <!-- Essential javascripts for application to work-->
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = x.length
      };
      /**if (slideIndex == 3){document.getElementsById("next").style.display = "none";}*/
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove("w3-red");
      }
      x[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].classList.add("w3-red");
    }
  </script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="js/plugins/pace.min.js"></script>


</body>

</html>