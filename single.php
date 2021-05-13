<?php include 'header.php'; ?>
<body class="singleblog">
<?php 
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>
<?php include 'navbar.php'; ?>


<h1 class="title"><?php the_title(); ?></h1>

<div class="content">
    <?php 
        echo get_the_content(); 
    ?>
</div>

<?php

    // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

    ?>

<div class="other_posts">
<?php
    $args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );

    foreach( $recent_posts as $recent ){
        echo '<article>
        		<a href="' . get_permalink($recent["ID"]) . '">

        			' . get_the_post_thumbnail($recent["ID"],'large') . '

	        		<h1>'

        				 . $recent["post_title"] . 

                    '</h1>
        		</a>
            </article> ';
    }
?>

</div>

    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="./wp-content/themes/heartofhelen/script/script.js"></script>
</body>
</html>