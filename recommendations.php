<?php
/* Template Name: Recommendations */
include 'header.php'; ?>
<body id="recommendation">
<?php include 'navbar.php'; ?>
<h1 id="weirdhyphen"><?php wp_title(''); ?></h1>
<script>
    // workaround to delete weird hyphen in wp_title
    var weirdhyphen = document.querySelector("#weirdhyphen").innerText;
    weirdhyphen = weirdhyphen.slice(0, - 1);
    document.querySelector("#weirdhyphen").innerHTML = weirdhyphen;

</script>
    <section class="recommendation">
 
    <?php  $args = array( 
      'category_name' => 'c', 
      'post_status' => 'publish' 
     ); 
     $postLoop = new WP_Query($args); 
    ?> 
     <?php if ($postLoop->have_posts()) : ?> 
        <?php while ($postLoop->have_posts()) : $postLoop->the_post(); ?> 
            <div class="recommendation-post">
                <a class="recommendation-post__img" href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
                </a>
                <h1 class="recommendation-post__title"><?php the_title(); ?></h1>
            </div>
        <?php endwhile; ?> 
     <?php else : ?>

     <p><?php __('No Posts found...'); ?></p>

     <?php endif; ?>

    </section>
    <?php include 'footer.php'; ?> <!-- here should be the footer --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>