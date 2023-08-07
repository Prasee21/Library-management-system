<?php
include "../db_conn.php";
include "admin_header.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Issued Book Details
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
<body>
    <div class="container-fluid">
        <header class="text-left">
            <h1>ISSUED BOOK DETAILS</h1>
        </header>
    </div>
    <section class="container my-2  w-50 text-dark p-2 ">
        <form method="post">
            <div class="form-row">
                <div class="form-group col-md-13">
                    <h3>ISSUED BOOK DETAILS</h3>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputname">Student Id</label>
                    <input type="text" class="form-control" id="inputid" placeholder="Student id">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputname">Student Name</label>
                    <input type="text" class="form-control" id="inputname" placeholder="Student name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputemail">Student Email</label>
                    <input type="email" class="form-control" id="inputemail" placeholder="Student email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputcon">Student Contact No</label>
                    <input type="number" class="form-control" id="inputcon" placeholder="Student contact no">
                </div>
                <!--<div class="form-group col-md-6">
                    <label for="inputbi">Book Image</label>
                    <input type="image" class="form-control" id="inputbi">
                </div>-->

                <div class="form-group col-md-6">
                    <label for="inputbn">Book Name</label>
                    <input type="text" class="form-control" id="inputbn" placeholder="Book name">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputis">ISBN Number</label>
                    <input type="text" class="form-control" id="inputis" placeholder="ISBN number">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputbd">Book Issued Date</label>
                    <input type="datetime" class="form-control" id="inputbd">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputbrd">Book Returned Date</label>
                    <input type="datetime" class="form-control" id="inputbrd">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputf">Fine(in rupees)</label>
                    <input type="number" class="form-control" id="inputf">
                </div>
            </div>
            <div>
                <input type="submit" class="btn btn-primary btn-lg" name="submit" value="RETURN BOOK"></input>
            </div>
        </form>
    </section>            
</body>

</html>