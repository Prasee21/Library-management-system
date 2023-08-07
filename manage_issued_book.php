<?php
include "db_conn.php";
include "user_header.php";
$reg=$_SESSION['reg'];
$query = "select * from issuedbook join book on issuedbook.bookid=book.bookid join student on student.regno = issuedbook.regno where student.regno='$reg' ";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Manage Issued Book
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
    background-image: url('assets/img/images1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
}
h1{
    color: #000000;
}
</style>
<body>
<section class="container my-2  w-50 text-dark p-2 ">
<div class="glass-effect">
    <div class="container-fluid">
        <header class="text-left">
            <h6>BOOKS ISSUED</h6>
        </header>
    </div>
    <div class="container" style="margin-top: 3em;">
        <form class="d-flex">
            <input class="form-control me 2" type="search" placeholder="search">
            <button class="btn btn-outline-info" type="send">search</button>
        </form>
    </div>

    <section class="container my-2  w-50 text-dark p-2 ">
    <table width="100%" align="center">
        <tr>
       
        <th>Student Name</th>
        <th>Book Name</th>
        <th>Author ID</th>
        <th>Issued Date</th>
        <th>Return Date</th>
        
        </tr>

        <tr>
        <?php
    
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
          
            <td> <?php echo $row['name']; ?> </td>  
            <td><?php echo $row['title']; ?> </td>  
            <td> <?php echo $row['authorid']; ?></td>  
            <td> <?php echo $row['issuedate']; ?></td>  
            <td> <?php echo $row['duedate']; ?></td>  
                  </tr>
        <?php
        }

        ?>

        </table>
    </div>
        </section>
</body>
</head>
</html>