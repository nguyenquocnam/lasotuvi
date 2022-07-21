<div class="customfooter">
    <div class="container">
        <div class="row row-normal footers">
            <div class="col-lg-5">
                <a href="index.htm">
                    <div class="footer-logo-block">
                        <?php if ( get_theme_mod( 'carrental_logo' ) ) : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img  src="<?php echo get_theme_mod( 'carrental_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" style="
    width: 102px;
">
                        </a>
                        <?php else : ?>
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri() ?>/images/footer-logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" style="
    width: 102px;
">
                        </a>
                    <?php endif; ?>
                        <!-- <img alt="Thăng Long Đạo Quán" src="images/footer-logo.png" /> -->
                        <span class="">
                            TỬ VI  <br />
                            NGÔ GIA PHÁI
                        </span>
                    </div>
                </a>
                <div class="footer-text">
                    <?php if ( dynamic_sidebar('thongTinWebSite') ) : else : endif;  ?>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row row-normal">
                    <div class="link-footer">
                             <?php if ( dynamic_sidebar('veChungToi') ) : else : endif;  ?>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row row-normal row-footer">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="col-inner">
					<?php if ( dynamic_sidebar('LienKetMangXaHoi') ) : else : endif;  ?>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top:15px">
                
                <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-6">
                    <a class="dmca-badge" title="DMCA.com Protection Status" href="//www.dmca.com/Protection/Status.aspx?ID=ac760a63-2c42-404b-90d9-ae854e2eb6d2">
                                <img loading="lazy" class="alignnone size-full wp-image-14692" style="margin-right: 10px;" src="<?php echo get_template_directory_uri() ?>/images/dmca.png" alt="" width="154" height="77" />
                            </a>
                </div>
                   <div class="col-md-4 col-sm-4 col-xs-6">
                   <a href="http://online.gov.vn/Home/WebDetails/85611"><img loading="lazy" class="alignnone size-full wp-image-14691" src="<?php echo get_template_directory_uri() ?>/images/bct.png" alt="" width="165" height="70" /></a>
                   </div>     
                </div>
            </div>
            <div class="col-sm-12 footer-copyright">
                <img src="<?php echo get_template_directory_uri() ?>/images/new/copyright.png" /> Tử Vi Ngô Gia Phái 2022. All Rights Reserved. Privacy Policy<br />
                Tử Vi Ngô Gia Phái giữ bản quyền nội dung trang web này
            </div>
        </div>
    </div>
</div>
<div class="group-contact-shops">
    <div class="group-hosco-contact">
        <a id="fcb-mail" data-toggle="modal" data-target="#myContact" href="#information-form" ><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/email_ly.png" alt="mail"></a>
        <a id="fcb-zalo" href="https://zalo.me/0914599687" target="_blank" rel="nofollow"><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/zalo_ly.png" alt="zalo"></a>
        <a id="fcb-facebook" href="https://m.me/tuvingogiaphai/" target="_blank" rel="nofollow"><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/messenger_ly.png" alt="facebook"></a>
    </div>
</div>
<a href="tel:00914599687" title="" class="btn-call">
    <strong>0914 599 687</strong>
    <span><i class="fa fa-phone" aria-hidden="true"></i></span>
</a>
<div class="modal fade" id="myContact" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content trial-md-ct">
            <button type="button" class="md-close" data-dismiss="modal"><i class="ic ic-close"></i></button>
			<h2 class="title">Thông Tin Của Bạn</h2>
            					<?php if ( dynamic_sidebar('formLienHe') ) : else : endif;  ?>

        </div>
    </div>
</div>
<div class="navigation-mobile-bottom">
    <nav class="mobile-bottom-nav">
        <div class="mobile-bottom-nav__item mobile-bottom-nav__item--active">
            <div class="mobile-bottom-nav__item-content">
                <a id="fcb-phone" class="social bgcolor-twitter pointer txt-center ctn-icon-social-media twitter" href="tel:0914599687" rel="nofollow"><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/vectorpaint.png" alt="phone">
                </a>
            </div>      
        </div>
        <div class="mobile-bottom-nav__item">       
            <div class="mobile-bottom-nav__item-content">
                <a id="fcb-mail" class="social bgcolor-whatsapp pointer txt-center ctn-icon-social-media whatsapp" data-toggle="modal" data-target="#myContact" href="#information-form"><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/chat.png" alt="mail">
                </a>
            </div>
        </div>
        <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
                <a id="fcb-zalo" class="social bgcolor-rss pointer txt-center ctn-icon-social-media email" href="https://zalo.me/0914599687" target="_blank" rel="nofollow"><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/zalo-logo-inkythuatso.png" alt="zalo"></a>
            </div>      
        </div>
        
        <div class="mobile-bottom-nav__item">
            <div class="mobile-bottom-nav__item-content">
                <a id="fcb-facebook" class="social bgcolor-github pointer txt-center ctn-icon-social-media up" href="https://m.me/" target="_blank" rel="nofollow"><img src="https://lasotuvi.com.vn/wp-content/uploads/2022/04/messenger.png" alt="facebook"></a>
            </div>      
        </div>
    </nav>
