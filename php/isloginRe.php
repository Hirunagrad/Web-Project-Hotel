<html>
    <head>

    </head>
    <body style="background-image: url('../images/Mandala.jpg'); ">
    <?php

        session_start();

        $iss = htmlspecialchars($_SESSION['islogin']);

            if($iss == TRUE){
                header('Location: ../html/reserve.html');
                exit();
            }else{
                echo "<script> alert('Please Login first'); window.location.href='../html/home.html'; </script>";
            }
    ?>
    </body>
</html>
