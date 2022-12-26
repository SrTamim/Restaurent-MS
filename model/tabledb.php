<?php
include'../model/dbConnect.php';
function RESTAURANT_shopShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from RESTAURANT") ;
     $res = oci_execute($sql);
     return $sql;
}

function branchShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from branch") ;
     $res = oci_execute($sql);
     return $sql;
}

function managerShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from manager") ;
     $res = oci_execute($sql);
     return $sql;
}
function waiterShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from waiter") ;
     $res = oci_execute($sql);
     return $sql;
}
function foodShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from food_item") ;
     $res = oci_execute($sql);
     return $sql;
}
function customerShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from customer") ;
     $res = oci_execute($sql);
     return $sql;
}
function cashierShow(){
    $conn = connect();
     $sql = oci_parse($conn,"select * from cashier") ;
     $res = oci_execute($sql);
     return $sql;
}
?>