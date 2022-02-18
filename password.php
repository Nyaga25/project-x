<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
<input type="text" name="email" placeholder= "enter email" />
<br><br>
<input type="text" name="password" placeholder= "enter password" />
<br> <br>
<input type="text" name="phone" placeholder= "enter phone number" />
<br> <br>
<input type="submit" name="btnsub" value= "submit" />
    </form>
    <?php
    include('config.php');
    if(isset($_POST[ 'btnsub']))
      {
          $email = $_POST['email'];
          $password = $_POST['password'];
          $phone = $_POST['phone'];
          $encpassword = md5($password);
          $query = "insert into registerdb(email,password,phone)values('$email','$encpassword','$phone')";
          $result = mysqli_query($con,$query);
          if($result)
          {

            echo 'record have been entered successfully';
          }
          else
          {
              echo 'there was an error';

          }
      }

    ?>

</body>
</html>