<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<style type="text/css">
    #ab1:hover{cursor: pointer;}
</style>

<body style="background:url('images/hospital2.jpg') no-repeat;background-size:cover;"> 

    
    <div class="container" style="width:400px;margin-top:100px;">
    <div class="card">
    <img src="images/hospital3.jpg" class="card-img-top">
    <div class="card-body">
<form class="form-group" action="func.php" method="POST">
<label>username :</label><br>
<input type="text" name="username" class="form-control" placeholder="enter username"><br>
<label>password :</label><br>
<input type="password" name="password" class="form-control" placeholder="enter password"><br>
<input type="submit" name="login_submit" id="ab1" class="btn-primary">
</form>
    </div>
    </div>
    </div>
    










    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
</body>
</html>