</div>


<script src="<?php bloginfo('template_directory' ); ?>/js/multislider.js"></script> 


<script>
$("#mega-menu-wrap-primary #mega-menu-primary a.mega-menu-link").hover(
    function () {
        $(this).addClass('mega-toggle-on');
    },
    function () {
        $(this).removeClass('mega-toggle-on');
    }
);
jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 300) {
                    jQuery(".back-totop").fadeIn();
                    $('.header-wrapper').addClass('stuck');
                    
                } else {
                    jQuery(".back-totop").fadeOut();
                    $('.header-wrapper').removeClass('stuck');
                
                }
            });
            jQuery("body").on("click", ".back-totop", function () {
                jQuery("html, body").animate({ scrollTop: 0 }, 800);
                return false;
            });
</script>
<script>
// var distance = $('.header-mobile .navbar').offset().top; 

$(window).scroll(function () {

     if ($(window).scrollTop() > 300) {
         $('.header-mobile .navbar').addClass("affix");

     } else {
         $('.header-mobile .navbar').removeClass("affix");
     }
 });


    const navbarMenu = document.getElementById("menu");
const burgerMenu = document.getElementById("burger");
const bgOverlay = document.getElementById("overlay");

// Show Menu when Click the Burger
// Hide Menu when Click the Overlay
if (burgerMenu && navbarMenu && bgOverlay) {
    burgerMenu.addEventListener("click", () => {
        navbarMenu.classList.toggle("is-active");
        bgOverlay.classList.toggle("is-active");
    });

    bgOverlay.addEventListener("click", () => {
        navbarMenu.classList.toggle("is-active");
        bgOverlay.classList.toggle("is-active");
    });
}

// $(".menu .dropArrow").click(function() {
//     $(".dropArrow").removeClass("active");
//     $(".menu ul ul").slideUp();
//     if (!$(this).next().is(":visible")) {
//         $(this).next().slideDown();
//         $(this).addClass("active");
//     }
// })
function footerToggle() {
    
    $(".link-footer .title").click(function() {
   $(this).toggleClass("btnActive");
    $(this).next().toggleClass("active");
    });
   
}
    footerToggle();
$('.mobile-container .parent').append('<span class="open-menu fa fa-angle-right"></span>');
$('.open-menu').on('click', function (e) {
        e.preventDefault();
        $(this).prev('ul').slideToggle(250);
        $(this).toggleClass('rotate');
    });
</script>
<script>
        $('#mixedSlider').multislider({
            // duration: 10000,
            interval: 8000
            

        });
</script>
<script defer>
        function showheaderdayinfo(dd, mm, yy, element) {
    var currentDay = getLunarDate(dd, mm, yy);
    var lunar = new LunarDate(currentDay.day, currentDay.month, currentDay.year, currentDay.leap, currentDay.jd);
    var dayInfo = getTodayArr();
    var firstHour = getCanHour0(currentDay.jd) + " " + CHI[0];
    var weatherDay = TIETKHI[getSunLongitude(currentDay.jd + 1, 7.0)];
    var strNhuan = dayInfo.lunarLeap != 0 ? '(Nhuận)' : '';
	 // Khai báo đối tượng Date
    var date = new Date();

    // Lấy số thứ tự của ngày hiện tại
    var current_day = date.getDay();

    // Biến lưu tên của thứ
    var day_name = '';

    // Lấy tên thứ của ngày hiện tại
    switch (current_day) {
    case 0:
        day_name = "Chủ nhật";
        break;
    case 1:
        day_name = "Thứ hai";
        break;
    case 2:
        day_name = "Thứ ba";
        break;
    case 3:
        day_name = "Thứ tư";
        break;
    case 4:
        day_name = "Thứ năm";
        break;
    case 5:
        day_name = "Thứ sau";
        break;
    case 6:
        day_name = "Thứ bảy";
}
    let htmlStr = '<div class="last">'+day_name+', '+ dd+"/"+ mm + '/' + yy + '</div>';
    htmlStr += '<div class="last">('+ dayInfo.lunarDay+"/"+ dayInfo.lunarMonth +strNhuan + '/' + dayInfo.lunarYear + ')</div>';

    document.getElementById(element).innerHTML = htmlStr;
}
	showheaderdayinfo(<?php echo date("d")?>,<?php echo date("m")?>,<?php echo date("Y")?>,'time-full');
</script>

<div class="back-totop"><i class="bicon"></i></div>
<?php wp_footer();?>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/62a2f3e57b967b117993cf76/1g568hepg';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>

</html>