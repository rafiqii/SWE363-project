<!DOCTYPE html>
<html>

<head>
    <meta name="keywords" content="muisic, albums, artists, singers, songs, RiNixQi, Hussein, Al-Jassmi">
    <meta name="description" content="Listen to Hussein Al-Jassmi for free">
    <link href="../CSS/stylesheet.css" rel="stylesheet" type="text/css">
    <title>Hussein Al-Jassmi</title>
    <link href="../Pictures/Logo.png" rel="icon" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

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
        <!-- outer div -->
        <div class="outerArtistDiv">
            <!-- head of main div -->
            <div class="topAristElements">
                <div class="singerInfoDiv">
                    <img src="../Pictures/singer1.jpg" alt="Talal Maddah">
                    <p>
                        Hussein Al-Jassmi
                    </p>
                </div>
                <button class="searchButton">Follow</button>
                <div class="followersAndFollowing">
                    <p>
                        followers:4.3m
                    </p>
                    <p>
                        following:0
                    </p>
                </div>

            </div>
            <!-- here starts the main info of the artist -->
            <div class="outerArtistDiv">
                <div class="midArtistElements">
                    <div class="widthContainer">
                        <!-- dictates albums-->
                        <p class="albumsTXT">
                            Albums
                        </p>
                        <div class="albumsOuterDiv">
                            <!-- this is some dummy data to help visualize when working on JS/JQ -->
                            <div class="albumInnerDiv">
                                <img alt="albumpic" src="../Pictures/albumCover1.jpg">
                                <p>Album Paris </p>
                            </div>
                            <hr>
                            <div class="albumInnerDiv">
                                <img alt="albumpic" src="../Pictures/albumCover1.jpg">
                                <p>Album Kent Ahbek</p>
                            </div>
                            <hr>
                        </div>
                    </div> <!-- end of albums-->

                    <div class="widthContainer">
                        <p class="albumsTXT">
                            Songs
                        </p>
                        <div class="albumsOuterDiv">
                            <div>
                                <p class="songTitle">
                                    Seta El Sobh
                                </p>
                                <div class="albumInnerDiv">
                                    <img src="../Pictures/songCover3.jpg" alt="Song Picture">
                                    <img src="../Pictures/audioBar.png" alt="audio bar" id="audioBar">
                                    <!--i do not know to make this bar and moving thingy yet xd-->
                                </div>
                            </div>
                            <hr>
                            <p class="songTitle">
                                La Tes'al
                            </p>
                            <div class="albumInnerDiv">

                                <img src="../Pictures/songCover3.jpg" alt="Song Picture">
                                <img src="../Pictures/audioBar.png" alt="audio bar" id="audioBar">
                                
                            </div>
                            <hr>
                        </div>
                    </div><!-- end of songs-->

                    <div class="widthContainer">
                        <p class="albumsTXT">
                            Anouncments
                        </p>
                        <div class="albumsOuterDiv">
                            <div class="albumInnerDiv">
                                <p>
                                    A new album is coming soon!
                                </p>
                            </div>
                            <hr>
                            <div class="albumInnerDiv">
                                <p>
                                    Thank you for all the support.
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div><!-- end of anouncments-->


                </div>
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
                    class="twitterLogo"></a>
        </div>
    </footer>
</body>

</html>
