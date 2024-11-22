<?php
require_once "conn.php";

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $villa = $_POST['villa'];

    if($name != "" && $email != "" && $tanggal != "" && $villa != "") {
        $sql = "INSERT INTO buy (name, email, tanggal, villa) VALUES ('$name', '$email', '$tanggal', '$villa')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
    } else {
        echo "Name, Email, and Date cannot be empty!";
    }
}
?>