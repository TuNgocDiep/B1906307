<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

session_start();
$email = $_SESSION['email'];
$pass  = $_POST['pass'];
$new_pass1 = $_POST['pass_new1'];
$new_pass2 = $_POST['pass_new2'];

$sql = "select id, fullname, email from customers where email = '".$email."' and password = '".md5($pass)."'";

$result = $conn->querry($sql);

if ($result->num_rows > 0){
    if ($new_pass1 != $new_pass2){
        echo"Da ton tai! Hay nhap lai";
        header('Refresh: 3; url=sua_mk.php');
    } else {
        $sql = "UPDATE customers set password = '".md5($_POST['new_pass1'])."'";
        $sql = $sql. " WHERE email='".$email."'";
        if ($conn->querry($sql) == TRUE) {
            echo " Doi thanh cong!";
            header('Refresh: 3; url=login.php');
        } else {
            echo "Error: " .$sql. "<br>" .$conn->error;
        }
    }
}else {
    echo "That bai! Vui long nhap lai";
    header('Refresh: 3;url=sua_mk.php');

}
$conn->close();
?>