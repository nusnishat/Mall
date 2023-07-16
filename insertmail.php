<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$mail = $_REQUEST['mail'];

//echo '<br>Hello '. $uname;


$servername = "localhost:3306";
$dbusername = "root";
$dbpassword = "";
$dbname = "productdb";


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

$sql = "SELECT * FROM usermail WHERE mail = '" .$mail. "'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<br>User already exists. Registration failed.';
}
 else {
    $sql = "INSERT INTO usermail (mail) VALUES ( '" .$mail. "')";
    //echo '<br> '.$sql;
    $result = $conn->query($sql);
     echo '<script>alert("Congratulations!You have successfully subcribed to our page.Our offers and product updates will be sent to your mail.Happy shopping.")</script>';
                    echo '<script>window.location="index.php"</script>';
}

$conn->close();
