<?php require "../layouts/header.php"; ?>      
<?php require "../../config/config.php"; ?> 
<?php 

    if(!isset($_SESSION["adminname"])) {
        header("location: ".ADMINURL."");
    }

    if(isset($_GET['id']) AND isset($_GET['status'])) {

        $id = $_GET['id'];
        $status = $_GET['status'];

        if($status == "Pending") {
            $update = $conn->prepare("UPDATE bookings SET status='Booked Successfully' WHERE
            id='$id'");

            $update->execute();

            header("location: show-bookings.php");

        } else {
            $update = $conn->prepare("UPDATE bookings SET status='Pending' WHERE
            id='$id'");

            $update->execute();

            header("location: show-bookings.php");
        }
    }