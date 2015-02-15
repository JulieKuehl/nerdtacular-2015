<?php  
/* 
Template Name: Home
*/  
?>

<?php get_header('home'); ?>
        
<?php if ( get_theme_mod( 'cr3ativ_conference_homeimg1' ) ) : ?>

<?php $homebgrnd = ( get_theme_mod( 'cr3ativ_conference_homeimg1' ) ); ?>

<?php else : $homebgrnd =  esc_url_raw( get_stylesheet_directory_uri() . '/img/home-hero.jpg' ); ?>

<?php endif; ?>    

<!-- Start of main image home -->
<div class="main_image_home big" style="background: url('<?php echo $homebgrnd; ?>') no-repeat scroll center center transparent; background-size:cover; height: 100%;">

    <!-- Start of home centered -->
    <div class="home_centered">
    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home') ) : else : ?>		
    <?php endif; ?>
    </div>
    <!-- End of home centered -->

</div>
<!-- End of main image home -->
            
    <!-- This is the anchor for the sticky header -->
    <div id="mainMenuBarAnchor"></div>

        <!-- Start of header wrapper -->
        <div id="header_wrapper">

            <!-- Start of header -->
            <header>

                <!-- Start of top logo -->
                <div class="top_logo">
                    <?php if ( get_theme_mod( 'cr3ativ_conference_logo' ) ) : ?>
                
                    <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='<?php _e( 'home', 'cr3_conf_theme' ); ?>'><img src='<?php echo esc_url( get_theme_mod( 'cr3ativ_conference_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                    
                    <?php else : ?>
                    
                    <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='<?php _e( 'home', 'cr3_conf_theme' ); ?>'><?php bloginfo( 'name' ); ?></a></h1>
                                        
                    <?php endif; ?>

                </div>
                <!-- End of top logo -->

                <!-- Start of menu container -->
                <div class="menu_container">

                    <!-- Start of nav menu -->
                    <div class="nav">

                    <?php wp_nav_menu( array( 'menu_class'=>'nav', 'theme_location' => 'primary', ) ); ?>
                    <div class="clearfix"></div>

                    </div>
                    <!-- End of nav menu -->

                    <div class="clearfix"></div>

                    <!-- Start of responsivenav --> 
                    <div class="responsivenav">
                    <?php wp_nav_menu(
                    array(
                    'menu_class' => 'nav2',
                    'theme_location'  => 'responsive',
                    )
                    );
                    ?>

                    </div>
                    <!-- End of responsivenav -->  

                </div>
                <!-- End of menu container -->
                
                <div class="clearfix"></div>

            </header>
            <!-- End of header -->

        </div>
        <!-- End of header wrapper -->
    
        <!-- Start of page wrap -->
        <div class="page_wrap">
                
            <!-- Start of date wrapper -->
            <div class="date_wrapper">
                
                <!-- Start of main content -->
                <div class="main_content">
                    
                    <!-- Start of one third home -->
                    <div class="one_third_home">
                    
                        <h6><?php _e( 'When', 'cr3_conf_theme' ); ?></h6>
                    
                        <?php if ( get_theme_mod( 'cr3ativ_conference_when' ) ) : ?>

                        <?php echo( get_theme_mod( 'cr3ativ_conference_when' ) ); ?>

                        <?php else : _e( 'Enter When in WP Customizer', 'cr3_conf_theme' ); ?>

                        <?php endif; ?>                     
                    
                    </div>
                    <!-- Start of one third home -->
                    
                    <!-- Start of one third home -->
                    <div class="one_third_home">                    
                    
                        <h6><?php _e( 'Where', 'cr3_conf_theme' ); ?></h6>
                    
                        <?php if ( get_theme_mod( 'cr3ativ_conference_where' ) ) : ?>

                        <?php echo( get_theme_mod( 'cr3ativ_conference_where' ) ); ?>

                        <?php else : _e( 'Enter Where in WP Customizer', 'cr3_conf_theme' ); ?>

                        <?php endif; ?> 
                        
                    </div>
                    <!-- Start of one third home --> 
                    
                    <!-- Start of one third home -->
                    <div class="one_third_home">                      
                    
                        <h6><?php _e( 'Why', 'cr3_conf_theme' ); ?></h6>
                    
                        <?php if ( get_theme_mod( 'cr3ativ_conference_price' ) ) : ?>

                        <?php echo( get_theme_mod( 'cr3ativ_conference_price' ) ); ?>

                        <?php else : _e( 'Enter Price in WP Customizer', 'cr3_conf_theme' ); ?>

                        <?php endif; ?>  
                        
                    </div>
                    <!-- Start of one third home --> 
                    
                    <!-- Start of center -->
                    <div class="center">
                        
                        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_section2') ) : else : ?>		
                        <?php endif; ?>
                    
                        <?php if ( get_theme_mod( 'cr3ativ_conference_url' ) ) : ?>

                        <!-- Start of highlight homepage button -->
                        <div class="highlight_homepage_button">

                            <?php if ( get_theme_mod( 'cr3ativ_conference_url_text' ) ) : ?>

                            <?php $urltext = ( get_theme_mod( 'cr3ativ_conference_url_text' ) ); ?>

                            <?php else : ?>

                            <?php endif; ?>

                                <a href="<?php echo( get_theme_mod( 'cr3ativ_conference_url' ) ); ?>"><?php echo stripslashes($urltext); ?></a>

                        </div>
                        <!-- End of highlight homepage button -->

                        <?php else : ?>

                        <?php endif; ?> 
                        
                    </div>
                    <!-- End of center -->
                    
                </div>
                <!-- End of main content -->
                
            </div>
            <!-- End of date wrapper -->

            <!-- Start of main content -->
            <div class="main_content">
                
                <!-- Start of center -->
                <div class="center">

                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_section3') ) : else : ?>		
                    <?php endif; ?>

                </div>
                <!-- End of center -->
                
            </div>
            <!-- End of main content -->

        </div>
        <!-- End of page wrap -->
            
        <?php if ( get_theme_mod( 'cr3ativ_conference_homeimg2' ) ) : ?>

        <?php $homebgrnd2 = ( get_theme_mod( 'cr3ativ_conference_homeimg2' ) ); ?>

        <?php else : $homebgrnd2 =  esc_url_raw( get_stylesheet_directory_uri() . '/img/venue-bground.jpg' ); ?>

        <?php endif; ?>    

        <!-- Start of main image home -->
        <div class="main_image_home" style="background: url('<?php echo $homebgrnd2; ?>') no-repeat scroll 0 0 transparent; background-size:cover; height: 732px;">

            <!-- Start of home widget 4 -->
            <div class="home_widget4">

                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_section4') ) : else : ?>		
                <?php endif; ?>

            </div>
            <!-- End of home widget 4 -->

        </div>
        <!-- End of main image home -->
            
        <!-- Start of page wrap -->
        <div class="page_wrap">

            <!-- Start of main content -->
            <div class="main_content">

                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_section5') ) : else : ?>		
                <?php endif; ?>

            </div>
            <!-- End of main content -->

        </div>
        <!-- End of page wrap -->

        <?php if ( get_theme_mod( 'cr3ativ_conference_homeimg3' ) ) : ?>

        <?php $homebgrnd3 = ( get_theme_mod( 'cr3ativ_conference_homeimg3' ) ); ?>

        <?php else : $homebgrnd3 =  esc_url_raw( get_stylesheet_directory_uri() . '/img/hotel-bground.jpg' ); ?>

        <?php endif; ?>    

        <!-- Start of main image home -->
        <div class="main_image_home" style="background: url('<?php echo $homebgrnd3; ?>') no-repeat scroll 0 0 transparent; background-size:cover; height: 732px;">

            <!-- Start of home widget 6 -->
            <div class="home_widget6">

                <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_section6') ) : else : ?>		
                <?php endif; ?>

            </div>
            <!-- End of home widget 6 -->

        </div>
        <!-- End of main image home -->
    
        <!-- Start of page wrap -->
        <div class="page_wrap">

            <!-- Start of main content -->
            <div class="main_content">

                <!-- Start of center -->
                <div class="center">

                    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('home_section7') ) : else : ?>		
                    <?php endif; ?>

                </div>
                <!-- End of center -->

            </div>
            <!-- End of main content -->

        </div>
        <!-- End of page wrap -->

<?php get_footer(); ?>