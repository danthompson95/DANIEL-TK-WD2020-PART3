<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	$popular_posts_query = new WP_Query( array( 'cat' => '2', 'nopaging' => false, 'posts_per_page' => 6 ) );
	echo "<h3>Popular Posts</h3>";
	
	while ( $popular_posts_query->have_posts() ) {
			$popular_posts_query->the_post();
			$title = get_the_title();
			$date = get_the_date('l jS \of F Y', );
			$image = get_the_post_thumbnail_url();
			$excerpt = get_the_excerpt();
			$url = get_post_permalink();

			echo "<h3>{$title}</h3>
				<p>{$date}</p>
				<img src=\"${image}\">
				<p>{$excerpt}</p>
				<a href=\"${url}\">Read More</a>";
	}
	
	wp_reset_postdata();

	echo '<hr/>';

	$all_posts_query = new WP_Query( array( 'category__not_in' => '2', 'nopaging' => false, 'posts_per_page' => 20 ) );
	echo "<h3>Other Posts</h3>";
	
	while ( $all_posts_query->have_posts() ) {
			$all_posts_query->the_post();
			$title = get_the_title();
			$date = get_the_date('l jS \of F Y', );
			$image = get_the_post_thumbnail_url();
			$excerpt = get_the_excerpt();
			$url = get_post_permalink();

			echo "<h3>{$title}</h3>
				<p>{$date}</p>
				<img src=\"${image}\">
				<p>{$excerpt}</p>
				<a href=\"${url}\">Read More</a>";
	}
	
	wp_reset_postdata();
	?>

</main><!-- #site-content -->

<?php
get_footer();
