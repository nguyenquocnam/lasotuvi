<?php
//widget baivietmoi theo chuyen muc
class Random_Post extends WP_Widget {
function __construct() {
parent::__construct(
'random_post',
'Bài Viết Mới Nhất[Tùy Chỉnh]',
array( 'description'  =>  'Widget hiển thị bài viết mới nhất' )
);
}
function form( $instance ) {
$default = array(
'title' => 'BÀI VIẾT MỚI',
'post_number' => 3
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
return $instance;
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'showposts' => $post_number, // số lượng bài viết
	);
$random_query = new WP_query($args);
?>
<div id="col-1265175102" class="col col-md-4 col-sm-12 col-lg-4">
    <div class="col-inner">
        <div class="sidebar-wrapper ul-reset">
            <div class="widget">
                <div class="darkblock">
                    <div class="lighttitle"><span class="leftarrow"></span><?php echo $title ; ?><span class="rightarrow"></span></div>
                    <div class="gspw-posts grid-01">
                        <?php
                        if ($random_query->have_posts()):
                        ?>
                        <?php
                        while( $random_query->have_posts() ) :
                        $random_query->the_post();?>
                        <article class="post-15576 post type-post status-publish format-standard hentry category-phong-tuc-viet tag-ong-cong-ong-tao tag-van-khan">
                            <div class="row row-col-sm">
                                <div class="col col-lg-5 col-sm-5">
                                    <a href="<?php the_permalink();?>" rel="bookmark">
                                        <img
                                        width="420"
                                        height="420"
                                        src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                                        
                                        />
                                    </a>
                                </div>
                                <div class="col col-lg-7 col-sm-7">
                                    <div class="otherhotnews">
                                        <div class="relatedtitlea bold">
                                            <a href="<?php the_permalink();?>" rel="bookmark">
                                                <?php the_title();?>
                                            </a>
                                        </div>
                          
                                        <div class="homeexpert"><?php the_excerpt();?></div>
                                        <div class="homecatetitle"><a href="<?php echo get_category_link(get_the_category(get_post()->ID)[0]); ?>" rel="tag"><?php echo get_the_category(get_post()->ID)[0]->name ; ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile;
                    echo '</ul>';
                echo '</div>';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
}
}
class postCategory extends WP_Widget {
function __construct() {
parent::__construct(
'postCategory',
'Bài viết theo danh mục',
array( 'description'  =>  'Bài viết theo danh mục' )
);
}
function form( $instance ) {
$default = array(
'title' => 'Bài viết theo danh mục',
'post_number' => 3
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);
$categoriID = esc_attr($instance['categoriID']);
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
$args = array(
'type'      => 'post',
'child_of'  => 0,
'parent'    => ''
);
$categories = get_categories( $args );
// var_dump($categories);
echo '<p>Chọn chuyên mục <select name="'.$this->get_field_name('categoriID').'" >';
foreach ( $categories as $category ) {?>
<!-- ehco $category->name ;  -->
<option value="<?php echo $category->cat_ID; ?>" <?php echo ($category->term_id==$categoriID)?"selected":"" ?>><?php echo $category->name; ?></option>
<?php
}
echo "</select></p>";
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
$instance['categoriID'] = strip_tags($new_instance['categoriID']);
return $instance;
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$post_number = $instance['post_number'];
$categoriID = $instance['categoriID'];
// ================
$vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => $categoriID,
//thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> $post_number));
?>
<div id="col-1292339085" class="col col-md-6 col-sm-12 col-lg-6">
                                    <div class="col-inner">
<h2 class="lefttitle"><?php echo $title; ?></h2>
                                        <div class="row home-grid">
<?php $i=1; while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
<?php if($i==1){ ?>
<div class="col post-item style-2">
<?php } else { ?>
<div class="col post-item post-item-list style-2">
<?php } ?>
<div class="pt-post col-inner">
    <a href="<?php the_permalink();?>" class="plain" title="<?php the_title();?>">
        <div class="box box-2 box-text-bottom box-blog-post has-hover">
            <div class="box-image">
                <div class="image-cover" style="padding-top: 70%;">
                    <img
                    width="800"
                    height="600"
                    src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                    data-src=""
                    class="lazy-load attachment-col-md size-col-md wp-post-image"
                    alt=""
                    loading="lazy"
                    srcset=""
                    
                    sizes="(max-width: 800px) 100vw, 800px"
                    />
                </div>
            </div>
            <div class="box-text-post box-text text-left">
                <div class="box-text-inner blog-post-inner">
                    <h3 class="post-pt-title post-pt-title-2 post-title is-col-lg"><?php the_title();?></h3>
                    <p class="from_the_blog_excerpt"><?php echo get_the_excerpt();?></p>
                    <div class="date-author">
                        <div class="post-meta post-author"><?php echo get_the_category(get_post()->ID)[0]->name ;?><span>-<?php $date=date_create(get_post()->POST_DATE);
echo date_format($date,"Y/m/d"); ?></span></div>

                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
                                </div>

<?php $i++; endwhile ; wp_reset_query() ;
?>
</div>
</div>
                                    
                                </div>
<?php
// ================
}
}

