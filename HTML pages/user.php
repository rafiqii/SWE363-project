<!DOCTYPE html>
<html>

<head>
    <!-- I dont think this will show on any search engine since it is a login condition page -->
    <link href="../CSS/stylesheet.css" rel="stylesheet" type="text/css">
    <title>M7md187281's homepage</title>
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
                <p>
                    <a href="user.php">M7md187281's page</a>
                </p>
                </a>
            </div>
        </div>

    </header>
    <main>
        <!--This page can only appear if M7md logs in-->
        <!-- outer div -->
        <div class="outerArtistDiv">
            <!-- head of main div -->
            <div class="topAristElements">
                
                <button class="searchButton" style="width: auto;">Apply to becoma an artist</button>
                <div class="followersAndFollowing">
                    <p>
                        following:12
                    </p>
                </div>

            </div>
            <!-- here starts the main info of the user -->
            <div class="outerArtistDiv">
                <div class="midArtistElements">
                    <div class="widthContainer">
                        <!-- dictates Favorite songs-->
                        <p class="albumsTXT">
                            Favourite songs
                        </p>
                        <div class="albumsOuterDiv">
                            
                            <div class="albumInnerDiv">
                                <img alt="albumpic" src="../Pictures/songCover3.jpg">
                                <p>Seta Al Sobh </p>
                            </div>
                            <hr>
                            <div class="albumInnerDiv">
                                <img alt="albumpic" src="../Pictures/songCover0.jpg">
                                <p>Saab Al So'al </p>
                            </div>
                            <hr>
                        </div>
                    </div> <!-- end of favourite songs-->

                    <div class="widthContainer">
                        <!-- dictates Feed-->
                        <p class="albumsTXT">
                            Feed
                        </p>
                        <div class="albumsOuterDiv">
                            <div class="albumInnerDiv">
                                <img alt="albumpic" src="../Pictures/singer1.jpg">
                                <p>
                                    Hussein Al-Jassmi: 
                                    <br>
                                    A new album is coming soon!
                                </p>
                            </div>
                            <hr>
                            <div class="albumInnerDiv">
                                <img alt="albumpic" src="../Pictures/singer1.jpg">
                                <p> 
                                    Hussein Al-Jassmi: 
                                    <br>
                                    Thank you for all the support.
                                </p>
                            </div>
                            <hr>
                        </div>
                    </div> <!-- end of favourite songs-->


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
