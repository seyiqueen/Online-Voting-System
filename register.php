<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <link rel="stylesheet" href="lib/w3.css">
  <link rel="stylesheet" href="4/w3.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register - Electronic Voting System</title>
    <style>.error {color: #FF0000;}</style>
    
  </head>
  <body id="body">

    <?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    
  
    
        
        $surname=$matricno=$othername=$email="";
        $surnameerr=$matricnoerr=$othernameerr=$emailerr="";
        
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            
            if(empty($_POST["matricno"]))
            {
                $matricnoerr = "matric number required";
            }
            else{
                $matricno = test($_POST["matricno"]);
            }
            if(empty($_POST["surname"]))
            {
                $surnameerr = "surname required";
            }
            else{
                $surname = test($_POST["surname"]);
            }


            if(empty($_POST["othername"]))
            {
                $othernameerr = "othername required";
            }
            else{
                $othername = test($_POST["othername"]);
            }


           

           

            if(empty($_POST["email"]))
            {
                $emailerr = "email required";
            }
            else{
                $email = test($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    $emailerr = "Invalid email";
                }
            }

        }
        function test($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


$registrationID;
$userID = rand(100,100000);
$votestatus;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electronic_voting_system";



function random_strings($length_of_string)
{
    $str_result = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

    return substr(str_shuffle($str_result),0, $length_of_string);
    
}

function letters(){
    $letters="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSUVWXYZ";
    return $letters[rand(0, (strlen($letters)-1))];
}

function number(){
    $numbers = "1234567890";
    return $numbers[rand(0, (strlen($numbers)-1))];
}

function generatePassword(){
  $password = "";
    for($i = 0; $i < 10; $i++){
        $option = rand(0,1);
        
        if($option == 0){
            $password .= letters();
        }else if($option ==1){
          $password .= number();
        }
    }

    return $password;
}
      

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$link = mysqli_connect('localhost','root','');
      $database = mysqli_select_db($link,'electronic_voting_system');
      
      if(isset($_POST["matricno"])){
        $m = $_POST["matricno"];
      }
      
      if(isset($_POST["surname"])){
        $s = $_POST["surname"];
      }
      if(isset($_POST["othername"])){
        $f = $_POST["othername"];
      }
      if(isset($_POST["email"])){
        $e = $_POST["email"];
      }
     
      
      
if (isset($_POST["add"]))
{
       
              $query = "SELECT * FROM students WHERE  MatricNo = '". mysqli_real_escape_string($link,$m) ."' AND 
          Surname = '". mysqli_real_escape_string($link,$s) ."' AND 
          firstname = '". mysqli_real_escape_string($link,$f) ."' AND Email = '". mysqli_real_escape_string($link,$e) ."'";
         $result = mysqli_query($link,$query);
         if (mysqli_num_rows($result) == 1) 
          {


            $password = generatePassword();
$stmt = $conn->prepare("insert into register (registrationID,matricno,surname,othername,email,userId,password) values(?,?,?,?,?,?,?)");
//bind parameters
$stmt->bind_param("issssis",$registrationID,$_POST["matricno"],$_POST["surname"], 
$_POST["othername"], $_POST["email"],$userID,$password);
$stmt->execute();
$stmt->close();


$reciepient = /*$conn->prepare("select (email from register)");*/$_POST["email"];
$subject = "EVS Confirmation mail";
$mail = "Your password is " . $password . " Click the following link to confirm your email to log in http://localhost/final_year_project_software/confirm.php?userId=" . $userID . "&password=" . $password;
$header = "From: sodiposeyi@gmail.com";



echo $reciepient;
if(mail($reciepient, $subject, $mail, $header)){
  
  echo "It has sent";
}else {
  echo "Could not send the mail";
}






  
  header("Location: index.php");
  exit();
}
else
{
  echo "Not a valid student";
} 
      }

     







?>   

   <section class="material-half-bg">
      <div class="cover"></div>
    </section>
	<section class="login-content">
      <header class="app-header"><a class="app-header__logo" href="register.php"><img src="Images/voteIconpng.png" width="80" height="80" style="float:left"><p style="float:left">EVS</p></a>
      
      <ul class="app-nav">
        
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
           
            
            <li><a class="dropdown-item" href="index.php"><i class="fa fa-sign-out fa-lg"></i> Back</a></li>
          </ul>
        </li>
      </ul>
    </header>
	 
     <div class="login-box" >

     <div class="w3-panel w3-pale-green w3-border" id="alert" style="display: none">
     <h3></h3>
     <p></p>
     </div>

	 <form class="register-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
         <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>REGISTER</h3>
         <div class="form-group" style="margin-left:100px;margin-top:-10px;" >
            
            <label >MATRICULATION NUMBER</label>
            <span class="error">*<?php echo $matricnoerr; ?></span>
            <input class="form-controls" type="text" placeholder="Matric No" name="matricno">
            
          </div>
          <div style="margin-left:100px;" class="form-group">
          
            <label >SURNAME</label>
            <span class="error">*<?php echo $surnameerr; ?></span> 
            <input  class="form-controls"type="text" placeholder="Surname" name="surname"  autofocus>
           
          </div>
          
		  <div style="margin-left:100px;" class="form-group">
          
            <label >OTHER NAMES</label>
            <span class="error">*<?php echo $othernameerr; ?></span>
            <input class="form-controls" type="text" placeholder="Other Name" name="othername" >
            
          </div>
		  
		 
          
          <div style="margin-left:100px;margin-top:0px;" class="form-group">
          
              <label >E-MAIL ADDRESS</label>
              <span class="error">*<?php echo $emailerr; ?></span>
              <input class="form-controls" type="email" placeholder="E-mail" name="email">
              
            </div>
            
		  
		  <div class="form-group btn-container" style="margin-right:100px;width:1000px;">
            <button style="text-align: center;"name="add" onclick="document.getElementById('body').onload = document.getElementById('show').style.display = 'none'" type="submit" id="add" class="btn btn-primary btn-blocks"><i class="fa fa-sign-in fa-lg fa-fw"></i>REGISTER</button>
            <p id="demo"></p>
          </div>
        </form>
      </div>
	 </div>
	 
	</section>
   

	 <!-- Essential javascripts for application to work-->
     <script>


     </script>
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