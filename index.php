<?php get_header(); ?>

<!--Welcome Page-->

 <div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
    	<img class="button" data-slide="2" id="logo" title="click here, dummy" src="<?php echo get_template_directory_uri(); ?>/images/SSLogo.png"></img>
      <img src="<?php echo get_template_directory_uri(); ?>/images/slot.png" alt="slot" id="slot">
	</div><!--End Slide 1-->

<!--About Page-->

	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
      <div id="intro">
      <h1>Welcome</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    	<a class="button" data-slide="3" title=""></a>
	</div><!--End Slide 2-->

 <!--Services Page-->

<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
    <div class="row margin-50">
        <div class="col-md-3" id="first_icon">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/print.png"></img>
          <h2>Print</h2>
        </div>
        <div class="col-md-3" id="second_icon">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/code.png"></img>
          <h2>Web</h2>
        </div>
        <div class="col-md-3" id="third_icon">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/film.png"></img>
          <h2>Film</h2>
        </div>
        <div class="col-md-3" id="fourth_icon">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/images/hand.png"></img>
          <h2>Handmade</h2>
        </div>
    </div>
      <a class="button" data-slide="4" title=""></a>
</div>

  <!--End Slide 3-->

  <!--Portfolio Page-->

	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">

    <div class="row">
      <div id="portfolio_left" class="col-md-5 portfolio">
              <div id="logos" class="portfolio_item"><p>Handmade</p></div>
              <div id="print" class="portfolio_item"><p>print</p><!-- <img id="print_img" src="<?php echo get_template_directory_uri(); ?>/images/print_img.jpg"</img> --></div>
              <div id="film" class="portfolio_item"><p>film</p></div>
              <div id="web" class="portfolio_item"><p>web</p></div>
      </div>
      <div id="portfolio_right" class="col-md-5 portfolio">
          <img src="<?php echo get_template_directory_uri(); ?>/images/Alabaster_Logo.jpg" id="Alabaster_Logo"></img>
           <img src="<?php echo get_template_directory_uri(); ?>/images/Alabaster_Ad.jpg" id="Alabaster_Ad"></img>
           <div class="temp" id="glasses">Glasses.</div>
           <div class="temp" id="vinyl">Window<br/>Vinyls.</div>
      </div>
    </div>

		<a class="button" data-slide="5" title=""></a>

	</div><!--End Slide 4-->

<!--Contact Page-->

	<div class="slide" id="slide5" data-slide="5">
    
<!--   <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
  <ul>
    <li>
      <label for="contactName">Name:</label>
      <input type="text" name="contactName" id="contactName" value="" />
    </li>
    <li>
      <label for="email">Email</label>
      <input type="text" name="email" id="email" value="" />
    </li>
    <li>
      <label for="commentsText">Message:</label>
      <textarea name="comments" id="commentsText" rows="20" cols="30"></textarea>
    </li>
    <li>
      <button type="submit">Send email</button>
    </li>
  </ul>
  <input type="hidden" name="submitted" id="submitted" value="true" />
</form> -->

    <form id="contact_form" name="Contact" action="#" method="get">
Name: <input type="text" name="Name" value="Your Full Name"><br>
e-mail: <input type="text" name="email" value="you@example.com"><br>
<input type="submit" value="Submit">
</form> 
  <img src="<?php echo get_template_directory_uri(); ?>/images/placemarker.png" alt="placemarker" id="placemarker" data-stellar-ratio="0.8">
  <div id="contact_info" data-stellar-ratio="1.2">
    <h3>Stolen Sheep Design</h3><br/>
    <p>454 Pine Street<br/>
    LLW Suite A-1<br/>
    Williamsport, PA<br/>
    17701<br/>
    5703370126<br/>
    bill@stolensheepdesign.com
    </p>
  </div>
	</div><!--End Slide 5-->

  <?php get_footer(); ?>