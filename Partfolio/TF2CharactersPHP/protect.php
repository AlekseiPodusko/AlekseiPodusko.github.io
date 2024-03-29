<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protect</title>
    <meta name="description" content="Tf2" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">

        <header>
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
                        <li><a href="pyro.php">Pyro</a><span class="rating_sidebar">80%</span></li>
                        <li><a href="heavy.php">Heavy weapons guy</a><span class="rating_sidebar">69%</span></li>
                        <li><a href="medic.php">Medic</a><span class="rating_sidebar">68%</span></li>
                        <li><a href="scout.php">Scout</a><span class="rating_sidebar">65%</span></li>
                    </ul>
                </div>

            </aside>

            <div class="content">
                <div class="namep">
                    <h1>Heavy</h1>
                </div>
                <div class="info">
                    <img src="assets/img/Heavy.jpg">
                    The Heavy is the largest and arguably most dangerous class in Team Fortress 2 - boasting the most base health, combined with the devastating firepower of his trusty Minigun. This weapon can inflict huge damage at a very high rate of fire, allowing him to mow down opposing babies, cowards, and teeny-men in mere seconds.
                     <div class="button"><a href="heavy.php">Read</a></div>
                </div>
                <div class "namep">
                    <h1>Engineer</h1>
                </div>
                <div class="info">
                    <img src="assets/img/Eng.jpg">
                    The Engineer is a soft-spoken, amiable Texan from Bee Cave, Texas, USA with an interest in all mechanical things. He specializes in constructing and maintaining Buildings that provide support to his team, rather than fighting at the front lines, making him the most suitable for defense
                        <div class="button"><a href="engineer.php">Read</a></div>
                </div>
                <div class="namep">
                    <h1>Demoman</h1>
                </div>
                <div class="info">
                    <img src="assets/img/Demo.jpg">
                    The Demoman is a self-described black Scottish cyclops and a scrumpy-swilling demolitions expert from Ullapool, Scotland, who is one of the most versatile members of the team. A master of explosives, the Demoman strategically deals massive amounts of indirect and mid-range splash damage.
                    <div class="button"><a href="demo.php">Read</a></div>
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
