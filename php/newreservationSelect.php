<?php 


session_start();
$email = htmlspecialchars($_SESSION['emaill']);


$details = "SELECT * FROM reservation WHERE email = '$email';";
                    
$result3 = $conn->query($details);

    if(mysqli_num_rows($result3) > 0){

        $rowww = $result3->fetch_assoc();

        $rfname = $rowww["fname"];
        $rlname = $rowww["lname"];
        $rphone = $rowww["phone"];
        $remail = $rowww["email"];
        $radate = $rowww["adate"];
        $rddate = $rowww["ddate"];
        $radults = $rowww["adults"];
        $rchildren = $rowww["children"];
        $rcategory = $rowww["category"];
        $rroomNo = $rowww["room_no"];


        session_start();

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

?>