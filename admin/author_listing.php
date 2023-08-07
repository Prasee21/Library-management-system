<?php
include "../db_conn.php";
include "admin_header.php";

$query = "SELECT * FROM author";
$result=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Author listing
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
</style>
<body>
   
   
    <section class="container my-2  w-50 text-dark p-2 ">
    <div class="glass-effect">
    <div class="container-fluid">
        <header class="text-left">
            <h6>VEIW AUTHOR</h6>
        </header>
    </div>
    <table width="100%" align="center">
        <tr><th>Author Id</th>
        <th>Author Name</th>
        </tr>

        <tr>
        <?php
    
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <td> <?php echo $row['authorid']; ?></td>   
            <td><?php echo $row['name']; ?> </td>  
            
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