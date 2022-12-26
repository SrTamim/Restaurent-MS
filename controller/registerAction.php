<?php
include'../model/registrationdb.php';

$name = $gender= $uname = $pass = "";
$success = $error = "";
$flag = false;

function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

if ($_SERVER['REQUEST_METHOD']==='POST') {
    if (empty($_POST['name'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }

    if (empty($_POST['gender'])) {
        echo "Gender selection required";
        echo "<br>";
        $flag = true;
    }

    if (empty($_POST['uname'])) {
        echo "Username required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['email'])) {
        echo "Email required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['pass'])) {
        echo "Password required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['cpass'])) {
        echo "Confirm Password required";
        echo "<br>";
        $flag = true;
    }
    
    if (strcmp($_POST['pass'],$_POST['cpass'])!=0) {
        echo "Password and Confirm password doesn't match";
        echo "<br>";
        $flag = true;
    }
    if (strlen($_POST['pass'])<8) {
        echo "Please give atleast 8 digit password";
        echo "<br>";
        $flag = true;
    }

}
if (!$flag) {
    $name = input_data($_POST['name']); 
    $uname = input_data($_POST['uname']);
    $email = input_data($_POST['email']);
    $pass = input_data($_POST['pass']);
    $gender = input_data($_POST['gender']);

    $check = get($uname);
    if (!$check){
        $result = register($name,$uname,$email,$pass,$gender);
        if ($result) {
            header("Location: http://localhost/PROJECT/RESTAURANT_MNG_SYS/index.html");
            
        }
        else{
            header("Location: http://localhost/PROJECT/RESTAURANT_MNG_SYS/view/register.php");
        }
    }
    else{
        echo "<h2 style='color: red;'>User already exist</h2>";
    }

}
?>