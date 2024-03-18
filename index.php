<?php include("include/header.php")?>
<?php include("dbconfig.php")?>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h5><a href="create.php" class="btn btn-info float-sm-end">Employee Information Add</a></h5>
                    </div>
                       <div class="card-body">

                        <?php 
                    
                        $employee ="select * from employee";
                        $employee_run =mysqli_query($conn,$employee);
                        if(mysqli_num_rows($employee_run) >0)
                          {
                           ?>
                     <table class="table">
                            <thead>
                               <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">EmployeeId</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Moblie No</th>
                                    <th scope="col">ExtNo</th>
                                    <th scope="col">Action</th>
                               </tr>
                            </thead>
                                   <tbody>
                                         <?php 
					$count = 0;
                                            while($emp_row=mysqli_fetch_array($employee_run))  
                                            {
						$count=count+1;
                                          ?> 
                                            <tr>
							
                                                <td><?php  echo $count;?></td>    
                                                <td><?php  echo $emp_row['empid'];?></td>
                                                <td><?php  echo $emp_row['enam'];?></td>
                                                <td><?php  echo $emp_row['email'];?></td>
                                                <td><?php  echo $emp_row['phone'];?></td>
                                                <td><?php  echo $emp_row['ext'];?></td>
                                                <td><a href="create-update.php?id=<?php  echo $emp_row['id'];?>" class="btn btn-warning">Update</a>
                                                <td>
                                                <form action="empcode.php" method="POST">
                                                <input type="hidden" name="delete_id" class="form-control" id=""value="<?php  echo $emp_row['id'];?>">
                                                <button type="submit"name="delete"class="btn btn-danger">Delete</button>
                                                </form>
                                                </td>
                                                 <!-- <a href="create-delete.php" class="btn btn-danger">Delete</a></td> -->
                                             </tr> 
                                          <?php
                                             }  
                                          ?>
                                    </tbody>
                    </table>
                            <?php
                             }
                             else
                             {
                            echo "No Record Found";
                             }
                            ?>
                        
                       </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("include/footer.php")?>

   
 