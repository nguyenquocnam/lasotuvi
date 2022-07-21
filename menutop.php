<ul id="mega-menu-primary"
                                        class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                                        data-event="hover_intent" data-effect="disabled" data-effect-speed="200"
                                        data-effect-mobile="slide" data-effect-speed-mobile="200"
                                        data-mobile-force-width="false" data-second-click="close"
                                        data-document-click="collapse" data-vertical-behaviour="accordion"
                                        data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all"
                                        data-hover-intent-timeout="300" data-hover-intent-interval="100">
                                        <li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-home mega-current-menu-item mega-page_item mega-page-item-2 mega-current_page_item mega-align-bottom-left mega-menu-flyout mega-has-icon mega-icon-left mega-hide-text mega-menu-item-606"
                                            id="mega-menu-item-606">
                                            <a class="dashicons-admin-home mega-menu-link" href="<?php bloginfo('url'); ?>" tabindex="0"
                                                aria-label="Trang chủ"></a>
                                        </li>

 <?php 
  $menuLocations = get_nav_menu_locations(); 

  // var_dump($menuLocations);
  $menuID = $menuLocations['Main_menu']; 

  $primaryNav = wp_get_nav_menu_items($menuID); 

  $id_parent =0;

  foreach ( $primaryNav as $navItem ) {
// permalink_link();

    if($navItem -> menu_item_parent == $id_parent){
        $demall = 0;
        foreach ( $primaryNav as $navItem2 ) { 
                       if($navItem2 -> menu_item_parent == $navItem ->ID){
                        $demall++;
                       }


        }
        if($demall<=5){
            echo '<li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-'.$navItem ->ID.'" id="mega-menu-item-'.$navItem ->ID.'"> <a class="mega-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'<span
                                                                class="mega-indicator"></span></a>'; 
        }else{
            echo '<li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-grid mega-menu-item-1681" id="mega-menu-item-'.$navItem ->ID.'"> <a class="mega-menu-link" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'<span
                                                    class="mega-indicator"></span></a>'; 
        }
        

        $sub="";
        
        if($demall>5){
            $dem=0;
            foreach ( $primaryNav as $navItem2 ) { 
                    // echo $dem."<br>";
                if($navItem2 -> menu_item_parent == $navItem ->ID){
                if($dem%5==0){
                                            $sub .= '<li class="mega-menu-column mega-menu-3-of-12"><ul class="mega-sub-menu">';

                }
                $sub2="";
                       $checkout=false;
                       foreach ( $primaryNav as $navItem3 ) { 

                          if($navItem3 -> menu_item_parent == $navItem2 ->ID){
                            $checkout=true;
                          $sub2 .= '<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-category mega-menu-item-'.$navItem3 ->ID.'"> <a class="mega-menu-link" href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a></li>';

                       } 

                    }
                    if($checkout==false){
                        $sub .= '<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-'.$navItem2 ->ID.'"> <a class="mega-menu-link" href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>';
                    }else{
                        $sub .= '<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-'.$navItem2 ->ID.'"> <a tabindex="0" class="mega-menu-link" href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'<span
                                                                class="mega-indicator"></span></a>';
                    }
                    
                    $sub .= '<ul class="mega-sub-menu">'.$sub2.'</ul>'; 

                    $sub .= '</li>';
                                
                                $checkout=false;
                                // var_dump(($dem+1)%10==0||($dem+1)==$demall);
                                if(($dem+1)%5==0||($dem+1)==$demall){
                                    $sub .= '</ul></li>';


                                }

                            $dem++;
                        }
                              }

                              echo '<ul class="mega-sub-menu" ><li class="mega-menu-row " id="mega-menu-1681-0-0"><ul class="mega-sub-menu">'.$sub.'</ul></li></ul>';

                  echo '</li>';
        }else{
            foreach ( $primaryNav as $navItem2 ) { 

           if($navItem2 -> menu_item_parent == $navItem ->ID){
            
           

           $sub2="";
           $checkout=false;
           foreach ( $primaryNav as $navItem3 ) { 

              if($navItem3 -> menu_item_parent == $navItem2 ->ID){
                $checkout=true;
              $sub2 .= '<li class="mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-category mega-menu-item-'.$navItem3 ->ID.'"> <a class="mega-menu-link" href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a></li>';

           } 

        }
        if($checkout==false){
            $sub .= '<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-'.$navItem2 ->ID.'"> <a class="mega-menu-link" href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>';
        }else{
            $sub .= '<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-'.$navItem2 ->ID.'"> <a tabindex="0" class="mega-menu-link" href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'<span
                                                    class="mega-indicator"></span></a>';
        }
        
        $sub .= '<ul class="mega-sub-menu">'.$sub2.'</ul>'; 

        $sub .= '</li>';

        } 
        $checkout=false;

      }
      echo '<ul class="mega-sub-menu" >'.$sub.'</ul>';

      echo '</li>';
        }

        

      

    }

  }

 ?>

 </ul>