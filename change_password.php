
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
        background-color: rgb(62, 61, 158);
   }
   h3{
    background-color:#391378;
    color: #d10bc1;
   }
   body{
    background-color: gray;
   }
  button{
    color: white;
  
  }
</style>
</head>
<?php
include "db_conn.php";
include "user_header.php";
if(isset($_POST["submit"]))
{
    $sql = "SELECT * FROM student WHERE userid= ?";
    $statement = $conn->prepare($sql);
    $statement->bind_param('i', $_SESSION["userid"]);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_assoc();

    if (! empty($row)) {
        $hashedPassword = $row["password"];
        $password = PASSWORD_HASH($_POST["inputp"], PASSWORD_DEFAULT);
        if (password_verify($_POST["inputcp"], $hashedPassword)) {
            $sql = "UPDATE users set password=? WHERE userid=?";
            $statement = $conn->prepare($sql);
            $statement->bind_param('si', $password, $_SESSION["userid"]);
            $statement->execute();
            $message = "Password Changed";
        } else
            $message = "Current Password is not correct";
    }
}
?>
<body>
    <div class="container-fluid">
        <header class="text-left">
            <h1>CHANGE PASSWORD</h1>
        </header>
    </div>
    <section class="container my-2  w-50 text-dark p-2 ">
        <form>
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h3>CHANGE PASSWORD</h3>
                </div>
                <div class="form-group col-md-11">
                    <label for="inputcp">Current Password</label>
                    <input type="password" class="form-control" id="inputcp">
                </div>
                <div class="form-group col-md-11">
                    <label for="inputp">Enter New Password</label>
                    <input type="password" class="form-control" id="inputp">
                </div>
                <div class="form-group col-md-11">
                    <label for="inputcop">Confirm Password</label>
                    <input type="password" class="form-control" id="inputcop">
                </div>
                        </div>
                        <div>
                          <button type="submit" class="btn btn-primary btn-lg">CHANGE</button>
                        </div>
        </form>
    </section>            
</body>

</html>