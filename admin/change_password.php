<?php
include "../db_conn.php";
include "admin_header.php";

if(isset($_POST["submit"]))
{
    $oldpassword=$_POST['oldpassword'];
    $newpassword=$_POST['newpassword'];
    $cpassword=$_POST['cpassword'];
    $query = "SELECT * FROM admin";
    $result=mysqli_query($conn,$query);

    if(isset($_POST['oldpassword']) && isset($_POST['newpassword']) && isset($_POST['cpassword']))
    {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $oldpassword = validate($_POST['oldpassword']);
        $newpassword = validate($_POST['newpassword']);
        $cpassword = validate($_POST['cpassword']);

        if(empty($oldpassword))
        {
            echo "<script> alert('Old password is required');</script>";
        }
        else if(empty($newpassword))
        {
            echo "<script> alert('New password is required');</script>";
        }
        else if($newpassword !== $cpassword)
        {
            echo "<script> alert('Confirm password should match newpassword');</script>";
        }
        
    else if($newpassword == $cpassword || $newpassword != null ||$cpassword != null)
    {
        $query1 = "UPDATE `admin` SET `password`='$newpassword'";

        mysqli_query($conn,$query1);
        echo "<script> alert('Password changed sucessfully'); </script>";
    }
    else
        {
            echo "";
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Change password
        </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
     .glass-effect {
        background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(5px);
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
    *{
        box-sizing: border-box;
        margin: 7px;
        padding: 0px;
        
    }
    div{
    color: black;
    font-size: 20px;
    font-weight: 700;
   } 
   .container{
        
   }
   h3{
    background-color:#391378;
    color: #d10bc1;
   }
   body{
    background-color: white;
    background-image: url('../assets/img/images1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
   }
  button{
    color: white;
  
  }
</style>
</head>
<body>
    <div class="container-fluid">
        <header class="text-left">
           
        </header>
    </div>
    
    <section class="container my-2  w-50 text-dark p-2 ">
        <div class="glass-effect">
        <form method="post">
            
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h6>CHANGE PASSWORD</h6>
                </div>
                <div class="form-group col-md-11">
                    <label for="oldpassword">Current Password</label>
                    <input type="password" class="form-control" id="oldpassword" name="oldpassword">
                </div>
                <div class="form-group col-md-11">
                    <label for="newpassword">Enter New Password</label>
                    <input type="password" class="form-control" id="newpassword" name="newpassword" >
                 <!--   required pattern="/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/" -->
                </div>
                <div class="form-group col-md-11">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cpassword" name="cpassword" >
                </div>
                        </div>
                        <div>
                          <input type="submit" class="btn btn-primary btn-lg" value="CHANGE" name="submit"></input>
                        </div>
</div>
        </form>
    </section>            
</body>

</html>