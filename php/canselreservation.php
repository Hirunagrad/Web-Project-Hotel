<?php

    include_once 'connection.php';

    $ccemail = $_POST["ccemail"];
    $ccpwd = md5($_POST["ccpwd"]);



    if(isset($_POST["confirmm"])){




        $cansell = "SELECT * FROM reservation WHERE email = '$ccemail';";
        $result = $conn->query($cansell);

        if ($result->num_rows > 0) {
        
            
            $row = $result->fetch_assoc();
            
            $roomNumber = $row["room_no"];
            $categoryy = $row["category"];

            $update = "UPDATE $categoryy SET available = 'YES' WHERE room_no = $roomNumber";
            $conn->query($update);

            $cansellu = "SELECT * FROM users WHERE email = '$ccemail';";
            $resultt = $conn->query($cansellu);
    
            if ($resultt->num_rows > 0) {
            
                
                $roww = $resultt->fetch_assoc();
                $pwd = $roww["pwd"];
    
                
    
            } else {
                echo "<script> alert('You dont have reservation'); window.location.href='../html/reserve.html'; </script>";
                
            }

            if($ccpwd == $pwd){

                $deletee = "DELETE FROM reservation WHERE email = '$ccemail';";
                $conn->query($deletee);
                session_start();
                $_SESSION['isreserved'] = FALSE;

                echo "<script> alert('Your reservation canceled'); window.location.href='account.php'; </script>";

            }else{
                echo "<script> alert('Password incorrect, try again'); window.location.href='account.php'; </script>";
            } 
            

        } else {
            echo "<script> alert('You dont have reservation'); window.location.href='../html/reserve.html'; </script>";
            
        }
    }

    $conn -> close();

?>
