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
        <form method="post" >
    

          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="subject" class="form-control" name="subject" placeholder="Subject" required="required" autofocus="autofocus">
              <label for="subject">Subject</label>
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
<!-- 
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                <input type="number" id="price" class="form-control" name="price" placeholder="Price" required="required" autofocus="autofocus">
              <label for="p">Price</label>
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
          </div> -->
         
          <input type="submit" name="Search" class="btn btn-primary btn-block"  value="Search">
        </form>
       
      </div>
    </div>
  </div>

  <table class="table table-bordered" id="turfs"  cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Irn no</th>
                  <th>first name</th>
                  <th> last name</th>
                  <th>mobile no</th>
                  <th>Email id</th>
                  <th>Price</th>
                  <th>Condition(1-5)</th>
                </tr>
              </thead>
            
              <?php
                if(isset($_POST['Search']))
                {

                    $subject=$_POST['subject'];
             
                    $year=$_POST['year'];
                    $branch=$_POST['branch'];  
                      
                  
                   $query = "SELECT student_info.first_name,student_info.last_name,student_info.mobile_stud,student_info.email_stud,student_info.irn_no,
                   book_info.price,book_info.id, book_info.condt FROM student_info,book_info where book_info.subject LIKE '%$subject%' AND book_info.b_year ='$year' AND book_info.branch ='$branch' AND student_info.irn_no=book_info.irn ";
                   $query_result = mysqli_query($connection,$query);
    
                   if($query_result)
                   {    
                       $id2=1;
                       while($row = mysqli_fetch_assoc($query_result))
                       {
                                $irn_no=$row['irn_no'];
                                $first_name=$row['first_name'];
                                $last_name=$row['last_name'];
                                $email_stud=$row['email_stud'];
                                $mobile_stud=$row['mobile_stud'];
                                $id=$row['id'];
                                
                                $price=$row['price'];
                                $condt=$row['condt'];
                            
                            
                           echo 
                           "  <tbody>
                           <tr>
                           <td>$id2</td>
                           <td>$irn_no</td>
                           <td>$first_name</td>
                           <td>$last_name</td>
                           <td>$mobile_stud</td>
                           <td>$email_stud</td>
                           <td>$price</td>
                           <td>$condt</td>
                           <td><a href='negotiate.php?ngo=$id'>Negotiate</a></td>
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
                }
                
              
              ?>
           
              
              
             </table>   

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



  