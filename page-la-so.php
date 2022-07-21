<?php get_header();
?>
<div id="content" class="blog-wrapper blog-single page-wrapper container">
  <div class="breadcrumb-wrapper row row-normal">
                        <div class="col-sm-12">
                            <?php the_breadcrumb() ;?>
                            
                        </div>
                    </div>
	<script type="text/javascript" src="<?php bloginfo('template_directory' ); ?>/file.js"></script>
	<div class="row">
	 <div class="col col-md-8 col-sm-12 col-xs-12 col-lg-8">
	  <div class="col-inner">
   <?php 
echo do_shortcode('[vc_say_hello]');
 ?>
	  </div>
    </div>


    <div class="col col-md-4 col-sm-12 col-xs-12 col-lg-4">
		<div class="col-inner">
			<div class="sidebar-wrapper ul-reset">
                            <?php include "aside.php" ?>
			</div>
		</div>
    </div>
	</div>
    
  </div>



<?php get_footer();?>