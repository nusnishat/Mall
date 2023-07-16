<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "productdb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$product = mysqli_real_escape_string($link, $_REQUEST['product']);
$hname = mysqli_real_escape_string($link, $_REQUEST['hname']);
$cname = mysqli_real_escape_string($link, $_REQUEST['cname']);
$edate = mysqli_real_escape_string($link, $_REQUEST['edate']);
// Attempt insert query execution
$sql = "INSERT INTO insertcheckout (name, email, phone, address, product, hname, cname, edate) VALUES ('$name', '$email', '$phone', '$address', '$product', '$hname', '$cname', '$edate')";
if(mysqli_query($link, $sql)){
     echo '<script>alert("Congratulations!You have successfully placed your order. You will get your product between 5 days. Happy shopping.")</script>';
                    echo '<script>window.location="index.php"</script>';

} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>