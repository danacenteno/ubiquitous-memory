<footer>
	<!-- <div class="surprise"> -->
	<!-- hidden contact section + footer starts -->

	<section id="emails" class="contact"> <!-- .contact section starts -->
	  <h3>let's talk!</h3>
	  <div class="wrapper"> <!-- .wrapper starts -->
	    <div class="contact-blurb">
	      <h5>Interested in working together?</h5>
	      <p>If you would like to get in touch, say hello, or feel like starting a nerdy conversation at all, please feel free to email me at hello@danacenteno.com, or you can fill out the form to your right.</p>

	      <p>You can also find me at the links below!</p>

	      <div class="socmed"> <!-- social media icons -->
	        <i class="fa fa-twitter"></i>
	        <i class="fa fa-github"></i>
	        <i class="fa fa-linkedin"></i>
	        <i class="fa fa-"></i>
	        <i class="fa fa-"></i>
	      </div>
	    </div>

	    <form> <!-- contact form starts -->
	      <?php the_field('contact_form') ?>
	    </form> <!-- contact form ends -->
	  
	  </div> <!-- .wrapper ends -->
	</section> <!-- .contact section ends -->
	<div class="container">
		<p>Designed & Developed with &#9825; by Dana Centeno</p>
	</div>
<!--   </div>  -->
  <!-- hidden contact section + footer ends -->
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>