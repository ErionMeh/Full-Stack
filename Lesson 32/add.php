<?php

include_once ('config.php');
// include_once 'config.php';  ose bon edhe kshtu me shkru

if(isset($_POST['submit'])){  //permes name te index.html e bojm qasjen
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users(name,username,email) values (:name, :username, :email)";

    $sqlQuery = $connect->prepare($sql);

    $sqlQuery->bindParam(':name', $name);
    $sqlQuery->bindParam(':username', $username);
    $sqlQuery->bindParam(':email', $email);
  
    $sqlQuery->execute();
    echo "The user was added successfully";
}



?>