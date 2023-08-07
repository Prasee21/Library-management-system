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

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            register
        </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./assets/css/newstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 d-flex align-items-center">
                    <div class="text text-center">
                        <h1 class="text-black"><b>Being Student Is Easy.....</b></h1>
                        <h2 class="text-black"><b>But Learning Requires Actual Work!!!!</b></h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-12">
                    <div class="form-box px-5 py-4">
                        <form method="post">
                            <h2 class="text-center mb-4 text-black">Register</h2>
                            <input type="text" name="name" id="name" required pattern="[A-Za-z\s]{3,}" oninvalid="this.setCustomValidity('Name can not contain numeric values/Minimum length is 3 characters')" onchange="this.setCustomValidity('')" placeholder="Enter the name" class="form-control mb-3" autofocus>
                            <input type="text" name="regno"  placeholder="Enter the regno" class="form-control mb-3" required pattern="[0-9]+" maxlength="10" oninvalid="this.setCustomValidity('Only Numeric Values are allowed')" onchange="this.setCustomValidity('')">
                            <select class="form-select mb-3 " name="Course">
                                <option>
                                    Select Course
                                </option>
                                <option value="MCA">MCA</option>
                                <option value="MTech">MTech</option>
                                <option value="BTech">BTech</option>
                                <option value="MSC">MSC</option>
                                <option value="PhD">PhD</option>
                            </select>
                            </select>
                            <select class="form-select mb-3 " name="Department" required>
                                <option>
                                    Select Department
                                </option>
                                <option value="DSCA">DSCA</option>
                                <option value="CS">Comp.Science</option>
                                <option value="Chemistry">Chemistry</option>
                                <option value="Mathematics">Mathematics</option>
                                <option value="Physics">Physics</option>
                            </select>
                            </select>
                            <input type="date" name="date" placeholder="Enter the year" class="form-control mb-3" aria-placeholder="select year">
                            <input type="email" name="email" placeholder="Enter the email" class="form-control mb-3" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" oninvalid="this.setCustomValidity('Please enter a valid email address.')" onchange="this.setCustomValidity('')">
                            <input type="text" name="phno" placeholder="Enter the phone number" class="form-control mb-3" required pattern="^[6-9]\d{9}$" oninvalid="this.setCustomValidity('Please enter a valid Phone Number.')" onchange="this.setCustomValidity('')">
                            <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="Enter the password" class="form-control border-end-0" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$" oninvalid="this.setCustomValidity('Password must contain at least one uppercase letter, one lowercase letter, one digit, one special character, and be at least 8 characters long.')" onchange="this.setCustomValidity('')">
                                <span class="input-group-text bg-white border-start-0"><i class="fa-solid"></i></span>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="password1" placeholder="Re enter the password" class="form-control border-end-0" >
                                    <span class="input-group-text bg-white border-start-0"><i class="fa-solid"></i></span>
                            </div>
                            
                            <div class="input-group mb-3">
                                <input type="file" name="Image" id="Image" placeholder="pic path" accept="image/jpg,image/JPG,image/jpeg,image/JPEG,image/png,image/PNG" required="required"></td>
                                <span class="input-group-text bg-white border-start-0"><i class="fa-solid"></i></span>
                            </div>
                                <button class="submit form-control mb-3" type="submit" name="submit" id="submit">Register</button>
                            <p class="text-center">Already registerd? <a href="login1.php" class="link"><b>Log In</b></a></p>

                        </form>
                    </div>
                </div> 
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
    </html>