<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <meta name="description" content="Tf2" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">

        <header >
            <div class="logo">
                <div class="logo_text">
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
                            <span> <a href="#">forgot password?</a></span> | <span><a href="#">registration</a></span>
                        </div>

                    </form>
                </side>

                
                <div class "sidebar">
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

                <h1>Characters</h1>

                <div class="films_block">

                    <a href="scout.php"><img src="assets/img/scout.jpg"></a>
                    <a href="spy.php"><img src="assets/img/spy.jpg"></a>
                    <a href="solder.php"><img src="assets/img/Solder.jpg"></a>
                    <a href="medic.php"><img src="assets/img/medic.jpg"></a>
                    <a href="heavy.php"><img src="assets/img/Heavy.jpg"></a>
                    <a href="sniper.php"><img src="assets/img/sniper.jpg"></a>
                    <a href="demo.php"><img src="assets/img/Demo.jpg"></a>
                    <a href="eng.php"><img src="assets/img/Eng.jpg"></a>
                    <a href="pyro.php"><img src="assets/img/pyro.jpg"></a>

                </div>

                <div class="posts">

                    <hr>
                    <h2><a href="#">Halloween event</a></h2>
                    <div class="posts_content">
                        <p>
                            Most Favorite Event in Team Fortress 2 is Halloween. Where a lot of free gifts with cool hats, unfortunately, you're only able to wear them on Halloween, but everyone loves it anyway.
                        </p>
                    </div>

                    <p><a href="#">Read more</a></p>
                    <hr>
                </div>

            </div>

        </section>

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
