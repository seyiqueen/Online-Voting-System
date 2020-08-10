<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login - Electronic Voting System</title>
  </head>
  <body>
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
   
      // define variables and set to empty values
$user = $pass =  "";
$userErr = $passErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $userErr = "username is required";
  } else {
    $user = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } else {
    $pass = test_input($_POST["password"]);
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
      $error = '';
      $link = mysqli_connect('localhost','root','');
      $database = mysqli_select_db($link,'electronic_voting_system');
      
      $user = $_POST["username"];
      $pass = $_POST["password"];
      
      // User is logging in
      if (isset($_POST["submit"]))
      {
        if (empty ($_POST["username"])) //if username field is empty echo below statement
         {
          $error =  "<font color='red'>***You must enter your unique username (email).***</font><br/><br/>";
    
         }
         if (empty ($_POST["password"])) //if password field is empty echo below statement
         {
          $error = "<font color='red'>***You must enter your unique password.***</font><br/><br/>";
         }
    
         $query = "SELECT * FROM register WHERE email = '". mysqli_real_escape_string($link,$user) ."' AND password = '". mysqli_real_escape_string($link,$pass) ."'" ;
         $result = mysqli_query($link,$query);
         if (mysqli_num_rows($result) == 1) 
          {
            session_start();
          $_SESSION['uname'] = $row['email'];
      $_SESSION['matric'] = $row['matricno'];
      $_SESSION['surname'] = $row['surname'];
      $_SESSION['othername'] = $row['othername'];
      $_SESSION['email'] = $row['email'];

      header("Location: HomePageUser.php");
      exit();
          } 
           else 
          {
            $error = "<b>Incorrect Username or password</b>"; 
          }
         
     }
     
   
  
    
?>

    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <header class="app-header"><a class="app-header__logo" href="index.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
      
      <ul class="app-nav">
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           
            <li><a class="dropdown-item" href="register.php"><i class="fa fa-sign-out fa-lg"></i> Register</a></li>
            
          </ul>
        </li>
      </ul>
    </header>
      <div class="login-box">
        <form class="login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Email" name="username" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            
            <input class="form-control" type="password" placeholder="Password" name="password">
            <p style="display: none">Incorrect username or password</p>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Forgot Password ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button type="submit" id="error"  name = "submit" value="login" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
          </div>
        </form>
        <form class="forget-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
          </div>
          </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
  </body>
</html>