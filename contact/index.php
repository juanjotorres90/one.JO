<?php include("../head.php"); ?>
<link rel="stylesheet" href="../css/style-min.css" type="text/css">
<title>one.JO | We build beautiful websites | Contact </title>
<script src="../js/script-contact-min.js" defer></script>
</head>

<body class="projects contact">

    <a id="link-logo" href="https://onejo.eu/" title="Go to the Home Page"><img id="logo-nav-bar" src="../img/logo.svg" alt="1.jo logo">one.JO</a>

    <div id="bg-logo-mobile">
        <a id="link-logo-mobile" href="https://onejo.eu/" title="Go to the Home Page"><img id="logo-nav-bar-mobile" src="../img/logo.svg" alt="1.jo logo">one.JO</a>
    </div>

    <?php include("../header-menu.php"); ?>

    <main>


        <div style="width: 100%">
            <section>
                <h3>Let's keep in touch!</h3>
                <form action="process.php" method="post" name="formulario">
                    <fieldset>
                        <!-- <legend></legend> -->

                        <div class="form">
                            <div><label>Name<input type="text" name="nombre" placeholder="Type your name and surname"></label></div>



                            <div><label>Email*<input type="email" name="email" required placeholder="Type your email"></label></div>
                            <div><label>Message <textarea name="mensaje" placeholder="Write your message"></textarea></label></div>

                            <div><input type="submit" value="Send"></div>
                        </div>
                    </fieldset>
                </form>

            </section>
            <section>
                <h3>Find us here</h3>
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=2.175250053405762%2C41.39801062600602%2C2.211084365844727%2C41.412205862178695&amp;layer=mapnik&amp;marker=41.40510863173489%2C2.193167209625244" style="border: 1px solid black"></iframe><br /><small><a href="https://www.openstreetmap.org/?mlat=41.4051&amp;mlon=2.1932#map=16/41.4051/2.1932">View Larger Map</a></small>

            </section>
        </div>


        <h3>Contact info</h3>

        <section class="contact-data">


            <span><i class="fa fa-home"></i></span>
            <div class="contact-address">08018, Barcelona</div>
            <span><i class="fa fa-phone"></i></span>
            <div class="contact-phone"><a href="tel:+34606508490">+34 606508490</a></div>
            <span><i class="fa fa-envelope"></i></span>
            <div class="contact-email"><a href="mailto:juanjotorres90@gmail.com">info@onejo.eu</a></div>


        </section>

        <?php include("../footer.php"); ?>


</body>

</html>