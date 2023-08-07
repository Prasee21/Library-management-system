<?php
include "../db_conn.php";
include "admin_header.php";

$query = "select * from returnbook join book on returnbook.bookid=book.bookid join issuedbook on issuedbook.bookid=book.bookid join fine on fine.bookid=issuedbook.bookid";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Manage Issued History
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
<section class="container my-2  w-50 text-dark p-2 ">
<div class="glass-effect">
    <div class="container-fluid">
        <header class="text-left">
            <h1>MANAGE ISSUED HISTORY</h1>
        </header>
    </div>

    <div class="container" style="margin-top: 3em;">
        <form class="d-flex">
            <input class="form-control me 2" type="search" placeholder="search">
            <button class="btn btn-outline-info" type="send">search</button>
        </form>
    </div>

    <table width="100%" align="center">
        <tr>
        <th>#</th>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Issued Book</th>
        <th>Issued Date</th>
        <th>Returned Date</th>
        <th>Fine(if any)</th>
        </tr>

        <tr>
        <?php
    
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <td></td>
            <td> <?php echo $row['bookid']; ?></td>   
            <td> </td>  
            <td><?php echo $row['title']; ?> </td>  
            <td> <?php echo $row['issuedate']; ?></td>  
            <td> <?php echo $row['returndate']; ?></td>  
            <td> <?php echo $row['amt']; ?></td>  
                  </tr>
        <?php
        }

        ?>

        </table>
        </section>
</body>
</head>
</html>