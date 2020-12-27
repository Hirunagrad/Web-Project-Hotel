<html>
    <head>
        
    </head>
    <body style="background-image: url('../images/Mandala.jpg'); ">
    <?php

        include_once 'connection.php';


        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $pwd = md5($_POST["pwd"]);


        if(isset($_POST["signup"])){


            $signup = "INSERT INTO users(fname,lname,email,pwd) VALUES('$fname','$lname','$email','$pwd');";


            if($conn->query($signup)){
                
                echo "<script> alert('Registration Succcessfull, Login now..!'); window.location.href='../html/home.html'; </script>";

            }else{
                echo "error: " . $signup . $conn->error;
            }
        }

        $conn->close();

    ?>
    </body>
</html>