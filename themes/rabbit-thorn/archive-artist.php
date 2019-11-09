<?php get_header(); ?>


<!-- ============ Main Header - END ============ -->

<div id="main">

    <!-- ============ Contacts Bar - START ============ -->

   <?php get_template_part('template-parts/contact-bar');?>

    <!-- ============ Contacts Bar - END ============ -->

    <!-- ============ Works - START ============ -->

    <?php if( have_posts() ) :
        //The WordPress Loop: loads post content 
        while( have_posts() ) :
            the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        
        <!-- Loop ends -->
        <?php endwhile;?>

        <?php the_posts_navigation();?>

    <?php else : ?>
            <p>No posts found</p>
    <?php endif;?>

    <!-- ============ Works - END ============ -->

    <!-- ============ Instagram Banner - START ============ -->

    <a class="instagram-bar" href="#">See all works on <strong>Instagram</strong>!</a>

    <!-- ============ Instagram Banner - END ============ -->

</div>

<!-- ============ Footer - START ============ -->

    
<?php get_footer();?>