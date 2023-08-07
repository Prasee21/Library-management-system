<?php
include "../db_conn.php";
include "admin_header.php";

$query = "select * from student";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Manage Registered Students
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
    table {
    border-collapse: collapse;
    width: 100%;

}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: rgba(73, 98, 212, 0.644);color: black;}
tr:nth-child(odd){background-color: rgba(73, 98, 212, 0.644);color: #000000;}

th {
    background-color: skyblue;
    color: black;
}
body{
    background-color: white;
    background-image: url('../assets/img/images1.jpg');
    background-size: cover;
    background-repeat: no-repeat;

}
h1{
    color: #000000;
}
</style>
<body>
<script>
  document.getElementById("search").addEventListener("click", function() {
    
        <?php
            if(isset($_POST['search']))
            {
                $regno=$_POST['regno'];
                $query = "SELECT * FROM student where regno='$regno'";
                $result=mysqli_query($conn,$query);
                if(mysqli_num_rows($result) == 0){
                    echo" User not found";
                }
            }
        ?>

});
</script>

    
    

    <section class="container my-2  w-50 text-dark p-2 ">
    <div class="glass-effect">
    <div class="container-fluid">
        <header class="text-left">
            <h6>REGISETRED STUDENTS</h6>
        </header>
    </div>
    <div class="container" style="margin-top: 3em;">
        <form class="d-flex" method="post">
            <input class="form-control me 2" type="search" placeholder="Registration Number" name="regno" id="regno">
            <button class="btn btn-outline-info" type="send" id="search" name="search">search</button>
        </form>
    </div>
</br>
</br>
    <table width="100%" align="center">
        <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Email ID</th>
        <th>Mobile Number</th>
        <th>Course</th>
        <th>Details</th>
        </tr>

        <tr>
        <?php
    
        while($row = mysqli_fetch_assoc($result))
        {
            ?>   
            <td><?php echo $row['regno']; ?> </td>  
            <td><?php echo $row['name']; ?> </td>  
            <td> <?php echo $row['email']; ?></td>  
            <td> <?php echo $row['phone']; ?></td>  
            <td> <?php echo $row['course']; ?></td>  
            <td> <?php echo $row['department']; ?></td>  

                  </tr>
        <?php
        }

        ?>

        </table>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    </div>
</body>
</head>
</html>