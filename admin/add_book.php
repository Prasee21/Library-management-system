<?php
include "../db_conn.php";
include "admin_header.php";

if(isset($_POST["add"]))
{
    $booktitle = $_POST['booktitle'];
    $authorname = $_POST['authorname'];
    $category = $_POST['category'];
    $edition = $_POST['edition'];
    $price = $_POST['price'];
    $ISBN = $_POST['ISBN'];
    $coverage = $_POST['coverage'];
    $query1 = "select authorid from author where name='$authorname'";
    $result=mysqli_query($conn,$query1);
    $row = mysqli_fetch_assoc($result);
    $authorid=$row['authorid'];

    $query2 = "select * from category where name='$category'";
    $result=mysqli_query($conn,$query2);
    $row = mysqli_fetch_assoc($result);
    $catid=$row['catid'];


    $query = "INSERT INTO book(`title`, `authorid`, `catid`, `edition`, `price`, `ISBN`, `img`) VALUES ('$booktitle','$authorid','$catid','$edition','$price','$ISBN','$coverage')";

    $res=mysqli_query($conn,$query);
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
            Add book
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
        padding: 0;
        
    }
   div{
    color: black;
    font-size: 20px;
    font-weight: 700;
   } 
   .container{
        /*background-color: rgb(62, 61, 158);*/
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
</style>
</head>
<body>

    <section class="container my-2  w-50 text-dark p-2">
    <div class="glass-effect">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h4>ADD BOOK</h4>
                </div>

              <div class="form-group col-md-6">
                <label for="inputtitle">Book Title<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputtitle" name="booktitle" placeholder="Book title">
              </div>
            </div>
            <div class="form-group col-md-6">
                <label for="an">Author Name</label>
                <select id="an" class="form-control" name="authorname">
                <?php
                            $query = "select * from author";
                            $result=mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                                <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                                <?php } ?>
                            
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="bc">Book Category</label>
                <select id="bc" class="form-control" name="category">
                <?php
                            $query = "select * from category";
                            $result=mysqli_query($conn,$query);
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                                <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
                                <?php } ?>
                            
                </select>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inpute">Book Edition<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="inpute" name="edition">
              </div>
              
              <div class="form-group col-md-6">
                <label for="inputp">Book Price<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputp" name="price">
              </div>
              <div class="form-group col-md-6">
                <label for="inputi">Book ISBN<span style="color:red">*</span></label>
                <input type="text" class="form-control" id="inputi" name="ISBN">
              </div>
            </div>
            <div class="form-group col-md-6">
                <label for="inputcp">Book Coverpage<span style="color:red">*</span></label>
                <input type="file" class="form-control" id="inputcp" name="coverage" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG">
            </div>
     
                
            <input type="submit" class="btn btn-primary btn-lg btn-block" name="add" value="ADD"></button>
</div>
       
          </form>
    </section>
</body>
</html>