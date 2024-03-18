<?php
// $conn = mysqli_connect("localhost","root","","empinfo");

 include("dbconfig.php");
if(isset($_POST['submit']))
{
// $emid database name )= $_POST['empid(variables name)'];
$empid =$_POST['empid'];
$enam =$_POST['enam'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$ext =$_POST['ext'];

$query="insert into employee(empid,enam,email,phone,ext) values ('$empid','$enam','$email','$phone','$ext')";
$query_run = mysqli_query($conn,$query);
if($query_run)
{
//  echo"Suuessfully";
 header('location: index.php');
}
else
{
// echo "Something Went Wrong";
header('location: create.php');
}
}
// -----------UPDATE------------------

if(isset($_POST['update']))
{
    $update_id =$_POST['eid'];
    $empid =$_POST['empid'];
    $enam =$_POST['enam'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $ext =$_POST['ext'];

$que_update ="update employee SET empid='$empid',enam='$enam ',email='$email',phone='$phone',ext='$ext' where id='$update_id'";
$que_update_run=mysqli_query($conn,$que_update);
if($que_update_run)
{
    echo "Data Update";
 header("location: index.php");
}
else
{
    echo "Data Not Update";
    header("location: index.php");
}
}

// ------------------DELETE-------------------

if(isset($_POST['delete']))
{
    $delete_id =$_POST['delete_id'];
    $que_delete="delete from employee where id='$delete_id'";
    $que_delete_run=mysqli_query($conn,$que_delete);
    if($que_delete_run)
    {
        echo "Data Deleted";
        header("location: index.php");
    }
    else{
        echo "Data Not Deleted";
        header("location: index.php");
    }

}



?>