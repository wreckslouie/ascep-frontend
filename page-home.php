<?php
/**
* Template Name: Home
*
* This is the template that displays full width page without sidebar
*
* @package sparkling
*/
get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="col-md-5">
			<?php the_post_thumbnail( 'full', array( 'class' => 'single-featured' )); ?>
		</div>

		<div class="col-md-7">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="entry-header page-header">
					<h1 class="entry-title center-text no-margin-bottom"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
					'after'  => '</div>',
					) );
					?>
						
				</div><!-- .entry-content -->

				<?php edit_post_link( esc_html__( 'Edit', 'sparkling' ), '<footer class="entry-footer"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
			
			</article><!-- #post-## -->
		</div>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( get_theme_mod( 'sparkling_page_comments' ) == 1 ) :
			if ( comments_open() || '0' != get_comments_number() ) :
			comments_template();
			endif;
			endif;
		?>

		<?php endwhile; // end of the loop. ?>

		</div>
	</div>
</div>
		
<?php
	$mission_page = 7;
	$mission_data = get_page( $mission_page );
?>
<div class = "full-width-bg " style = "background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($mission_page) );?>) no-repeat;">



	<div id="content" class="site-content">
		<div class="container main-content-area">

			<div class = "row">	
				<div class="col-md-7">
					<h2><?php echo $mission_data->post_title; ?></h2>
					<p><?php echo $mission_data->post_excerpt; ?>
					</p>
					<a href = "<?php echo $mission_data->guid; ?>" class = "button-common small">Learn More</a>
				</div>


			</div>
		</div>
	</div>
</div>

<?php
	$latest_page = 9;
	$latest_data = get_page( $latest_page );
?>

<div id="content" class="site-content">
	<div class="container main-content-area">
		<div class = "row">
			<div class="col-md-5">
				<?php echo get_the_post_thumbnail( $latest_page,  $size = 'post-thumbnail',  'thumbnail' );?>
			</div>
			<div class="col-md-7">
					<h2><?php echo $latest_data->post_title; ?></h2>
					<p><?php echo $latest_data->post_excerpt; ?>
					</p>
					<a href = "<?php echo $latest_data->guid; ?>" class = "button-common small">Learn More</a>
			</div>
		</div>

			
		<div class = "row faculty-home lead">
			<div class="col-md-12">
			</div>
		</div>
	</div>
</div>

<div class = "full-width-bg team" style = "">
	<div id="content" class="site-content">
		<div class="container main-content-area">
			<div class = "row faculty-home">
				<div class="col-md-12 lead">
					<?php
						if ( is_front_page() ) {	
							echo do_shortcode("[tmm name=principal]"); 
					    }
					?>
				</div>
				<div class="col-md-12">
					<?php
						$faculty_page = 12;
						$faculty_data = get_page( $faculty_page );
					?>

					<h2 class= "center-text blue"><?php echo $faculty_data->post_title; ?></h2>

					<?php
						if ( is_front_page() ) {	
							echo do_shortcode("[tmm name=faculty-and-staff]"); 
					    }
					?>
				</div>
			</div>
		</div>
	</div>
</div>
		
<div>
	<div >
		<div >
<?php get_footer(); ?>