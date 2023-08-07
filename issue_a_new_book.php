<?php
include "db_conn.php";
include "user_header.php";

if(isset($_POST["submit"]))
{
    $bookid = $_POST['bookid'];
    $regno = $_POST['regno'];

    $query1 = "Select * from book where bookid = '$bookid'";
    $result=mysqli_query($conn,$query1);

    while($row = mysqli_fetch_assoc($result)) 
    {
        $bid = $row['bookid'];
    $query = "INSERT INTO `bookrequest`( `bookid`,`regno`, `date`) VALUES ('$bookid','$regno',curdate())";
    
    $res1=mysqli_query($conn,$query);
    echo "<script> alert('Requested sucessfully'); </script>";
}

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Issue Book
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
        
    }
    div{
    color: black;
    font-size: 20px;
    font-weight: 700;
   } 
   .container{
       /* background-color: rgb(62, 61, 158);*/
   }
   h3{
    background-color:#391378;
    color: #d10bc1;
   }
   body{
    background-color: white;
    background-image: url('assets/img/images1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}
  button{
    color: white;
  
  }
</style>
</head>
<body>
<section class="container my-2  w-50 text-dark p-2 ">
<div class="glass-effect">
    <div class="container-fluid">
        <header class="text-left">
            <!--<h1>ISSUE A NEW BOOK</h1>-->
        </header>
    </div>
   
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h6>REQUEST BOOK</h6>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputname">Student Id<span style="color:red">*</span></label>
                   <input type="text" class="form-control" id="inputid" placeholder="Student id" name="regno" readonly value="<?php echo $_SESSION['reg'];?>"> 
                </div>
                <div class="form-group col-md-6">
                    <label for="inputis">Book ID<span style="color:red">*</span></label>
                    <input type="text" class="form-control" id="inputis" placeholder="Book ID" name="bookid" required>
                </div>
                        </div>
                        <div>
                          <input type="submit" class="btn btn-primary btn-lg" name="submit" value="REQUEST BOOK"></input>
                        </div>
        </form>
       
</div>
    </section>  

</body>

</html>