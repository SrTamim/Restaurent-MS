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
include '../model/tabledb.php';
?>
<div class="title">
    <h1>Table View From Oracle</h1>
</div>
<div class="heading-table">
    <h1>RESTAURANT:</h1>
</div>
<table border="2">
    <tr>
    <th>RESTAURANT Id</th>
    <th>RESTAURANT Name</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Zipcode</th>
    </tr>
    <?php
    $res = RESTAURANT_shopShow(); //res = sql
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
    <h1>Branch:</h1>
</div>
<table border="2">
    <tr>
    <th>Branch Id</th>
    <th>Branch Name</th>
    <th>Manager ID</th>
    <th>Restaurants ID</th>
    </tr>
    <?php
    $res = branchShow();
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
    <h1>Manager:</h1>
</div>
<table border="2">
    <tr>
    <th>Manager Id</th>
    <th>manager Name</th>
    <th>Manager Address</th>
    <th>Phone number</th>
    <th>Zip code</th>
    <th>Restaurants ID</th>
    <th>Salary</th>
    </tr>
    <?php
    $res = managerShow();
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
    <h1>Waiter:</h1>
</div>
<table border="2">
    <tr>
    <th>Waiter Id</th>
    <th>Waiter Name</th>
    <th>Phone number</th>
    <th>Waiter Address</th>
    <th>Salary</th>
    <th>Manager ID </th>
    <th>Restaurants ID</th>
    </tr>
    <?php
    $res = waiterShow();
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
    <h1>Food Item:</h1>
</div>
<table border="2">
    <tr>
    <th>Food Id</th>
    <th>Food Name</th>
    <th>Amount</th>
    <th>Qauntity</th>
    <th>Description</th>
    </tr>
    <?php
    $res = foodShow();
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
    <h1>Customer:</h1>
</div>
<table border="2">
    <tr>
    <th>Customer Id</th>
    <th>Customer Name</th>
    <th>Phone number</th>
    <th>Order food ID</th>
    <th>Restaurants ID</th>
    </tr>
    <?php
    $res = customerShow();
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
    <h1>Casiher:</h1>
</div>
<table border="2">
    <tr>
    <th>Cashier Id</th>
    <th>Cashier Name</th>
    <th>Phone number</th>
    <th>Address</th>
    <th>Restaurants ID</th>
    <th>Salary</th>
    </tr>
    <?php
    $res = cashierShow();
    
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