<?php
include '../model/triggerdb.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if (isset($_POST['submit1'])) {
    $fid = $quantity = "";
    $flag = false;
    if (empty($_POST['fid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['quantity'])) {
        echo "quantity required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $fid = input_data($_POST['fid']);
        $quantity = input_data($_POST['quantity']);
        $res = trigger1($quantity,$fid);
        if($res){
            echo "trigger mission failed";
        }
        else{
            echo"trigger mission successful";
        }
    }
}
if (isset($_POST['submit2'])) {

    $csid = $address = "";
    $flag = false;
    if (empty($_POST['csid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['address'])) {
        echo "address required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $csid = input_data($_POST['csid']);
        $address = input_data($_POST['address']);
        $res = trigger2($csid,$address);
        if($res){
            echo "trigger mission successful";
        }
        else{
            echo"trigger mission failed";
        }
    }
}

if (isset($_POST['submit3'])) {
   
    $csid = $cname = "";
    $flag = false;
    if (empty($_POST['csid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['cname'])) {
        echo "name required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $csid = input_data($_POST['csid']);
        $cname = input_data($_POST['cname']);
        $res = trigger3($csid,$cname);
        if($res){
            echo "trigger mission successful";
        }
        else{
            echo"trigger mission failed";
        }
    }
}
?>