<?php
include "db_conn.php";

if(isset($_POST["submit"]))
{
    $name = $_POST['name'];
    $regno = $_POST['regno'];
    $Course = $_POST['Course'];
    $Department = $_POST['Department'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $phoneno = $_POST['phno'];
    $password = $_POST['password'];
    $conpassword = $_POST['password1'];
    $Image = $_POST['Image'];

    $query = "INSERT INTO `student`(`name`, `regno`, `email`, `phone`, `course`, `department`, `Pass`, `year`, `img`) VALUES ('$name','$regno','$email','$phoneno','$Course','$Department','$password','$date','$Image')";
    
    mysqli_query($conn,$query);
    echo "<script> alert('Registered sucessfully'); </script>";

}
    


?> 
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  
    </script>
    <center>
    <div class="wrapper">
        <div class="container main">
        
            <div class="row">
                <div class="hi"></div>
                <div class="col-md-6 right">
                    <div class="input-box">
                       <header>REGISTRATION</header>
                       <form method="post">
                       <table>
                            <tr>
                                <td>Name </td>
                                <td><input type="text" name="name" id="name" required pattern="[A-Za-z\s]{3,}" oninvalid="this.setCustomValidity('Name can not contain numeric values/Minimum length is 3 characters')" onchange="this.setCustomValidity('')"></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <td>Email </td>
                                <td><input type="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" oninvalid="this.setCustomValidity('Please enter a valid email address.')" onchange="this.setCustomValidity('')"></td>
                            </tr>

                            <tr>
                                <td>Regno </td>
                                <td><input type="text" name="regno" required pattern="[0-9]+" maxlength="10" oninvalid="this.setCustomValidity('Only Numeric Values are allowed')" onchange="this.setCustomValidity('')"></td>
                                <td>Phoneno </td>
                                <td><input type="text" name="phno" required pattern="^[6-9]\d{9}$" oninvalid="this.setCustomValidity('Please enter a valid Phone Number.')" onchange="this.setCustomValidity('')"></td>
                            </tr>

                            <tr>
                                <td>Course</td>
                                <td><select name="Course" required >
                                    <option>
                                        Select
                                    </option>
                                    <option value="MCA">MCA</option>
                                    <option value="MTech">MTech</option>
                                    <option value="BTech">BTech</option>
                                    <option value="MSC">MSC</option>
                                    <option value="PhD">PhD</option>
                                </select></td>   
                                <td>Password</td>    
                                <td><input type="password" name="password" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" oninvalid="this.setCustomValidity('Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and be at least 8 characters long.')" onchange="this.setCustomValidity('')"></td>                 
                            </tr>

                            <tr>
                                <td>Department</td>
                                <td><select name="Department" required>
                                    <option>
                                        Select
                                    </option>
                                    <option value="DSCA">DSCA</option>
                                    <option value="CS">Comp.Science</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Physics">Physics</option>
                                </select></td>   
                                <td>Confirm Password</td>    
                                <td><input type="password" name="password1" required></td>                 
                            </tr>

                            <tr>
                                <td>Year </td>
                                <td><input type="date" name="date" required></td>
                                <td>Upload Photo</td>
                                <td><input type="file" name="Image" placeholder="pic path" accept="image/jpg,image/JPG,image/jpeg,image/JPEG,image/png,image/PNG" required="required"></td>
                            </tr>
                        </table>
                        
                        <div class="input-field">
                            <input type="submit" class="submit" name="submit" value="REGISTER" >
                        </div>
                        </form>
                    </div>
                </div>
            </div>
       
            </div>
        </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>