<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";

    $id = isset($_GET["id"]) ? $_GET["id"] : null;
  
    if (!$id) {
      redirect_to("index.php");
    } else {
      $query = 'SELECT * ';
      $query .= 'FROM recipes ';
      $query .= "WHERE id = '{$id}' ";
      $query .= 'LIMIT 1';
      $result = mysqli_query($connection, $query);
      if (!$result) {
        die('Database query failed.');
      }
    }
  
    while ($recipe = mysqli_fetch_assoc($result)) {
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
    <title>Recipe Template</title>
</head>

<div id="menu" class="overlay">
            <button id="closebtn" class="closebtn">&times;</button>
            <div class="overlay-content">
                <a href="index.php">Home</a>
              <a href="search.php">Search</a>
              <a href="recipe.php">Recipe Template</a>
            </div>
    </div>

<body>
    <header id="recipe_header">

        <img id="absolute-logo" src="img/logo.svg" alt="Let's Cook!">

            <button id="hamburger">
            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
            </button>

    </header>

    <main id="top">

        <div id="recipe_container">

            <div id="recipe_info">
                <h3><?php echo $recipe["title"] ?></h3>
                <h6><?php echo $recipe["side"] ?></h6>

                <img class="recipe_img" src="images/<?php echo $id . "/" . $recipe["hero_image"] ?>" alt="placeholder">
                <p id="recipe_des">

                <?php echo $recipe["description"] ?>
                </p>
            </div>

            <div id="ingredients">
                <h4 class="h4_blue">Ingredients</h4>

                <img class="recipe_img" src="images/<?php echo $id . "/" . $recipe["ing_img"] ?>" alt="placeholder">


                <h6 id="ing_list">
                    <ul>
                <?php
              $ings = explode(";", $recipe["ingredients"]);
              foreach ($ings as $ing) {
                ?>
                  <li><?php echo $ing ?></li> 
                <?php
              }
            ?>
                </ul>
            </h6>

            </div>

            <div id="kitchen_tools">
                <h4 class="h4_blue">Kitchen Tools</h4>

                <img class="recipe_img" src="images/kitchen_tools/<?php echo $recipe["tool_img"] ?>" alt="placeholder">

                <h2><?php echo $recipe["kitchen_tool"] ?></h2>
                <p id="tool_des">
                <?php echo $recipe["kitchen_tool_desc"] ?>
                </p>
            </div>

            <div id="step_container">

                <h4 class="h4_blue">Let's Cook!</h4>

                <?php 
              $steps = explode("]\[", $recipe["steps"]);
              $step_img_high = explode("\\", $recipe["step_img_high"]);

              $i = 0;
              while ($i < count($steps)) {
                $step = $steps[$i];
                  $first_letter = substr($step, 0, 1);
                  $last_letter = substr($step, -1);
                  if ($first_letter = "[") {
                    $step = ltrim($step, '[');
                  }
                  if ($last_letter = "]") {
                    $step = rtrim($step, ']');
                  }
                  $step_exp = explode("|", $step);
                ?>
                  <div class="steps">
                    <h5><?php echo $step_exp[0] ?></h5>
                    <img src="images/<?php echo $id . "/" . $step_img_high[$i] ?>" alt="" class="recipe_img">
                    <p class="step_pg"><?php echo $step_exp[1] ?></p>
                </div>
                <?php
                $i++;
              }
            ?>

                <!-- <div class="steps">
                        <h5>Step 1</h5>
                    <img class="recipe_img" src="" alt="">
                    <p id="step_pg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="steps">
                        <h5>Step 2</h5>
                    <img class="recipe_img" src="https://via.placeholder.com/250x250" alt="">
                    <p id="step_pg">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div> -->
            </div>
        </div>
        
    </main>
            <footer>
            <a id="back-to-top" href="#top">Back to Top</a>
                <!-- back to top? -->
            </footer>

</body>

<script src="js/navigation.js"></script>
</html>
<?php
  } // end while
  mysqli_free_result($result);

?>