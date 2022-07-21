<?php get_header();?>
<style>
.lien-he-map .addd .col-md-6.col-sm-12 {
    padding: 40px 80px;
}
	.lien-he-map .mg-5 {
    color: #008fec;
    font-weight: bold;
    padding-top: 25px;
}
	.lien-he-map input {
    width: 100%;
    padding: 12px;
    border-radius: 4px;
    margin: 5px 0;
    display: inline-block;
    font-size: 17px;
    line-height: 20px;
    text-decoration: none;
}
	.lien-he-map .addd {
    background: url(https://hosco.vn/wp-content/uploads/2021/06/pngtree-blue-tech-business-atmosphere-background-image_209739.jpg) no-repeat center top;
    background-size: cover;
    margin-top: 15px;
}
	.container.contact-form {
    width: 100%;
    -webkit-box-shadow: 0 21px 41px -13px rgb(0 0 0 / 18%);
    -moz-box-shadow: 0 21px 41px -13px rgba(0, 0, 0, 0.18);
    box-shadow: -1px -4px 41px 4px rgb(0 0 0 / 18%);
    border-radius: 5px;
    background: #fff;
}
	.left-hosco-lienhe .wpb_column {
    width: 100%;
    -webkit-box-shadow: 0 21px 41px -13px rgb(0 0 0 / 18%);
    -moz-box-shadow: 0 21px 41px -13px rgba(0, 0, 0, 0.18);
    box-shadow: -1px -4px 41px 4px rgb(0 0 0 / 18%);
    border-radius: 5px;
    background: #fff;
    padding: 10px 50px;
    height: 100%;
}
</style>
<h2 class="text-center mg-5">Liên hệ với chúng tôi</h2>
<section class="lien-he-map">
 	<div class="container-fluid">  
 		<div class="row addd">
			<div class="col-md-6 col-sm-12 col-xs-12 light-hosco">
 				<div class="container contact-form" >
 					
<?php
	echo do_shortcode('[contact-form-7 id="105" title="Ý kiến khách hang"]');

	?>
				</div>
 			</div>
 			<div class="col-md-6 col-sm-12 left-hosco-lienhe">
 				<div class="wpb_column">
 					<div class="vc_column-inner ">
 						<div class="wpb_wrapper">
 							<div class="icon_element">
 								<div class="wpb_text_column wpb_content_element ">
 										<?php echo get_the_content(); ?>

 								</div>
 							</div>
 						</div>
 					</div>
 				</div>

 			</div>

 			

 		</div>
 	</div>
</section>

<?php get_footer();?>