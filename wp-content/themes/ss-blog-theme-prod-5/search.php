<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage ss-blog-theme
 * @since 1.0.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="container-content-ss">
        <div class="container-fluid my-5">
					<div class="row">
						<div class="col-12 mb-5">
							<h1>Results of the search for <?php the_search_query(); ?> </h1>
						</div>
					</div>
					<div class="row">
					<?php if ( have_posts() ) :
							while ( have_posts() ) : the_post();?>

							<div class="col-12 col-md-6 d-flex align-items-center">
									<div class="card my-0 mx-0 my-md-2 mx-md-2 ">
									<!-- card-img-top img-fluid -->
											<a href="<?php the_permalink();?>"><?php if ( has_post_thumbnail() ) {
															the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ) );
													}?></a>
											<div class="card-body text-danger px-0 mb-5">

													<div class="row">
															<!-- version desktop -->
															<div class="col-8 ver-card-desktop">
																	<a class="text-danger"  href=" <?php the_permalink();?>"><h2 class="card-title"> <?php the_title();?> </h2></a>
															</div>
															<div class="col-4 text-right ver-card-desktop">
																	<div class="text-muted text-danger font-atlas" ><?php the_category(',');?> </div>
															</div>

															<!-- version mobiles -->
															<div class="col-12 mb-2 text-left ver-card-mobile">
																	<div class="text-muted text-danger" ><?php the_category(',');?> </div>
															</div>
															<div class="col-12 ver-card-mobile">
																	<a class="text-danger"  href=" <?php the_permalink();?>"><h3 class="card-title font-weidemann"> <?php the_title();?> </h3></a>
															</div>
													</div>
													<div class="card-text card-the-excerpt font-left35-light"> <?php  the_excerpt();?></div>
											</div>
											<!-- <div class="card-footer">
													<small class="text-muted"> <?php echo get_the_date();?> / <?php the_category(','); ?>/ <?php the_author();?></small>
											</div> -->
									</div>
							</div>
							<?php endwhile;
						 else:?>
						 <div class="col-12">
							<h2>Ups... There aren't results.
							<?php printf(esc_html('%s', get_search_query()));?>
							</h2>
						 </div>
					<?php endif; ?>
					</div>
			</div>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer(); ?>