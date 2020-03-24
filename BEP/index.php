<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php include"includes/sidebar.php";?>

    <div id="content-wrapper">

      <div class="container-fluid">

        

      <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="inputEmail" id="inputE" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputE">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="inputPassword" id="inputP" class="form-control" placeholder="Password" required="required">
              <label for="inputP">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
          <input type="submit" value="Login" name="check" data-target="exampleModalCenterTitle" data-toggle="modal" class="btn btn-primary btn-block">
          <!-- <a class="btn btn-primary btn-block" href="buysell.php">Login</a> -->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>



      </div>
      <?php 

        // submit clicked
        if(isset($_POST['check']))
        {      //  echo "<script>alert('BUTTON CLICKED');</script>";
            $userEmail = $_POST['inputEmail'];
            $userPassword = $_POST['inputPassword'];

            $query="select * from student_info 
                          where email_stud='$userEmail' ";
       
            $result=mysqli_query($connection,$query);
            if(!$result)
              {
                echo "ERROR".mysqli_error($connection);
              }
              while($row=mysqli_fetch_assoc($result))
              {
                $first_name=$row['first_name'];
                $irn_no=$row['irn_no'];
                $last_name=$row['last_name'];
                $year=$row['p_year'];
                $branch=$row['branch'];  
                $email_stud=$row['email_stud'];
                $room_no=$row['room_no'];
                $mobile_stud=$row['mobile_stud'];
                $password_one=$row['password_one'];
            
               // print_r($row);
              }
              if($userEmail === $email_stud && $userPassword === $password_one)
              {
                $_SESSION['first_name']=$first_name;
                $_SESSION['irn_no']=$irn_no;
                $_SESSION['last_name']=$last_name;
                $_SESSION['p_year']=$year;
                $_SESSION['branch']=$branch;
                $_SESSION['mobile_stud']=$mobile_stud;
                $_SESSION['room_no']=$room_no;
                $_SESSION['email_stud']=$email_stud;
                $_SESSION['password_one']=$password_one;
            
                header("Location: buysell.php");
              }
              else{
                //echo "Error".mysqli_error($connection);
                header("Location:index.php");
              }
            
        } 
            
      ?>

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php include"includes/footer.php";?>


  
  