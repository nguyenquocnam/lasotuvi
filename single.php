<?php get_header();?>
<?php 
?>

  <div id="content" class="blog-wrapper blog-single page-wrapper container">
                    <div class="breadcrumb-wrapper row row-normal">
                        <div class="col-sm-12">
                            <?php the_breadcrumb() ;?>
                            <!-- <div class="bread">
                                <p id="breadcrumbs">
                                    <span>
                                        <span>
                                            <a href="">Trang chủ</a> <span style="padding: 0 5px;">/</span>
                                            <span>

                                            </span>
                                        </span>
                                    </span>
                                </p>
                            </div> -->
                        </div>
                    </div>
                    <div class="row row-normal">
                        <div class="col-lg-8">
                            <article id="post-15576" class="post-15576 post type-post status-publish format-standard">
                                <div class="article-inner">
                                    <header class="entry-header">
                                        <div class="entry-header-text entry-header-text-bottom text-left"><h1 class="entry-title"><?php the_title( ); ?></h1></div>
                                    </header>
                                    <div class="entry-content single-page">
                                        <?php the_content(); ?>
                                        <div class="blog-share text-right">
                                                                         <?php if ( dynamic_sidebar('homeNote') ) : else : endif;  ?>

                                            
                                        </div>
                                    </div>
                                    <footer class="entry-meta text-left">
                                        <div class="tag-list">Tag: 
                                        	<?php 
                                        	global $post;
                                        	$posttags = get_the_tags($post->ID);
                                        	// var_dump($posttags);
											if ($posttags) {
											  foreach($posttags as $tag) {?>
													<a href="" rel="tag"><?php echo $tag->name; ?></a>
											    <?php
											  }
											}
                                        	 ?>

                                        	</div>
                                    </footer>
                                    
                                    <div class="row row-small">
                                        <div class="col-lg-12">
                                            <div class="relatedtitle post-related-header" style="margin-top: 25px;margin-bottom: 25px;"><span>Bài viết khác</span></div>
                                        </div>
                                        

                                        <?php 

                                        	$stringQR = array();
                                        	foreach(get_the_category(get_post()->ID) as $value){
                                        		array_push($stringQR,$value->slug);
                                        	}
                                        	// var_dump(implode('+', $stringQR));
                                        	$args = array(
										        'posts_per_page' => 3,
										        'category_name'=>implode(',', $stringQR),
										        // 'cat' => $term->cat_ID,
										        // 'paged' => $paged,
										    );
                                         ?>

                                        <?php $the_query = new WP_Query($args);
										    if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>

										    	<div class="col-lg-4 col-sm-12 other-detail">
                                            <div style="max-height: 200px; overflow: hidden;">
                                                <a href="<?php the_permalink();?>" title="Bài cúng Rằm tháng 7 ngoài trời đầy đủ, chi tiết nhất">
                                                    <img
                                                        width="800"
                                                        height="600"
                                                        src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                                                    
                                                    />
                                                </a>
                                            </div>
                                            <p style="margin-top: 15px; margin-bottom: 10px;">
                                                <a href="<?php the_permalink();?>" class="relatedtitlea" title="Bài cúng Rằm tháng 7 ngoài trời đầy đủ, chi tiết nhất">
                                                    <?php the_title();?>
                                                </a>
                                            </p>
                                            <p class="detail-max"><?php echo get_the_excerpt();?></p>
                                        </div>


										

										    	<?php
										    endwhile; 	
										    endif; 
										    wp_reset_query();
										?>	
                                        
                                        
                                    </div>
                                </div>
                            </article>
                          
                        </div>
                        <div class="post-sidebar col-lg-4">
                            <div id="secondary" class="widget-area" role="complementary">
                            <?php include "aside.php" ?>
                            </div>
                        </div>
                    </div>
                </div>
<?php get_footer(); ?>