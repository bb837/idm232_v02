<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/menu-include.php";
    require_once "includes/_head.php";

    $query = "SELECT id, title, side, hero_image ";
    $query .= "FROM recipes ";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Database connection failed.");
    }
    $bannerImg = rand(1, 40);

    $query_banner = "SELECT id, title, side, hero_image ";
    $query_banner .= "FROM recipes ";
    $query_banner .= "WHERE id LIKE {$bannerImg}";
    $result_banner = mysqli_query($connection, $query_banner);
    if (!$result_banner || !$result) {
      die("Database connection failed.");
    }

    $random_id = randomNumber(1, 40, 18);

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
    <!-- LOAD SCREEN: ON FIRST TIME VISIT-->
     <div id="load_screen">

        <object id="logo" data="img/logo.svg" type="image/svg+xml">
        <img  src="img/logo.svg" alt="Let's Cook!">
        </object>

        <button id="get_started">Let's Get Started</button>
    </div>
    
    <!-- HEADER W/ FEATURED BANNER ITEM, RANDOMLY GENERATED -->
    <header id="top">
        <?php

        while ($banner = mysqli_fetch_assoc($result_banner)) {
            ?>
            <a  class="link" href=" <?php
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

    <!-- MAIN CONTAINER WITH RANDOMLY GENERATED RECIPES -->
    <main>
       <div class="card">
            <h4 class="h4_blue">Welcome!</h4>
            <h3 class="h4_blue">See what's inside Let's Cook!</h3>

            <h5>Delicious, Chef-Designed</h5>
            <p>With step-by-step instructions so you never miss a beat (or beet)</p>

            <h5>Perfectly-portioned amounts</h5>
            <p>So no morsels or dollops go to waste</p>

            <h5>We Encourage Quality Ingredients</h5>
            <p>Like fresh produce, sustainable seafood and exclusive spice blends</p>
        </div>

        <div class="card">
        <h4 class="h4_blue">How to Use Let's Cook!</h4>
            <h3>Choose Your Meals</h3>
            <p>Our chef-designed recipes include balanced meals from all cultures, quick one-pan dinners, and top-rated customer favorites.</p>

            <p>Search through our library to find delicious meals.
                Or try our filters!
            </p>
        <h3>Create Magic</h3>
            <p>Following our step-by-step instructions you’ll experience the magic of cooking recipes that our chefs create with your family’s tastes in mind.</p>
        </div>

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