<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/menu-include.php";
    require_once "includes/_head.php";


    $query = "SELECT id, title, side, hero_image ";
    $query .= "FROM recipes ";
    $query .= "ORDER by id ASC";
    $result = mysqli_query($connection, $query);
    if (!$result) {
      die("Database connection failed.");
    }

    $random_id = randomNumber(1, 40, 40);

    // $bannerImg = rand(1, 40);
    // print_r($bannerImg);


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
    <title>All Recipes</title>
</head>
<body id="top">
  <div id="work">
    <h1 id="all-recipes-title">All Recipes</h1>
  </div>
  <main id="home_container">

  <?php

  while($recipe = mysqli_fetch_assoc($result)) {
  include "includes/index_item.php";

  } // end while
  mysqli_free_result($result);

  ?>

</main>
<?php
require_once "includes/_footer.php";
  ?>  
</body>
</html>