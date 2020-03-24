<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php include"includes/sidebar.php";?>

    <div id="content-wrapper">

      <div class="container-fluid">

        

      <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Forget Password</div>
      <div class="card-body">
        <form method="POST">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="number" name="mobile" id="inputmobile" placeholder="Mobile No." class="form-control" required="required">
              <label for="inputPassword">Mobile NO.</label>
            </div>
          </div>
         
          <input type="submit" value="See Password" name="check" data-target="exampleModalCenterTitle" data-toggle="modal" class="btn btn-primary btn-block">
          <!-- <a class="btn btn-primary btn-block" href="buysell.php">Login</a> -->
        </form>
        
      </div>
    </div>
  </div>



      </div>
      <?php 

        // submit clicked
        if(isset($_POST['check']))
        {      // echo "<script>alert('BUTTON CLICKED');</script>"; 
            $userEmail = $_POST['inputEmail'];
            $userMobile = $_POST['mobile'];

            $query="select * from student_info 
                          where (email_stud='$userEmail' && mobile_stud='$userMobile') ";
                          
            $result=mysqli_query($connection,$query);
            if(!$result)
              {
                echo "ERROR".mysqli_error($connection);
              }
              while($row=mysqli_fetch_assoc($result))
              {
               
                $password_one=$row['password_one'];
                $email_stud=$row['email_stud'];
                $mobile_stud=$row['mobile_stud'];
            
               // print_r($row);
              }
              if($email_stud === $userEmail && $mobile_stud === $userMobile)
              {
               echo "<script>alert('$password_one');</script>";
            
               // header("Location: buysell.php");
              }
               else{

                echo "<script>alert('heyy');</script>";
               // echo "Error".mysqli_error($connection);
               // header("Location:register.php");
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


  
  