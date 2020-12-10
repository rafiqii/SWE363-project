<!DOCTYPE html>
<html>

<head>
    <meta name="keywords" content="muisic, albums, artists, User, Login, RiNixQi">
    <meta name="description" content="Login to listen to free muisic offered on RiNixQi">
    <link href="../CSS/stylesheet.css" rel="stylesheet" type="text/css">
    <title>Login</title>
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
        <div>
            <p class="loginTXT">
                Login
            </p>
            <div class="outerLogin">
                <div>
                    <div class="emailDiv">
                        <p>Email: </p> <input type="email" placeholder="JhonDoe@xmail.com">
                    </div>
                    <div class="passwordDiv">
                        <p>Password: </p> <input type="password" placeholder="******">
                    </div>
                </div>
                <button class="loginButton">Login</button>
                <div class="loginExtras">
                    <!-- <p>Forgot password?</p> -->
                    <p> <a href="signUp.php">Dont have an account? Sign up! </a></p>
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