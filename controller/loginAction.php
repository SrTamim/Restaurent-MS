<?php
include '../model/authentic.php';
$uname = $pass = "";
$flag = false;
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if ($_SERVER['REQUEST_METHOD']==="POST"){
    if (empty($_POST['uname'])){
        echo "Username required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['pass'])){
        echo "Password required";
        echo "<br>";
        $flag = true;
    }
}
if (!$flag){
    $uname = input_data($_POST['uname']);
    $pass = input_data($_POST['pass']);
    $res = login($uname,$pass);
    if($res){
        
        session_start();
        $_SESSION['name'] = $res['NAME'];
        $_SESSION['gender'] = $res['GENDER'];
        $_SESSION['uname'] = $uname;
        $_SESSION['email'] = $res['EMAIL'];
        $_SESSION['pass'] = $pass;

        
        header("location: http://localhost/PROJECT/RESTAURANT_MNG_SYS/view/home.php");
    }
    else{
       header("location: http://localhost/PROJECT/RESTAURANT_MNG_SYS/index.html");
    }
}
?>