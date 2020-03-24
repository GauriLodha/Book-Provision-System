<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php include"includes/sidebar.php";?>

    <div id="content-wrapper">

      <div class="container-fluid">
      <h1>Welcome "<?php echo $_SESSION['first_name']; ?>"</h1>
     <div class="row">
     <div  class="btn btn-warning">
    <h1>BUY</h1>
     <a href="buybook.php">Click here to buy books!</a>
    </div>
    <br> <br> <br>
    <div  class="btn btn-danger">
    <h1>SELL</h1>
     <a href="sellbook.php">Click here to sell books!</a>
    </div>

     </div>
    <br> <br> <br>

<h1>Your Books For Sale!</h1>
     <table class="table table-bordered" id="turfs"  cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Subject</th>
                  <th>Year</th>
                  <th>Branch</th>
                  <th>Price</th>
                  <th>Condition</th>
                  <th>Author's Name</th>
                  <th>EDIT</th>
                  <th>DELETE</th>
                </tr>
              </thead>
            
              <?php
                  $got_irn=$_SESSION['irn_no'];
                   $query = "SELECT * FROM book_info where irn = '$got_irn'";
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
                                $author=$row['author_name'];
                                 $id=$row['id'];
                                // $condt=$row['condt'];
                            
                            
                           echo 
                           "  <tbody>
                           <tr>
                           <td>$id2</td>
                           <td>$subject</td>
                           <td>$b_year</td>
                           <td>$branch</td>
                           <td>$price</td>
                           <td>$condt</td>
                           <td>$author</td>
                           
                           <td> <a href='edit.php?editid=$id'>Edit</a></td>
                           <td> <a href='buysell.php?delete=$id'>Delete</a></td>
                           </tr>
                       </tbody>";
                       $id2++;  
                       }
                      // header("Location:buysell.php"); 
                   }
                   else
                   {
                       echo "Error in query";
                   }
                
                
              
              ?>
           
              
              
             </table>   
    

        
      </div>
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


  <?php 
  if(isset($_GET['delete']))
  {
    $delete=$_GET['delete'];
    $query_delete="DELETE FROM `book_info` WHERE id='$delete'";
    $result_delete=mysqli_query($connection,$query_delete);
    if($result_delete)
    {
      echo "<script>alert('Deleted Successfully!')</script>";
      header("Location:buysell.php");
    }
  }
  
  ?>


  
 