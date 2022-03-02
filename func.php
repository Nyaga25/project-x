<?php
$con = mysqli_connect("localhost","root","","project x");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from logintb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
    header("location:admin.php");
}
else
{
           echo "<script>alert('Error login')</script>";
     echo "<script>window.open('login.php','_self')</script>";
 }  
}
if(isset($_POST['pat_submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $docapp=$_POST['docapp'];
    $query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname','$lname','$email','$contact','$docapp')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Appointment registered.')</script>";
        echo "<script>window.open('admin.php','_self')</script>";
    }

}




?>