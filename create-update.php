

<?php include("include/header.php")?>
<?php include("dbconfig.php")?>
    <?php 
    $id =$_GET['id'];
    $emp_query ="select * from employee where id='$id'";
    $emp_query_run =mysqli_query($conn,$emp_query);
    if(mysqli_num_rows($emp_query_run) > 0)
    {
       while($emp=mysqli_fetch_array($emp_query_run))
       {
           
          ?>
    

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
           <div class="card">
            <div clas="card-header">
             <h5 class="text-uppercase text-center bg-info">Employee Update Page</h5>
            </div>
            <div clas="card-body">
            <form action="empcode.php" method="POST">
             <input type="hidden" name="eid" class="form-control" id=""value="<?php echo $emp['id'];?>">
                <div class="form-group">
                    <label for="" class="form-label">Employee Id</label>
                    <input type="text" name="empid" class="form-control" id=""value="<?php echo $emp['empid']; ?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="enam" class="form-control" id=""value="<?php echo $emp['enam']; ?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email Id</label>
                    <input type="email" name="email"class="form-control" id=""value="<?php echo $emp['email']; ?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Moblie No</label>
                    <input type="number" name="phone" class="form-control" id=""value="<?php echo $emp['phone']; ?>">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Ext No</label>
                    <input type="number" name="ext" class="form-control" id=""value="<?php echo $emp['ext']; ?>">
                </div>
                <tb>
                <a href="index.php"class="btn btn-danger">Cancel</a>
                <button type="submit" name="update" class="btn btn-info">Update Data</button>
         </form>

            </div>
           </div>
        </div>
    </div>
</div>
<?php     
        }
    }
    else
    {
     echo "NO Data Found By this URL No";
    }
    ?>

<?php include("include/footer.php")?>







