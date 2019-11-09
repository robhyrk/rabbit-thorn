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

        <div class="full row">

            <div class="col-md-6">

                <h3><?php the_title();?></h3> <?php the_content();?></h3>

                <h4>Get in touch!</h4>
                <ul class="social-links">
                    <?php if( get_field('insta') ): ?>
                        <li><a title="Instagram" href="<?php echo get_field('instag');?>"><i class="fa fa-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if( get_field('facebook') ): ?>
                        <li><a title="Facebook" href="<?php echo get_field('facebook');?>"><i class="fa fa-facebook"></i></a></li>
                    <?php endif; ?>
                    <?php if( get_field('twitter') ): ?>
                        <li><a title="Twitter" href="<?php echo get_field('twitter');?>"><i class="fa fa-twitter"></i></a></li>
                    <?php endif; ?>
                    <?php if( get_field('email') ): ?>
                        <li><a title="Email" href="<?php echo "mailto:" . get_field('email');?>"><i class="fas fa-envelope"></i></a></li>
                    <?php endif; ?>
                    <?php if( get_field('website') ): ?>
                        <li><a title="Website" href="<?php echo get_field('website');?>"><i class="fas fa-globe"></i></a></li>
                    <?php endif; ?>
                </ul>

                <!-- <h3 class="focus-title">How to work</h3>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iure facere ipsa laboriosam exercitationem nam dolore reprehenderit recusandae molestiae, fugit.</p>
                <ul class="icon-list">
                    <li><i class="fa fa-star"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-star"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                    <li><i class="fa fa-star"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque iure facere ipsa laboriosam exercitationem nam dolore reprehenderit recusandae molestiae, fugit. Nostrum eius itaque adipisci eveniet ipsum explicabo eaque nulla, totam accusantium expedita aperiam molestiae maxime, nesciunt? In eos, incidunt cupiditate. Itaque iure facere ipsa laboriosam exercitationem nam dolore reprehenderit recusandae molestiae, fugit. Nostrum eius itaque adipisci eveniet ipsum explicabo eaque nulla, totam accusantium expedita aperiam molestiae maxime, nesciunt? In eos, incidunt cupiditate.</p>

                <h3 class="focus-title"><i class="fa fa-trophy"></i> Awards</h3>
                <div class="award">
                    <h4>Award A</h4>
                    <div class="award-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, cumque!</div>
                </div>

                <div class="award">
                    <h4>Award B</h4>
                    <div class="award-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, cumque!</div>
                </div> -->

            </div>

            <div class="col-md-6">

                <?php the_post_thumbnail();?>


            </div>

        </div>

    </div>

</div>

<!-- ============ Artist Description - END ============ -->

<!-- ============ Artist Works - START ============ -->

<div id="latest-works" class="section">

    <div class="section-title">
        <h2>Latest Work</h2>
    </div>

    <div class="content container">

        <div class="works">

            
                <?php $images = get_field('related_gallery');
                    // print_r(get_field('related_gallery'));
                    foreach($images as $image):?>
                    <div class="work col-md-2 col-sm-6">
                        <div class="work-thumb">
                            <img src="<?php echo $image->guid;?>">
                            <div class="thumb-links">
                                <a class="zoom" href="<?php echo $image->guid;?>"></a>
                            </div>
                        </div>
                        </div>
                    <?php endforeach; ?>
            </div>

        

    </div>

</div>

 <!-- ============ Artist Works - END ============ -->

<!-- ============ My Schedule - START ============ -->

 <!-- <div id="latest-works" class="section">

    <div class="section-title">
        <h2>My Schedule</h2>
    </div>

    <div class="content container">

        <div class="works">

            <div class="work col-md-2 col-sm-6">
                <?php $images = get_field('related_gallery');
                    // print_r(get_field('related_gallery'));
                    foreach($images as $image):?>
                        <div class="work-thumb">
                            <img src="<?php echo $image->guid;?>">
                            <div class="thumb-links">
                                <a class="zoom" href="<?php echo $image->guid;?>"></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
            </div>

        </div>

    </div>

</div> -->

<!-- ============ My Schedule - END ============ -->

<!-- ============ Instagram Banner - START ============ -->

<a class="instagram-bar feed-bg" href="<?php get_field('instagram;');?>">Check out my work on <strong>Instagram</strong>!</a>

<!-- ============ Instagram Banner - END ============ -->

</div>
<?php endwhile;?>

<?php the_posts_navigation();?>

<?php else : ?>
    <p>No posts found</p>
<?php endif;?>
    
<?php get_footer();?>