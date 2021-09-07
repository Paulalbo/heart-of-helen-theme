<?php
/* Template Name: Planner page */
include 'header.php'; ?>
<body id="contact">
    <section>
        <?php include 'navbar.php'; ?>
        <div id="section" class="section section__first">
            <div class="left">
                <h1><nobr>get in</nobr></h1>
                <img class="layer0" src="../wp-content/uploads/2021/01/handstand_beton.jpg">
                <img class="layer2" src="../wp-content/uploads/2021/01/handstand_beton_01.png">
            </div>

            <div class="right">
            <img class="imgmobile_contact" src="../wp-content/uploads/2021/01/handstand_beton.jpg">
            <form action="../wp-content/themes/heartofhelen/mail.php" method="post">
                    <label>Name</label>
                    <input name="name" type="text">
                    <label>E-Mail</label>
                    <input name="email" type="text">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                    <button class="button" name="submit" type="submit">send</button>
                </form>

                <h1>touch</h1>
            </div>
        </div>

</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>