<!DOCTYPE html>
<html lang="en">
<head>
  <title>Account</title>

      <link rel="stylesheet" href="../css/account.css">
      <link rel="stylesheet" href="../css/navbar.css">
      <link rel="stylesheet" href="../css/footer1.css">
      <script src="../js/home.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
      <script src="../js/popups.js"></script>


<script>

    function logoutjs(){
        var r = confirm("You are going to logout");
        if (r == true) {
            window.location.href='logout.php';
        } else {
            window.location.href='../php/account.php';
        }
    }            
</script>
</head>
<body>

<!--navbar Start-->
<div class="navDiv" id="navDiv">
  <nav class="navbar navbar-expand-sm navbar-dark" id="navbar">

    <a href="../html/home.html" class="navbar-brand">
      <img src="../images/Untitled-1.png" width="100" alt="South Park">
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#dropMenu"><span class="navbar-toggler-icon"></span></button>

    <div class="collapse navbar-collapse justify-content-end" id="dropMenu">

        <ul class="navbar-nav">
            <li class="nav-item "><a href="../html/home.html" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="../html/about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="#footer" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="../html/roomsh.html" class="nav-link">Rooms</a></li>
            <li class="nav-item"><a href="isloginRe.php" class="nav-link">Reservation</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link Main-Item-Drop" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Multiple
              </a>
              <div class="dropdown-content-Three">
                <a href="../html/gallery.html">Gallery</a>
                <a href="../html/facilities.html">Facilities</a>  
                <a href="../html/festivals.html">Festivals</a>  
                <a href="../html/faq.html">FAQ</a> 
            </div>
            </li>
            <li class="nav-item active" ><a href="isloginAc.php" class="nav-link">Account</a></li>
            <li class="nav-item" ><a href="javascript: logoutjs()" class="nav-link">Logout</a></li>
        </ul>

    </div>
</nav>
</div>
<!--navbar End-->

          <?php 

          session_start();

          ?>

          <div class="parallaxOne">
              <h1 class="parallaxH1">Welcome <?php echo htmlspecialchars($_SESSION['firstname']);?> </h1>
          </div>


          <br><br>
        <div class="container">
          <h3 class="acdetails">Account Details</h3>
          <br>      
        <table class="table">
          <tbody>
            <tr>
              <th scope="row">First Name</th>
              <td>
                <?php 
                  echo htmlspecialchars($_SESSION['firstname']);
                ?>
              </td>

            </tr>
            <tr>
              <th scope="row">Last Name</th>
              <td>
              <?php 
                  echo htmlspecialchars($_SESSION['lastname']);
                ?>
              </td>

            </tr>
            <tr>
              <th scope="row">Email Address</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['emaill']);
                ?>
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <br><br>
        <div class="container">

          <?php
            $isres = htmlspecialchars($_SESSION['isreserved']);

            if($isres == TRUE){
              include_once 'reservationTable.php';
            }else{
              include_once 'oops.php';
            }
          ?>

        </div>
        <br><br>

        



      <!--Footer Start-->

      <footer id="footer">          
            <form action="../php/feedback.php" method="POST">
              <div class="container">
                <h1 style="color: white; text-align: left; font-weight: bold; padding-bottom: 10px;">Contact Us</h1>
                <div class="row">
                  <div class="col-6 col-mid-6">
                    <div class="form-group" style="text-align: left;">
                      
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="cemail" required>
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      <button type="submit" class="btn btn-primary submit-Button-comment" name="fback" style="background-color: #178CA4; border-color: #178CA4;">Submit</button>
                    </div>
                  </div>
                  <div class="col-6 col-mid-6">
                    <div class="form-group" style="text-align: left;">
                      <label for="exampleInputEmail1">Comment</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Comment" name="comment" required>
                      
                    </div>
                  </div>
                </div>
              </div>
            </form>       
            <div class="container">
              <div class="Social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-instagram"></a>
             </div>

             <div class="footer-copyright">
              <p>© 2020 Copyright: Sea Side South Park</p>

              <?php
                  include_once 'connection.php';
                  $sql = "UPDATE Counterr SET visits = visits+1 WHERE id = 1";
                  $conn->query($sql);

                  $sqql = "SELECT visits FROM Counterr WHERE id = 1";
                  $resullt = $conn->query($sqql);

                  if ($resullt->num_rows > 0) {
                      while($roow = $resullt->fetch_assoc()) {
                          $visits = $roow["visits"];
                          echo "<p> Visitor Count: " . $visits . "<p>"; 
                      }
                  } else {
                      echo "no results";
                  }
                
              ?>
            </div>
             
            </div>   
          </footer>

      <!--Footer End-->
</body>
</html>