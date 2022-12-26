<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>

    <!-- font awesome cdn file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> 
	<link rel="stylesheet" href="../view/css/table.css">
    <link rel="stylesheet" href="../view/css/seq.css">  
    <script src="../view/js/seq.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../view/css/home.css">
    


</head>

<body>

    <header>

        <a href="home.php" class="logo"> Restaurant Management System<span>.</span></a>

        <nav class="navbar">
            <ul>
                <li><a data-scroll="home" href="./table.php" class="active">Table</a></li>
                <li><a data-scroll="home" href="./searching.php" class="active">Search</a></li>
                <li><a data-scroll="home" href="./view.php" class="active">View</a></li>
                <li><a data-scroll="home" href="./trigger.php" class="active">Trigger</a></li>
                <li><a data-scroll="home" href="./plsql.php" class="active">Procedure-Fun</a></li>
                <li><a data-scroll="home" href="./sequence.php" class="active">Sequence</a></li>
                <li><a href="../controller/logout.php">Log-Out</a></li>
            </ul>
        </nav>

        <div class="fas fa-bars"></div>

    </header>
	 <section class="home1" id="home1">

        <div class="video">
            <video src="../upload/cover.m4v" loop muted autoplay></video>
        </div>
		

    </section>

<?php
session_start();
include '../model/sequencedb.php';
?>

<h1 class="heading-table" >Branch insertion</h1>
<div class="info">
<form action="../controller/sequenceAction.php" method="post" enctype="multipart/form-data" name="form1" onsubmit="ajax1(this); return false;">
            <label for="B_NAME">Name</label>
            <input id="B_NAME" type="text" name="B_NAME">
            <span id="B_NAMEError"></span> <br><br>
       
            <label for="M_ID">Manager ID</label>
            <input id="M_ID" type="text" name="M_ID">
            <span id="M_IDError"></span> <br><br>

            <label for="R_ID">Restaurant ID</label>
            <input id="R_ID" type="text" name="R_ID">
            <span id="R_IDError"></span> <br><br>

            <input class="submit" type="submit" id="submit1" name="branch" value="Submit">
</form>
<hr>
<h2 id="msg1" style="color: green"></h2>
<hr>
</div>

<h1 class="heading-table"  >Food item insertion</h1>
<div class="info">
<form action="../controller/sequenceAction.php" method="post" enctype="multipart/form-data" name="form2" onsubmit="ajax2(this); return false;">
            <label for="fname">Name</label>
            <input id="fname" type="text" name="fname">
            <span id="bnameError"></span> <br><br>
       
            <label for="amount">Amount</label>
            <input id="amount" type="text" name="amount">
            <span id="amountError"></span> <br><br>
            
            <label for="quantity">Quantity</label>
            <input id="quantity" type="text" name="quantity">
            <span id="quantityError"></span> <br><br>

            <label for="des">Description</label>
            <input id="des" type="text" name="des">
            <span id="desError"></span> <br><br>
            
            <input class="submit" type="submit" id="submit2" name="food" value="Submit" >
</form>
<hr>
<h2 id="msg2" style="color: red"></h2>
<hr>
</div>

</body>
</html>