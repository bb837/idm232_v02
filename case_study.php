<?php
    require_once "includes/_db.php";
    require_once "includes/functions.php";
    require_once "includes/_head.php";
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
<body>
    <img src="https://via.placeholder.com/1280x900" alt="">
    <main>
    
        <section id="overview">
            <h5>Overview</h5>
            <p>2 paragraphs: some of the main take aways</p>
        </section>
    
        <section id="challenge">
        <h5>The Challenge</h5>
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
    
        <section id="approach">
            <h5>The Approach</h5>
            <p> The goal was to design a web application that will appeal to all ages. After looking at the data provided to me by my professor, I noticed these recipes are calorie conscientious and heart healthy. Knowing this allowed me to make more educated decisions when it came to the overall User Interface.</p>
            <p>The core of the designs came from an idea I have been working with for a little over a year. For an earlier class (University 101 at Drexel University) I was tasked to create a UI of my choice, and since I am passionate about cooking, I chose to create a cooking app called “Let’s Cook”. What was different and special about this app was that it was for learning to cook and not just looking up and using recipes because not a lot of people know how to take that first step to cook delicious food. Looking back at it, it looked horrible but it has grown to become the foundations of this project. From “Let’s Cook” I pulled branding, a base color scheme, and a general feel for the application. </p>
            <p>I then used the idea for another class (Storytelling for User Experience - IDM 418 at Drexel University) for which was to present an idea that I had and create a narrative based around the core user experience of that idea. Again it was based on the idea that everyone is capable of cooking, they just need to learn the skills for it. The final project for that class was to create an animation that told the story of the application.
            </p>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/av7T21bLMhQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

            <p>While the original “Let’s Cook” was where I started from, I made a lot of improvements to make the version created here. I changed the main color to #0DDFCD, but it is still reflective of a bright and vivacious experience just like in the original version. This version of it does not yet have the teaching portion of the original app, however it is aesthetically and functionally much more evolved than before. Here the recipes where organized into a card style layout that was heavily influenced by Apple’s new design language seen throughout the iOS App Store and other apps. It had fun and colorful images that were large and eye catching, and that was something that I wanted to replicate in this project. </p>
            <p>The design of the UI reflects that a fun and healthy lifestyle which was the target audience I chose for this project. The general user persona was based off my mother. This was a project that I hoped she will use in the future because I know in the household she is making more conscious diet decisions for the whole family. She was excited for this project, and knowing that allowed me to make decisions based off of her, a potential user’s needs.</p>
            </section>

            <section id="vision">
                <h5>The Vision</h5>

                <a href="https://xd.adobe.com/view/6af0f301-320b-455a-5c1e-0bd29797bea4-1cc1/">XD prototype</a>

                <iframe width="375" height="667" src="https://xd.adobe.com/embed/6af0f301-320b-455a-5c1e-0bd29797bea4-1cc1/" frameborder="0" allowfullscreen></iframe>
            </section>

            <section id="code-section">
                <h5>Code</h5>
              <p>At first, this project was quite intimidating and I didn’t exactly know how to start as I had only started coding basic HTML and CSS less than nine months before this project.</p>
            <p>I collaborated with Erik Martus (put link around name) on creating our MySQL database. We spent the majority of the term perfecting the database so that working in PHP would be that much easier. Picking up PHP was much easier than JavaScript, and a lot less blood, sweat and tears went into building this project. The portion that I was most excited to get working was the dynamic building of content because seeing it working after hand coding similar things in the past was magic. Using only fifty-one lines of code, including white spaces for legibility, to create a page with forty recipe entries when it would have taken hundreds in pure HTML was art.</p>  
            </section>
    


    </main>
    <?php
        require_once "includes/_footer.php";
    ?>
</body>
</html>