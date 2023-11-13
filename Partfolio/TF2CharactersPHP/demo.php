<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demoman</title>
    <meta name="description" content="Tf2" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">

        <header>
            <div class "logo">
                <div class "logo_text">
                    <h1><a href="index.php"> Team Fortress 2 </a></h1>
                    <h2>What your main says about you! </h2>
                </div>  
            </div>

            <div class="menubar"> 

                <ul class="menu">
                    <li class="selected"> <a href="index.php">Main</a></li>
                    <li><a href="attack.php">Attack</a></li>
                    <li><a href="protect.php">Protect</a></li>
                    <li><a href="support.php">Support</a></li>
                    <li><a href="contact.php">You have something to say?</a></li>
                </ul>

            </div>

        </header>

        <div class="logotf2">
            <a href="https://alekseipodusko.github.io"><img src="assets/img/logo.png"></a>
        </div>

        
        <section class="site_content">

            <side class="sidebar_container">

                <div class="sidebar">
                    <h2>Search</h2>
                    <form method="post" action="#" id="search_form">
                        <input type="search" name="search_field" placeholder="your request"/>
                        <input type="submit" class="btn" value="find"/>
                    </form>
                </div>

                <side class="sidebar">
                    <h2>Enter</h2>
                    <form method="post" action="#" id="login">

                        <input type="text" name="login_field" placeholder="log in"/>
                        <input type="password" name="password_field" placeholder="password"/>
                        <input type="submit" class="btn" value="enter"/>
                        <div class="lables_passreg_text">
                            <span><a href="#">forgot password?</a></span> | <span><a href="#">registration</a></span>
                        </div>

                    </form>
                </side>

                
                <div class="sidebar">
                    <h2>Most played characters</h2>
                    <ul>
                        <li><a href="pyro.php">Pyro</a><span class="rating_sidebar">80%</span></li>
                        <li><a href="heavy.php">Heavy weapons guy</a><span class="rating_sidebar">69%</span></li>
                        <li><a href="medic.php">Medic</a><span class="rating_sidebar">68%</span></li>
                        <li><a href="scout.php">Scout</a><span class="rating_sidebar">65%</span></li>
                    </ul>
                </div>

            </side>
            <div class="content">

                <h1>Meet Demoman</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/han3AfjH210" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   <div class="info_film_page">
                 
                   
                </div>
                <hr>
                <h2>Demoman description</h2>
                <div class="decriptions">
                    <img src="assets/img/Demo.jpg" style="width: 150px;
                    height: 150px;">
                    The Demoman is a self-described black Scottish cyclops and a scrumpy-swilling demolitions expert from Ullapool, Scotland, who is one of the most versatile members of the team. A master of explosives, the Demoman strategically deals massive amounts of indirect and mid-range splash damage.
                   
                </div>
                <hr>
                <h2>Demoman weapons settings </h2>
                
                <div class="reviews">
                    <div class="reviews_name">
                    <h1>Default Demoman Rocket Launcher</h1>
                    </div>
                    <img src="assets/img/Demoman_rocket_launcher.png">
                    <div class="review_text">
                    4/6 bullets-Ammunition ready.
                    </div>
                    <div class="review_text">
                    16/30 bullets-Ammunition
                    in reserve.
                    </div>
                    <div class="review_text">
                    100 dmg base damage and 300 dmg headshot.
                    </div>
                </div>
                <div class="reviews">
                    <div class="reviews_name">
                        <h1> Default Demoman Sticky Launcher</h1>
                    </div>
                    <img src="assets/img/demo_sticky_launcher.png">
                    <div class="review_text">
                        8 bullets-Ammunition ready.
                    </div>
                    <div class="review_text">
                        24 bullets-Ammunition
                        in reserve.
                        </div>
                        <div class="review_text">
                            103-138 dmg base damage and 353 dmg headshot.
                            </div>
                </div>  
                <div class="reviews">
                    <div class="reviews_name">
                        <h1> Default Demoman Beer Bottle</h1>
                    </div>
                    <img src="assets/img/demo_bottle.png">
                    <div class="review_text">
                        65 dmg base damage and 195 dmg critical.
                    </div>
                </div> 
            </div>
         </div>
         <footer>
            <p>
                <a href="index.php">Main</a>
                <a href="attack.php">Attack</a>
                <a href="protect.php">Protect</a>
                <a href="support.php">Support</a>

            </p>
            <p>wiki.teamfortress.com</p>
        </footer>

    </div>

</body>
</html>
