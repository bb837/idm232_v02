<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/_search-header.php";

    $search_result = isset($_GET["search"]) ? $_GET["search"] : null;
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
    <title>Search</title>
</head>

<?php
    require_once "includes/menu-include.php";
?>

<body id="top">

        <div id="search_wrap">
            <button id="filter_img">
                <img  src="img/filter.png" alt="filter">
            </button>
            <form id="search_form" action="search.php?go">
                <input id="search-bar" type="search" name="search" placeholder="What are you hungry for?">
                <input type="submit" id="submit" value="">
                <div id="filter_container">
        <div id="filters">
        <div class="hidden" id="filter_drop">

            <section class="filter_type">
                <h5 class="filter_heading">Cuisine</h5>
                <span>
                    <label for="cuisine-american" class="option">American
                        <input type="radio" name="cuisine[]" value="american" id="cuisine-american">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="cuisine-asian" class="option">Asian
                        <input type="radio" name="cuisine[]" value="asian" id="cuisine-asian">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="cuisine-hispanic" class="option">Hispanic
                        <input type="radio" name="cuisine[]" value="hispanic" id="cuisine-hispanic">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="cuisine-italian" class="option">Italian
                        <input type="radio" name="cuisine[]" value="italian" id="cuisine-italian">
                        <span class="radio"></span>
                    </label>
                </span>
            </section>
          <section class="filter_type">
                <h5 class="filter_heading">Key Ingredient</h5>
                <span>
                    <label for="key-beef" class="option">Beef
                        <input type="radio" name="ingredients[]" value="beef" id="key-beef">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="key-chicken" class="option">Chicken
                        <input type="radio" name="ingredients[]" value="chicken" id="key-chicken">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="key-fish" class="option">Fish
                        <input type="radio" name="ingredients[]" value="fish" id="key-fish">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="key-pasta" class="option">Pasta
                        <input type="radio" name="ingredients[]" value="pasta" id="key-pasta">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="key-pork" class="option">Pork
                        <input type="radio" name="ingredients[]" value="pork" id="key-pork">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="key-vegetables" class="option">Vegetables
                        <input type="radio" name="ingredients[]" value="vegetables" id="key-vegetables">
                        <span class="radio"></span>
                    </label>
                </span>
          </section>

          <section class="filter_type">
                <h5 class="filter_heading">Servings</h5>
                <span>
                    <label for="servings-2" class="option">2 Servings
                        <input type="radio" name="servings[]" value="2" id="servings-2">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="servings-4" class="option">4 Servings
                        <input type="radio" name="servings[]" value="4" id="servings-4">
                        <span class="radio"></span>
                    </label>
                </span>
          </section>

          <section class="filter_type">
                <h5 class="filter_heading">Cook Time</h5>
                <span>
                    <label for="time-20" class="option">20min
                        <input type="radio" name="time[]" value="20" id="time-20">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="time-30" class="option">30min
                        <input type="radio" name="time[]" value="30" id="time-30">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="time-45" class="option">45min
                        <input type="radio" name="time[]" value="45" id="time-45">
                        <span class="radio"></span>
                    </label>
                </span>

                <span>
                    <label for="time-hour" class="option">1 hour
                        <input type="radio" name="time[]" value="60" id="time-hour">
                        <span class="radio"></span>
                    </label>
                </span>
          </section>
        </div>
      </div>
            </form>
            
        </div>
        </div>
    </div>
</header>

<main id="search_main">

        </div>
        <div id="search_result_container">
        <div id="search_container">

           <?php 
           $search_result_orig = $search_result;
           $search_result = mysqli_real_escape_string($connection, $search_result); 

           if ($search_result !== null) {
            $query = "SELECT * ";
            $query .= "FROM recipes ";
            $query .= "WHERE (title LIKE '%{$search_result}%' ";
            $query .= "OR side LIKE '%{$search_result}%' ";
            $query .= "OR description LIKE '%{$search_result}%' ";
            $query .= "OR ingredients LIKE '%{$search_result}%' ";
            $query .= "OR steps LIKE '%{$search_result}%' ";
            $query .= "OR tags LIKE '%{$search_result}%' ";
            $query .= ")";
          }

          if(isset($_GET["cuisine"])) {
            $filter_cuisine = $_GET['cuisine'];
            $cuisine = array_shift($filter_cuisine);
  
            $query .= "AND (tags LIKE '%{$cuisine}%') ";
          }
          
          if(isset($_GET["ingredients"])) {
            $filter_ingredients = $_GET['ingredients'];
            $ingredients = array_shift($filter_ingredients);
  
            $query .= "AND (tags LIKE '%{$ingredients}%') ";
          }
  
          if(isset($_GET["time"])) {
            $filter_time = $_GET['time'];
            $filter_time = $filter_time[0];
            $time = (int)$filter_time;
  
            $query .= "AND (time <= $time) ";
          }
  
          if(isset($_GET["servings"])) {
            $filter_servings = $_GET['servings'];
            $filter_servings = $filter_servings[0];
            $servings = (int)$filter_servings;
  
            $query .= "AND (servings <= $serving) ";
          }

          $result = mysqli_query($connection, $query);

          if (!$result) {
            die("Database connection failed.");
          }
          elseif (mysqli_num_rows($result) == 0) {
              print_r("Sorry! Nothing seems to match the search.");
              ?>
            <h2 id="no_result">Sorry! Nothing seems to match the search.</h2>
            <?php
          }
          else {
        //   elseif (mysqli_num_rows($result) >= 1) {
            while($recipe = mysqli_fetch_assoc($result)) {
              include "includes/index_item.php";
            } // End while loop
          }

          ?>

       </div> 
        </div>
    </main>

    <?php
        require_once "includes/_footer.php";
    ?>
</body>

<script src="js/navigation.js"></script>
<script src="js/filter.js"></script>

</html>