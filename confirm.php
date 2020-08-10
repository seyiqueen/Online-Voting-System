<?php
    $userId = $_GET['userId'];
    $userPassword = $_GET['password'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electronic_voting_system";
    $conn = new mysqli($servername, $username, $password, $dbname);
	$stmt = $conn->prepare("update register set password=? where userId=?");
    //bind parameters
    $stmt->bind_param("ss", $userPassword, $userId);
    $stmt->execute();
    $stmt->close();
	header("Location: index.php");
?>