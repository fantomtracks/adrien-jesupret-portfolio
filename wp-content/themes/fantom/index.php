<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it 
?>
<div id="primary" class="row-fluid">
	<div id="content" role="main" class="span8 offset2">
		<?php $cats = get_categories(); ?>
		<?php foreach ($cats as $cat): ?>
			<section>
				<h1><?php echo $cat->name;?></h1>
				<?php
					$args = array(
						'posts_per_page'   => -1,
						'cat'         	   => $cat->cat_ID,
						'orderby'          => 'name',
						'order'            => 'ASC'
					);
					$my_query = new WP_Query($args); 
				?>

				<?php if ($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); ?>

					<article class="post">
						<?php the_post_thumbnail('large'); //Get the thumbnail to this post. ?>

						<h1 class="title">
							<a href="<?php the_permalink(); // Get the link to this post 
										?>" title="<?php the_title(); ?>">
								<?php the_title(); // Show the title of the posts as a link 
								?>
							</a>
						</h1>
					</article class="post">
				<?php endwhile; endif; ?>
				<?php wp_reset_postdata(); ?>
			</section>
		<?php endforeach; ?>
	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>