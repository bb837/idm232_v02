<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/eua2quq.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/master_tablet.css">
    <link rel="stylesheet" href="css/master_desktop.css">
    <title>Home</title>
</head>

<body>

     <div id="load_screen">
        <!-- <img id="load_img" src="img/food.jpg" alt="food"> -->

        <object id="logo" data="img/logo.svg" type="image/svg+xml">
        <img  src="img/logo.svg" alt="Let's Cook!">
        </object>

        <button id="get_started">Let's Get Started</button>
    </div>

    <div id="menu" class="overlay">
            <button id="closebtn" class="closebtn">&times;</button>
            <div id="user_info">
                <img src="" alt="">
                <h2 id="welcome"></h2>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home</a>
              <a href="search.php">Search</a>
              <a href="recipe.php">Recipe Template</a>
              <!-- <a href="help-screen.php">Help Screen</a> -->
            </div>
    </div>

    <header id="top">
        <!-- <button id="search_icon"><img src="img/search_icon.png" alt="search"></button> -->
        <button id="hamburger" class="header_hamburger">
            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
        </button>

        <figure id="banner">
            <!--375px X 322px (0,0,17,17)-->
            <img id="banner_img" src="https://via.placeholder.com/375x322" alt="placeholder_banner">
            <figcaption id="banner_cap">
                <h1>Try Today!</h1>
                <h1>TEST RECIPE</h1>
            </figcaption>
        </figure>

    </header>

    <main>
       <h3 id="featured">Featured Recipes</h3>
       <div id="home_container">
            <!--375px X 322px (32,32,32,32)-->
           <figure class="index_item">
               <!--350px X 208px-->
               <img class="index_img" src="https://via.placeholder.com/350x208" alt="placeholder">

                <figcaption class="item_cap">
                        <h2>TEST RECIPE</h2>
                        <p>TEST DESCRIPTION</p>
                    </figcaption>
           </figure>
           <figure class="index_item">
               <!--350px X 208px-->
               <img class="index_img" src="https://via.placeholder.com/350x208" alt="placeholder">

                <figcaption class="item_cap">
                        <h2>TEST RECIPE</h2>
                        <p>TEST DESCRIPTION</p>
                    </figcaption>
           </figure>
           <figure class="index_item">
               <!--350px X 208px-->
               <img class="index_img" src="https://via.placeholder.com/350x208" alt="placeholder">

                <figcaption class="item_cap">
                        <h2>TEST RECIPE</h2>
                        <p>TEST DESCRIPTION</p>
                    </figcaption>
           </figure>

           <?php
            include "index_item.php";
           ?>

       </div>
    </main>
           <footer>
           <a id="back-to-top" href="#top">Back to Top</a>
               <!--375px X 45px (17,17,0,0)-->
               <!-- copyright and such -->
           </footer>
</body>
<script src="js/load.js"></script>
<script src="js/navigation.js"></script>
</html>