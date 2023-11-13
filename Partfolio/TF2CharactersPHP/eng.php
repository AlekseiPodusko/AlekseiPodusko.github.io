<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Engineer</title>
    <meta name="description" content="Tf2" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">

        <header>
            <div class="logo">
                <div class="logo_text">
                    <h1><a href="index.html"> Team Fortress 2 </a></h1>
                    <h2>What your main says about you! </h2>
                </div>  
            </div>

            <div class="menubar"> 

                <ul class="menu">
                    <li class="selected"> <a href="index.html">Main</a></li>
                    <li><a href="attack.html">Attack</a></li>
                    <li><a href="protect.html">Protect</a></li>
                    <li><a href="support.html">Support</a></li>
                    <li><a href="contact.html">You have something to say?</a></li>
                </ul>
            </div>
        </header>

        <div class="logotf2">
            <a href="https://alekseipodusko.github.io"><img src="assets/img/logo.png"></a>
        </div>

        <section class="site_content">
            <aside class="sidebar_container">
                <div class="sidebar">
                    <h2>Search</h2>
                    <form method="post" action="#" id="search_form">
                        <input type="search" name="search_field" placeholder="your request"/>
                        <input type="submit" class="btn" value="find"/>
                    </form>
                </div>

                <aside class="sidebar">
                    <h2>Enter</h2>
                    <form method="post" action="#" id="login">
                        <input type="text" name="login_field" placeholder="log in"/>
                        <input type="password" name="password_field" placeholder="password"/>
                        <input type="submit" class="btn" value="enter"/>
                        <div class="lables_passreg_text">
                            <span><a href="#">forgot password?</a></span> | <span><a href="#">registration</a></span>
                        </div>
                    </form>
                </aside>

                <div class="sidebar">
                    <h2>Most played characters</h2>
                    <ul>
                        <li><a href="pyro.html">Pyro</a><span class="rating_sidebar">80%</span></li>
                        <li><a href="heavy.html">Heavy weapons guy</a><span class="rating_sidebar">69%</span></li>
                        <li><a href="medic.html">Medic</a><span class="rating_sidebar">68%</span></li>
                        <li><a href="scout.html">Scout</a><span class="rating_sidebar">65%</span></li>
                    </ul>
                </div>
            </aside>
            <div class="content">
                <h1>Meet Engineer</h1>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/SNgNBsCI4EA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <hr>
                <h2>Engineer description</h2>
                <div class="descriptions">
                    <img src="assets/img/Eng.jpg" style="width: 150px; height: 150px;">
                    The Engineer is a soft-spoken, amiable Texan from Bee Cave, Texas, USA with an interest in all mechanical things. He specializes in constructing and maintaining Buildings that provide support to his team, rather than fighting at the front lines, making him the most suitable for defense.
                </div>
                <hr>
                <h2>Engineer weapons settings</h2>
                <div class="reviews">
                    <div class="reviews_name">
                        <h1>Default Engineer Shotgun</h1>
                    </div>
                    <img src="assets/img/eng_shotgun.png">
                    <div class="review_text">
                        6 bullets - Ammunition ready.
                    </div>
                    <div class="review_text">
                        32 bullets - Ammunition in reserve.
                    </div>
                    <div class="review_text">
                        60 dmg base damage and 180 dmg headshot.
                    </div>
                </div>
                <div class="reviews">
                    <div class="reviews_name">
                        <h1>Default Engineer Pistol</h1>
                    </div>
                    <img src="assets/img/eng_pistol.png">
                    <div class="review_text">
                        12 bullets - Ammunition ready.
                    </div>
                    <div class="review_text">
                        200 bullets - Ammunition in reserve.
                    </div>
                    <div class "review_text">
                        15 dmg base damage and 45 dmg headshot.
                    </div>
                </div>  
                <div class="reviews">
                    <div class="reviews_name">
                        <h1>Default Engineer Wrench</h1>
                    </div>
                    <img src="assets/img/eng_wrench.png">
                    <div class="review_text">
                        65 dmg base damage and 195 dmg critical.
                    </div>
                    <div class="review_text">
                        Fix buildings
                    </div>
                </div>
                <div class="reviews">
                    <div class="reviews_name">
                        <h1>Default Engineer PDA</h1>
                    </div>
                    <img src="assets/img/eng_pda.png">
                    <div class="review_text">
                        Create buildings
                    </div>
                </div>
                <div class="reviews">
                    <div class="reviews_name">
                        <h1>Default Engineer Sapper</h1>
                    </div>
                    <img src="assets/img/eng_sapper.png">
                    <div class="review_text">
                        Destroy buildings
                    </div>
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
