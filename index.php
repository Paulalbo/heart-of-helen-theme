
<?php 
include 'header.php';
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>
<body class="blogpage">
    <section>
        <?php include 'navbar.php'; ?>
        
        <div class="section section__second">
            <div class="left">
                <h1 id="blogh1"><nobr>Blog</nobr></h1>
            </div>

            <div class="right">
            <h1 class="only_mobile">Blog</h1>
            <p class="blogheading">Mein Blog. Hier findest du Artikel, Tipps und Produktinfos rund um die Themen Sport, Regeneration, die Psyche, Yoga und Mobility.</p>

        <?php  $args = array( 
          'category_name' => 'blog', 
          'post_status' => 'publish' 
         ); 
         $postLoop = new WP_Query($args); 
        ?>        
        <?php if($postLoop->have_posts()) : ?>

            <?php while($postLoop->have_posts()) : $postLoop->the_post(); ?>

            <article>
                    
                <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail( $page->ID, 'large' ); ?>
                </a>

                <main>
                    <h1><?php the_title(); ?></h1>
                    <p>
                        <?php the_content_rss('', TRUE, '', 20); ?>
                        <br> <br>
                        <a class="continue" href="<?php the_permalink() ?>">weiterlesen &raquo;</a>
                    </p>
                
                    </main>

                </article>


            <?php endwhile; ?>



            <?php else :?>

        <p>No posts found</p>
        <?php endif; ?>


            </div>
                
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./script/script.js"></script>
</body>
</html>