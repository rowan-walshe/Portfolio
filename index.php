<?php
require_once "php/dbConnection.php";
require_once "php/functions.php";

$db = getdbConnection();
$aboutMeText = getAboutMeText($db);
$displayAboutMeText = displayAboutMeText($aboutMeText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kate Starks</title>
    <link rel='stylesheet' type='text/css' href='css/normalize.css'/>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel='stylesheet' type='text/css' href='css/styles.css'/>
</head>

<body>
    <main class="hero">
        <h1>Kate Starks {</h1>
        <p>Full Stack Developer</p>
        <p>Positive | Resilient | Motivated</p>
        <h1>}</h1>
        <div><a href="#about"><img class="heroArrow" src="IMG/heroArrow.png"></a></div>
    </main>
    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact me</a></li>
        </ul>
        <div class="navColor"></div>
    </nav>
    <section id="about" class="about">
        <div class="aboutContentLeft">
            <h1>" Welcome to my portfolio,</h1>
            <?php
            echo $displayAboutMeText;
            ?>
        </div>
        <div class="aboutContentRight">
            <h3>Here are some other useful skills I've learnt along the way:</h3>
            <ul>
                <li>Team working</li>
                <li>Communication</li>
                <li>Organisation</li>
                <li>Influencing</li>
                <li>Emotional intelligence</li>
            </ul>
        </div>
    </section>
    <section id="projects" class="projects">
        <h1>Example Projects</h1>
        <div class="project1">
            <div class="cover">
                <h1>Responsive web page</h1>
                <a href=""><h1>view here</h1></a>
                <a href="https://github.com/katestarks/PilotShop"><img src="IMG/GithubLogo.png"></a>
            </div>
        </div>
        <div class="project2">
            <div class="cover">
                <h1>Logo created in CSS</h1>
                <a href=""><h1>view here</h1></a>
                <a href=""><img src="IMG/GithubLogo.png"></a>
            </div>
        </div>
        <div class="project3">
            <div class="cover">
                <h1>Coming Soon</h1>
                <a href=""><h1>view here</h1></a>
                <a href=""><img src="IMG/GithubLogo.png"></a>
            </div>
        </div>
        <div class="project4">
            <div class="cover">
                <h1>Coming Soon</h1>
                <a href=""><h1>view here</h1></a>
                <a href=""><img src="IMG/GithubLogo.png"></a>
            </div>
        </div>
        <div class="project5">
            <div class="cover">
                <h1>Coming Soon</h1>
                <a href=""><h1>view here</h1></a>
                <a href=""><img src="IMG/GithubLogo.png"></a>
            </div>
        </div>
        <div class="project6">
            <div class="cover">
                <h1>Coming Soon</h1>
                <a href=""><h1>view here</h1></a>
                <a href=""><img src="IMG/GithubLogo.png"></a>
            </div>
        </div>
    </section>
    <section id="contact" class="contactMe">
        <h1>Get in touch in the usual ways:</h1>
        <div>
            <a href="mailto:katestarks@me.com"><img src="IMG/envelope.png" alt = "Envelope icon"></a>
            <a href="tel:07962-071468"><img src="IMG/phone.png" alt = "Telephone icon"></a>
            <a href="https://github.com/katestarks" target="_blank"><img src="IMG/GithubLogo.png" alt = "Github icon"></a>
        </div>
        <div>
            <a href="https://www.linkedin.com/in/kate-starks/" target="_blank"><img src="IMG/linkedin.png" alt = "LinkedIn icon"></a>
            <a href="https://twitter.com/K8CodeandCoffee" target="_blank"><img src="IMG/twitter.png" alt = "Twitter icon"></a>
            <a href="https://www.instagram.com/picnic_bath/" target="_blank"><img src="IMG/instagram.png" alt = "Instagram icon"></a>
        </div>
        <p>I'm also happy to help with student talks; careers sessions or other ways I can get involved in the Bath, UK area.</p>
        <p>As well as coding, my favourite topics include swapping travel stories, solving dog behaviour and training issues, comparing photography portfolios or talking about behavioural economics; all areas of amateur enthusiasm for me.</p>
    </section>
    <footer></footer>
</body>
</html>
