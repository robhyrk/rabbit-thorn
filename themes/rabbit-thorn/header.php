<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
</head>
<body  <?php body_class();?>>

    <div class="wrapper">

        <header id="master-header" class=" <?php 
            if(is_front_page()): 
                echo "full-screen overlayed"; 
            endif;?>">

            <?php if(is_front_page()):?>
                <div class="bg-overlay"></div>
                <div id="media-container"><img src="<?php echo get_template_directory_uri();?>/img/bg.jpg"></div>
            <?php endif;?>
            <div class="top-header <?php 
            if(!is_front_page()): 
                echo "not-home"; 
            endif;?>">

                <div class="container">

                    <!-- ============ Main Navigation - START ============ -->

                    <a id="nav-toggle" href="#"><span></span></a>
                    <nav id="nav-menu">
                     <?php wp_nav_menu(array(
                        'theme_location' => 'header-menu'
                    ));?>
                        <!-- <ul>
                            <li>
                                <a title="About Us 1 Page" href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <ul>
                                    <li><a href="molly.html">Molly Aylwin</a></li>
                                    <li><a href="alex.html">Alex Richardson</a></li>
                                    <li><a href="guest.html">Guest Artist</a></li>
                                </ul>
                            </li>
                            <li><a title="Faqs &amp; Disclaimers Page" href="faq.html">FAQ</a></li>
                            <li><a title="Contacts Page" href="contacts.html">Contact Us</a></li>
                            <li><a title="Appointment Page" href="appointment.html"><i class="fa fa-thumb-tack"></i>Book Appointment</a></li>
                        </ul> -->
                    </nav>

                    <!-- ============ Main Navigation - END ============ -->

                </div>

            </div>
            <?php if(is_front_page()): ?>
            <div id="brand">

                <h1 id="logo"><?php bloginfo('name');?></h1>
                <div class="info">
                    <img src="<?php echo get_template_directory_uri();?>/img/divider.png" alt=""><span>Tattoos</span><img src="<?php echo get_template_directory_uri();?>/img/divider.png" alt="">

            </div>
            <?php endif;?>
            <?php if(!is_front_page()): ?>
            <h2 id="page-title"><?php the_title();?></h2>
            <?php endif;?>
        </header>

        <!-- ============ Main Header - END ============ -->
