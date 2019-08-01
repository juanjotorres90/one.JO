<?php include("head.php"); ?>
<link rel="stylesheet" href="css/style-min.css" type="text/css">
<title>one.JO | We build beautiful websites | Home </title>
<script src="js/script.js" defer></script>
</head>

<body class="index light" onscroll="menuOn()" onload="myFunction()">
    <div id="cookieConsent">

        We use cookies to ensure you get the best experience on our website. <a href="cookies">More info.</a> <a class="cookieConsentOK">Accept cookies</a>
    </div>

    <a id="link-logo" href="https://onejo.eu/" title="Go to the Home Page"><img id="logo-nav-bar" src="img/logo.svg"
            alt="1.jo logo">one.JO</a>
            
    <?php include("header-menu.php"); ?>

    <header id="header">


        <div class="logo-title">

            <div class="logo-image">
                <svg id="logo-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.2 692.33">

                    <ellipse id="body-logo" class="cls-1" cx="255.6" cy="390.83" rx="255" ry="241" fill="#000" />
                    <ellipse id="face-logo" class="cls-2" cx="255.6" cy="492.83" rx="231" ry="139" fill="#d42300" />
                    <circle id="foot-right" class="cls-1 foot-logo" cx="84.6" cy="631.83" r="60" fill="#000" />
                    <circle id="foot-left" class="cls-1 foot-logo" cx="431.6" cy="631.83" r="60" fill="#000" />
                    <ellipse id="ear-left" class="cls-2" cx="102.6" cy="149.83" rx="67" ry="168" transform="translate(-61.17 71.37) rotate(-30)" fill="#d42300" />
                    <ellipse id="ear-right" class="cls-2" cx="408.6" cy="149.83" rx="168" ry="67" transform="translate(74.54 428.78) rotate(-60)" fill="#d42300" />
                    <circle class="cls-3 eye-logo" cx="162.6" cy="479.83" r="60" fill="#fff" />
                    <circle class="cls-1 iris-logo" cx="162.6" cy="479.83" r="48" />

                    <circle class="cls-3 eye-logo" cx="352.6" cy="478.83" r="60" fill="#fff" />
                    <circle class="cls-1 iris-logo" cx="352.6" cy="478.83" r="48" />


                    <circle id="pupil-right" class="cls-3 pupil-logo" cx="334.6" cy="462.83" r="15" fill="#fff" />
                    <circle id="pupil-left" class="cls-3 pupil-logo" cx="144.6" cy="463.83" r="15" fill="#fff" />

                </svg>

                <div class="title">
                    <h1 onclick="menuOn()">one.JO</h1>
                    <h2 id="h2-animated" onclick="menuOn()"></h2>
                </div>

            </div>


        </div>




        <div class="eyes">
            <div class="eye">
                <div class="ball"></div>
            </div>

            <div class="eye">
                <div class="ball"></div>
            </div>
        </div>



        <a href="#pag2" onclick="menuOn()">
            <div class="pointer"><i class="fas fa-chevron-down"></i></div>
        </a>
    </header>


    <main id="pag2">


        <article>
            <h3>What do we offer?</h3>
            <div>
                <div>
                    <img src="img/design.svg" alt="PC monitor">
                    <h4>Beautiful design</h4>
                    <p>Understand our customers' experience and create something unique and minimalistic.</p>
                </div>
                <div>
                    <img src="img/glass.svg" alt="Glass">
                    <h4>SEO & SEM</h4>
                    <p>Account for important components required for marketing and apply every resource available.
                    </p>
                </div>
                <div>
                    <img src="img/technology.svg" alt="Light bulb">
                    <h4>Advanced technologies</h4>
                    <p>Customizable platforms and fully responsive.</p>
                </div>
                <div>
                    <img src="img/gear.svg" alt="Gears">
                    <h4>Maintenance</h4>
                    <p>Help your website keep up with the ever-changing and evolving industry.</p>
                </div>

            </div>

        </article>
        <section class="pax-section">
            <figure>
                <img class="image" src="img/team.jpg" alt="Fist shaking in group">
            </figure>
            <h3>A world of endless possibilities</h3>


        </section>
        <section>

            <h3>Let's build something together!</h3>

            <a href="contact"><button>START A CONVERSATION</button></a>


        </section>

        <?php include("footer.php"); ?>


        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.0.2/dist/simpleParallax.min.js"></script>

</body>

</html>