<footer>
    <div class="container">
      <nav class="footer-menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'footer'
          )); ?>
      </nav>

      <ul class="social-media">
         <li class="color">
           <a class="icons" href="http://www.facebook.com/ClarendonCuisine/" target="new"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
         </li>
         <li class="color">
         <a class="icons" href="http://www.twitter.com" target="new"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
         </li>
         <li class="color">
         <a class="icons" href="http://www.google.com" target="new"><i class="fa fa-google" aria-hidden="true"></i></a>
         </li>
         <li class="color">
         <a class="icons" href="http://www.youtube.com" target="new"><i class="fa fa-youtube" aria-hidden="true"></i></a>
         </li>
      </ul>

      <div class="copyright">
         <p>Copyright &copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      
      </div>
    </div>

</footer>

<?php wp_footer(); ?>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TimelineMax.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.12.4.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/unslider-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script src="<?php bloginfo('template_url'); ?>/minified/TimelineLite.min.js"></script>

<script>
jQuery(document).ready(function($){
$('.my-slider').unslider({
arrows: {
  prev: '<a class="unslider-arrow prev"><i class="fa fa-3 fa-arrow-circle-left"></i></a>',
  next: '<a class="unslider-arrow next"><i class="fa fa-3 fa-arrow-circle-right"></i></a>'
}
});
});
</script>
</body>

</html>
