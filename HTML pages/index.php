<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="keywords" content="muisic, albums, artists, singers, songs, RiNixQi">
    <meta name="description" content="Free muisic offered on RiNixQi">
    <link href="../CSS/stylesheet.css" rel="stylesheet" type="text/css">
    <title>RiNixQi homepage</title>
    <link href="../Pictures/Logo.png" rel="icon" >

</head>

<body>
    <header>

        <div>
            <a href="index.php">
                <img alt="Logo" src="../Pictures/Logo.png" class="logo"> </a>
        </div>
        <div class="searchBarDiv">
            <input type="text" placeholder="Search a song or an artist" class="searchBar">
            <button class="searchButton">Search</button>
        </div>
        <div>
            <div class="login">
                <a href="login.php">
                    <img alt="login pic" src="../Pictures/LoginPicture.png" class="loginPic">
                    <p>
                        Sign in / Sign up
                    </p>
                </a>
            </div>
        </div>

    </header>
    <main>
        <div class="outerMainDiv">
            <p class="topHits">
                Top hits
            </p>
            <div class="borderDiv">
                <div class="song">
                    <!-- This is some dummy data just so it would be easier to immagine stuff 
                    when we work on server side (php/java script) -->
                    <a href="Artist.php">
                        <img alt="Talal Maddah" src="../Pictures/singer.jpg" class="singer">
                    </a>
                    <p>
                        "Sa'ab Al So'al" a top hitter song created by the singer Talal Maddah.
                    </p>
                </div>
                <div class="song">
                    <a href="Artist1.php">
                    <img alt="Hussein Al-Jasmi" src="../Pictures/singer1.jpg" class="singer">
                    </a>
                    <p>
                        "Seta Al Sobeh" a nice old song for the singer hussein Al-Jasmi.
                    </p>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div>
            <a href="whoAreWe.php">
                <p> Who are we</p>
            </a>
        </div>
        <div>
            <a href="whatIsRiNixQi.php">
                <p>
                    What is RiNixQi
                </p>
            </a>
        </div>

        <div>
            <a href="http://www.twitter.com"><img alt="twitter" src="../Pictures/twitterLogo.png"
                    class="twitterLogo"><a>
        </div>
    </footer>

</body>

</html>