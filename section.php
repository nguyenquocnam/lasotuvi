<section class="section container" id="section_1710484183">
            
            <div class="section-content relative">
                <div class="row row-home-1" id="row-1164188005">
                    <div id="col-1746001518" class="col-md-8 col-sm-12 col-lg-8">
                        <div class="">
                            <div class="row" id="row-490133269">
								<div class="col col-md-7 col-sm-12 col-lg-7">
                                    <div class="row">
                                <?php if ( dynamic_sidebar('SliderPost') ) : else : endif;  ?>
								<?php if ( dynamic_sidebar('QuangCao') ) : else : endif;  ?>

</div>
                            </div>
								<div id="col-567806982" class="col col-md-5 col-sm-12 col-lg-5">

                                <?php if ( dynamic_sidebar('listPost') ) : else : endif;  ?>

                                     </div>
                            </div>
                        </div>
                    </div>
                    <?php if ( dynamic_sidebar('sidebar1') ) : else : endif;  ?>

                </div>
                
                <div class="row" id="row-1053036405">
                    <div id="col-1904356369" class="col col-md-8 col-sm-12 col-lg-8">
                        <div class="col-inner">
                            <?php if ( dynamic_sidebar('homeCategory') ) : else : endif;  ?>
                        </div>
                    </div>
                    <div id="col-526338587" class="col col-md-4 col-sm-12 col-lg-4">
                        <div class="col-inner">
                            <div class="sidebar-wrapper ul-reset">
                            <?php include "aside.php" ?>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </section>