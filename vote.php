<?php
  session_start();
  if(isset($_SESSION['matric'])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electronic_voting_system";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $matric = $_SESSION['matric'];
    $data = explode('-', $_GET['id']);
    // $check = 'SELECT * from votes where matricno = "' . $matric. '" and officialpositionid = "' . $data[1] . '" and candidateregid = "' . $data[0]. '"';

    $check = 'SELECT * from votes where matricno = "' . $matric. '" and officialpositionid = "' . $data[1] . '"';
    $ch = mysqli_query($conn, $check);

    if(mysqli_num_rows($ch) == 0){
      $vote = 'INSERT into votes(matricno, officialpositionid, candidateregid) values("' . $matric . '","' . $data[1] . '","' . $data[0] . '")';
      $cand = mysqli_query($conn, $vote);
      return json_encode("done");
    }else{
      return http_response_code(404);
    }
    
    
  
    
      
     
      
    
   
  }
 
  

?>