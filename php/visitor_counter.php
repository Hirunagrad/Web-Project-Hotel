<?php

echo "<meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'></script>";

$con=mysqli_connect('localhost','root','','MyDB');

$sql='SELECT * from tbl_visitor';

$res=mysqli_query($con,$sql);

$row=mysqli_fetch_array($res);

$str=$row[0];

$length=strlen($str);

if($length==1)
 $counter="00000000".$row[0];
else if($length==2)
 $counter="0000000".$row[0];
else if($length==3)
 $counter="000000".$row[0]; 
else if($length==4)
 $counter="00000".$row[0];
else if($length==5)
 $counter="0000".$row[0];
else if($length==6)
 $counter="000".$row[0];
else if($length==7)
 $counter="00".$row[0];
else if($length==8)
 $counter="0" .$row[0];

$up_count=$row[0]+1; 
$sql="UPDATE `tbl_visitor` SET `count`= '$up_count' WHERE 1";

mysqli_query($con,$sql);

?>

<div class='row' style='margin-left:10px;margin-top:20px'>
 <div cass='col-4'>
  <h5 class='text-danger'>Total Visits</h5>
 </div>
 <div class='col-8'>
  <table class='text-white bg-info table-sm'> 
   <tr>
    <td style=' margin-left: 2%;'><?php echo $counter[0] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[1] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[2] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[3] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[4] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[5] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[6] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[7] ?></td>
    <td style=' margin-left: 2%;'><?php echo $counter[8] ?></td>
    </tr>
  </table>
 </div>
</div>
