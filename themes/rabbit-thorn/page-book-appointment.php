<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>

                <div class="section">

                    <div class="content container appointment">

                        <div class="appoint-content">

                            <?php the_content();?>

                        </div>

                        <!-- ============ Appointment Form - START ============ -->

                        <div class="appointment-form">
                        <?php echo do_shortcode( '[contact-form-7 id="45" title="Book Appointment"]' );?>
                            <!-- <form class="contact-form" action="mailer/appointment.php" method="post">

                                <label>
                                    <strong>First Name *</strong>
                                    <input class="required" type="text" name="first_name">
                                </label>
                                <label>
                                    <strong>Last Name *</strong>
                                    <input class="required" type="text" name="last_name">
                                </label>
                                <label>
                                    <strong>Email *</strong>
                                    <input class="required" type="text" name="email">
                                </label>
                                <label>
                                    <strong>Phone Number *</strong>
                                    <input class="required" type="text" name="phone">
                                </label>
                                <label>
                                    <strong>Part of the Body</strong>
                                    <select name="part_body">
                                        <option value="Leg">Leg</option>
                                        <option value="Calf">Calf</option>
                                        <option value="Ankle">Ankle</option>
                                        <option value="Foot">Foot</option>
                                        <option value="Arm">Arm</option>
                                        <option value="Forearm">Forearm</option>
                                        <option value="Wrist">Wrist</option>
                                        <option value="Hand">Hand</option>
                                        <option value="Nek">Nek</option>
                                        <option value="Head">Head</option>
                                        <option value="Back">Back</option>
                                        <option value="Buttocks">Buttocks</option>
                                        <option value="Genitals">Genitals</option>
                                        <option class="other" value="Other">Other (Specify below)</option>
                                    </select>
                                </label>
                                <label id="other" class="hidden-field">
                                    <strong>Specific Part of Body</strong>
                                    <input type="text" name="custom">
                                </label>
                                <label><strong>Tattoo Size *</strong> (ex: 5x4)
                                    <input class="required" type="text" name="size">
                                </label>
                                <div class="radio label">
                                    <strong>Tattoo Color</strong>
                                    <label>
                                        <input type="radio" value="Black &amp; White" name="color" checked>
                                        <span class="radio-replacer"></span>
                                        <span>Black &amp; White</span>
                                    </label>
                                    <label>
                                        <input class="required" type="radio" value="Color" name="color">
                                        <span class="radio-replacer"></span>
                                        <span>Color</span>
                                    </label>
                                </div>
                                <label><strong>Tattoo Description *</strong>
                                    <textarea class="required" name="description"></textarea>
                                </label>
                                <div class="radio image-radio label">
                                    <strong>Choose an Artist</strong>
                                    <label>
                                        <input type="radio" value="Artist A" name="artist" checked>
                                        <span><img src="img/user.jpg" alt="Artist A"><span>Artist A</span></span>
                                    </label>
                                    <label>
                                        <input type="radio" value="Artist B" name="artist">
                                        <span><img src="img/user.jpg" alt="Artist B"><span>Artist B</span></span>
                                    </label>

                                    <label>
                                        <input type="radio" value="Artist C" name="artist">
                                        <span><img src="img/user.jpg" alt="Artist C"><span>Artist C</span></span>
                                    </label>
                                </div>
                                <hr>
                                 <label>
                                    <input class="required" type="checkbox" name="check">
                                    <span class="checkbox-replacer"></span>
                                    <strong>Check to authorize the system *</strong>
                                </label>
                                <hr>
                                <p>( <strong>*</strong> ) = Mandatory field</p>
                                <input class="submit btn md" type="submit" name="submit" value="Request Appointment">
                                <input type="hidden" name="form_type" value="appointment">

                            </form> -->

                        </div>

                        <!-- ============ Appointment Form - END ============ -->

                    </div>

                </div>


<!-- ============ Instagram Banner - START ============ -->

<a class="instagram-bar feed-bg"  href="https://www.instagram.com/rabbitandthorn/">Check out our work on <strong>Instagram</strong></a>

<!-- ============ Instagram Banner - END ============ -->

    <!-- Loop ends -->
    <?php endwhile;?>

<?php else : ?>
        <p>No posts found</p>
<?php endif;?>

<?php get_footer();?>