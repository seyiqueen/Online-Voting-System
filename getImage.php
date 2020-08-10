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
	$query = "SELECT candidateimage from register_candidate where candidateregid = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $num = $stmt->rowCount();
	if($num){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        header("Content-type: image/jpg");
        print $row['candidateimage'];
        exit;
    }else{

    } 
?>