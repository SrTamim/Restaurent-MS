  
<?php

session_start();
if (isset($_SESSION['uname'])) {
session_unset();
session_destroy();


header("location: http://localhost/PROJECT/RESTAURANT_MNG_SYS/index.html");


}


else{


header("location: http://localhost/PROJECT/RESTAURANT_MNG_SYS/index.html");


}


?>

