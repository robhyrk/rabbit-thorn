<?php get_header(); ?>

<div id="main">

<!-- ============ Contacts Bar - START ============ -->

<?php get_template_part('template-parts/contact-bar');?>

<!-- ============ Contacts Bar - END ============ -->

<!-- ============ Services - START ============ -->
<div id="service" class="section">
    <div class="content container">
        <h3 class="text-center mb-5"><?php the_excerpt();?></h3>
        <div class="row">
            <?php while( have_posts() ) :
                the_post(); ?>
            
            <div class="content-grid">
                <?php the_content(); ?>
            </div>
            
            <!-- Loop ends -->
            <?php endwhile;?>
        </div>
    </div>
</div>

<!-- ============ Services - END ============ -->

<!-- ============ Call to Action - START ============ -->

<div id="appointment" class="section cta dark">

    <h2>Are you ready to get a tattoo?</h2>

    <div class="cta-info">Request an appointment <strong>NOW</strong>!</div>

    <a class="btn md light" href="./book-appointment"><i class="fa fa-thumb-tack"></i>Appointment</a>

</div>

<!-- ============ Call to Action - END ============ -->

<!-- ============ Instagram Banner - START ============ -->

<a class="instagram-bar feed-bg"  href="https://www.instagram.com/rabbitandthorn/">Check out our work on <strong>Instagram</strong></a>

<!-- ============ Instagram Banner - END ============ -->

</div>

    
<?php get_footer();?>