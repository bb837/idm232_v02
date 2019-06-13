<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/menu-include.php";
    require_once "includes/_head.php";

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
    <title><?php echo $recipe["title"]?></title>
</head>

<body>
    <main id="top">
        <div id="recipe_container">
            <div id="recipe_info">
                <h3><?php echo $recipe["title"] ?></h3>
                <h6>with <?php echo $recipe["side"] ?></h6>

                    <div id="serving-container">
                      <div class="info"><?php echo $recipe["time"] ?> Minutes</div>
                      <div class="info"><?php echo $recipe["servings"] ?> Servings</div>
                      <div class="info"><?php echo $recipe["nutrition"] ?> Cals.</div>
                    </div>
                    
                <img class="recipe_img" src="images/<?php echo $id . "/" . $recipe["hero_image"] ?>" alt="<?php echo $recipe["title"] ?>">
                <p id="recipe_des">

                <?php echo $recipe["description"] ?>
                </p>
            </div>

        <div id="ingredients">
            <h4 class="h4_blue">Ingredients</h4>

              <img class="recipe_img ing-img" src="images/<?php echo $id . "/" . $recipe["ing_img"] ?>" alt="ingredients">

            <h6 id="ing_list">
                <ul>
                    <?php
                  $ings = explode(";", $recipe["ingredients"]);
                  foreach ($ings as $ing) { ?>
                      <li class="ing-li"><?php echo $ing ?></li> 
                    <?php } ?>
                 </ul>
            </h6>
        </div>

        <div id="kitchen_tools">
            <h4 class="h4_blue">Kitchen Tools</h4>

                <img class="recipe_img" src="images/kitchen_tools/<?php echo $recipe["tool_img"] ?>" alt="tool image">

            <h2><?php echo $recipe["kitchen_tool"] ?></h2>
            <p id="tool_des"><?php echo $recipe["kitchen_tool_desc"]?></p>
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
              <img src="images/<?php echo $id . "/" . $step_img_high[$i] ?>" alt="<?php echo $step_exp[0] ?>" class="recipe_img">
          <p class="step_pg"><?php echo $step_exp[1] ?></p>
        </div>
            <?php
            $i++;
          }?>
        </div>
      </div>   
    </main>

    <footer>
      <a id="back-to-top" href="#top">Back to Top</a>
    </footer>
</body>

<script src="js/navigation.js"></script>
</html>
<?php
  }
  mysqli_free_result($result);
?>