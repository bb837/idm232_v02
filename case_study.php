<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/_head.php";
    require_once "includes/menu-include.php";
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
    <title>Case Study</title>
</head>
<body id="top">
    <img id="case-hero" src="https://via.placeholder.com/1280x900" alt="placeholder">
    <main>
    
        <section id="overview" class="case-section">
            <h5 class="section-head">Overview</h5>
            <p>2 paragraphs: some of the main take aways</p>
        </section>
    
        <section id="challenge" class="case-section">
        <h5 class="section-head">The Challenge</h5>
        <h6>Each student will create their own branded web application that will display the recipes and provide a user interface for browsing, searching and filtering through all of the available content.The topic will be an online cookbook featuring a library of recipes. A folder will be provided with a library of pre-written recipes in PDF format, as well as a group of images related to each recipe. </h6>
    
        <h6>The application must use the following:</h6>
        <ul>
            <li>PHP</li>
            <li>MySQL</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>Git</li>
            <li>JavaScript</li>
            <li>Projects must include all of the provided recipes, not a subset.</li>
        </section>
    
        <section id="approach" class="case-section">

            <h5 class="section-head">The Approach</h5>
            <div class="text-wrap">
                <p> The goal was to design a web application that will appeal to all ages. After looking at the data provided to me by my professor, I noticed these recipes are calorie conscientious and heart healthy. Knowing this allowed me to make more educated decisions when it came to the overall User Interface.</p>
                <p>The core of the designs came from an idea I have been working with for a little over a year. For an earlier class (University 101 at Drexel University) I was tasked to create a UI of my choice, and since I am passionate about cooking, I chose to create a cooking app called “Let’s Cook”. What was different and special about this app was that it was for learning to cook and not just looking up and using recipes because not a lot of people know how to take that first step to cook delicious food. Looking back at it, it looked horrible but it has grown to become the foundations of this project. From “Let’s Cook” I pulled branding, a base color scheme, and a general feel for the application. </p>
            </div>

            <div class="img-wrap">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 228.722 228.722">
                <defs>
                    <style>
                    .cls-1 {
                        fill: #0ddfca;
                    }
    
                    .cls-2, .cls-3, .cls-4 {
                        fill: #fff;
                        font-family: 'beauty_and_the_dutchregular';
                        letter-spacing: 0.1em;
                    }
    
                    .cls-2 {
                        font-size: 58px;
                    }
    
                    .cls-3 {
                        font-size: 61px;
                    }
    
                    .cls-4 {
                        font-size: 55px;
                    }
    
                    .cls-5 {
                        filter: url(#Ellipse_1);
                    }
                    </style>
                    <filter id="Ellipse_1" x="0" y="0" width="228.722" height="228.722" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.161"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g id="logo" transform="translate(522 -704.576)">
                    <g class="cls-5" transform="matrix(1, 0, 0, 1, -522, 704.58)">
                    <circle id="Ellipse_1-2" data-name="Ellipse 1" class="cls-1" cx="105.361" cy="105.361" r="105.361" transform="translate(9 6)"/>
                    </g>
                    <text id="Let_s" data-name="Let&apos;s" class="cls-2" transform="translate(-480.855 751.533) rotate(-11)"><tspan x="0" y="61">Let&apos;s</tspan></text>
                    <text id="Cook" class="cls-3" transform="translate(-487.571 817.878) rotate(-11)"><tspan x="0" y="65">Cook</tspan></text>
                    <text id="_" data-name="!" class="cls-4" transform="translate(-359.161 790.408) rotate(-16)"><tspan x="0" y="58">!</tspan></text>
                </g>
                </svg>
    
                <div class="frame-container">            
                    <iframe  src="https://www.youtube.com/embed/av7T21bLMhQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>


            <!-- width="560" height="315" -->
            <div class="text-wrap">
                <p>I then used the idea for another class (Storytelling for User Experience - IDM 418 at Drexel University) for which was to present an idea that I had and create a narrative based around the core user experience of that idea. Again it was based on the idea that everyone is capable of cooking, they just need to learn the skills for it. The final project for that class was to create an animation that told the story of the application.</p>
                
                <p>While the original “Let’s Cook” was where I started from, I made a lot of improvements to make the version created here. I changed the main color to #0DDFCD, but it is still reflective of a bright and vivacious experience just like in the original version. This version of it does not yet have the teaching portion of the original app, however it is aesthetically and functionally much more evolved than before. Here the recipes where organized into a card style layout that was heavily influenced by Apple’s new design language seen throughout the iOS App Store and other apps. It had fun and colorful images that were large and eye catching, and that was something that I wanted to replicate in this project. </p>
    
                <p>The design of the UI reflects that a fun and healthy lifestyle which was the target audience I chose for this project. The general user persona was based off my mother. This was a project that I hoped she will use in the future because I know in the household she is making more conscious diet decisions for the whole family. She was excited for this project, and knowing that allowed me to make decisions based off of her, an actual user.</p>
            </div>
            </section>

            <section id="vision" class="case-section">
                <h5 class="section-head">The Vision</h5>  



                    <div id="xd" class="frame-container">
                    <iframe width="375" height="667" src="https://xd.adobe.com/embed/6af0f301-320b-455a-5c1e-0bd29797bea4-1cc1/" frameborder="0" allowfullscreen></iframe>               
                    </div>

                    <div class="text-wrap"> 
                        <a class="link" href="https://xd.adobe.com/view/6af0f301-320b-455a-5c1e-0bd29797bea4-1cc1/" target="_blank">View in a Separate Tab Here</a>
                        
                        <p>Above is my low and mid fidelity prototype. I have made some UI changes because of the new skills I had in PHP.</p>
                    </div>
            </section>

            <section id="code-section" class="case-section">
                <h5 class="section-head">Code</h5>
                <div class="img-wrap">
                    <img class="case-img" src="img/code.png" alt="sample of code">
                </div>
              <div class="text-wrap">
                  <p>At first, this project was quite intimidating and I didn’t exactly know how to start as I had only started coding basic HTML and CSS less than nine months before this project.</p>
    
    
                <p>I collaborated with Erik Martus (put link around name) on creating our MySQL database. We spent the majority of the term perfecting the database so that working in PHP would be that much easier. Picking up PHP was much easier than JavaScript, and a lot less blood, sweat and tears went into building this project. The portion that I was most excited to get working was the dynamic building of content because seeing it working after hand coding similar things in the past was magic. Using only fifty-one lines of code, including white spaces for legibility, to create a page with forty recipe entries when it would have taken hundreds in pure HTML was art.</p> 
              </div> 
            </section>

            <section id="product" class="case-section">
                <h5 class="section-head">The Final Product</h5>
                <p>It is a web application that references and MySQL database through PHP and dynamically builds out the page’s content. Feel free to check out the live version the site and see for yourself just how it works.</p>

                <h2>put some darn images</h2>
            </section>
                
            <section id="case-future" class="case-section">
                <h5 class="section-head">In The Future</h5>
                <p>I intend to revisit this in the future and I plan to bring back those educational aspects I took out for this project.</p>
            </section>

    </main>
    <?php
        require_once "includes/_footer.php";
    ?>
</body>

<script src="js/navigation.js"></script>
</html>