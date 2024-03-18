

<?php include("include/header.php")?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-4">
           <div class="card">
            <div clas="card-header">
             <h5 class="text-uppercase text-center bg-info">Employee Add</h5>
            </div>
            <div clas="card-body">
            <form action="empcode.php" method="POST">
                <div class="form-group">
                    <label for="" class="form-label">Employee Id</label>
                    <input type="text" name="empid" class="form-control" id=""placeholder="Enter Your Employee Id">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="enam" class="form-control" id=""placeholder="Enter Your Employee Name">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Email Id</label>
                    <input type="email" name="email"class="form-control" id=""placeholder="Enter Email Id">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Moblie No</label>
                    <input type="number" name="phone" class="form-control" id=""placeholder="Enter Moblie Number">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Ext No</label>
                    <input type="number" name="ext" class="form-control" id="" placeholder="Enter ExtNo">
                </div>
                <tb>
                <a href="index.php"class="btn btn-danger">Cancel</a>
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
         </form>

            </div>
           </div>
        </div>
    </div>
</div>

<?php include("include/footer.php")?>



