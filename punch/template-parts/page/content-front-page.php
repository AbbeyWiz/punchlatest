<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>


	<article style="width: 100%; overflow-x: hidden;" id="post-<?php the_ID(); ?>" <?php post_class( 'twentyseventeen-panel ' ); ?> >
		<main id="pb-root" class="site-main container-fluid" role="main" style="min-height: 100px;">



<!--============================  Header Advert   ===================================-->
			<?php //include 'header-advert.php'; ?>


<section class="first-row" style="margin-top: 20px;">
		<section class="col-md-12 col-lg-6 hero-wrap">


<!--============================  Hero large   ===================================-->

	<?php
		$hero_args = array( 'posts_per_page' => 1, 'offset' => 0, 'ignore_sticky_posts' => 1, 'category_name' => "featured" );
		$hero_loop = new WP_Query( $hero_args ); 	while ( $hero_loop->have_posts() ) : $hero_loop->the_post(); ?>

    	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="b-lazy" id="hero" data-src="<?php the_post_thumbnail_url('large'); ?>"> <!--#-->
					<div class="blurry" style="background-image: url('<?php the_post_thumbnail_url('blurry'); ?>')"></div>
				</div>
			</a>
			<h1 class="hero-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>

	<?php endwhile; wp_reset_postdata(); ?>


<!--============================  Hero Subset   ===================================-->


<div class="sub-hero">

		<?php $hero_sub_args = array( 'posts_per_page' => 3, 'offset' => 1, 'ignore_sticky_posts' => 1, 'category_name' => "featured" );
			$hero_sub_loop = new WP_Query( $hero_sub_args ); while ( $hero_sub_loop->have_posts() ) : $hero_sub_loop->the_post(); ?>

			<div class="sub-hero_item" >
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
				<div class="sub-hero_image b-lazy" data-src="<?php the_post_thumbnail_url('large'); ?>" data-src-small="<?php the_post_thumbnail_url('medium'); ?>">
					<div class="blurry" style="background-image: url('<?php the_post_thumbnail_url('blurry'); ?>')"></div>
				</div>
				<div class="title-box">
					<?php the_title(); ?>
				</div>
				</a>
			</div>

		<?php endwhile; wp_reset_postdata(); ?>

	</div> <!-- //sub-hero -->


</section> <!-- //hero-wrap -->




					<!--============================  Latest Stories   ===================================-->


					<section class="col-md-12 col-lg-6 latest-news-wraper">
							<div class="row latest-news-row">
									<div class="col-md-12 col-lg-6 latest-news">
										<div class="row" style="height: 100%;">
												<div class="title-header">Just In</div>
												<ul>

													<?php
													$args = array( 'posts_per_page' => 10 );
													$lastposts = new WP_Query( $args );
													while ( $lastposts->have_posts() ) : $lastposts->the_post(); ?>

													<li>
														<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h3><?php the_title(); ?></h3></a>
														<div class="_time"><?php the_time('g:i a'); ?></div></li>
														<!-- <div class="_time"><?php //echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></div></li> -->

													<?php endwhile; wp_reset_postdata(); ?>

													<li class="read-more">
														<a href="<?php echo get_category_link( get_category_by_slug('news') ); ?>">Read More</a>
													</li>

												</ul>
										</div>
								</div>







								<!--===================== #Hero Sidebar / #Trending News ==========================-->

									<section class="col-xs-12 col-lg-6 trending-news">
										<div class="hidden-sm-up" style="width: 100%; margin-bottom: 20px;">
											<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
																<!-- Punch_Mobile_Banner -->
													<ins class="adsbygoogle"
																     style="display:inline-block;width:320px;height:50px"
																     data-ad-client="ca-pub-7167863529667065"
																     data-ad-slot="1870972691"></ins>
													<script>
													(adsbygoogle = window.adsbygoogle || []).push({});
													</script>
											</div>


								<!--//////////////////// #Trending News ////////////////////-->

														<div class="row" style=" overflow: hidden;">
																<div class="title-header">Trending</div>
																<ul>
																	<?php
																		$today = getdate();
																		$query_args = array(
																			'posts_per_page' => '5',
																			'meta_key' => 'wpb_post_views_count',
																			'orderby' => 'meta_value_num',
																			'order' => 'DESC',
																			'ignore_sticky_posts' => 1,
																			'date_query' => array(
																				array(
																						'year'  => $today['year'],
																						'month' => $today['mon'],
																						'day'   => $today['mday'],
																				),
																	    ),
																		);
																		$popularpost = new WP_Query( $query_args );
																		while ( $popularpost->have_posts() ) : $popularpost->the_post();
																		?>


																		<li>
																			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
																				<figure class="trend-image b-lazy" data-src="<?php the_post_thumbnail_url('large'); ?>" data-src-small="<?php the_post_thumbnail_url('medium'); ?>">
																					<div class="blurry" style="background-image: url('<?php the_post_thumbnail_url('blurry'); ?>')"></div>
																			</figure>
																			<h1><?php the_title(); ?></h1>

																			</a>
																		</li>


																		<?php
																			endwhile;
																		 	wp_reset_postdata();
																		?>

																</ul>
															</div>

									 </section> <!-- //#Hero Sidebar / #Trending News -->







						</div>   <!-- //latest-news-row -->
					</section> <!-- //latest-news-wraper -->








			</section> <!-- //first row -->
		</main><!-- //main -->









	
</article><!-- #post-## -->
