<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Management System</title>

    <!-- font awesome cdn file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

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

    <section class="home" id="home">

        <div class="video">
            <video src="../upload/cover.m4v" loop muted autoplay></video>
        </div>

        <div class="content">
            <h1> Restaurant <br>Management System</h1>
            <p></p>
        </div>

    </section>

    <section class="feature" id="feature">

        <h1 class="heading"> <span>d</span>evelopers</h1>

        <div class="card-container">

            <div class="card">
                <img src="../upload/tamim.jpg" alt="">
                <div class="content">
                    <h3 class="title">Istiak Mahmud Tamim</h3>
                    <h2><strong>ID:</strong> 19-41675-3<h2>
                    <!-- <p><strong>Developed Part:</strong> </p> -->
                </div>
            </div>

            <div class="card">
                <img src="../upload/fahim.jpg" alt="">
                <div class="content">
                    <h3 class="title">Fahim Muntasir Ruby</h3>
                    <h2> <strong>ID:</strong> 20-43557-1</h2>
                    <!-- <p><strong>Developed Part:</strong> </p> -->
                </div>
            </div>

            <div class="card">
                <img src="../upload/shuvo.jpg" alt="">
                <div class="content">
                    <h3 class="title">Monowar Hossain</h3>
                    <h2><strong>ID:</strong> 20-43036-1<h2>
                    <!-- <p><strong>Developed Part:</strong> </p> -->
                </div>
            </div>

            <div class="card">
                <img src="../upload/hasan.jpg" alt="">
                <div class="content">
                    <h3 class="title">Md. Mahmudul Hasan</h3>
                    <h2><strong>ID:</strong> 20-43113-1<h2>
                    <!-- <p><strong>Developed Part:</strong> </p> -->
                </div>
            </div>

        </div>

    </section>

    <section class="footer">

        <h1 class="credit">Created by <span>AIUBians</span> | all rights reserved.</h1>

        <div class="icons">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
        </div>

    </section>



</body>

</html>