<?php
/*
Template Name: Contact
*/
?>

<?php get_header() ?>

	<div id="container">
		<div id="content">
			<?php the_post() ?>
			<div id="post-<?php the_ID() ?>" class="post">
				<div class="entry-content">
					<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
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
</form>
				</div><!-- .entry-content ->
			</div><!-- .post-->
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>