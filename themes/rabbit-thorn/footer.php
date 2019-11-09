<?php wp_footer();?>

<!-- <a class="instagram-bar feed-bg"  href="https://www.instagram.com/rabbitandthorn/">Check out our work on <strong>Instagram</strong></a> -->

<!-- ============ Footer - START ============ -->

<footer class="dark">

    <div class="container">

        <div class="row">

            <div class="footer-col col-md-4 col-sm-6">

                <h3 class="focus-title">About Us</h3>
                <p><img width="200" class="align-center" src="<?php echo get_template_directory_uri();?>/img/randt.jpg" alt="THE TATTOOIST - Tattoo Studio"></p>
                <p>We are on the main floor, but there is a small step up into the shop. Please email us if you have any accessibility questions.</p>

            </div>

            <?php dynamic_sidebar( 'contact-us' );?>
            <!-- <div class="footer-col col-md-4 col-sm-6">

                <h3 class="focus-title"><i class="fa fa-clock-o"></i>Working Days</h3>
                <dl class="working-days">
                    <dt>Monday</dt>
                    <dd>Closed</dd>
                    <dt>Tuesday</dt>
                    <dd>11am-7pm</dd>
                    <dt>Wednesday</dt>
                    <dd>11am-7pm</dd>
                    <dt>Thursday</dt>
                    <dd>11am-7pm</dd>
                    <dt>Friday</dt>
                    <dd>11am-7pm</dd>
                    <dt>Saturday</dt>
                    <dd>11am-7pm</dd>
                    <dt>Sunday</dt>
                    <dd>Appointment Only</dd>
                </dl>

            </div> -->

            <div class="footer-col footer-contacts col-md-4 col-sm-12">

                <div class="contact-item"><span>The Rabbit & The Thorn Tattoo and Art Studio</span> <strong>2832 Dundas Street West</br> Toronto, M6P 1Y7</strong></div>
                <div class="contact-item"><span>Email:</span> <strong><a href="mailto:info@rabbitandthorn.com">info@rabbitandthorn.com</a></strong></div>
                <div class="contact-item">
                    <span>Follow us on:</span>
                    <ul class="social-links">
                        <li><a title="Facebook" href="https://www.facebook.com/rabbitandthorn/"><i class="fa fa-facebook"></i></a></li>
                        <li><a title="Instagram" href="https://www.instagram.com/rabbitandthorn/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

    <div class="copyright">
        &copy; <?php echo date("Y"); ?> - <strong><?php bloginfo('name');?></strong>
    </div>

</footer>

<!-- ============ Footer - END ============ -->

</div>

    </body>
</html>