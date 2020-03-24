<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">
  <?php include"includes/sidebar.php";?>


    <!-- Sidebar -->
   
    <div id="content-wrapper">

      <div class="container-fluid">
      <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="POST" action="register.php">
          <fieldset>
            <legend>
              STUDENT DETAIL'S
            </legend>

            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName"  name="first_name" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                  <label for="firstName">First name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Last name" required="required">
                  <label for="lastName">Last name</label>
                </div>
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="irn" name="irn_no" class="form-control" placeholder="IRN NO." required="required">
              <label for="irn">IRN No.</label>
            </div>
          </div>


          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="email_stud" class="form-control" placeholder="Email address" required="required">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <a>Year:</a>
                <select name="year">
                    <option name="year" value="FE">FE</option> <br>
                    <option name="year" value="SE">SE</option> <br>
                    <option name="year" value="TE">TE</option> <br>
                    <option name="year" value="BE">BE</option> <br>
                 </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <a>Branch:</a>
                <select name="branch">
                    <option  name="branch" value="COMPUTER">COMPUTER</option> <br>
                    <option name="branch"value="ENTC">ENTC</option> <br>
                    <option name="branch" value="IT">IT</option> <br>
                    
                 </select>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="room" name="room_no" class="form-control" placeholder="Room No" required="required">
              <label for="room">Room NO</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="number" id="mb" name="mobile_stud" class="form-control" placeholder="Mobile No." required="required">
              <label for="mb">Mobile No.</label>
            </div>
          </div>
          </fieldset>
          




          <fieldset>
            <legend>
              PASSWORD
            </legend>
            <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" name="password_one" class="form-control" placeholder="Password" required="required">
                  <label for="inputPassword">Password</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="confirmPassword" name="password_confirm" class="form-control" placeholder="Confirm password" required="required">
                  <label for="confirmPassword">Confirm password</label>
                </div>
              </div>
            </div>
          </div>
          </fieldset>
          
          
          <input type="submit" name="register" class="btn btn-primary btn-block" href="login.php" value="REGISTER">


        </form>
        <?php  
  if(isset($_POST['register']))
  {// echo "<script>alert('button clicked');</script> ";
      if($_POST['password_confirm']==$_POST['password_one'])
      {
        $first_name=$_POST['first_name'];
        $irn_no=$_POST['irn_no'];
        $last_name=$_POST['last_name'];
        $year=$_POST['year'];
        $branch=$_POST['branch'];  
        $email_stud=$_POST['email_stud'];
        $room_no=$_POST['room_no'];
        $mobile_stud=$_POST['mobile_stud'];
        $password_one=$_POST['password_one'];

        $query="INSERT INTO student_info( irn_no, first_name, last_name, p_year, branch, email_stud, room_no, mobile_stud, password_one)
         VALUES ('$irn_no','$first_name','$last_name','$year','$branch','$email_stud','$room_no','$mobile_stud','$password_one')";
          $result = mysqli_query($connection,$query);

          if($result)
          {
            //echo "<script>alert('added clicked');</script> ";
            header("Location:login.php");
          }
    
           else 
          {
            echo "<script>alert('error ');</script> ";
          }
        
      }
  }
?>


        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
        
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <!-- <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer> -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php include"includes/footer.php";?>


 