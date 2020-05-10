<?php
/**
 * The template for displaying single posts and pages.
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
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	
		<?php
			$title = get_the_title();
			$date = get_the_date('l jS \of F Y', );
			$image = get_the_post_thumbnail_url();
			$content = $post->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]&gt;', $content);


			echo "<h3>{$title}</h3>
				<p>{$date}</p>
				<img src=\"${image}\">
				<p>{$content}</p>";
		?>

	</article>
</main><!-- #site-content -->

<?php get_footer(); ?>