class postCategoryOne extends WP_Widget {
function __construct() {
parent::__construct(
'postCategoryOne',
'Bài viết đại diện',
array( 'description'  =>  'Bài viết đại diện' )
);
}
function form( $instance ) {
$default = array(
'title' => 'Bài viết đại diện',
'post_number' => 3
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$categoriID = esc_attr($instance['categoriID']);
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
$args = array(
'type'      => 'post',
'child_of'  => 0,
'parent'    => ''
);
$categories = get_categories( $args );
// var_dump($categories);
echo '<p>Chọn chuyên mục <select name="'.$this->get_field_name('categoriID').'" >';
foreach ( $categories as $category ) {?>
<!-- ehco $category->name ;  -->
<option value="<?php echo $category->cat_ID; ?>" <?php echo ($category->term_id==$categoriID)?"selected":"" ?>><?php echo $category->name; ?></option>
<?php
}
echo "</select></p>";
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['categoriID'] = strip_tags($new_instance['categoriID']);
return $instance;
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$categoriID = $instance['categoriID'];
   $category_link = get_category_link($categoriID);

// ================
$vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => $categoriID,
//thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> 1));
?>

<?php $i=1; while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
 <div id="col-276860732" class="col-md-4 col-sm-12 col-lg-4">
                        <div class="col-inner">
                            <div class=" home-grid">
                                <h2 class="lefttitle"><?php echo $title; ?></h2>
                                <div class="post-item style-4">
                                    <div class="pt-post col-inner">
                                        <a href="<?php the_permalink();?>" class="plain" title="<?php the_title();?>">
                                            <div class="box box-4 box-text-bottom box-blog-post has-hover">
                                                <div class="box-image">
                                                    <div class="image-zoom image-zoom image-cover" style="padding-top: 70%;">
                                                        <img
                                                            width="800"
                                                            height="600"
                                                            src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                                                            sizes="(max-width: 800px) 100vw, 800px"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="box-text-post box-text text-left">
                                                    <div class="box-text-inner blog-post-inner">
                                                        <h3 class="post-pt-title post-pt-title-2 pm-t-0 post-title is-col-lg"><?php the_title();?></h3>
                                                        <p class="from_the_blog_excerpt"><?php echo get_the_excerpt();?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="readmore-block"><a class="readmore-link" href="<?php echo esc_url( $category_link ); ?>">Xem tất cả bài viết</a></div>
                            </div>
                        </div>
                    </div>
<?php $i++; endwhile ; wp_reset_query() ;
?>
<?php
// ================
}
}


class postList extends WP_Widget {
function __construct() {
parent::__construct(
'postList',
'list bài viết',
array( 'description'  =>  'list bài viết' )
);
}
function form( $instance ) {
$default = array(
'title' => 'list bài viết',
'post_number' => 3
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);
$categoriID = esc_attr($instance['categoriID']);
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
$args = array(
'type'      => 'post',
'child_of'  => 0,
'parent'    => ''
);
$categories = get_categories( $args );
// var_dump($categories);
echo '<p>Chọn chuyên mục <select name="'.$this->get_field_name('categoriID').'" >';
foreach ( $categories as $category ) {?>
<!-- ehco $category->name ;  -->
<option value="<?php echo $category->cat_ID; ?>" <?php echo ($category->term_id==$categoriID)?"selected":"" ?>><?php echo $category->name; ?></option>
<?php
}
echo "</select></p>";
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
$instance['categoriID'] = strip_tags($new_instance['categoriID']);
return $instance;
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$categoriID = $instance['categoriID'];
$post_number = $instance['post_number'];

// ================
$vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => $categoriID,
//thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> $post_number));
?>
                                    <div class="col-inner">
                                        <div class="row blog-top-2 col-lg-12 col-md-12 col-sm-12">
<?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
 
                                            <div class="col post-item">
                                                <div class="col-inner">
                                                    <a href="<?php the_permalink();?>" class="plain">
                                                        <div class="box box-default box-text-bottom box-blog-post has-hover">
                                                            <div class="box-image">
                                                                <div class="image-cover" style="padding-top: 56.25%;">
                                                                    <img
                                                                        width="800"
                                                                        height="600"
                                                                        src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>"
                                                                        
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div class="box-text text-left">
                                                                <div class="box-text-inner blog-post-inner">
                                                                    <h5 class="post-title is-col-lg"><?php the_title();?></h5>
                                                                    <p class="from_the_blog_excerpt"><?php echo get_the_excerpt();?></p>
                                                                    <div class="post-footer"><span class="cat-label uppercase"> <?php echo get_the_category(get_post()->ID)[0]->name ;?> </span> <span class="post-meta post-date"> - <?php $date=date_create(get_post()->POST_DATE);
echo date_format($date,"Y/m/d"); ?></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        
<?php  endwhile ; wp_reset_query() ;
?>
</div>
                                    </div>
                           
<?php
// ================
}
}

class postListSlider extends WP_Widget {
function __construct() {
parent::__construct(
'postListSlider',
'Slider list bài viết',
array( 'description'  =>  'Slider list bài viết' )
);
}
function form( $instance ) {
$default = array(
'title' => 'Slider list bài viết',
'post_number' => 3
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$post_number = esc_attr($instance['post_number']);
$categoriID = esc_attr($instance['categoriID']);
echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Số lượng bài viết hiển thị <input type="number" class="widefat" name="'.$this->get_field_name('post_number').'" value="'.$post_number.'" placeholder="'.$post_number.'" max="30" /></p>';
$args = array(
'type'      => 'post',
'child_of'  => 0,
'parent'    => ''
);
$categories = get_categories( $args );
// var_dump($categories);
echo '<p>Chọn chuyên mục <select name="'.$this->get_field_name('categoriID').'" >';
foreach ( $categories as $category ) {?>
<!-- ehco $category->name ;  -->
<option value="<?php echo $category->cat_ID; ?>" <?php echo ($category->term_id==$categoriID)?"selected":"" ?>><?php echo $category->name; ?></option>
<?php
}
echo "</select></p>";
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['post_number'] = strip_tags($new_instance['post_number']);
$instance['categoriID'] = strip_tags($new_instance['categoriID']);
return $instance;
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$categoriID = $instance['categoriID'];
$post_number = $instance['post_number'];

// ================
$vnkings = new WP_Query(array(
'post_type'=>'post',
'post_status'=>'publish',
'cat' => $categoriID,
//thay id_của_category bằng id danh mục bạn muốn hiển thị nhé
'orderby' => 'ID',
'order' => 'DESC',
'posts_per_page'=> $post_number));
?>
                                
                                        <!-- slide o day -->
                                        <div id="mixedSlider" class="col-lg-12">
                                            <div class="MS-content">
                                                <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>

                                                <div class="item">
													
                                                    <div class="imgTitle">
                                                        <a href="<?php the_permalink();?>">
                                                        <img src="<?php echo get_the_post_thumbnail_url( get_post()->ID) ;?>" alt="" />
														</a>
                                                    </div>
                                                    <h5 class="post-title is-large "><a style="color:black;font-style: normal;" href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                                                    <p class="from_the_blog_excerpt "><?php echo get_the_excerpt();?></p>
                                                    <div class="post-footer"><span class="cat-label uppercase">  <?php echo get_the_category(get_post()->ID)[0]->name ;?> </span> <span class="post-meta post-date"> - <?php $date=date_create(get_post()->POST_DATE);
echo date_format($date,"Y/m/d"); ?></span></div>
                                                </div>
                                                
                                            
                                            
                                            
                                        

                                            
                                        
<?php  endwhile ; wp_reset_query() ;
?>

</div>
											<div class="MS-controls">
                                                <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                                                <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                                            </div>
                                    </div>
                                
<?php
// ================
}
}


class toolLink extends WP_Widget {
function __construct() {
parent::__construct(
'toolLink',
'tool link',
array( 'description'  =>  'tool link' )
);
}
function form( $instance ) {
$default = array(
'title' => 'tool link',
'linkTool'=>''
);
$instance = wp_parse_args( (array) $instance, $default );
$title = esc_attr($instance['title']);
$linkTool = esc_attr($instance['linkTool']);

echo '<p>Nhập tiêu đề <input type="text" class="widefat" name="'.$this->get_field_name('title').'" value="'.$title.'"/></p>';
echo '<p>Nhập link <input type="text" class="widefat" name="'.$this->get_field_name('linkTool').'" value="'.$linkTool.'"/></p>';
}
function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = strip_tags($new_instance['title']);
$instance['linkTool'] = strip_tags($new_instance['linkTool']);
return $instance;
}
function widget( $args, $instance ) {
extract($args);
$title = apply_filters( 'widget_title', $instance['title'] );
$linkTool = $instance['linkTool'];

// ================
?>
<div class="col-lg-3 col col-md-3 col-sm-4 col-xs-6">
                        <div class="tool-it">
                            <a class="active" href="<?php echo $linkTool; ?>"><span><?php echo $title; ?></span></a>
                        </div>
                    </div>
                                                                           
<?php
// ================
}
}

add_action( 'widgets_init', 'create_randompost_widget' );
function create_randompost_widget() {
register_widget('Random_Post');
register_widget('postCategory');
register_widget('postCategoryOne');
register_widget('postList');
register_widget('postListSlider');
register_widget('toolLink');

}