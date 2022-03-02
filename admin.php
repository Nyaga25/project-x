<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> HOSPITAL REFERRAL SYSTEM </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron" style="background:url('images/hospital.jpg') no-repeat;background-size:cover;height:500px;"></div>
<div class="container-fluid">
<div class="row">
 <hr>
 <div class="col-md-3">
     
     <div class="list-group " >
         <a href="" class="list-group-item active" style="background-color: #3498DB; 
         color:#ffffff;border-color:#3498DB;"> Patients</a>
         <a href="" class="list-group-item">patient Details</a>
         <a href="" class="list-group-item">Add new patient</a>
         <a href="" class="list-group-item">Check out/ payment</a>
        </div>
        <hr>
        <div class="list-group " >
         <a href="" class="list-group-item active" style="background-color: #3498DB; 
         color:#ffffff;border-color:#3498DB;"> Doctors</a>
         <a href="" class="list-group-item">Doctor Details</a>
         <a href="" class="list-group-item">Add new staff</a>
         <a href="" class="list-group-item">remove staff members</a>
        </div>
 </div>
     <div class="col-md-8">
         <div class="card">
             <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
            <h3>Book an appointment</h3>
            </div>
             <div class="card-body">
                 <form class="form-group" action="func.php" method="post">
                <label>First Name :</label>
                <input type="text" name="fname" class="form-control"><br>
                <label>Last Name :</label>
                <input type="text" name="lname" class="form-control"><br>
                <label>Email id :</label>
                <input type="text" name="email" class="form-control"><br>
                <label> Contact :</label>
                <input type="text" name="contact" class="form-control"><br>
                <label>Doctor Appointment :</label>
                
                <select class="form-control">
                    <option value="Dr Nick From 6pm to 8pm">Dr Nick From 6pm to 8pm</option>
                    <option value="Dr David From 4pm to 6pm">Dr David From 4pm to 6pm</option>

                </select><br>
                <input type="submit" name="pat_submit" class="btn btn-primary" value="Enter appointment">
                  </form>
 

             </div>
         </div>
     </div>
     <div class="col-md-1"></div>
   </div>
    </div>
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>