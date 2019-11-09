<?php get_header(); ?>


<div id="main">

<!-- ============ Contacts Bar - START ============ -->

<?php get_template_part('template-parts/contact-bar');?>

<!-- ============ Contacts Bar - END ============ -->

<!-- ============ Artist Description - START ============ -->

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

        <div class="section">

            <div class="content container">

                <h2 class="focus-title">Got questions? We have answers!</h2>

               <?php the_content();?>

                <!-- ============ Contact Form - START ============ -->

                <?php echo do_shortcode( '[contact-form-7 id="44" title="Contact Us"]' );?> 

                <!-- ============ Contact Form - END ============ -->

            </div>

        </div>

<!-- ============ Instagram Banner - START ============ -->

<a class="instagram-bar feed-bg"  href="https://www.instagram.com/rabbitandthorn/">Check out our work on <strong>Instagram</strong></a>

<!-- ============ Instagram Banner - END ============ -->

<?php endwhile;?>

<?php the_posts_navigation();?>

<?php else : ?>
    <p>No posts found</p>
<?php endif;?>
    
<?php get_footer();?>