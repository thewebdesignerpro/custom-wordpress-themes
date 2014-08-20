<?php
/**
 * Template Name: Ajax Handler
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
			<?php the_excerpt(); ?><br />
		</div>
		<a class="ajaxrm" href="<?php esc_url( the_permalink() ); ?>">read more &gt;</a>
	</div>
<?php endif; ?>