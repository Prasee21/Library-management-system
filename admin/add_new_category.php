<?php
include "../db_conn.php";
include "admin_header.php";

if(isset($_POST["create"]))
{
    
    $category = $_POST['category'];
    $gridRadios=$_POST['gridRadios'];
    

    $query = "INSERT INTO `category`( `name`, `status`) VALUES ('$category','$gridRadios')";

    mysqli_query($conn,$query);
    echo 
    "
    <script> alert('Added sucessfully'); </script>
";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Add category
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
  margin-top:50px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
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
       /* background-color: rgb(62, 61, 158);*/
   }
   h3{
    background-color:#391378;
    color: #d10bc1;
   }
  
  button{
    color: white;
  
  }
  body{
    background-color: white;
    background-image: url('../assets/img/images1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}
</style>
</head>
<body>


    
    <section class="container my-2  w-50 text-dark p-2 ">
    <div class="glass-effect">
        <form id="myForm" method="post">
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h6>ADD CATEGORY</h6>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputname">Category Name</label>
                    <input type="text" class="form-control" id="nameField" name="category" placeholder="Category name" required pattern="[A-Za-z\s]{3,}" oninvalid="this.setCustomValidity('Name can not contain numeric values/Minimum length is 3 characters')" onchange="this.setCustomValidity('')">
                </div>
                <fieldset class="form-group ">
                    <div class="col">
                      <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                      <div class="col-sm-10">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            Active
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                          <label class="form-check-label" for="gridRadios2">
                            Inactive
                          </label>
                          </div>
                          </div>
                          </div>
                          </fieldset>
                        </div>
                        <div>
                          <input type="submit" class="btn btn-primary btn-lg" name="create" value="CREATE">
                        </div>
</div>
        </form>
    </section>            
</body>

</html>