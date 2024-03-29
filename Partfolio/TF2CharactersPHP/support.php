<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Support</title>
    <meta name="description" content="КиноБаза - это портал кино" />
    <meta name="keywords" content="фильмы, фильмы онлайн,hd" />
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
                    <li><a href="contact.html">You have somthing to say?</a></li>
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
                        <input type="search" name="search_field" placeholder="your request" />
                        <input type="submit" class="btn" value="find" />
                    </form>
                </div>

                <side class="sidebar">
                    <h2>Enter</h2>
                    <form method="post" action="#" id="login">

                        <input type="text" name="login_field" placeholder="log in" />
                        <input type="password" name="password_field" placeholder="password" />
                        <input type="submit" class="btn" value="enter" />
                        <div class="lables_passreg_text">
                            <span><a href="#">forgot password?</a></span> | <span><a href="#">registration</a></span>
                        </div>

                    </form>
                </side>


                <div class="sidebar">
                    <h2>Most played characters</h2>
                    <ul>
                        <li><a href="pyro.html">Pyro</a><span class="rating_sidebar">80%</span></li>
                        <li><a href="heavy.html">Heavy weapons guy</a><span class="rating_sidebar">69%</span></li>
                        <li><a href="medic.html">Medic</a><span class="rating_sidebar">68%</span></li>
                        <li><a href="scout.html">Scout</a><span class="rating_sidebar">65%</span></li>
                    </ul>
                </div>

            </side>

            <div class="content">
                <div class="names">
                    <h1>Medic</h1>
                </div>
                <div class="info">
                    <img src="assets/img/medic.jpg">
                    <?php
                    $medicDescription = "The Medic is a Teutonic man of medicine from Stuttgart, Germany. While he may have a tenuous adherence to medical ethics, he is nonetheless the primary healing class of the team.";
                    echo $medicDescription;
                    ?>
                    <div class="button"><a href="medic.html">Read</a></div>
                </div>
                <div class="names">
                    <h1>Sniper</h1>
                </div>
                <div class="info">
                    <img src="assets/img/sniper.jpg">
                    <?php
                    $sniperDescription = "The Sniper's main role on the battlefield is to pick off important enemy targets from afar using his Sniper Rifle and its ability to deal guaranteed critical hits with a headshot (with some exceptions). He is effective at long range, but weakens with proximity, where he is forced to use his Submachine Gun or his Kukri.";
                    echo $sniperDescription;
                    ?>
                    <div class="button"><a href="sniper.html">Read</a></div>
                </div>
                <div class="names">
                    <h1>Spy</h1>
                </div>
                <div class="info">
                    <img src="assets/img/spy.jpg">
                    <?php
                    $spyDescription = "Hailing from an indeterminate region of France, the Spy is an enthusiast of sharp suits and even sharper knives. Using a unique array of cloaking watches, he can render himself invisible or even fake his own death, leaving unaware opponents off-guard.";
                    echo $spyDescription;
                    ?>
                    <div class="button"><a href="spy.html">Read</a></div>
                </div>

            </div>
        </div>
        <footer>
            <p>
                <a href="index.html">Main</a>
                <a href="attack.html">Attack</a>
                <a href="protect.html">Protect</a>
                <a href="support.html">Support</a>

            </p>
            <p>wiki.teamfortress.com</p>
        </footer>

    </div>

</body>

</html>
