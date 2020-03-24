<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">

    <!-- Sidebar -->
    
    <?php include"includes/sidebar.php";?>

    <div id="content-wrapper">

      <div class="container-fluid">

    <?php

if(isset($_GET['editid']))
{
    $edit_id = $_GET['editid'];
      $got_irn=$_SESSION['irn_no'];
                   $query = "SELECT * FROM book_info where irn = '$got_irn' AND id='$edit_id'";
                   $query_result = mysqli_query($connection,$query);
    
                   if($query_result)
                   {    
                       $id2=1;
                       while($row = mysqli_fetch_assoc($query_result))
                       {
                                $subject=$row['subject'];
                                $b_year=$row['b_year'];
                                $branch=$row['branch'];
                                $price=$row['price'];
                                $condt=$row['condt'];
                                $id=$row['id'];
                       }
                   }
                }  
        ?>

      <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">EDIT BOOK DETAILS</div>
      <div class="card-body">
        <form method="post" >
        <div class="form-group">
            <div class="form-label-group">
            <input type="text" id="irn" name="irn_no" class="form-control"  readonly="readonly" required="required">
              <label for="irn"><?php echo  $got_irn; ?></label>

              
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject" readonly="readonly" required="required" autofocus="autofocus">
              <label for="subject"><?php echo  $subject; ?></label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <a>Year:</a>
                <select name="year">
                    <option name="year" value="$b_year"><?php echo $b_year; ?></option> <br>
        
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
                <input type="number" id="price" class="form-control" name="price" value="<?php echo  $price; ?>" required="required" autofocus="autofocus">
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
         
          <input type="submit" name="Update" class="btn btn-primary btn-block" value="Update">
        </form>
       
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


  <?php  
  if(isset($_POST['Update']))
 {
//    echo "<script>alert('Button Clicked');</script>"; 
 $irn=$_POST['irn_no'];
 $subject=$_POST['subject'];
$price=$_POST['price'];
$year=$_POST['year'];
$branch=$_POST['branch'];  
$cond=$_POST['cond'];
// $room_no=$_POST['room_no'];
// $mobile_stud=$_POST['mobile_stud'];
// $password_one=$_POST['password_one'];
// $query="INSERT INTO book_info(irn,subject, b_year, branch,price,condt)
// VALUES ('$irn','$subject','$year','$branch','$price','$cond')";

 $query =  "UPDATE `book_info` SET `price`='$price',`condt`='$cond' WHERE id='$edit_id'";
 $result = mysqli_query($connection,$query);
//echo $price;
 if($result)
 {
    echo "<script>alert('Updated sucessfully');</script> ";
   header("Location:buysell.php");
 }

  else 
 {
   echo "<script>alert('error in addition ');</script> ";
 }


 } 
 
?>
  