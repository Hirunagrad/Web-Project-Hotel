

<h3 class="acdetails" id="resss">Reservation Details</h3>
          <br>  

<table class="table">
          <tbody>
            <tr>
              <th scope="row">First Name</th>
              <td>
                <?php 
                  echo htmlspecialchars($_SESSION['rfirstname']);
                ?>
              </td>

            </tr>
            <tr>
              <th scope="row">Last Name</th>
              <td>
              <?php 
                  echo htmlspecialchars($_SESSION['rlastname']);
                ?>
              </td>

            </tr>

            <tr>
              <th scope="row">Phone</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['rphonenum']);
                ?>
              </td>
            </tr>

            <tr>
              <th scope="row">Email Address</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['remaill']);
                ?>
              </td>
            </tr>

            <tr>
              <th scope="row">Category</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['rcategoryy']);
                ?>
              </td>
            </tr>


            <tr>
              <th scope="row">Room Number</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['rroomNoo']);
                ?>
              </td>
            </tr>

            <tr>
              <th scope="row">Arivel Date</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['radatee']);
                ?>
              </td>
            </tr>

            <tr>
              <th scope="row">Depature Date</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['rddatee']);
                ?>
              </td>
            </tr>

            <tr>
              <th scope="row">Number of Adults</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['radultss']);
                ?>
              </td>
            </tr>

            <tr>
              <th scope="row">Number of Childrens</th>

              <td style="right: 0;">
              <?php 
                  echo htmlspecialchars($_SESSION['rchildrenn']);
                ?>
              </td>
            </tr>
          </tbody>
        </table>

        <p>
          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="background-color: #178CA4; border-color: #178CA4;">
            Cansel Your Reservation
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
          <form method="POST" action="canselreservation.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="ccemail" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="ccpwd" required>
            </div>
            <button type="submit" class="btn btn-primary" style="background-color: #178CA4; border-color: #178CA4;" name="confirmm">Confirm</button>
          </form>  
          </div>
        </div>