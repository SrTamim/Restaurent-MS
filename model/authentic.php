<?php
include'../model/dbconnect.php';
function login($userName,$password){
   
    $conn = connect();
    $sql = oci_parse($conn, "select * from UINFORMATION where UNAME='$userName' and PASS='$password'");       
    $res= oci_execute($sql);
    $row = oci_fetch_assoc($sql);
    return $row;
   
    
}

?>