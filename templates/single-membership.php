<?php
/**
 * The Template for displaying all single courses.
 *
 * @author 		codeBOX
 * @package 	lifterLMS/Templates
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

get_header();
?>

<?php
while ( have_posts() ) : the_post();

	llms_get_template_part( 'content', 'single-membership' );

	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

endwhile;
?>

<?php
get_comments();
get_sidebar();
get_footer();
?>