<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/_desktop-header.php";

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

<div id="filter-window">
    
</div>

<body id="top">

        <div id="search_wrap">
            <button id="filter_img">
                <img  src="img/filter.png" alt="filter">
            </button>
            <form id="search_form" action="search.php?go">
                <input type="search" name="search" placeholder="What are you hungry for?">
                <input type="submit" id="submit" value="">
            </form>
            
        </div>
        </div>
    </div>
</header>

<main id="search_main">
        <div id="filter_container">
        <div id="filters">
        <div class="hidden" id="filter_drop">

            <section class="filter_type">
                <h5 class="filter_heading">Cuisine</h5>
                <ul class="filter_list">
                    <li><a href="#">American</a></li>
                    <li><a href="#">Asian</a></li>
                    <li><a href="#">Hispanic</a></li>
                    <li><a href="#">Italian</a></li>
                </ul>
            </section> 

          <section class="filter_type">
                <h5 class="filter_heading">Key Ingredient</h5>
                <ul class="filter_list">
                    <li><a href="#">Beef</a></li>
                    <li><a href="#">Chicken</a></li>
                    <li><a href="#">Fish</a></li>
                    <li><a href="#">Pasta</a></li>
                    <li><a href="#">Pork</a></li>
                    <li><a href="#">Vegetables</a></li>
                </ul>
          </section>

          <section class="filter_type">
                <h5 class="filter_heading">Servings</h5>
                <ul class="filter_list">
                    <li><a href="#">2 Servings</a></li>
                    <li><a href="#">4 Servings</a></li>
                </ul>
          </section>

          <section class="filter_type">
                <h5 class="filter_heading">Cook Time</h5>
                <ul class="filter_list">
                    <li><a href="#">20 Minutes</a></li>
                    <li><a href="#">30 Minutes</a></li>
                    <li><a href="#">45 Minutes</a></li>
                    <li><a href="#">1 Hour</a></li>
                </ul>
          </section>
        </div>
      </div>

        </div>
        <div id="search_result_container">
        <div id="search_container">

           <?php 
           $search_result_orig = $search_result;
           $search_result = mysqli_real_escape_string($connection, $search_result); 

           if ($search_result !== null) {
            $query = "SELECT * ";
            $query .= "FROM recipes ";
            $query .= "WHERE title LIKE '%{$search_result}%' ";
            $query .= "OR side LIKE '%{$search_result}%' ";
            $query .= "OR description LIKE '%{$search_result}%' ";
            $query .= "OR ingredients LIKE '%{$search_result}%' ";
            $query .= "OR steps LIKE '%{$search_result}%' ";
            $query .= "OR tags LIKE '%{$search_result}%' ";
            // $query .= ")";
          }

          $result = mysqli_query($connection, $query);

          if (!$result) {
            die("Database connection failed.");
          }
          elseif (mysqli_num_rows($result) == 0) {
              ?>
            <h2 id="no_result">Sorry! Nothing seems to match the search.</h2>;
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
     
        <!-- <h2 id="results_num"></h2> -->

        <!-- <h2 id="search_help">Search for a recipe, special ingredient or cuisine!</h2> -->
        <!-- <h2 id="no_result">Sorry! Nothing seems to match the search.</h2> -->
    </main>

    <?php
        require_once "includes/_footer.php";
    ?>
</body>

<script src="js/navigation.js"></script>
<script src="js/filter.js"></script>

</html>