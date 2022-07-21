<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
function hw_custom_post_type_args( $args, $post_type ) {
    if ( $post_type == "post" ) {
        $args['supports'][]='thumbnail';
    }
    return $args;
}
add_filter( 'register_post_type_args', 'hw_custom_post_type_args', 200, 2 );
function hw_modify_timeline_menu_icon( $post_type, $args ) {
    // Make sure we're only editing the post type we want
    if ( 'post' != $post_type )
        return;
	global $wp_post_types;
    // Set menu icon
    $args->supports = array('thumbnail');
    $wp_post_types[$post_type] = $args;
}
add_action( 'registered_post_type', 'hw_modify_timeline_menu_icon', 10, 2 );
function twentyseventeen_setup() {
    //global $_wp_post_type_features;   
    add_theme_support( 'post-thumbnails' );   
    //$_wp_post_type_features['post']['thumbnail']=1;   
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );
function theme_support_options() {
 $defaults = array(
 'height'      => 90,
 'width'       => 300,
 'flex-height' => false, // <-- setting both flex-height and flex-width to false maintains an aspect ratio
 'flex-width'  => false
 );
 add_theme_support( 'custom-logo', $defaults );
}
// call the function in the hook
add_action( 'after_setup_theme', 'theme_support_options' );
add_theme_support( 'menus' );
  register_nav_menus( array(
    'Main_menu'=>'Main_menu'
  ) );
add_filter('use_block_editor_for_post', '__return_false', 10);
function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );

function showWidget(){
  // register_sidebar(  array('name'=>'Sidebar1','id'=>'footer') );
  register_sidebar(  array('name'=>'veChungToi','id'=>'veChungToi') );
  register_sidebar(  array('name'=>'sidebar1','id'=>'sidebar1') );
  register_sidebar(  array('name'=>'sidebar2','id'=>'sidebar2') );
  register_sidebar(  array('name'=>'homeNote','id'=>'homeNote') );
    register_sidebar(  array('name'=>'listPost','id'=>'listPost') );
  register_sidebar(  array('name'=>'SliderPost','id'=>'SliderPost') );
  register_sidebar(  array('name'=>'boxLink','id'=>'boxLink') );
  register_sidebar(  array('name'=>'QuangCao','id'=>'QuangCao') );
  register_sidebar(  array('name'=>'formLienHe','id'=>'formLienHe') );
  register_sidebar(  array('name'=>'LienKetMangXaHoi','id'=>'LienKetMangXaHoi') );

  register_sidebar(  array('name'=>'homeCategory','id'=>'homeCategory') );
  register_sidebar(  array('name'=>'homeCategoryLinkAll','id'=>'homeCategoryLinkAll') );

  register_sidebar(  array('name'=>'thongTinWebSite','id'=>'thongTinWebSite') );

  // register_sidebar(  array('name'=>'sidebarTinTUc','id'=>'sidebarTinTUc') );
  // register_sidebar(  array('name'=>'formTuVan','id'=>'formTuVan') );
}
add_action( 'widgets_init', 'showWidget' );
add_filter('dynamic_sidebar_params', 'twentytwentychild_edit_widget_func');

function twentytwentychild_edit_widget_func($params) {
    $params[0]['before_title'] =  '<p class="title">' ;
    $params[0]['after_title'] =  '</p>' ;
    return $params;
}

function carrental_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'carrental_logo' ); // Thêm cài đặt cho trình tải lên logo
    // Thêm kiểm soát cho trình tải lên logo (trình tải lên thực tế)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'carrental_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'carrental_logo' ),
        'section'  => 'title_tagline',
        'settings' => 'carrental_logo',
    ) ) );
}
add_action( 'customize_register', 'carrental_customize_register' );
include_once('fullWidget.php');
 
