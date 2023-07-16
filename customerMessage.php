<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "productdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$name  = $_REQUEST['name'];
$email  = $_REQUEST['email'];
$msg= $_REQUEST['msg'];

$sql = "INSERT INTO customermessage (name,mail,msg) VALUES ('$name', '$email', '$msg')";
if(mysqli_query($link, $sql)){
      echo '<script>alert("Thanks for sending us your message.You will recieve an email in reply.Happy shopping")</script>';
                    echo '<script>window.location="index.php"</script>';

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


