<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
	
	<meta name="keywords" content="Xem tử vi, xem lá số tử vi, xem tử vi số mệnh, Tử vi, Lá số tử vi "/>
    <title><?php if(is_front_page()){echo esc_html( get_bloginfo( 'name' ));}else{wp_title('');} ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/index.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/font-awesome-4.7.0/css/font-awesome.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/css/bai-viet.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?php bloginfo('template_directory' ); ?>/js/amlich.js"></script>
	 <script language="JavaScript">
      
       window.onload = function () {
           document.addEventListener("contextmenu", function (e) {
               e.preventDefault();
           }, false);
           document.addEventListener("keydown", function (e) {
               //document.onkeydown = function(e) {
               // "I" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                   disabledEvent(e);
               }
               // "J" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                   disabledEvent(e);
               }
               // "S" key + macOS
               if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                   disabledEvent(e);
               }
               // "U" key
               if (e.ctrlKey && e.keyCode == 85) {
                   disabledEvent(e);
               }
               // "F12" key
               if (event.keyCode == 123) {
                   disabledEvent(e);
               }
           }, false);
           function disabledEvent(e) {
               if (e.stopPropagation) {
                   e.stopPropagation();
               } else if (window.event) {
                   window.event.cancelBubble = true;
               }
               e.preventDefault();
               return false;
           }
       }
//edit: removed ";" from last "}" because of javascript error
</script>
<script type="text/javascript">
 $(document).ready(function() {
 $('body').bind('cut copy paste', function(event) {
 event.preventDefault();
 });
 });
 </script>
    <?php wp_head();
?>
	
	<style>@font-face {font-family: "Neue Helvetica"; src: url("//db.onlinewebfonts.com/t/9da41c570d5a221cb2486d78769a076d.eot"); src: url("//db.onlinewebfonts.com/t/9da41c570d5a221cb2486d78769a076d.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/9da41c570d5a221cb2486d78769a076d.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/9da41c570d5a221cb2486d78769a076d.woff") format("woff"), url("//db.onlinewebfonts.com/t/9da41c570d5a221cb2486d78769a076d.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/9da41c570d5a221cb2486d78769a076d.svg#Neue Helvetica") format("svg"); }
</style>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PEYTE3N8WZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PEYTE3N8WZ');
</script>
	
	<!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '726667985351677');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=726667985351677&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<meta name="facebook-domain-verification" content="n277ybzx4qs98msvr05a9finlhdctd" />
