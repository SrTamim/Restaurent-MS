<?php
include '../model/plsqldb.php';
function input_data($data) 
{  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}

if(isset($_POST['submit1'])){
    $mid = $sal = "";
    $flag = false;

        if (empty($_POST['mid'])) {
            echo "ID Required";
            echo "<br>";
            $flag = true;
        }
        if (empty($_POST['sal'])) {
            echo "Bonus amount required";
            echo "<br>";
            $flag = true;
        }
    
    if (!$flag) {
        $mid = input_data($_POST['mid']);
        $sal = input_data($_POST['sal']);
       $res = plsqldb1($mid , $sal);
       if($res){
           echo "Update successfully";
       }
       else{
           echo"failed the operation";
       }
        
    }
}
if(isset($_POST['submit2'])){
    $cid = "";
    $flag = false;
    if (empty($_POST['cid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (!$flag) {
        $cid = input_data($_POST['cid']);
    
       $res = plsqldb2($cid);
       if($res){
           echo "Delete successfully";
       }
       else{
           echo"failed the operation";
       }
        
    }
}
if (isset($_POST['submit3'])) {
    
    $coid = $coname = $phone = $address = $zipcode = "";
    $flag = false;
    if (empty($_POST['coid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['coname'])) {
        echo "Name Required";
        echo "<br>";
        $flag = true;
    }

    if (empty($_POST['conumber'])) {
        echo " Phone Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['coaddress'])) {
        echo "Address Required";
        echo "<br>";
        $flag = true;
    }
    if (empty($_POST['cozip'])) {
        echo "Zipcode Required";
        echo "<br>";
        $flag = true;
    }
    if (!$flag) {
        $coid = input_data($_POST['coid']);
        $coname = input_data($_POST['coname']);
        $conumber = input_data($_POST['conumber']);
        $coaddress = input_data($_POST['coaddress']);
        $zipcode = input_data($_POST['cozip']);
       $res = plsqldb3($coid,$coname,$conumber,$coaddress,$zipcode);
       if($res){
           echo "Insertion successfully";
       }
       else{
           echo"failed the operation";
       }
        
    }
}
if(isset($_POST['submit4'])){
    $mid = "";
    $flag = false;
    if (empty($_POST['mid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (!$flag) {
        $mid = input_data($_POST['mid']);
    
        plsqldb4($mid);
        
    }
}   

if(isset($_POST['submit5'])){
    $wid = "";
    $flag = false;
    if (empty($_POST['wid'])) {
        echo "ID Required";
        echo "<br>";
        $flag = true;
    }
    if (!$flag) {
        $wid = input_data($_POST['wid']);
    
        plsqldb5($wid);
        
    }
} 

?>