add_shortcode( 'vc_say_hello', 'vc_say_hello_render' );
function vc_say_hello_render() {
    

    if($_POST['loai']=='content'){
?>
<?php
        echo "<div id='content_la_so'></div>";
        
        echo "<input type='hidden' name='data_post' id='data_post' value='".json_encode($_POST)."'>";
        echo "<input type='hidden' name='data_html' id='data_html'>";

?>
<?php
}else{
    $html = '<div class="paper-roll"><img class="page-edge-left" src="'.get_bloginfo( 'template_directory', 'display' ).'/images/page-edge.png"><img class="page-edge-right" src="'.get_bloginfo( 'template_directory', 'display' ).'/images/page-edge.png"><div class="page-roll" style="background-image:url('.get_bloginfo( 'template_directory', 'display' ).'/images/page-roll.png)"></div><div class="title-roll-background text-center" style="background-image:url('.get_bloginfo( 'template_directory', 'display' ).'/images/title-roll-background.png);color: white;">
                        <p class="paper-roll-title">Lập lá số Tử Vi</p>
                    </div><form class="form-paper-roll"  id="form_la_so" method="post" action="'.get_bloginfo( 'url', 'display' ).'/la-so">
                        <div class="mb-1 col-lg-12">
                        <input type="hidden" name="loai" value="content">
                            <label class="txt-sub-content-mid mb-1">Họ Tên</label>
                            <input class="form-control form-control-custom txt-sub-content" name="name" type="text"
                                placeholder="Nhập họ tên...">
                        </div>
                        <div class="mb-1 col-lg-12">
                            <label class="txt-sub-content-mid mb-1">Ngày sinh</label>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <select name="dayOfDOB" class="form-control form-control-custom txt-sub-content"
                                        id="exampleFormControlSelect1">
                                        <option value="1">1</option>
                                        
                                            <option value="2">2</option>
                                        
                                            <option value="3">3</option>
                                        
                                            <option value="4">4</option>
                                        
                                            <option value="5">5</option>
                                        
                                            <option value="6">6</option>
                                        
                                            <option value="7">7</option>
                                        
                                            <option value="8">8</option>
                                        
                                            <option value="9">9</option>
                                        
                                            <option value="10">10</option>
                                        
                                            <option value="11">11</option>
                                        
                                            <option value="12">12</option>
                                        
                                            <option value="13">13</option>
                                        
                                            <option value="14">14</option>
                                        
                                            <option value="15">15</option>
                                        
                                            <option value="16">16</option>
                                        
                                            <option value="17">17</option>
                                        
                                            <option value="18">18</option>
                                        
                                            <option value="19">19</option>
                                        
                                            <option value="20">20</option>
                                        
                                            <option value="21">21</option>
                                        
                                            <option value="22">22</option>
                                        
                                            <option value="23">23</option>
                                        
                                            <option value="24">24</option>
                                        
                                            <option value="25">25</option>
                                        
                                            <option value="26">26</option>
                                        
                                            <option value="27">27</option>
                                        
                                            <option value="28">28</option>
                                        
                                            <option value="29">29</option>
                                        
                                            <option value="30">30</option>
                                        
                                            <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <select name="monthOfDOB" class="form-control form-control-custom txt-sub-content"
                                        id="exampleFormControlSelect1">
                                        <option value="1">Tháng 1</option>
                                        
                                            <option value="2">Tháng 2</option>
                                        
                                            <option value="3">Tháng 3</option>
                                        
                                            <option value="4">Tháng 4</option>
                                        
                                            <option value="5">Tháng 5</option>
                                        
                                            <option value="6">Tháng 6</option>
                                        
                                            <option value="7">Tháng 7</option>
                                        
                                            <option value="8">Tháng 8</option>
                                        
                                            <option value="9">Tháng 9</option>
                                        
                                            <option value="10">Tháng 10</option>
                                        
                                            <option value="11">Tháng 11</option>
                                        
                                            <option value="12">Tháng 12</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <input type="number" value="1911" min="1911" max="2099" maxlength="4" name="yearOfDOB"
                                        class="form-control form-control-custom txt-sub-content" />
                                </div>
                            </div>
                        </div>
                        <div class="mb-1 col-lg-12">
                            <div class="row">
                                <div
                                    class="custom-control custom-radio custom-control-inline radio-custom content col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="radio" id="lichDuongRes" name="calendar" class="custom-control-input"
                                        value="true" checked>
                                    <label class="custom-control-label" for="lichDuongRes">Lịch dương</label>
                                </div>
                                <div
                                    class="custom-control custom-radio custom-control-inline radio-custom content col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="radio" id="lichAmRes" name="calendar" class="custom-control-input"
                                        value="false">
                                    <label class="custom-control-label" for="lichAmRes">Lịch âm</label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-1 col-lg-12">
                            <label class="txt-sub-content-mid mb-0">Giờ sinh</label>
                            <div class="row">
                                
                            <div class="col-lg-12">
                                    <select name="hourOfDOB" class="form-control form-control-custom txt-sub-content"
                                        id="exampleFormControlSelect1">
                                                <option selected="selected" value="1">Tí (23g - 1g)</option>
                                                <option value="2">Sửu (1g - 3g)</option>
                                                <option value="3">Dần (3g - 5g)</option>
                                                <option value="4">Mão (5g - 7g)</option>
                                                <option value="5">Thìn (7g - 9g)</option>
                                                <option value="6">Tị (9g - 11g)</option>
                                                <option value="7">Ngọ (11g - 13g)</option>
                                                <option value="8">Mùi (13g - 15g)</option>
                                                <option value="9">Thân (15g - 17g)</option>
                                                <option value="10">Dậu (17g - 19g)</option>
                                                <option value="11">Tuất (19g - 21g)</option>
                                                <option value="12">Hợi (21g - 23g)</option>
                                    </select>
                                </div>
                                
                            </div>
                            
                        </div>
    
                        <div class="mb-1 col-lg-12">
                            <label class="txt-sub-content-mid mb-0">Giới tính</label>
                            <div class="row">
                                <div
                                    class="custom-control custom-radio custom-control-inline radio-custom content col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="radio" id="male2Res" name="gender" class="custom-control-input"
                                        value="true" checked>
                                    <label class="custom-control-label" for="male2Res">Nam</label>
                                </div>
                                <div
                                    class="custom-control custom-radio custom-control-inline radio-custom content col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <input type="radio" id="female2Res" name="gender" class="custom-control-input"
                                        value="false">
                                    <label class="custom-control-label" for="female2Res">Nữ</label>
                                </div>
                            </div>
                        </div>
    
                        <div class="mb-1 col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <label class="txt-sub-content-mid ">Năm xem</label>
                                    <select class="form-control form-control-custom txt-sub-content" name="viewYear"
                                        id="tao-la-so-nam-xem">
    
                                        <option value="1911"
                                                    >1911</option>
                                        
                                            <option value="1912"
                                                    >1912</option>
                                        
                                            <option value="1913"
                                                    >1913</option>
                                        
                                            <option value="1914"
                                                    >1914</option>
                                        
                                            <option value="1915"
                                                    >1915</option>
                                        
                                            <option value="1916"
                                                    >1916</option>
                                        
                                            <option value="1917"
                                                    >1917</option>
                                        
                                            <option value="1918"
                                                    >1918</option>
                                        
                                            <option value="1919"
                                                    >1919</option>
                                        
                                            <option value="1920"
                                                    >1920</option>
                                        
                                            <option value="1921"
                                                    >1921</option>
                                        
                                            <option value="1922"
                                                    >1922</option>
                                        
                                            <option value="1923"
                                                    >1923</option>
                                        
                                            <option value="1924"
                                                    >1924</option>
                                        
                                            <option value="1925"
                                                    >1925</option>
                                        
                                            <option value="1926"
                                                    >1926</option>
                                        
                                            <option value="1927"
                                                    >1927</option>
                                        
                                            <option value="1928"
                                                    >1928</option>
                                        
                                            <option value="1929"
                                                    >1929</option>
                                        
                                            <option value="1930"
                                                    >1930</option>
                                        
                                            <option value="1931"
                                                    >1931</option>
                                        
                                            <option value="1932"
                                                    >1932</option>
                                        
                                            <option value="1933"
                                                    >1933</option>
                                        
                                            <option value="1934"
                                                    >1934</option>
                                        
                                            <option value="1935"
                                                    >1935</option>
                                        
                                            <option value="1936"
                                                    >1936</option>
                                        
                                            <option value="1937"
                                                    >1937</option>
                                        
                                            <option value="1938"
                                                    >1938</option>
                                        
                                            <option value="1939"
                                                    >1939</option>
                                        
                                            <option value="1940"
                                                    >1940</option>
                                        
                                            <option value="1941"
                                                    >1941</option>
                                        
                                            <option value="1942"
                                                    >1942</option>
                                        
                                            <option value="1943"
                                                    >1943</option>
                                        
                                            <option value="1944"
                                                    >1944</option>
                                        
                                            <option value="1945"
                                                    >1945</option>
                                        
                                            <option value="1946"
                                                    >1946</option>
                                        
                                            <option value="1947"
                                                    >1947</option>
                                        
                                            <option value="1948"
                                                    >1948</option>
                                        
                                            <option value="1949"
                                                    >1949</option>
                                        
                                            <option value="1950"
                                                    >1950</option>
                                        
                                            <option value="1951"
                                                    >1951</option>
                                        
                                            <option value="1952"
                                                    >1952</option>
                                        
                                            <option value="1953"
                                                    >1953</option>
                                        
                                            <option value="1954"
                                                    >1954</option>
                                        
                                            <option value="1955"
                                                    >1955</option>
                                        
                                            <option value="1956"
                                                    >1956</option>
                                        
                                            <option value="1957"
                                                    >1957</option>
                                        
                                            <option value="1958"
                                                    >1958</option>
                                        
                                            <option value="1959"
                                                    >1959</option>
                                        
                                            <option value="1960"
                                                    >1960</option>
                                        
                                            <option value="1961"
                                                    >1961</option>
                                        
                                            <option value="1962"
                                                    >1962</option>
                                        
                                            <option value="1963"
                                                    >1963</option>
                                        
                                            <option value="1964"
                                                    >1964</option>
                                        
                                            <option value="1965"
                                                    >1965</option>
                                        
                                            <option value="1966"
                                                    >1966</option>
                                        
                                            <option value="1967"
                                                    >1967</option>
                                        
                                            <option value="1968"
                                                    >1968</option>
                                        
                                            <option value="1969"
                                                    >1969</option>
                                        
                                            <option value="1970"
                                                    >1970</option>
                                        
                                            <option value="1971"
                                                    >1971</option>
                                        
                                            <option value="1972"
                                                    >1972</option>
                                        
                                            <option value="1973"
                                                    >1973</option>
                                        
                                            <option value="1974"
                                                    >1974</option>
                                        
                                            <option value="1975"
                                                    >1975</option>
                                        
                                            <option value="1976"
                                                    >1976</option>
                                        
                                            <option value="1977"
                                                    >1977</option>
                                        
                                            <option value="1978"
                                                    >1978</option>
                                        
                                            <option value="1979"
                                                    >1979</option>
                                        
                                            <option value="1980"
                                                    >1980</option>
                                        
                                            <option value="1981"
                                                    >1981</option>
                                        
                                            <option value="1982"
                                                    >1982</option>
                                        
                                            <option value="1983"
                                                    >1983</option>
                                        
                                            <option value="1984"
                                                    >1984</option>
                                        
                                            <option value="1985"
                                                    >1985</option>
                                        
                                            <option value="1986"
                                                    >1986</option>
                                        
                                            <option value="1987"
                                                    >1987</option>
                                        
                                            <option value="1988"
                                                    >1988</option>
                                        
                                            <option value="1989"
                                                    >1989</option>
                                        
                                            <option value="1990"
                                                    >1990</option>
                                        
                                            <option value="1991"
                                                    >1991</option>
                                        
                                            <option value="1992"
                                                    >1992</option>
                                        
                                            <option value="1993"
                                                    >1993</option>
                                        
                                            <option value="1994"
                                                    >1994</option>
                                        
                                            <option value="1995"
                                                    >1995</option>
                                        
                                            <option value="1996"
                                                    >1996</option>
                                        
                                            <option value="1997"
                                                    >1997</option>
                                        
                                            <option value="1998"
                                                    >1998</option>
                                        
                                            <option value="1999"
                                                    >1999</option>
                                        
                                            <option value="2000"
                                                    >2000</option>
                                        
                                            <option value="2001"
                                                    >2001</option>
                                        
                                            <option value="2002"
                                                    >2002</option>
                                        
                                            <option value="2003"
                                                    >2003</option>
                                        
                                            <option value="2004"
                                                    >2004</option>
                                        
                                            <option value="2005"
                                                    >2005</option>
                                        
                                            <option value="2006"
                                                    >2006</option>
                                        
                                            <option value="2007"
                                                    >2007</option>
                                        
                                            <option value="2008"
                                                    >2008</option>
                                        
                                            <option value="2009"
                                                    >2009</option>
                                        
                                            <option value="2010"
                                                    >2010</option>
                                        
                                            <option value="2011"
                                                    >2011</option>
                                        
                                            <option value="2012"
                                                    >2012</option>
                                        
                                            <option value="2013"
                                                    >2013</option>
                                        
                                            <option value="2014"
                                                    >2014</option>
                                        
                                            <option value="2015"
                                                    >2015</option>
                                        
                                            <option value="2016"
                                                    >2016</option>
                                        
                                            <option value="2017"
                                                    >2017</option>
                                        
                                            <option value="2018"
                                                    >2018</option>
                                        
                                            <option value="2019"
                                                    >2019</option>
                                        
                                            <option value="2020"
                                                    >2020</option>
                                        
                                            <option value="2021"
                                                    >2021</option>
                                        
                                            <option value="2022"
                                                    selected>2022</option>
                                        
                                            <option value="2023"
                                                    >2023</option>
                                        
                                            <option value="2024"
                                                    >2024</option>
                                        
                                            <option value="2025"
                                                    >2025</option>
                                        
                                            <option value="2026"
                                                    >2026</option>
                                        
                                            <option value="2027"
                                                    >2027</option>
                                        
                                            <option value="2028"
                                                    >2028</option>
                                        
                                            <option value="2029"
                                                    >2029</option>
                                        
                                            <option value="2030"
                                                    >2030</option>
                                        
                                            <option value="2031"
                                                    >2031</option>
                                        
                                            <option value="2032"
                                                    >2032</option>
                                        
                                            <option value="2033"
                                                    >2033</option>
                                        
                                            <option value="2034"
                                                    >2034</option>
                                        
                                            <option value="2035"
                                                    >2035</option>
                                        
                                            <option value="2036"
                                                    >2036</option>
                                        
                                            <option value="2037"
                                                    >2037</option>
                                        
                                            <option value="2038"
                                                    >2038</option>
                                        
                                            <option value="2039"
                                                    >2039</option>
                                        
                                            <option value="2040"
                                                    >2040</option>
                                        
                                            <option value="2041"
                                                    >2041</option>
                                        
                                            <option value="2042"
                                                    >2042</option>
                                        
                                            <option value="2043"
                                                    >2043</option>
                                        
                                            <option value="2044"
                                                    >2044</option>
                                        
                                            <option value="2045"
                                                    >2045</option>
                                        
                                            <option value="2046"
                                                    >2046</option>
                                        
                                            <option value="2047"
                                                    >2047</option>
                                        
                                            <option value="2048"
                                                    >2048</option>
                                        
                                            <option value="2049"
                                                    >2049</option>
                                        
                                            <option value="2050"
                                                    >2050</option>
                                        
                                            <option value="2051"
                                                    >2051</option>
                                        
                                            <option value="2052"
                                                    >2052</option>
                                        
                                            <option value="2053"
                                                    >2053</option>
                                        
                                            <option value="2054"
                                                    >2054</option>
                                        
                                            <option value="2055"
                                                    >2055</option>
                                        
                                            <option value="2056"
                                                    >2056</option>
                                        
                                            <option value="2057"
                                                    >2057</option>
                                        
                                            <option value="2058"
                                                    >2058</option>
                                        
                                            <option value="2059"
                                                    >2059</option>
                                        
                                            <option value="2060"
                                                    >2060</option>
                                        
                                            <option value="2061"
                                                    >2061</option>
                                        
                                            <option value="2062"
                                                    >2062</option>
                                        
                                            <option value="2063"
                                                    >2063</option>
                                        
                                            <option value="2064"
                                                    >2064</option>
                                        
                                            <option value="2065"
                                                    >2065</option>
                                        
                                            <option value="2066"
                                                    >2066</option>
                                        
                                            <option value="2067"
                                                    >2067</option>
                                        
                                            <option value="2068"
                                                    >2068</option>
                                        
                                            <option value="2069"
                                                    >2069</option>
                                        
                                            <option value="2070"
                                                    >2070</option>
                                        
                                            <option value="2071"
                                                    >2071</option>
                                        
                                            <option value="2072"
                                                    >2072</option>
                                        
                                            <option value="2073"
                                                    >2073</option>
                                        
                                            <option value="2074"
                                                    >2074</option>
                                        
                                            <option value="2075"
                                                    >2075</option>
                                        
                                            <option value="2076"
                                                    >2076</option>
                                        
                                            <option value="2077"
                                                    >2077</option>
                                        
                                            <option value="2078"
                                                    >2078</option>
                                        
                                            <option value="2079"
                                                    >2079</option>
                                        
                                            <option value="2080"
                                                    >2080</option>
                                        
                                            <option value="2081"
                                                    >2081</option>
                                        
                                            <option value="2082"
                                                    >2082</option>
                                        
                                            <option value="2083"
                                                    >2083</option>
                                        
                                            <option value="2084"
                                                    >2084</option>
                                        
                                            <option value="2085"
                                                    >2085</option>
                                        
                                            <option value="2086"
                                                    >2086</option>
                                        
                                            <option value="2087"
                                                    >2087</option>
                                        
                                            <option value="2088"
                                                    >2088</option>
                                        
                                            <option value="2089"
                                                    >2089</option>
                                        
                                            <option value="2090"
                                                    >2090</option>
                                        
                                            <option value="2091"
                                                    >2091</option>
                                        
                                            <option value="2092"
                                                    >2092</option>
                                        
                                            <option value="2093"
                                                    >2093</option>
                                        
                                            <option value="2094"
                                                    >2094</option>
                                        
                                            <option value="2095"
                                                    >2095</option>
                                        
                                            <option value="2096"
                                                    >2096</option>
                                        
                                            <option value="2097"
                                                    >2097</option>
                                        
                                            <option value="2098"
                                                    >2098</option>
                                        
                                            <option value="2099"
                                                    >2099</option>
    
    
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <label class="txt-sub-content-mid ">Tháng xem (Âm lịch)</label>
                                    <select class="form-control form-control-custom txt-sub-content" name="viewMonth"
                                        id="exampleFormControlSelect1">
    
                                        <option value="1"
                                                    >
                                                Tháng 1</option>
                                        
                                            <option value="2"
                                                    selected>
                                                Tháng 2</option>
                                        
                                            <option value="3"
                                                    >
                                                Tháng 3</option>
                                        
                                            <option value="4"
                                                    >
                                                Tháng 4</option>
                                        
                                            <option value="5"
                                                    >
                                                Tháng 5</option>
                                        
                                            <option value="6"
                                                    >
                                                Tháng 6</option>
                                        
                                            <option value="7"
                                                    >
                                                Tháng 7</option>
                                        
                                            <option value="8"
                                                    >
                                                Tháng 8</option>
                                        
                                            <option value="9"
                                                    >
                                                Tháng 9</option>
                                        
                                            <option value="10"
                                                    >
                                                Tháng 10</option>
                                        
                                            <option value="11"
                                                    >
                                                Tháng 11</option>
                                        
                                            <option value="12"
                                                    >
                                                Tháng 12</option>
    
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <label class="txt-sub-content-mid "></label>
                                        <button type="submit" class="btn form-control form-control-custom txt-sub-content"
                                    style="background-color: #4a7561;color: #FFF;font-family: \'tuv noh carbone\';">
                                    Lập lá số
                                </button>
                                </div>
                                
                            </div>
                        </div>
                        
                    </form></div>';
        return $html;
    }
?>
<?php
    return $container->outertext;
}


