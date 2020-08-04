<?php
/*Template Name: Home Page
 * The front page template
 */
get_header();
?>
<div class="home">
	<div class="home-hero-section">
		<div class="hero-content">
			<h1>Glass Eye Creative</h1>
			<p>We are a volunteer-run art center offering a variety of free creative classes and events in order to foster the creative community in Oklahoma.</p>
			<button class="button button-home button-purple"><a href="#">View Class Schedule</a></button>
			<button class="button button-home button-pink"><a href="#">Upcoming Events</a></button>
		</div>
	</div>
	<div class="home-philosophy-section">
		<h2>Glass Eye Philosophy</h2>
		<p>Here at Glass Eye, we believe that every person deserves access to freedom and creativity. That’s why we offer free classes to the public, regardless of age, gender, race, social status, income, religion or any other reason.</p>
	</div>
	<div class="home-location-section">
		<h2>Location</h2>
		<p>324 NW 10th St.
			<br> Oklahoma City, OK
			<br> 73101
		</p>
	</div>
	<div class="home-featured-instructors-section">
		<h2>Featured Instructors</h2>
		<div class="featured-instructors-width-wrapper">
            <?php
            if(have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>
		</div>
	</div>
</div>
<?php
get_footer();
?>
