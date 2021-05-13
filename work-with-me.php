<?php
/* Template Name: Work with me */
include 'header.php'; ?>
<body id="work-with-me">
<?php include 'navbar.php'; ?>
<div class="layout">
    <img class="right" src="../wp-content/uploads/2021/01/bridge.jpg">
    <div class="left"></div>
</div>
<h1 id="weirdhyphen"><?php wp_title(''); ?></h1>
<script>
    // workaround to delete weird hyphen in wp_title
    var weirdhyphen = document.querySelector("#weirdhyphen").innerText;
    weirdhyphen = weirdhyphen.slice(0, - 1);
    document.querySelector("#weirdhyphen").innerHTML = weirdhyphen;

</script>
    <section>
    <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->
    <?php
        endwhile; //resetting the page loop
        wp_reset_query(); //resetting the page query
    ?>
    </section>
    <?php include 'footer.php'; ?> <!-- here should be the footer --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>