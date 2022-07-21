<?php get_header();?>
<?php 
    $term = get_queried_object();
   	// var_dump($term);
?>
<div id="content" class="blog-wrapper blog-archive page-wrapper container">
    <div class="breadcrumb-wrapper row row-normal">
        <div class="col-sm-12">
                                    <?php the_breadcrumb() ;?>
        </div>
    </div>
  <div class="row row-normal">
    <div class="col-lg-8">
      <div id="post-list" class="row">
      	<?php 
    $paged = ( get_query_var( 'page' ) ) ? absint( get_query_var( 'page' ) ) : 1;
    // echo $paged;
    $args = array(
        'posts_per_page' => 10,
        // 'category_name'=>
        // 'cat' => $term->cat_ID,
        'paged' => $paged,
    );
    // var_dump($term);
    if(is_tag()){
    	$args['tag']=$term->slug;
    }else{
      // var_dump($term);
    	$args['cat']=$term->cat_ID;
    }
    $the_query = new WP_Query($args);
    $i=1;
    if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post();
    	// var_dump(get_post());
    	if($i==1){


?>
	<article id="post-508" class="col-sm-12 first-item post-508 post type-post status-publish format-standard has-post-thumbnail hentry category-bat-tu tag-bat-tu">
    <div class="article-inner article-row-tlq">
            <header class="entry-header">
              <div class="entry-image relative">
                <a href="<?php the_permalink();?>">
                  <img
                    width="800"
                    height="600"
                    src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                  />
                </a>
              </div>
              <div class="homecatetitle"><a href="<?php echo (is_category())?get_category_link($term->cat_ID):get_tag_link($term->term_id );

 ?>"><?php echo $term->name ; ?></a></div>
              <div class="entry-header-text entry-header-text-bottom text-left">
                <h2 class="entry-title">
                  <a href="<?php the_permalink();?>" rel="bookmark" class="plain"
                    ><?php the_title();?></a
                  >
                </h2>
              </div>
            </header>
            <div class="entry-content">
              <div class="entry-summary">
                <?php echo get_the_excerpt();?>
                <div class="date-author">
                  <div class="post-meta post-author"><?php echo the_author_meta( 'display_name' , get_post()->post_author ); ?></div>
                  &nbsp;&nbsp;-&nbsp;&nbsp;
                  <div class="post-meta post-date"><?php $date=date_create(get_post()->POST_DATE);
echo date_format($date,"Y/m/d"); ?></div>
                </div>
              </div>
            </div>
          </div>
                  </article>

<?php 
}else{
	?>

<article
          id="post-543"
          class="col-sm-12 post-543 post type-post status-publish format-standard has-post-thumbnail hentry category-bat-tu tag-bat-tu tag-dung-hy-than tag-dung-than"
        >
          <div class="article-inner article-row-tlq row">
            <header class="entry-header col-lg-5 col-md-5 col-sm-5">
              <div class="entry-image relative">
                <a href="<?php the_permalink();?>">
                  <img
                    width="800"
                    height="600"
                    src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                  />
                </a>
              </div>
            </header>
            <div class="entry-content col-lg-7 col-md-7 col-sm-7">
              <div class="entry-header-text entry-header-text-bottom text-left">
                <h2 class="entry-title">
                  <a
                    href="<?php the_permalink();?>"
                    rel="bookmark"
                    class="plain"
                    ><?php the_title();?></a
                  >
                </h2>
              </div>
              <div class="entry-summary">
                <?php echo get_the_excerpt();?>
                <div class="date-author">
                  <div class="post-meta post-author"><?php echo the_author_meta( 'display_name' , get_post()->post_author ); ?></div>
                  &nbsp;&nbsp;-&nbsp;&nbsp;
                  <div class="post-meta post-date"><?php $date=date_create(get_post()->POST_DATE);
echo date_format($date,"Y/m/d"); ?></div>
                </div>
              </div>
            </div>
          </div>
        </article>
	<?php

}


?>



<?php
$i++;
    endwhile; 
    else: 
?>	
    <h1>HIỆN KHÔNG CÓ BÀI VIẾT NÀO!</h1>
<?php	
    endif; 
    wp_reset_query();
?>	
       
        
        <div class="row">
          <div class="col-sm-12">
          	<?php 
          	global $wp;
			// echo home_url($wp->request)
          		$pagination = paginate_links(array(
                    'base' => home_url($wp->request) . '%_%',
                    'format' => '?page=%#%',
                    'current' => $paged,
                    'total' => $the_query->max_num_pages,
                    'prev_text'    => __('«'),
                    'next_text'    => __('»'),
                    // 'prev_next'=>true,
                    // 'next_text'=>true,
                    'type' => 'list'
                ));
                echo str_replace( "<ul class='page-numbers'>", '<ul class="page-numbers nav-pagination links text-center">', $pagination );
                // echo $pagination;
          	 ?>
           
          </div>
        </div>
      </div>
    </div>
    <div class="post-sidebar col-lg-4">
      <div id="secondary" class="widget-area" role="complementary">
        <?php include "aside.php" ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>