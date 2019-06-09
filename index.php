<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/menu-include.php";

    $query = "SELECT id, title, side, hero_image ";
    $query .= "FROM recipes ";
    $query .= "ORDER by id ASC";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Database connection failed.");
    }

    $random_id = randomNumber(1, 40, 18);

    $bannerImg = rand(1, 40);
    print_r($bannerImg);

    while($recipe = mysqli_fetch_assoc($result)) {
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
    <!-- Have button appear after load is completed -->
     <!-- <div id="load_screen">

        <object id="logo" data="img/logo.svg" type="image/svg+xml">
        <img  src="img/logo.svg" alt="Let's Cook!">
        </object>

        <button id="get_started">Let's Get Started</button>
    </div> -->

    <!-- <div id="menu" class="overlay">
            <button id="closebtn" class="closebtn">&times;</button>
            <div id="user_info">
                <img src="" alt="">
                <h2 id="welcome"></h2>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home</a>
              <a href="search.php">Search</a>
              <a href="recipe.php">Recipe Template</a>
            </div>
    </div> -->

    <header id="top">
        <!-- <button id="search_icon"><img src="img/search_icon.png" alt="search"></button> -->
        <button id="hamburger" class="header_hamburger">
            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
        </button>


        <?php

        if ($bannerImg = $recipe["id"]) {
            ?>
        <figure id="banner">
            <!--375px X 322px (0,0,17,17)-->
            <img 

            src="images/<?php echo $recipe["id"] . "/" . $recipe["hero_image"] ?>"

            id="banner_img" alt="placeholder_banner">
            <figcaption id="banner_cap">
                <h1>Try Today!</h1>
                <h1><?php echo $recipe["title"] . " with " . $recipe["side"]?></h1>
            </figcaption>
        </figure>
        <?php
            }
         ?>
        <!-- <img class="hearts" id="banner_heart" src="img/fav_white.png" alt="banner_favorite"> -->
    </header>

    <main>
       <h3 id="featured">Featured Recipes</h3>
       <div id="home_container">

           <?php
            include "includes/index_item.php";
           ?>

       </div>
    </main>
           <!-- <footer>
           <a id="back-to-top" href="#top">Back to Top</a>
           </footer> -->
</body>
<script src="js/load.js"></script>
<script src="js/navigation.js"></script>
</html>

<?php
    }
    mysqli_free_result($result);
?>