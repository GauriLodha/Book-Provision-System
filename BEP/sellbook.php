<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">

    <!-- Sidebar -->
    
    <?php include"includes/sidebar.php";?>

    <div id="content-wrapper">

      <div class="container-fluid">

        

      <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">ADD BOOK</div>
      <div class="card-body">
        <form method="post" action="sellbook.php">
        <div class="form-group">
            <div class="form-label-group">
 <?php            $ll=$_SESSION['irn_no']; ?>
            <input type="text" id="irn" name="irn_no" class="form-control" value="<?php echo $ll; ?>" readonly="readonly" required="required">
              <label for="irn">IRN No.</label>

              
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject" required="required" autofocus="autofocus">
              <label for="subject">Subject</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="author" class="form-control" name="author" placeholder="Author Name" required="required" autofocus="autofocus">
              <label for="author">Author Name </label>
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
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="number" id="price" class="form-control" name="price" placeholder="Price" required="required" autofocus="autofocus">
              <label for="price">Price</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                <a>Condition:</a> <br>
                <select name="cond">
                    <option  name="cond" value="1">1</option> <br>
                    <option name="cond"value="2">2</option> <br>
                    <option name="cond" value="3">3</option> <br>
                    <option name="cond" value="4">4</option> <br>
                    <option name="cond" value="5">5</option> <br>
                 </select>
                </div>
              </div>
            </div>
          </div>
         
          <input type="submit" name="add" class="btn btn-primary btn-block" href="buysell.php" value="ADD">
        </form>
       
      </div>
    </div>
  </div>

  <form method="post">
             <input type="submit" name="back" class="btn btn-warning btn-block"  value="Back">
             </form> 
             <?php
             if(isset($_POST['back']))
             {
               header("Location:buysell.php");
             }
             ?> 

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


  <?php  
  if(isset($_POST['add']))
 {
//    echo "<script>alert('Button Clicked');</script>"; 
 $irn=$_POST['irn_no'];
 $subject=$_POST['subject'];
$price=$_POST['price'];
$year=$_POST['year'];
$branch=$_POST['branch'];  
$cond=$_POST['cond'];
$author=$_POST['author'];
// $room_no=$_POST['room_no'];
// $mobile_stud=$_POST['mobile_stud'];
// $password_one=$_POST['password_one'];
$query="INSERT INTO book_info(irn,subject, b_year, branch,price,condt,author_name)
VALUES ('$irn','$subject','$year','$branch','$price','$cond','$author')";
 $result = mysqli_query($connection,$query);

 if($result)
 {
//    echo "<script>alert('Added sucessfully');</script> ";
   header("Location:buysell.php");
 }

  else 
 {
   echo "<script>alert('error in addition ');</script> ";
 }


 } 
 
?>
 