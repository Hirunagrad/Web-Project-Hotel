<?php 

    
$details = "SELECT * FROM reservation WHERE fname = $fname;";
            
$result2 = $conn->query($details);

    if(mysqli_num_rows($result2) > 0){

        $roww = $result2->fetch_assoc();

        $rfname = $roww['fname'];
        $rlname = $roww['lname'];
        $rphone = $roww['phone'];
        $remail = $roww['email'];
        $radate = $roww['adate'];
        $rddate = $roww['ddate'];
        $radults = $roww['adults'];
        $rchildren = $roww['children'];
        $rcategory = $roww['category'];
        $rroomNo = $roww['room_no'];

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