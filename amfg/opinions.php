<?php
/**
 * Template Name: Opinions
 *
 */
?>
<?php
	$post = get_post($_GET['id']);
?>
<?php if ($post) : ?>
	<?php setup_postdata($post); ?>
	<div class="">
    	
		<h2 class="entry-title"><?php the_title() ?></h2><br />
		<div class="entry-content">
			<?php the_content(); ?><br />
		</div>
	</div>
<?php endif; ?>