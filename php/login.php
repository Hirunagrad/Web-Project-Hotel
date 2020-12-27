<html>

<head>

</head>
    <body style="background-image: url('../images/Mandala.jpg'); ">
        

<?php


include_once 'connection.php';

$email = $_POST["email"];
$pwd = md5($_POST["pwdd"]);
 

if(isset($_POST["login"])){



        
        $details = "SELECT * FROM reservation WHERE email = '$email';";
                    
        $result2 = $conn->query($details);

            if(mysqli_num_rows($result2) > 0){

                $roww = $result2->fetch_assoc();

                $rfname = $roww["fname"];
                $rlname = $roww["lname"];
                $rphone = $roww["phone"];
                $remail = $roww["email"];
                $radate = $roww["adate"];
                $rddate = $roww["ddate"];
                $radults = $roww["adults"];
                $rchildren = $roww["children"];
                $rcategory = $roww["category"];
                $rroomNo = $roww["room_no"];

            }


    $login = "SELECT * FROM users WHERE email = '$email';";
    $result = $conn->query($login);
     
        $row = $result->fetch_assoc();
        
        $fnamee = $row["fname"];
        $lnamee = $row["lname"];
        $emaill = $row["email"];
        $pwdd = $row["pwd"];


        if($pwd == $pwdd){
            echo "Your Login successfull <br>";


            session_start();
                            
            // Store data in session variables
            $_SESSION['firstname'] = $fnamee;
            $_SESSION['lastname'] = $lnamee;
            $_SESSION['emaill'] = $emaill;
            $_SESSION['islogin'] = TRUE;

            
            if(mysqli_num_rows($result2) > 0){

                $roww = $result2->fetch_assoc();

                $_SESSION['rfirstname'] = $rfname;
                $_SESSION['rlastname'] = $rlname;
                $_SESSION['rphonenum'] = $rphone;
                $_SESSION['remaill'] = $remail;
                $_SESSION['radatee'] = $radate;
                $_SESSION['rddatee'] = $rddate;
                $_SESSION['radultss'] = $radults;
                $_SESSION['rchildrenn'] = $rchildren;
                $_SESSION['rcategoryy'] = $rcategory;
                $_SESSION['rroomNoo'] = $rroomNo;
                $_SESSION['isreserved'] = TRUE;


            }else{
                $_SESSION['isreserved'] = FALSE;
            }

               


            echo $fnamee . $rfname;
            header("location: account.php");
            exit;

        }else{
            echo "<script> alert('Your password incorrect please try again'); window.location.href='../html/home.html'; </script>";
        }   
        
    } 

    $conn -> close();

?>
    </body>


</html>











