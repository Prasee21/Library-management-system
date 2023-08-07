<!DOCTYPE html>

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/newstyle1.css">
<title>
    login
</title>
    </head>
    <style>
        body{
    background-image: url('../img/loginpage.jpg');
    background-repeat: no-repeat;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
        }
        </style>
    <body>
    <section class="main">
    <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-box px-5 py-4"></div>
                    <form class="form-conatiner" role="form" method="post" action="login.php">
                        <h2 class="text-center mb-4 text-black">LOGIN</h2>
                        <div class="mb-3">
                          <label for="Register" class="form-label"  id="reg" >Regno</label>
                          <input type="text" class="form-control" id="regno" name="regno" required autocomplete="off" autofocus>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label" id="pass"  >Password</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button  style="background-color:green" class="submit form-control mb-3" value="LOGIN">LOGIN</button>
                        <?php if (isset($_GET['error'])) 
                        { ?>
                            <p class="err"><?php echo $_GET['error']; ?></p>
                        <?php 
                        } 
                        ?>
                        
                        <p class="text-center text-black">Dont't have account? <a href="registration1.php" class="link">Sign Up</a></p>
                      </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>