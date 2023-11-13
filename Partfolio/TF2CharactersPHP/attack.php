<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attack</title>
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
                <div class="namea">
                    <h1>Scout</h1>
                </div>
                <div class="info">
                    <img src="assets/img/scout.jpg">
                    Born and raised in Boston, Massachusetts, USA, the Scout is a fast-running scrapper with a baseball bat and a snarky "in-your-face" attitude. He is the fastest and most mobile mercenary on the battlefield unassisted.    <div class="button"><a href="scout.php">Read</a></div>
                </div>
                <div class="namea">
                    <h1>Soldier</h1>
                </div>
                <div class="info">
                    <img src="assets/img/soldier.jpg">
                    The Soldier is a crazed, jingoistic patriot from the Midwest, USA. Tough and well-armed, he is versatile, capable of both offense and defense, and a great starter class to get familiar with the game.   <div class="button"><a href="soldier.php">Read</a></div>
                </div>
                <div class="namea">
                    <h1>Pyro</h1>
                </div>
                <div class="info">
                    <img src="assets/img/pyro.jpg">
                    The Pyro is a mumbling pyromaniac of indeterminate origin who has a burning passion for all things fire-related. As shown in Meet the Pyro, the Pyro appears to be insane and delusional, living in a utopian fantasy world known as Pyroland.      <div class="button"><a href="pyro.php">Read</a></div>
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
