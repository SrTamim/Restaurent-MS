<?php
include '../model/dbconnect.php';
function plsqldb1($mid,$msal){

    $conn = connect();
    $sql = 'BEGIN final_project.MANAGER_SAL_UPDATE(:mid, :msal); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':mid',$mid,32);
    oci_bind_by_name($stmt,':msal',$msal,32);
    return oci_execute($stmt);
    
}

function plsqldb2($cid){

    $conn = connect();
    $sql = 'BEGIN final_project.customer_delete(:cid); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':cid',$cid,32);
    return oci_execute($stmt);
    
}
function plsqldb3($coid,$coname,$conumber,$coaddress,$zipcode){

    $conn = connect();
    $sql = 'BEGIN final_project.cshop_insertion(:cid,:cname,:cphone,:cadd ,:czip ); END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':cid',$coid,32);
    oci_bind_by_name($stmt,':cname',$coname,32);
    oci_bind_by_name($stmt,':cphone',$conumber,32);
    oci_bind_by_name($stmt,':cadd',$coaddress,32);
    oci_bind_by_name($stmt,':czip',$zipcode,32);
    return oci_execute($stmt);
    
}

function plsqldb4($mid){

    $conn = connect();
    $sql = 'BEGIN :msal:=manSal(:mid);END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':mid',$mid,32);
    oci_bind_by_name($stmt,':msal',$msal,32);
    oci_execute($stmt);
    echo "Sal : $msal";
    
}

function plsqldb5($wid){

    $conn = connect();
    $sql = 'BEGIN :wsal:=waiterSal(:wid);END;';
    $stmt = oci_parse($conn,$sql);
    oci_bind_by_name($stmt,':wid',$wid,32);
    oci_bind_by_name($stmt,':wsal',$wsal,32);
    oci_execute($stmt);
    echo "Sal : $wsal";
    
}
?>