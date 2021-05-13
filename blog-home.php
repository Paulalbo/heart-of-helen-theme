
<?php 
/* Template Name: Blog Page */
include 'header.php';
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>
<body class="blogpage">
    <section>
        <?php include 'navbar.php'; ?>
        
        <div class="section section__second">
            <div class="left">
                <h1 id="blogh1">home</h1>
            </div>

            <div class="right">


            
        <?php if(have_posts()) : ?>
        <!--  If there are posts available  -->

            <?php while(have_posts()) : the_post(); ?>
            <!-- if there are posts, iterate the posts in the loop -->

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
            <!--retrieves content-->

            <?php endwhile; ?>
            <!--end the while loop-->


            <?php else :?>
            <!-- if no posts are found then: -->

        <?php get_template_part( 'template-content/content', 'none' ); ?>
        <?php endif; ?>
        <!-- end if -->


            </div>
                
            </div>
        </div>
    </section>
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./script/script.js"></script>

</body>
</html>