</head>
<body>
    <div class="wapper">
        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main">
                    <div class="header-inner flex-row container logo-left col-md-logo-center" role="navigation">
                        <div id="logo" class="logo">
                            <h1>
                                <a href="<?php bloginfo('url'); ?>" title="" rel="home">
                                    <?php
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                        if ( has_custom_logo() ) {
                                                echo '<img width="200" height="100" src="' . esc_url( $logo[0]) . '" alt="' . get_bloginfo( 'name' ) . '" class="header_logo header-logo">';
                                        } else {?>
                                                <img width="200" height="100" src="<?php bloginfo('template_directory' ); ?>/images/logo-new.png"
                                        class="header_logo header-logo" alt="Thăng Long Đạo Quán" />
                                                <?php
                                        }
                                    ?>
                                    
                                   
                                </a>
                            </h1>
                        </div>
                        <div class="flex-col show-for-col-md flex-left">
                            <ul class="mobile-nav nav nav-left">
                                <li class="nav-icon has-icon">
                                    <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                                        data-color="" class="is-col-sm" aria-label="Menu" aria-controls="main-menu"
                                        aria-expanded="false">
                                        <i class="icon-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-col hide-for-col-md flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left nav-uppercase">
                                <div class="header-block">
                                    <div class="left-block header-day-info" id="time-full">
                                       
                                    </div>
                                    <div class="right-block">
                                        <div class="service-item">
                                            <a href="javascript:void(0)"> <i class="search-icon"></i> <span
                                                    class="font-tvu icon-text">Tìm kiếm</span> </a>
                                            <div class="search-form-block">
                                                <div class="arrow_box">
                                                    <form method="get" class="searchform-header" action="<?php bloginfo('url'); ?>"
                                                        role="search">
                                                        <div class="flex-row relative">
                                                            <div class="flex-col flex-grow"><input type="search"
                                                                    class="search-field mb-0" name="s" value=""
                                                                    placeholder="Search…" autocomplete="off" /></div>
                                                            <div class="flex-col">
                                                                <button type="submit"
                                                                    class="ux-search-submit submit-button secondary button icon mb-0"
                                                                    aria-label="Submit"><i
                                                                        class="icon-search"></i></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="service-item">
                                            <a href="" data-toggle="modal" data-target="#myContact"> <i class="contact-icon"></i> <span
                                                    class="font-tvu icon-text">Liên hệ</span> </a>
                                        </div>
                                        <div class="service-item">
                                            <a href="<?php bloginfo('url'); ?>/ve-chung-toi"> <i class="me-icon"></i> <span class="font-tvu icon-text">Về
                                                    chúng tôi</span> </a>
                                        </div>
                                    </div>
                                </div>
                                <li class="html custom html_topbar_right"></li>
                            </ul>
                        </div>
                        
                    </div>
                    <div class="container">
                        <div class="top-divider full-width"></div>
                    </div>
                </div>
                <div id="wide-nav" class="header-bottom wide-nav hide-for-col-md">
                    <div class="flex-row container">
                        <div class="flex-col hide-for-col-md flex-left">
                            <div class="nav header-nav header-bottom-nav nav-left">
                                <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                                    <div class="mega-menu-toggle">
                                        <div class="mega-toggle-blocks-left"></div>
                                        <div class="mega-toggle-blocks-center"></div>
                                        <div class="mega-toggle-blocks-right">
                                            <div class="mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0"
                                                id="mega-toggle-block-0">
                                                <button aria-label="Toggle Menu"
                                                    class="mega-toggle-animated mega-toggle-animated-slider"
                                                    type="button" aria-expanded="false">
                                                    <span class="mega-toggle-animated-box"> <span
                                                            class="mega-toggle-animated-inner"></span> </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                        get_template_part("menutop");
                                     ?>
                                </div>
                            </div>
                        </div>
                        <div class="flex-col hide-for-col-md flex-right flex-grow">
                            <div class="nav header-nav header-bottom-nav nav-right"></div>
                        </div>
                    </div>
                </div>
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
            </div>
        </header>
        <header class="header-mobile">
                <div class="container mobile-container">
                    <nav class="navbar">
                        <button type="button" class="burger" id="burger">
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                        </button>
                        <span class="title" >
                            
							<a href="<?php bloginfo('url'); ?>" style="text-decoration:none;color:white;">
                            <img src="<?php echo get_theme_mod( 'carrental_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" style="width: 40px;">
                            Tử vi Ngô gia phái
							</a>
                        </span>
                        <span class="overlay" id="overlay"></span>
                        <div class="menu" id="menu">
                            <ul class="menu-block">
                                <li class="menu-item">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal" >
                                    <form method="get" class="searchform" action="<?php bloginfo('url'); ?>" role="search">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow"><input type="search" class="search-field mb-0" name="s" value="" placeholder="Search&hellip;" /></div>
                                            <div class="flex-col">
                                                <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit"><i class="icon-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="live-search-results text-left z-top"></div>
                                    </form>
                                </div>
                                </li>
                                <li class="menu-item" style="margin-top:15px"><a class="menu-link" href="<?php bloginfo('url'); ?>">Trang chủ</a></li>
                                 <?php 
  $menuLocations = get_nav_menu_locations(); 

  // var_dump($menuLocations);
  $menuID = $menuLocations['Main_menu']; 

  $primaryNav = wp_get_nav_menu_items($menuID); 

  $id_parent =0;

  foreach ( $primaryNav as $navItem ) {
// permalink_link();

    if($navItem -> menu_item_parent == $id_parent){

        echo '<li class="menu-item parent"><a class="menu-link dropArrow " href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>'; 

        $sub="";
        
        foreach ( $primaryNav as $navItem2 ) { 

           if($navItem2 -> menu_item_parent == $navItem ->ID){
           
          

           $sub2="";
           $checkout=false;
           foreach ( $primaryNav as $navItem3 ) { 

              if($navItem3 -> menu_item_parent == $navItem2 ->ID){
                $checkout=true;
              $sub2 .= '<li class="menu-item ">
                                    <a class="menu-link " href="'.$navItem3->url.'" title="'.$navItem3->title.'">'.$navItem3->title.'</a></li>';

           } 

        }
        if($checkout==false){
            $sub .= '<li class="menu-item ">
                                    <a class="menu-link " href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>';
        }else{
            $sub .= '<li class="menu-item parent">
                                    <a class="menu-link " href="'.$navItem2->url.'" title="'.$navItem2->title.'">'.$navItem2->title.'</a>';
        }
        
        $sub .= '<ul >'.$sub2.'</ul>'; 

        $sub .= '</li>';

        } 
        $checkout=false;

      }

      echo '<ul  >'.$sub.'</ul>';

      echo '</li>';

    }

  }

 ?>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
        </header>