function the_breadcrumb() {
    echo '<div class="bread">';
                echo '<p id="breadcrumbs">';
        if (!is_home()) {
            echo '<span>';
                echo '<span><a href="';
                echo get_option('home');
                echo '">';
                echo 'Trang chủ';
                echo "</a>";
                
                if (is_category() || is_single()){
                    
                        
                        if (is_single()) {
                            echo '<span style="padding: 0 5px;">/</span>';
                        echo '<span>';
                              $thisCat = get_category(get_the_category( )[0]->term_id);
                              $parentCat = get_category($thisCat->parent);
                              if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' / '));
                              echo '<a href="'.get_category_link($thisCat).'">'.$thisCat->name.'</a>';
                            echo '<span style="padding: 0 5px;">/</span>';
                            echo '<span class="breadcrumb_last" aria-current="page">';
                            the_title();
                            echo '</span >';
                                                          echo '</span>';

                        }
                        if(is_category()){
                            echo '<span style="padding: 0 5px;">/</span>';
                        echo '<span>';
                            global $wp_query;
                              $cat_obj = $wp_query->get_queried_object();
                              $thisCat = $cat_obj->term_id;
                              $thisCat = get_category($thisCat);
                              $parentCat = get_category($thisCat->parent);
                              if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' / '));
                              single_cat_title();
                              echo '</span>';
                        }
                        
                }
                

                
                if (is_page()) {
                    echo'<span style="padding: 0 5px;">/</span>';
                        echo the_title();
                        echo'</span>';
                }
                if (is_tag()) {
                    echo '<span style="padding: 0 5px;">/</span>';

                    single_tag_title();
                                            

                }
                
                echo "</span>";
                // var_dump();
                // var_dump($POST);
                if (is_search()) {
                    echo'<span style="padding: 0 5px;">/</span>Kết quả tìm kiếm cho : ';
                    echo get_search_query(  ) ;
                    echo'</span>';}
        }
                        echo '</p>';

            echo '</div>';

}
/**
 * Meta
 */
