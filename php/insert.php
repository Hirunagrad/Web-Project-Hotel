<?php

    include_once 'connection.php';

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $adate = $_POST["adate"];
    $ddate = $_POST["ddate"];
    $adults = $_POST["adults"];
    $children = $_POST["children"];
    $category = $_POST["cat"];    

    if(isset($_POST["reserve"])){

        $sql = "SELECT * FROM $category WHERE available = 'YES';";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        
            
            $row = $result->fetch_assoc();
            
            $roomNumber = $row["room_no"];
            $status = $row["available"];

            $update = "UPDATE $category SET available = 'NO' WHERE room_no = $roomNumber";
            $conn->query($update);
            

            $insertt = "INSERT INTO reservation(fname,lname,phone,email,adate,ddate,adults,children,category,room_no) VALUES('$fname','$lname',$phone,'$email','$adate','$ddate',$adults,$children,'$category',$roomNumber);";

            if($conn->query($insertt)){


            $details = "SELECT * FROM reservation WHERE room_no = $roomNumber";
            
            $result2 = $conn->query($details);

                if(mysqli_num_rows($result2) > 0){

                    include_once 'newreservationSelect.php';
                    echo "<script> alert('Your Reservation Successful'); window.location.href='account.php#resss'; </script>";
                    
                }else{
                    echo "OOPS..! Something went wrong...";
                }

            }else{
            echo "error: " . $insertt . $conn->error;
            }

        } else {
            echo "<script> alert('Rooms are not available, try another category.'); window.location.href='../html/reserve.html'; </script>";
            
        }
    }

    $conn -> close();

?>
