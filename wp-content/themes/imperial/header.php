<!DOCTYPE html>
<html <?php language_attributes();?> class="no-js">
<head>

  <meta charset="<?php bloginfo('charset');?>">
  <title><?php wp_title('');?><?php if (wp_title('', false)) {echo ' :';}?> <?php bloginfo('name');?></title>

  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">


  

 
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <!---font Awesome--->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <?php wp_head() ?>


 </head>
 

 <body id="page-top" <?php body_class();?> >
  
  
  <div class="page-wrap">
    <div class="top-Icons">
      <div class="icon-wrap1">
        <div class="mail">
          <a href="mailto:booking@imperal-reisen.at">booking@imperal-reisen.at</a>
        </div>
        <div class="phone">
          <a href="tel:43 123 456 789">+43 123 456 789</a>
        </div>
        <div class="location">
          <a href="https://www.google.com/maps/search/Musterstra%C3%9Fe+23,+4866+Musterstadt/@48.2989812,14.2913998,17z">Musterstraße 23, 4866 Musterstadt</a>
        </div>
      </div>

      <div class="icon-wrap2">
        <div class="twitter">
          <a href="https://mobile.twitter.com/imperialreisen"></a>
        </div>

        <div class="pinterest">
          <a href=""></a>
        </div>



        

        <div class="facebook">
          <a href="https://www.facebook.com/imperialreisen/"></a>
        </div>

        <div class="instagram">
          <a href="https://www.instagram.com/imperialreisen/"></a>
        </div>

        <div class="user-wrap">
          <a href=""><div class="user"></div></a>
        </div>
      </div>
    </div>

    
    <nav class="navbar navbar-expand-lg navbar-default fixed-top mt-5 pt-3" id="mainNav">
        <div class="container">
         <!--<div class="cont-nav2">-->
           <div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>
            <div class="logo animsition-link"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="Imperial"></a></div>
              
            <div class="collapse navbar-collapse cont-nav2" id="navbarResponsive">
                <?php
                      wp_nav_menu( array(
                          'theme_location'  => 'primary',
                          'depth'           => 2,
                          'container'       => 'div',
                          'container_class' => 'collapse navbar-collapse',
                          'container_id'    => 'bs-example-navbar-collapse-1',
                          'menu_class'      => 'navbar-nav mx-auto animsition-link',
                          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                          'walker'          => new WP_Bootstrap_Navwalker(),
                      ) );
                ?>

                


                <div class="nav-threeItems">
                 <div class="order-icon">
                   
                 </div>

                 <div class="search-wrap">
                  <form>
                   <input type="text" name="" placeholder="Search">
                   <div class="search-icon"><i class="fas fa-search"></i></div>
                   </form>
                 </div>

                 
               </div>


            </div>

            

               
            <!--</div>-->
        </div>
    </nav>







  


 
