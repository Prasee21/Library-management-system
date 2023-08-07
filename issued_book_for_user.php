<?php
include "db_conn.php";
include "user_header.php";

$query = "select * from returnbook join book on returnbook.bookid=book.bookid join issuedbook on issuedbook.bookid=book.bookid join fine on fine.bookid=issuedbook.bookid";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Issued Book For User
        </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<style>
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
    background-color: gray;
}
</style>
<body>
    <section class="container my-2  w-50 text-dark p-2">
    <form method="post">
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h3>ISSUED BOOKS</h3>
                </div>
            <div align="right">    
              <div align="left" class="form-group col-md-6">
                <label for="inputid">Search:</label>
                <input type="search" class="form-control" id="search" placeholder="Search">
              </div>
              </div>
              </div>
              </form>
              </section>
    <section class="container my-2  w-50 text-dark p-2 ">
    <table width="100%" align="center">
    <tr><td>#</td>
        <td>Book Name</td>
        <td>ISBN</td>
        <td>Issued Date</td>
        <td>Return Date</td>
        <td>FINE</td>
        </tr>
<tr>
        <?php
    
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <td> <?php echo $row['bookid']; ?></td>   
            <td><?php echo $row['title']; ?> </td>  
            <td><?php echo $row['ISBN']; ?> </td>  
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