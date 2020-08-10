<!DOCTYPE html>

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
    <title>Registered Candidates- EVS Admin</title>
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
            $res = mysqli_query($conn,$president);
            $vpresidentacad = "select * from official_position where officialname = 'Vice President Academics'";
            $res1 = mysqli_query($conn,$vpresidentacad);
            $vpadmin = "select * from official_position where officialname = 'Vice President Administration'";
            $res2 = mysqli_query($conn,$vpadmin);
            $dos = "select * from official_position where officialname = 'Director of Socials'";
            $res3 = mysqli_query($conn,$dos);
            $dow = "select * from official_position where officialname = 'Director of Welfare'";
            $res4 = mysqli_query($conn,$dow);
            $gs = "select * from official_position where officialname = 'General Secretary'";
            $res5 = mysqli_query($conn,$gs);
            $t = "select * from official_position where officialname = 'Treasurer'";
            $res6 = mysqli_query($conn,$t);
            $p = "select * from official_position where officialname = 'Provost'";
            $res7 = mysqli_query($conn,$p);
            $sdm = "select * from official_position where officialname = 'Sports Director Male'";
            $res8 = mysqli_query($conn,$sdm);
            $sdf = "select * from official_position where officialname = 'Sports Director Female'";
            $res9 = mysqli_query($conn,$sdf);
            $pro= "select * from official_position where officialname = 'Public Relations Officer'";
            $res10 = mysqli_query($conn,$pro);
            $chap = "select * from official_position where officialname = 'Chaplain'";
            $res11 = mysqli_query($conn,$chap);
            
            $sql = "select * from register_candidate where officialposition = 'JURH4K89DT'";
            $result = mysqli_query($conn,$sql);
            $sql1 = "select * from register_candidate where officialposition = 'tumnusitu3'";
            $result1 = mysqli_query($conn,$sql1);
            $sql2 = "select * from register_candidate where officialposition = '4kd9i3ndi3'";
            $result2 = mysqli_query($conn,$sql2);
            $sql3 = "select * from register_candidate where officialposition = '	eidje99Fuj'";
            $result3 = mysqli_query($conn,$sql3);
            $sql4 = "select * from register_candidate where officialposition = 'pppdn67yy3'";
            $result4 = mysqli_query($conn,$sql4);
            $sql5 = "select * from register_candidate where officialposition = '8dii3juisu'";
            $result5 = mysqli_query($conn,$sql5);
            $sql6 = "select * from register_candidate where officialposition = 'ols3477ytr'";
            $result6 = mysqli_query($conn,$sql6);
            $sql7 = "select * from register_candidate where officialposition = 'ir84mndi89'";
            $result7 = mysqli_query($conn,$sql7);
            $sql8 = "select * from register_candidate where officialposition = 'ki55jnd8ui'";
            $result8 = mysqli_query($conn,$sql8);
            $sql9 = "select * from register_candidate where officialposition = '88jd72kilo'";
            $result9 = mysqli_query($conn,$sql9);
            $sql10 = "select * from register_candidate where officialposition = '1bi2lmdteii'";
            $result10 = mysqli_query($conn,$sql10);
            $sql11 = "select * from register_candidate where officialposition = 'uubkd888i7'";
            $result11 = mysqli_query($conn,$sql11);
         ?>
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="President.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
      
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
        <li ><a class="app-menu__item active" href="President.php" ><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Registered Candidates</span></a>
          
        
        
        <li><a class="app-menu__item" href="RegisteredVoters.php"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Registered Voters</span></a></li>
        
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
      <!--main div -->
      <div class="w3-content" style="max-width:900px;position:relative">
 <!-- first slide -->  
      <div class="mySlides">       
      <div class="row" >
      <div class="col-md-12">
      <div class="tile">
      <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res) > 0){
                while($row = mysqli_fetch_array($res)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
      </div>
      </div>
      </div>
      </div>
      <div class="row">
          <?php
                    if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_array($result)){

                  echo' <div class="col-md-4">
                  <div class="tile">
                  <div class="tile-body">
                  

                  <div class="w3-container w3-center" style="background-color:#009688;">
                    
                      <img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
                      <p></p>
                      <h5 style="color:white">'.$row['candidatefullname'].'</h5>

                  </div>
                  </div>
                  </div>
                  </div>';
                }
              }
          ?>

      </div>
      </div>

<!-- second slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res1) > 0){
                while($row = mysqli_fetch_array($res1)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result1) > 0){
              while($row = mysqli_fetch_array($result1)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- third slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res2) > 0){
                while($row = mysqli_fetch_array($res2)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result2) > 0){
              while($row = mysqli_fetch_array($result2)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- fourth slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res3) > 0){
                while($row = mysqli_fetch_array($res3)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result3) > 0){
              while($row = mysqli_fetch_array($result3)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- fifth slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res4) > 0){
                while($row = mysqli_fetch_array($res4)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result4) > 0){
              while($row = mysqli_fetch_array($result4)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- sixth slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res5) > 0){
                while($row = mysqli_fetch_array($res5)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result5) > 0){
              while($row = mysqli_fetch_array($result5)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- seventh slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res6) > 0){
                while($row = mysqli_fetch_array($res6)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result6) > 0){
              while($row = mysqli_fetch_array($result6)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- eight slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res7) > 0){
                while($row = mysqli_fetch_array($res7)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result7) > 0){
              while($row = mysqli_fetch_array($result7)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- nine slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res8) > 0){
                while($row = mysqli_fetch_array($res8)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result8) > 0){
              while($row = mysqli_fetch_array($result8)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- ten slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res9) > 0){
                while($row = mysqli_fetch_array($res9)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result9) > 0){
              while($row = mysqli_fetch_array($result9)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- eleven slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res10) > 0){
                while($row = mysqli_fetch_array($res10)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result10) > 0){
              while($row = mysqli_fetch_array($result10)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>

           
      </div>
      </div>


<!-- twelve slide -->  
<div class="mySlides">       
      <div class="row" >
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
            <?php 
              if(mysqli_num_rows($res11) > 0){
                while($row = mysqli_fetch_array($res11)){
                      echo   "<p style='font-size:50px;position:center'>" .$row['officialname']. "</p>";
                }
               } 
            ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
  <?php
            if(mysqli_num_rows($result11) > 0){
              while($row = mysqli_fetch_array($result11)){

          echo' <div class="col-md-4">
            <div class="tile">
              <div class="tile-body">
					

						<div class="w3-container w3-center" style="background-color:#009688;">
						
							<img src="Images/'. $row['candidateimage'].'" alt="show" style="width:100%;height:150px;">
							<p></p>
							<h5 style="color:white">'.$row['candidatefullname'].'</h5>

          </div>
            </div>
           </div>
        </div>';
      }
    }
    ?>  
        
      </div>
      </div>

      <a class="w3-btn-floating" style="position:absolute;top:55%;left:0" onclick="plusDivs(-1)">&#10094;</a>
      <a class="w3-btn-floating" style="position:absolute;top:55%;right:0" onclick="plusDivs(1)">&#10095;</a>

      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = x.length} ;
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        
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