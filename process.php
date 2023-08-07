<?php
if(isset($_POST["submit"])){
    
    $name=$_POST['name'];
    $a= array('name'=>$_POST['name'],'email'=>$_POST['email'],'phno'=>$_POST['phno'],'designation'=>$_POST['desig']);
    
    print_r($a);

}
?>