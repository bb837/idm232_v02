<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/menu-include.php";

    $query = "SELECT id, title, side, hero_image ";
    $query .= "FROM recipes ";
    $query .= "ORDER by id ASC";
    $result = mysqli_query($connection, $query);
    // if (!$result) {
    //   die("Database connection failed.");
    // }
    $bannerImg = rand(1, 40);

    $query_banner = "SELECT id, title, side, hero_image ";
    $query_banner .= "FROM recipes ";
    $query_banner .= "WHERE id LIKE {$bannerImg}";
    $result_banner = mysqli_query($connection, $query_banner);
    if (!$result_banner || !$result) {
      die("Database connection failed.");
    }

    $random_id = randomNumber(1, 40, 18);


    // print_r($bannerImg);

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

        while ($banner = mysqli_fetch_assoc($result_banner)) {
            ?>
            <a  class="link"href=" <?php
            $rec_url = rawurldecode("recipe.php");
              $rec_url .= "?" . "id=" . urldecode($banner["id"]);
              echo htmlspecialchars($rec_url);?>">
            
            <figure id="banner">

            <img 
            src="images/<?php echo $banner["id"] . "/" . $banner["hero_image"] ?>"

            id="banner_img" alt="placeholder_banner">
            <figcaption id="banner_cap">
                <h1>Try Today!</h1>
                <h1><?php echo $banner["title"] . " with " . $banner["side"]?></h1>
            </figcaption>
        </figure>
            </a>
        <?php
            }
         ?>

    </header>

    <main>
       <h3 id="featured">Featured Recipes</h3>
       <div id="home_container">

           <?php
            include "includes/index_item_random.php";
           ?>

       </div>
    </main>
    <?php
require_once "includes/_footer.php";
  ?> 
</body>
<script src="js/load.js"></script>
<script src="js/navigation.js"></script>
</html>

<?php
    }
    mysqli_free_result($result);
?>