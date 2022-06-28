
<footer>
    <div class="footer-big-wrap">
        <div class="row">


            <div class="col-md-7">
                <div class="imperal-wrap">

                    <div class="imperal1">
                        <div class="imperal-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/footer/flogo.svg">
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetuer adipi
                           cing elit. Aenean commodo ligula eget dolor.</p>

                           <div class="link-wraper">
                               <div class="mail">
                                   <a href="mailto:office@imperial-reisen.at">office@imperial-reisen.at</a>
                               </div>
                               <div class="phone">
                                    <a href="tel:43 (0) 732 665 30 70">+43 (0) 732 665 30 70</a>
                               </div>
                               <div class="location">
                                    <a href="https://www.google.com/maps/place/B%C3%BCrgerstra%C3%9Fe+17,+4020+Linz,+Austrija/@48.2989812,14.2913998,17z/data=!3m1!4b1!4m5!3m4!1s0x4773979033be5143:0xcd321143d3b52184!8m2!3d48.2989777!4d14.2935885">Bürgerstr. 17, 4020 Linz</a>
                               </div>
                           </div>
                    </div>

                    <div class="imperal2">
                        <div class="content-wrap">
                            <h4>Öffnungszeiten</h4>

                            <div class="time-div">
                                <span>Mo-Fr</span>09:00 – 18:00 Uhr<br>
                                <span>Sa</span>09:00 – 14:00 Uhr
                            </div>

                            <div class="anfahrt">
                                <!--<p>Anfahrt</p>-->
                                <a href="">Anfahrt</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="footer2-mega-wrap">
                <div class="footer-form-wrap">
                    <h4>Newsletter</h4>
                    <p>Du möchtest exklusive Reiseangebote bekommen?
                       Dann melde dich für unseren Newsletter an!</p>
                    <div class="input-wrap">
                        <form>
                        <input type="text" name="" placeholder="Name">
                        <input type="text" name="" placeholder="Email">
                        </form>


                        <div class="big-red-button">
                            <a href="#">Für Newsletter anmelden</a>
                        </div>
                        
                    </div>
                </div>

                <div class="social-icons">
                    <div class="twitter"><a href="https://mobile.twitter.com/imperialreisen"><i class="fab fa-twitter"></i></a></div>
                     <div class="twitter"><a href="https://www.instagram.com/imperialreisen/"><i class="fab fa-instagram"></i></a></div>
                      <div class="twitter"><a href="https://www.facebook.com/imperialreisen/"><i class="fab fa-facebook-f"></i></a></div>
                       <div class="twitter"><a href=""><i class="fab fa-pinterest-p"></i></a></div>
                    
                </div>

                </div>
            </div>


        </div>
    </div>

    

</footer>
<div class="footer-created-by">
        <div class="created">
            <p><a href="">Impressum </a>| <a href="">AGBS</a> | created by <a href="https://www.ad-am.at/">ADAM Communication GmbH</a></p>
        </div>
    </div>















</div>

<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" integrity="sha512-H6cPm97FAsgIKmlBA4s774vqoN24V5gSQL4yBTDOY2su2DeXZVhQPxFK4P6GPdnZqM9fg1G3cMv5wD7e6cFLZQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js" integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/plugins/animation.gsap.min.js" integrity="sha512-5/OHwmQzDSBS0Ous4/hlYoWLHd06/d2r7LdKZQVBXOA6PvOqWVXtdboiLTU7lQTGyVoKVTNkwi0ol4gHGlw5ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        690:{
            items:2
        },
        1020:{
            items:3
        },
        1400:{
            items:4
        },
        1700:{
            items:5
        }
    }
})

</script>


<?php wp_footer() ?>

<script>
   $(window).on('load', function () {
   wow = new WOW({
     boxClass: 'wow',
     animateClass: 'animated',
     offset: 5,
     mobile: false,
     live: true
   })
   wow.init();
   });
</script>
</body>
</html>
