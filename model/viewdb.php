<?php
include '../model/dbconnect.php';
function view1(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from manager_view") ;
    $res = oci_execute($sql);
    return $sql;
}
function view2(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from avg") ;
    $res = oci_execute($sql);
    return $sql;
}

function view3(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from newamount") ;
    $res = oci_execute($sql);
    return $sql;
}

function view4(){
    $conn = connect();
    $sql = oci_parse($conn,"select * from shop_info") ;
    $res = oci_execute($sql);
    return $sql;
}
?>