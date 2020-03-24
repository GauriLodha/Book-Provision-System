<?php include"includes/header.php";?>

<?php include"includes/navigation.php";?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php include"includes/sidebar.php";?>

    <div id="content-wrapper">

      <div class="container-fluid">
      <h1>Details of registered Students</h1>
      <table class="table table-bordered" id="turfs" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Irn no</th>
                  <th>first name</th>   
                  <th> last name</th>
                  <th>mobile no</th>
                  <th>Email id</th>
                </tr>
              </thead>
            
              <?php
                 
                      
                  
                   $query = "SELECT * FROM student_info ";
                   $query_result = mysqli_query($connection,$query);
    
                   if($query_result)
                   {    
                       $id=1;
                       while($row = mysqli_fetch_assoc($query_result))
                       {
                                $irn_no=$row['irn_no'];
                                $first_name=$row['first_name'];
                                $last_name=$row['last_name'];
                                $email_stud=$row['email_stud'];
                                $mobile_stud=$row['mobile_stud'];
                                $room_no=$row['room_no'];
                            
                            
                           echo 
                           "  <tbody>
                           <tr>
                           <td>$id</td>
                           <td>$irn_no</td>
                           <td>$first_name</td>
                           <td>$last_name</td>
                           <td>$mobile_stud</td>
                           <td>$email_stud</td>
                           </tr>
                       </tbody>";
                       $id++;  
                       }
                       
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


  
 