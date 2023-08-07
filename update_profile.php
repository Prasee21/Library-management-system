<?php
include "db_conn.php";
include "user_header.php";

if(isset($_POST['update']))
{
  $regno=$_POST['regno'];
  $name=$_POST['name'];
  $course=$_POST['course'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $dept=$_POST['dept'];
  $year=$_POST['year'];

  $query = "UPDATE `student` SET name='$name',email='$email',phone='$phone',course='$course',department='$dept',year='$year' WHERE regno='$regno'";

  mysqli_query($conn,$query);
  echo 
  "
  <script> alert('Updated sucessfully'); </script>
";

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Update Profile
        </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
    *{
        box-sizing: border-box;
        margin: 7px;
        padding: 0;
        
    }
   div{
    color: black;
    font-size: 20px;
    font-weight: 700;
   } 
   .container{
        background-color: rgb(62, 61, 158);
   }
   h3{
    background-color:#391378;
    color: #d10bc1;
   }
   body{
    background-color: gray;
   }
 
</style>
</head>
<body>
    <div class="container-fluid ">
        <header class="text-left">
        </header>
    </div>
    <section class="container my-2  w-50 text-dark p-2">
    <form method="post">
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h3>MY PROFILE</h3>
                </div>
                <div class="form-group col-md-6">
                  <label for="sid">Student Id:</label>
                  <input type="text" class="form-control" id="sid" name="regno" placeholder="Student Id">
                </div>
              <div class="form-group col-md-6">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
              </div>
              <div class="form-group col-md-6">
                <label for="course">Course:</label>
                <input type="text" class="form-control" id="course" name="course" placeholder="Course">
              </div>
            </div>
            <div class="form-group col-md-6">
                <label for="phone">Phone No:</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No">
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email Id:</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email Id">
              </div>
              <div class="form-group col-md-6">
                <label for="dept">Department:</label>
                <input type="text" class="form-control" id="dept" name="dept" placeholder="Department">
              </div>
              
              <div class="form-group col-md-6">
                <label for="year">Year:</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Year">
              </div>  
            <input type="submit" class="btn btn-primary btn-lg btn-block" name="update" value="UPDATE"></button>
          </form>
    </section>
</body>
</html>