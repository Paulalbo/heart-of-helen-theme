<?php include 'signature.php'; ?>
<?php include 'header.php'; ?>
<body>
    <header>
        <img id="layer0" src="./wp-content/uploads/2021/01/header0.png">
        <img id="layer1" src="./wp-content/uploads/2021/01/header1.png">
        <img id="layer2" src="./wp-content/uploads/2021/01/header2.png">
        <h1 id="layer3">heartsss <nobr>of helen</nobr></h1>
        <img id="layer4" src="./wp-content/uploads/2021/01/header3.png">
        <div class="scrolldown">
            <h1>scrolldown</h1>
            <div class="arrow arrow-first"></div>
            <div class="arrow arrow-second"></div>
        </div>
    </header>
    <?php include 'navbar.php'; ?>
    <section>
        <div id="section" class="section section__first">
            <div class="left">
                <h1><nobr>about</nobr></h1>
                <img class="layer0" src="./wp-content/uploads/2021/01/five_handstand.jpg">
                <img class="layer2" src="./wp-content/uploads/2021/01/five_handstand_1.png">
            </div>

            <div class="right">
                <p>
                <strong>GOOD TO  SEE YOU!</strong><br><br>
                Ich bin Helene, Yogalehrerin und Fitnesstrainerin aus Wien. Ich liebe Bewegung, Natur, Reisen und Abenteuer und freue mich darauf, mein Wissen mit dir zu teilen. Klick dich durch, schau dich um und lass dich inspirieren. Schön, dass du da bist!
                </p>
                <h1 class="only_desktop">me</h1>
            </div>
        </div>

        <div class="section section__second">
            <div class="left">
            </div>

            <div class="right">
                <div id="right__above">
                   <h1>Get inspired...</h1>
                </div>
                <div id="right__below">
                    <div onclick="location.href='./blog';" style="cursor:pointer;" href="blog.html" id="blog">
                        <h1>Blog</h1>
                        <p>READ ME</p>
                        <img src="https://heartofhelen.com/wp-content/uploads/2021/01/DSC09700-2-scaled.jpg">
                    </div>
                    <div onclick="location.href='./work-with-me';" style="cursor:pointer;" id="personal">
                        <h1>Work</h1>
                        <p>WITH ME</p>
                        <img src="https://heartofhelen.com/wp-content/uploads/2020/06/IMG_3144-1-scaled.jpg">
                    </div>
                    <div onclick="location.href='./recommendations';" style="cursor:pointer;" id="recommendations">
                        <h1>Products</h1>
                        <p>I'M USING DAILY</p>
                        <img src="https://heartofhelen.com/wp-content/uploads/2021/05/5.jpg">
                    </div>
                </div>
                
            </div>
        </div>
</section>

<?php include 'footer.php'; ?>
    <div id="my-element"></div>



</body>
</html>
