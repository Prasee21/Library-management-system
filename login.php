<?php
include "db_conn.php";

if (isset($_POST['regno']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$regno = validate($_POST['regno']);
	$pass = validate($_POST['password']);

	
	$sql = "SELECT * FROM student WHERE regno='$regno' AND Pass='$pass'";

	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
        if ($row['regno'] === $regno && $row['Pass'] === $pass) {
			header("Location: user_dashboard.php");
			$_SESSION['reg']=$row['regno'];

           
		    exit();
        }else{
			header("Location: login1.php?error=Incorect Register Number or Password");
		    exit();
		}
	}else{
		header("Location: login1.php?error=Incorect Register Number or Password");
	    exit();
	}
}
?>