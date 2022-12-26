<?php
include'../model/dbConnect.php';
function branch($B_NAME,$M_ID,$R_ID){
    $conn = connect();
    $sql = oci_parse($conn,"INSERT INTO branch(b_id,B_NAME,M_ID,R_ID) VALUES (branch_seq.nextval,'$B_NAME',$M_ID,$R_ID)") ;
    $res = oci_execute($sql);
    return $res;
}
function food($fname,$amount,$quantity,$des){
    $conn = connect();
    $sql = oci_parse($conn,"INSERT INTO food_item(i_id,i_name,i_amount,i_quantity,I_DESCRIPITION) VALUES (food_seq.nextval,'$fname',$amount,$quantity,'$des')") ;
    $res = oci_execute($sql);
    return $res;
}
?>