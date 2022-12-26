<?php
include'../model/dbConnect.php';
  function register($name,$uname,$email,$pass,$gender){
     $conn = connect();
     $sql = oci_parse($conn,"INSERT INTO UINFORMATION(NAME,UNAME,EMAIL,PASS,GENDER) VALUES ('$name','$uname','$email','$pass','$gender')") ;
     $res = oci_execute($sql);
     return $res;
}


function get($userName){
  $conn = connect();
  $query = oci_parse($conn,"SELECT * FROM UINFORMATION WHERE uname = ?");
  $res = oci_execute($query);
  $row = oci_fetch_all($query,$res);
  return $row;
}


?> 