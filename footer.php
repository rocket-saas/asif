<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>  <footer class="wi-full">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h3>ASIF</h3>

              <address>
                <p>Axial Spondyloarthritis International Federation<br>
                  27 Old Gloucester Street <br>
                  London <br>
                  WC1N 3AX <br>
                  United Kingdom</p>
                <p>Email: <a href="mailto:office@asif.info">office@asif.info</a></p>
              </address>
            </div>
            <!-- /.col-sm-5 -->
            <div class="col-md-4">
              <h3>Sitemap</h3>
			  <?php
                      wp_nav_menu( array(
                        'theme_location' => 'social',
                        'menu_class'     => 'sitemap',
                        'container'     => '',
                      ) );
                    ?>
             
            </div>
			 
            <!-- /.col-sm-4 -->
            <div class="col-md-4">
              <h3>Social Media</h3>
			   <?php 
                      if(is_active_sidebar('socialmedia')){
					  
                      dynamic_sidebar('socialmedia');
                        }
                      ?>
              

              <div class="copy_right">
               <?php 
                      if(is_active_sidebar('copyright')){
					  
                      dynamic_sidebar('copyright');
                        }
                      ?>
              </div>
            </div>
            <!-- /.col-sm-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </footer>
      <!-- /.wi-full -->  
    </div>
    <!-- #wrapper -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	  <script src='https://www.google.com/recaptcha/api.js'></script>
	

	<?php wp_footer(); ?>
	

<script>
jQuery( document ).ready(function() { jQuery(' .button_div').after('<div class="registration">New Registration?&nbsp;<a href="http://asif.info/register/">Click here</a><br><a href="http://asif.info/forget-password/">Forgot password? Click here to reset</a></div>'); });
</script>

    <script type="text/javascript">
      $(document).ready(function(){
          $('.sec_link').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top - 20
            }, 500);
            return false;
          });
      });
    </script>

	<script type="text/javascript">
	  $('a[href^="#imas_vision"]').on('click', function(event) {
		var target = $(this.getAttribute('href'));
		if( target.length ) {
			event.preventDefault();
			$('html, body').stop().animate({
				scrollTop: target.offset().top
			}, 1000);
		}
	});
</script>
   
</body>
</html>