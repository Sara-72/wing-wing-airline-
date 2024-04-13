<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wing Wing | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,opsz,wght@0,8..144,100..900;1,8..144,100..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index-style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>

    <main>

    
    <header>
        <div id="logo">
            <img src="images/logo.png">

        </div>
        <div class="nav">
            <ul>
                <li><a href="index.php"><span class="material-symbols-outlined" id="home">home</span>Home</a></li>
                <li><a href="about-us.html"><span class="material-symbols-outlined">draw</span>About us</a></li>
                <li><a href="where-to-fly.php"><span class="material-symbols-outlined">travel</span>Where to fly</a></li>
                <li><a href="contact.html"><span class="material-symbols-outlined">call</span>Contact us</a></li>
            </ul>
        </div>
        <a id="sign" href="logout.php">Log out</a>
    </header>


    
        

        <div class="main">
            <div id="text-box">
                <div id="enjoy">
                    <div id="fixed-txt">Enjoy Your Trip In &nbsp;</div>   
                    <div id="animated-txt">
                        <span></span>
                    </div>
                </div>
                <p id="discover">Discover the world at your fingertips. Our flight booking service<br>
                    opens doors to global destinations, making travel dreams a reality<br>
                    with convenience and ease.
                </p>
                
            </div>
            
            
            <div class="btn">
                <a id="buy" href="">Buy a Ticket </a>
            </div>
        </div>
    </main>



    









<footer>

    
</footer>
</body>
</html>