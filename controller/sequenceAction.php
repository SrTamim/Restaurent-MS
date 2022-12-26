<?php
include '../model/sequencedb.php';
function input_data($data) 
{  
$data = trim($data); 
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
if(isset($_POST['submit1'])){
    $B_NAME = $M_ID = $R_ID = "";
    $flag = false;
    if (empty($_POST['B_NAME'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['M_ID'])) {
        echo "M_ID required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['R_ID'])) {
        echo "R_ID required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $B_NAME = input_data($_POST['B_NAME']);
        $M_ID = input_data($_POST['M_ID']);
        $R_ID = input_data($_POST['R_ID']);
        $res = branch($B_NAME,$M_ID,$R_ID);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }
}

if(isset($_POST['food'])){
    $fname = $quantity = $amount = $des="";
    $flag = false;
    if (empty($_POST['fname'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['quantity'])) {
        echo "quantity required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['amount'])) {
        echo "amount required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['des'])) {
        echo "Description required";
        echo "<br>";
        $flag = true;
    }
    if(!$flag){
        $fname = input_data($_POST['fname']);
        $quantity = input_data($_POST['quantity']);
        $amount = input_data($_POST['amount']);
        $des = input_data($_POST['des']);
        $res = food($fname,$amount,$quantity,$des);
        if($res){
            echo "Successful";
        }
        else{
            echo "failed";
        }
    }

}
?>