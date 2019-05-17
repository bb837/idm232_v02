<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/master_tablet.css">
    <link rel="stylesheet" href="css/master_tablet.css">
    <title>Search</title>
</head>

<div id="menu" class="overlay">
            <button id="closebtn" class="closebtn">&times;</button>
            <div id="user_info">
                <img src="" alt="">
                <h2 id="welcome"></h2>
            </div>
            <div class="overlay-content">
                <a href="index.php">Home</a>
              <a href="#">Your Favorites</a>
              <a href="search.php">Search</a>
              <a href="recipe.php">Recipe Template</a>
              <a href="help-screen.php">Help Screen</a>
            </div>
    </div>

<div id="filter-window">
    
</div>

<body id="top">
    <header id="search_header">
        <a href="index.php">
            <svg id="wordmark_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 211 43">
                <defs>
                    <style>
                    .cls-1 {
                        fill: #f5f5f5;
                        font-size: 29px;
                        font-family: Beauty and the Dutch;
                        letter-spacing: 0.093em;
                    }
                    </style>
                </defs>
                <g id="Symbol_1_1" data-name="Symbol 1 – 1" transform="translate(-8 -8)">
                    <text id="Let_s_Cook_" data-name="Let&apos;s Cook!" class="cls-1" transform="translate(8 8)"><tspan x="0" y="31">Let&apos;s Cook!</tspan></text>
                </g>
            </svg>
        </a>

        <button id="hamburger">
            <span class="burger"></span>
            <span class="burger"></span>
            <span class="burger"></span>
        </button>

        <div id="search_wrap">
            <object id="filter_img" data="img/filter.svg" type="image/svg+xml"></object>
            <form id="search_form">
                <input type="search" placeholder="What are you hungry for?">
            </form>
            
        </div>
        </div>
    </div>
</header>

<main id="search_main">
        <div id="filter_container">
            

        </div>
        <div id="search_result">
        <div id="search_container">
            <!--375px X 322px (32,32,32,32)-->
           <figure class="index_item">
               <!--350px X 208px-->
               <img class="index_img" src="https://via.placeholder.com/350x208" alt="placeholder">
               <!--350px X 94px (0,0,32,32)-->
                <figcaption class="item_cap">
                        <h2>TEST RECIPE</h2>
                        <p>TEST DESCRIPTION</p>
                    </figcaption>
           </figure>

           <figure class="index_item">
               <!--350px X 208px-->
               <img class="index_img" src="https://via.placeholder.com/350x208" alt="placeholder">
               <!--350px X 94px (0,0,32,32)-->
                <figcaption class="item_cap">
                        <h2>TEST RECIPE</h2>
                        <p>TEST DESCRIPTION</p>
                    </figcaption>
           </figure>
       </div> 
        </div>
     
        <!-- <h2 id="results_num"></h2> -->

        <!-- <h2 id="search_help">Search for a recipe, special ingredient or cuisine!</h2> -->
        <!-- <h2 id="no_result">Sorry! Nothing seems to match the search.</h2> -->
    </main> 
        <footer>
        <a id="back-to-top" href="#top">Back to Top</a>
            <!-- back to top? -->
        </footer>
        
</body>

<script src="js/navigation.js"></script>
<script src="js/filter.js"></script>

</html>