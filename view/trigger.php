<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>

    <!-- font awesome cdn file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="../view/css/table.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../view/css/home.css">
    <link rel="stylesheet" href="../view/css/trigger.css">
    <script src="../view/js/trigger.js"></script>
    <title>Trigger</title>
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
include '../model/triggerdb.php';
?>
<div class="title">
    <h1>Trigger Operation</h1>
</div>
<div class="heading-table">
    <p>Insert a negative value of food quantity to check trigger</p>
</div>
<div class="info">
   
<form action="../controller/triggerAction.php" method="POST" enctype="multipart/form-data" name="form1" onsubmit="ajax1(this); return false;">
    <label for="fid">Food ID: </label>
    <input type="text" id="fid" name="fid">
    <span id="fidErr"></span>
    <label for="quantity">Add Negative Quantity: </label>
    <input type="number" id="quantity" name="quantity">
    <span id="quantityErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit1" name="submit1" value="Submit">
</form>
<hr>

<p id="msg1"></p>

<hr>
</div>


<div class="heading-table">
    <p>Inserted or updated value of R_address </p>
</div>
<div class="info">
   
<form action="../controller/triggerAction.php" method="POST" enctype="multipart/form-data" name="form2" onsubmit="ajax2(this); return false;">
    <label for="csid">Shop ID: </label>
    <input type="text" id="csid" name="csid">
    <span id="csidErr"></span>
    <label for="address">Input new Address in trigger: </label>
    <input type="text" id="address" name="address">
    <span id="addressErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit2" name="submit2" value="Submit">
</form>
<hr>

<p id="msg2"></p>

<hr>
</div>

<div class="heading-table">
    <p>Creating a trigger to check that DML operation can't be happened/done on food_item table after office hour.</p>
</div>
<div class="info">
   
<form action="../controller/triggerAction.php" method="POST" enctype="multipart/form-data" name="form3" onsubmit="ajax3(this); return false;">
    <label for="csid">Customer ID: </label>
    <input type="text" id="csid" name="csid">
    <span id="csidErr"></span>
    <label for="cname">Customer name </label>
    <input type="text" id="cname" name="cname">
    <span id="cnameErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit3" name="submit3" value="Submit">
</form>
<hr>

<p id="msg3"></p>

<hr>
</div>


<div class="heading-table">
    <p>Creating a trigger to automatically check food_item table to identify when, who and what operations done in this table.</p>
</div>
<div class="info">
   
<form action="../controller/triggerAction.php" method="POST" enctype="multipart/form-data" name="form4" onsubmit="ajax4(this); return false;">
<label for="fid">Food ID: </label>
    <input type="text" id="fid" name="fid">
    <span id="fidErr"></span>
    <label for="quantity">Add  Quantity: </label>
    <input type="number" id="quantity" name="quantity">
    <span id="quantityErr"></span>
    <br><br>
    <input class="submit" type="submit" id="submit4" name="submit4" value="Submit">
</form>
<table border="2">
    <tr>
    <th>Database User</th>
    <th>Operation name</th>
    <th>Operation Date</th>
    </tr>
    <?php
    $res = logShow();
    while ($row = oci_fetch_array($res, OCI_RETURN_NULLS+OCI_ASSOC)) {
        
        echo '<tr>';
        foreach ($row as $item) 
        {
            echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
        }
        echo '</tr>';
        }
    ?>
</table>
<hr>

<h2 id="msg4"></h2>

<hr>
</div>
</body>
</html>