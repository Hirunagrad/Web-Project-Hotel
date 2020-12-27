<?php

    include_once 'connection.php';

    $cemail = $_POST["cemail"];
    $comment = $_POST["comment"];

    if(isset($_POST["fback"])){
        $fback = "INSERT INTO feedback(cemail,comment) VALUES('$cemail','$comment');";


        if($conn->query($fback)){
            echo "<script> alert('Thank you for your feedback'); window.location.href='../html/home.html'; </script>";
        }else{
            echo "<script> alert('Something went wrong..!'); window.location.href='../html/home.html'; </script>";
        }
    }


    $conn->close();

?>