<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/eua2quq.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Recipe Template</title>
</head>


<div id="menu" class="overlay">
            <button id="closebtn" class="closebtn">&times;</button>
            <div class="overlay-content">
                <a href="index.php">Home</a>
              <a href="#">Your Favorites</a>
              <a href="search.php">Search</a>
              <a href="recipe.php">Recipe Template</a>
              <a href="help-screen.php">Help Screen</a>
            </div>
    </div>

<body>
    <header id="recipe_header">
            <!-- 103px X 103px  -->

        <img id="absolute-logo" src="img/logo.svg" alt="Let's Cook!">

            <button id="hamburger">
            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
            </button>

    </header>

    <main>
        <!-- <img id="recipe_heart" src="img/fav_pink.png" alt="pink_favorite"> -->
        <div id="recipe_container">

            <div id="recipe_info">
                <h3>Lorem Ipsum</h3>
                <h6>Recipe Info Here</h6>
                <!-- 341px X 277px (20,20,20,20) -->
                <img class="recipe_img" src="https://via.placeholder.com/375x322" alt="placeholder">
                <p id="recipe_des">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </p>
            </div>

            <div id="ingredients">
                <h4 class="h4_blue">Ingredients</h4>
                <!-- 269px X 184px (0,0,0,0) TBD -->
                <img class="recipe_img" src="https://via.placeholder.com/269x184" alt="placeholder">
                <!-- futura Medium pt.18 line height 25-->
                <h6 id="ing_list">
                2 Lorem ipsum <br>
                1/3 dolor sit amet <br>
                4 consectetur <br>
                2 1/2 adipiscing <br>
</h6>
            </div>

            <div id="tips">
                <h4 class="h4_blue">Tips!</h4>
                <img class="recipe_img" src="https://via.placeholder.com/269x269" alt="placeholder">
                <h2>Name of the Tip</h2>
                <p id="tool_des">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>

            <!-- Make a GRID -->
            <div id="kitchen_tools">
                <h4 class="h4_blue">Kitchen Tools</h4>
                <!-- 134px X 134px (20,20,20,20) TBD -->
                <img class="recipe_img" src="https://via.placeholder.com/180x180" alt="placeholder">
                <img src="" alt="">
                <h2>Name of Kitchen Tool</h2>
                <p id="tool_des">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </p>
            </div>

            <!-- DYNAMICALLY ADD STEPS (INCLUDE) -->
            <div id="step_container">
                <!-- 6 steps max -->
                <h4>Let's Cook!</h4>
                <!-- (20,20,20,20) TBD -->
                <div class="steps">
                        <h5>Step 1</h5>
                    <img class="recipe_img" src="https://via.placeholder.com/250x250" alt="">
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
                </div>
            </div>
        </div>
        
    </main>
    <footer>
        <!-- back to top, like button, send, -->
        <!-- are you an admin -->
    </footer>

</body>

<script src="js/navigation.js"></script>
</html>