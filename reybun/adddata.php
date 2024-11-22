<?php
require_once "conn.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $masukan = $_POST['masukan'];

    if($name != "" && $email != "" && $masukan != "") {
        $sql = "INSERT INTO beli (name, email, masukan) VALUES ('$name', '$email', '$masukan')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Name, Email and Masukan cannot be empty!";
    }
}
?>