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

                        <div class="row">

                            <!-- ============ Faqs - START ============ -->

                            <div class="col-md-8">
                            <h3 class="focus-title"><i class="fa fa-book"></i><?php the_title();?></h3>
                                <?php the_content();?>
                                <!-- <h3 class="focus-title"><i class="fa fa-book"></i>Faqs</h3>
                                <div class="toggle open">
                                    <a class="title-toggle" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
                                    <div class="content-toggle">
                                        Nullam est enim, consectetur et sagittis vitae, accumsan quis arcu. Duis suscipit congue aliquam. Mauris rutrum facilisis sem, sagittis sollicitudin purus volutpat a. Nam non nisi tempus, venenatis ante at, facilisis elit. Aliquam eget metus nec eros sollicitudin gravida.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Aliquam gravida urna nec ipsum commodo, vel luctus velit dapibus?</a>
                                    <div class="content-toggle">
                                        Sed malesuada, lacus sed convallis scelerisque, odio erat laoreet ex, eu iaculis tellus augue sed sem. Integer placerat lorem in ante pharetra, vitae tincidunt ante egestas. Cras in leo mi. Curabitur pretium lacus diam, quis accumsan nunc ultrices vel. Curabitur luctus risus quis purus pulvinar ornare.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Quisque rutrum odio a augue condimentum dapibus?</a>
                                    <div class="content-toggle">
                                        Ut euismod id erat vitae porta. Duis dolor ex, dictum sit amet ipsum vel, iaculis aliquam tellus. Ut quis tellus at nulla dictum imperdiet id et odio. Sed pharetra bibendum justo, vitae laoreet purus ullamcorper non. Cras at nisi sit amet urna egestas rutrum at volutpat tellus.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Nam elementum diam vitae odio dapibus, et placerat ex ullamcorper?</a>
                                    <div class="content-toggle">
                                        Suspendisse faucibus, metus vulputate viverra dictum, nulla nisl faucibus risus, vel laoreet nunc augue et nisi. Maecenas tempus justo eget lobortis gravida. Donec feugiat at felis quis faucibus. Praesent viverra gravida elit, eu fermentum magna hendrerit in. Duis dictum, sapien vel mollis fermentum, erat mi vehicula justo, ut faucibus ligula velit fermentum erat. Aliquam ac auctor nisi, sed mollis erat.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Quisque congue urna in justo imperdiet, eget laoreet metus consequat?</a>
                                    <div class="content-toggle">
                                        Sed tincidunt nisl sed enim interdum vehicula. Suspendisse placerat sapien leo, nec aliquet nisl tincidunt sit amet. Ut sem mi, iaculis et velit id, pharetra porta purus. Vestibulum sit amet tempor tellus. Pellentesque cursus elit lorem, eget volutpat arcu elementum sed. Aliquam pellentesque nisl vitae magna dignissim molestie. In porttitor sed odio quis vestibulum.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Pellentesque nec odio hendrerit, suscipit mi id, tempus leo?</a>
                                    <div class="content-toggle">
                                        Vestibulum a dapibus dui. Curabitur cursus facilisis ultrices. Vivamus non cursus ante, at lobortis sem. Vestibulum sit amet pretium enim. Nunc augue elit, hendrerit quis ante in, venenatis condimentum neque. In rhoncus eget nibh eget cursus. Proin egestas sagittis massa, et consectetur sapien pellentesque suscipit.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Pellentesque ultricies augue at ipsum eleifend, a laoreet nibh iaculis?</a>
                                    <div class="content-toggle">
                                        Fusce faucibus bibendum odio vitae pellentesque. Ut tempor mauris odio, sit amet porttitor augue dignissim eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus porttitor suscipit aliquet. Phasellus nisl erat, cursus posuere tincidunt in, commodo nec felis. Proin ut fermentum sapien, ut accumsan turpis.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Suspendisse accumsan massa nec est fermentum, at feugiat tellus tristique?</a>
                                    <div class="content-toggle">
                                        Aenean ante orci, dapibus ut dignissim id, sagittis sed purus. In ornare condimentum auctor. Vivamus sagittis risus a semper aliquet. Ut dictum massa eu laoreet placerat. Nulla a nisi dignissim, interdum libero ac, vehicula diam. Etiam nec auctor est.
                                    </div>
                                </div>
                                <div class="toggle">
                                    <a class="title-toggle" href="#">Praesent in enim pretium, varius risus ut, faucibus sapien?</a>
                                    <div class="content-toggle">
                                        Etiam imperdiet diam nec nisi pharetra malesuada. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis finibus urna eu est commodo, sit amet volutpat magna mollis. Mauris et arcu dui.
                                    </div>
                                </div> -->

                            </div>

                            <!-- ============ Faqs - END ============ -->

                            <!-- ============ Disclaimers - START ============ -->

                            <div class="col-md-4">
                                <h3 class="focus-title"><i class="fa fa-warning"></i>Disclaimers</h3>
                                <?php echo get_field('disclaimer');?>

                                <!-- <h3 class="focus-title"><i class="fa fa-warning"></i>Disclaimers</h3>
                                <p>Vivamus sodales tortor justo, a auctor augue imperdiet nec. Suspendisse posuere massa eu arcu dictum scelerisque. Donec posuere, nisi eu vestibulum pretium, nulla eros pellentesque mi, nec luctus leo risus non augue. Vivamus vestibulum felis vitae nisl varius sollicitudin. Duis fringilla dolor vitae tellus cursus, ut feugiat arcu ultrices. Mauris vitae neque ullamcorper, tempor turpis non, dictum. Nunc dictum nisi quam, in rutrum magna placerat quis.</p>

                                <ul class="icon-list">
                                    <li><i class="fa fa-check"></i>Nunc dictum nisi quam, in rutrum magna placerat quis</li>
                                    <li><i class="fa fa-check"></i>Interdum et malesuada fames ac ante ipsum primis in faucibus</li>
                                    <li><i class="fa fa-times"></i>Pellentesque cursus elit lorem, eget volutpat arcu elementum sed</li>
                                    <li><i class="fa fa-check"></i>Nulla blandit felis vitae volutpat consectetur</li>
                                </ul>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacus risus, tempor rhoncus consectetur sit amet, sollicitudin sit amet augue. Phasellus in ullamcorper erat, eu rhoncus quam. Mauris dignissim elementum neque non suscipit.</p> -->

                            </div>

                            <!-- ============ Disclaimers - END ============ -->

                        </div>

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