function init_meta() {
    $options = get_option('init_theme_options');
    if (is_home()) { ?>
<meta name="description" content="<?php echo $options['metadescription']; ?>">
<meta name="keywords" content="<?php echo $options['metakeywords']; ?>">
<meta property="og:url" content="<?php bloginfo('url'); ?>">
<meta property="og:title" content="<?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>">
<meta property="og:description" content="<?php echo $options['metadescription']; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $options['socialsimg']; ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php bloginfo('name'); ?> – <?php bloginfo('description'); ?>">
<meta name="twitter:description" content="<?php echo $options['metadescription']; ?>">
<meta name="twitter:image" content="<?php echo $options['socialsimg']; ?>">
<?php }
    if (is_category()) {
        $cat_title = single_cat_title('', false);
        $cat_name = mb_strtolower($cat_title); $cat_name = str_replace('"', '', $cat_name); $cat_name = str_replace('“', '', $cat_name); $cat_name = str_replace(',', '', $cat_name); $cat_name = str_replace('!', '', $cat_name); $cat_name = str_replace('”', '', $cat_name);
        $category = get_term_by('name', $cat_title, 'category');
        $cat_link = get_category_link($category->term_id);
        $cat_desc = wp_trim_words(category_description(), 25, '...');
        if (!$cat_desc) $cat_desc = $options['metadescription'];
?>
<meta name="description" content="<?php echo $cat_desc; ?>">
<meta name="keywords" content="<?php echo $cat_name . ', ' . $options['metakeywords']; ?>">
<meta property="og:url" content="<?php echo $cat_link; ?>">
<meta property="og:title" content="<?php echo $cat_title; ?> – <?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo $cat_desc; ?>">
<meta property="og:type" content="object">
<meta property="og:image" content="<?php echo $options['socialsimg']; ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php echo $cat_title; ?> – <?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo $cat_desc; ?>">
<meta name="twitter:image" content="<?php echo $options['socialsimg']; ?>">
<?php }
    if (is_tag()) {
        $tag_title = single_tag_title('', false);
        $tag_desc = 'Tag: ' . $tag_title . ' – ' . $options['metadescription'];
        $tag = get_term_by('name', $tag_title, 'post_tag');
        $tag_link = get_tag_link($tag->term_id);
?>
<meta name="description" content="<?php echo $tag_desc; ?>">
<meta name="keywords" content="<?php echo $tag_title . ', ' . $options['metakeywords']; ?>">
<meta property="og:url" content="<?php echo $tag_link; ?>">
<meta property="og:title" content="<?php echo $tag_title; ?> – <?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo $tag_desc; ?>">
<meta property="og:type" content="object">
<meta property="og:image" content="<?php echo $options['socialsimg']; ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php echo $tag_title; ?> – <?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo $tag_desc; ?>">
<meta name="twitter:image" content="<?php echo $options['socialsimg']; ?>">
<?php }
    if (is_month()) {
        $month_title = trim(single_month_title(' ', false));
        $month_name = trim(strtolower($month_title));
        $month_desc = 'Archive: ' . $month_title . ' – ' . $options['metadescription'];
        $archive_year  = get_the_time('Y');
        $archive_month = get_the_time('m');
        $month_link = get_month_link($archive_year, $archive_month);
?>
<meta name="description" content="<?php echo $month_desc; ?>">
<meta name="keywords" content="<?php echo $month_name . ', ' . $options['metakeywords']; ?>">
<meta property="og:url" content="<?php echo $month_link; ?>">
<meta property="og:title" content="<?php echo $month_title; ?> – <?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo $month_desc; ?>">
<meta property="og:type" content="object">
<meta property="og:image" content="<?php echo $options['socialsimg']; ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php echo $month_title; ?> – <?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo $month_desc; ?>">
<meta name="twitter:image" content="<?php echo $options['socialsimg']; ?>">
<?php }
    if (is_author()) {
        $author_title = get_the_author();
        $author_name = mb_strtolower($author_title);
        $author_desc = 'Author: ' . $author_title . ' – ' . $options['metadescription'];
        $author_link = get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename'));
?>
<meta name="description" content="<?php echo $author_desc; ?>">
<meta name="keywords" content="<?php echo $author_name . ', ' . $options['metakeywords']; ?>">
<meta property="og:url" content="<?php echo $author_link; ?>">
<meta property="og:title" content="<?php echo $author_title; ?> – <?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo $author_desc; ?>">
<meta property="og:type" content="object">
<meta property="og:image" content="<?php echo $options['socialsimg']; ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php echo $author_title; ?> – <?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo $author_desc; ?>">
<meta name="twitter:image" content="<?php echo $options['socialsimg']; ?>">
<?php }
    if (is_singular('post')) {
        if (have_posts()) : while (have_posts()) : the_post(); endwhile; endif;
        $title = get_the_title();
        $excerpt = esc_attr(wp_trim_words(get_the_excerpt(), 25, '...'));
        $link = get_the_permalink();
        $cat_name = mb_strtolower($title); $cat_name = str_replace('"', '', $cat_name); $cat_name = str_replace('“', '', $cat_name); $cat_name = str_replace(',', '', $cat_name); $cat_name = str_replace('!', '', $cat_name); $cat_name = str_replace('”', '', $cat_name);
?>
<meta name="description" content="<?php echo $excerpt; ?>">
<meta name="keywords" content="<?php echo $cat_name . ', ' . $options['metakeywords']; ?>">
<meta property="og:url" content="<?php echo $link; ?>">
<meta property="og:title" content="<?php echo $title; ?> – <?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo $excerpt; ?>">
<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
<meta property="og:type" content="article">
<?php
    $posttags = get_the_tags();
    if ($posttags) {
        foreach($posttags as $tag) {
            echo '<meta property="article:tag" content="' . $tag->name . '">';
        }
    }
?>
<meta property="og:image" content="<?php the_post_thumbnail_url('large-thumb'); ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php echo $title; ?> – <?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo $excerpt; ?>">
<meta name="twitter:image" content="<?php the_post_thumbnail_url('large-thumb'); ?>">
<?php }
    if (is_page()) {
        if (have_posts()) : while (have_posts()) : the_post(); endwhile; endif;
        $title = get_the_title();
        $excerpt = esc_attr(wp_trim_words(get_the_excerpt(), 25, '...'));
        $link = get_the_permalink();
        $cat_name = mb_strtolower($title); $cat_name = str_replace('"', '', $cat_name); $cat_name = str_replace('“', '', $cat_name); $cat_name = str_replace(',', '', $cat_name); $cat_name = str_replace('!', '', $cat_name); $cat_name = str_replace('”', '', $cat_name);
?>
<meta name="description" content="<?php echo $excerpt; ?>">
<meta name="keywords" content="<?php echo $cat_name . ', ' . $options['metakeywords']; ?>">
<meta property="og:url" content="<?php echo $link; ?>">
<meta property="og:title" content="<?php echo $title; ?> – <?php bloginfo('name'); ?>">
<meta property="og:description" content="<?php echo $excerpt; ?>">
<meta property="og:type" content="article">
<meta property="og:image" content="<?php echo $options['socialsimg']; ?>">
<meta property="og:locale" content="vi_VN">
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@InitHTML">
<meta name="twitter:title" content="<?php echo $title; ?> – <?php bloginfo('name'); ?>">
<meta name="twitter:description" content="<?php echo $excerpt; ?>">
<meta name="twitter:image" content="<?php echo $options['socialsimg']; ?>">
<?php }
}
?>