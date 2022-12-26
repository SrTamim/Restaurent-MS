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
    <link rel="stylesheet" href="../view/css/view.css">
    <title>View</title>
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
include '../model/viewdb.php';
?>
<div class="title">
    <h1>View</h1>
</div>
<div class="heading-table">
    <p>Create a view Manager_view based on the m_id, m_name, r_id, r_name from manager table and Restaurant table. </p>
</div>
<table border="2">
    <tr>
    <th>Manager Id</th>
    <th>Manager Name</th>
    <th>Restaurant ID</th>
    <th>Restaurant Name</th>
    </tr>
    <?php
    $res = view1();
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

<div class="heading-table">
    <p>Create a view AVG based on average salary from waiter </p>
</div>
<table border="2">
    <tr>
    <th>Average salary of waiter</th>
    </tr>
    <?php
    $res = view2();
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

<div class="heading-table">
    <p>Create a view newAmount based on food_item table to get 20% discounted item amount. </p>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>New price</th>
    </tr>
    <?php
    $res = view3();
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


<div class="heading-table">
    <p>Create a view shop_info to get the r_name, r_address, r_phone from Restaurant table </p>
</div>
<table border="2">
    <tr>
    <th>Restaurant name</th>
    <th>Address</th>
    <th>Phone</th>
    </tr>
    <?php
    $res = view4();
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
</body>
</html>