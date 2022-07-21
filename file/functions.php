<?php
include('simple_html_dom.php');

/**
 * Load parent theme style
 */
add_action( 'wp_enqueue_scripts', 'jnews_child_enqueue_parent_style' );

function jnews_child_enqueue_parent_style()
{
    wp_enqueue_style( 'jnews-parent-style', get_parent_theme_file_uri('/style.css'));
}


 
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
	$html = '<form class="form-paper-roll" method="post" action="/la-so">
<fieldset style="
    border: 1px solid;
    padding: 10px;
">
<legend>LÁ SỐ TỬ VI</legend>

    <div class="mb-1">
        <label class="txt-sub-content-mid mb-1">Ngày sinh</label>
        <div class="form-row" style="
    display: flex;
">
            <div class="col" style="
    width: 10%;
    /* float: left; */
    margin-right: 10px;
">
                <select name="dayOfDOB" class="form-control form-control-custom txt-sub-content" id="exampleFormControlSelect1" >
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
                    
                    
                </select><div class="chosen-container chosen-container-single" title="" id="exampleFormControlSelect1_chosen" style="width: 100%;/* float: left; */">
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off">
  </div>
  <ul class="chosen-results"><li class="active-result" data-option-array-index="0" style="">1</li><li class="active-result" data-option-array-index="1" style="">2</li><li class="active-result" data-option-array-index="2" style="">3</li><li class="active-result" data-option-array-index="3" style="">4</li><li class="active-result" data-option-array-index="4" style="">5</li><li class="active-result" data-option-array-index="5" style="">6</li><li class="active-result" data-option-array-index="6" style="">7</li><li class="active-result" data-option-array-index="7" style="">8</li><li class="active-result" data-option-array-index="8" style="">9</li><li class="active-result" data-option-array-index="9" style="">10</li><li class="active-result" data-option-array-index="10" style="">11</li><li class="active-result result-selected" data-option-array-index="11" style="">12</li><li class="active-result" data-option-array-index="12" style="">13</li><li class="active-result" data-option-array-index="13" style="">14</li><li class="active-result" data-option-array-index="14" style="">15</li><li class="active-result" data-option-array-index="15" style="">16</li><li class="active-result" data-option-array-index="16" style="">17</li><li class="active-result" data-option-array-index="17" style="">18</li><li class="active-result" data-option-array-index="18" style="">19</li><li class="active-result" data-option-array-index="19" style="">20</li><li class="active-result result-selected" data-option-array-index="20" style="">21</li><li class="active-result" data-option-array-index="21" style="">22</li><li class="active-result" data-option-array-index="22" style="">23</li><li class="active-result" data-option-array-index="23" style="">24</li><li class="active-result" data-option-array-index="24" style="">25</li><li class="active-result" data-option-array-index="25" style="">26</li><li class="active-result" data-option-array-index="26" style="">27</li><li class="active-result" data-option-array-index="27" style="">28</li><li class="active-result" data-option-array-index="28" style="">29</li><li class="active-result" data-option-array-index="29" style="">30</li><li class="active-result" data-option-array-index="30" style="">31</li></ul>
</div></div>
            </div>
            <div class="col-5" style="
    width: 35%;
    margin-right: 10px;
">
                <select name="monthOfDOB" class="form-control form-control-custom txt-sub-content" id="exampleFormControlSelect1" >
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
                    
                </select><div class="chosen-container chosen-container-single" title="" id="exampleFormControlSelect1_chosen" style="width: 100%;">
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off">
  </div>
  <ul class="chosen-results"></ul>
</div></div>
            </div>
            <div class="col-4" style="
    width: 30%;
    margin-right: 10px;
">
                <input type="number" value="1911" min="1911" max="2099" maxlength="4" name="yearOfDOB" class="form-control form-control-custom txt-sub-content">
            </div>
            <div class="row ml-2 mr-0" style="
    width: 30%;
    display: flex;
    /* margin: 10px; */
    padding: 1%;
">
                <div class="custom-control custom-radio custom-control-inline radio-custom content" style="
    width: 50%;
">
                    <input type="radio" id="lichDuongRes" name="calendar" class="custom-control-input" value="true" checked="" style="
    width: 25% !important;
">
                    <label class="custom-control-label" for="lichDuongRes">Lịch dương</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline radio-custom content" style="
    width: 50%;
">
                    <input type="radio" id="lichAmRes" name="calendar" class="custom-control-input" value="false" style="
    width: 25% !important;
">
                    <label class="custom-control-label" for="lichAmRes">Lịch âm</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-1">
        <label class="txt-sub-content-mid mb-0">Giờ sinh</label>
        <div class="form-row">
            <input type="hidden" name="timezone" value="1">
            <input type="hidden" name="loai" value="content">
            <div class="col">
                <select name="hourOfDOB" class="form-control form-control-custom txt-sub-content" id="exampleFormControlSelect1" >
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
                </select><div class="chosen-container chosen-container-single" title="" id="exampleFormControlSelect1_chosen" style="width: 750px;">
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off">
  </div>
  <ul class="chosen-results"></ul>
</div></div>
            </div>
            
        </div>
    </div>
    <div class="mb-1">
        <label class="txt-sub-content-mid mb-0">Giới tính</label>
        <div class="form-row">
            <div class="col" style="
    display: flex;
">
                <div class="custom-control custom-radio custom-control-inline radio-custom content" style="
    display: flex;
    width: 6%;
">
                    <input type="radio" id="male2Res" name="gender" class="custom-control-input" value="true" checked="">
                    <label class="custom-control-label" for="male2Res">Nam</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline radio-custom content" style="
    display: flex;
    width: 6%;
">
                    <input type="radio" id="female2Res" name="gender" class="custom-control-input" value="false">
                    <label class="custom-control-label" for="female2Res">Nữ</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-1">
        <div class="form-row" style="
    display: flex;
">
            <div class="col" style="
    width: 50%;
    margin-right: 10px;
">
                <label class="txt-sub-content-mid mb-0">Năm xem</label>
                <input onkeypress="if(this.value.length==4) return false;" type="number" maxlength="4" min="1911" max="2099" value="2021" name="viewYear" class="form-control form-control-custom txt-sub-content viewYear2">
            </div>
            <div class="col-7" style="
    width: 50%;
">
                <label class="txt-sub-content-mid mb-0">Tháng xem (Âm lịch)</label>
                <select class="form-control form-control-custom txt-sub-content" name="viewMonth" id="exampleFormControlSelect1" >
                    
                    
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
                        
                            <option value="12" selected="">Tháng 12</option>
                </select><div class="chosen-container chosen-container-single" title="" id="exampleFormControlSelect1_chosen" style="width: 100%;">
<div class="chosen-drop">
  <div class="chosen-search">
    <input class="chosen-search-input" type="text" autocomplete="off">
  </div>
  <ul class="chosen-results"></ul>
</div></div>
            </div>
        </div>
    </div>
    <div class="mb-1">
        <div class="form-row">
            
            <button type="submit" class="btn btn-template txt-content col mr-1 ml-1 align-self-end">
            Lập lá số
            </button>
        </div>
    </div>
</fieldset>
</form>';
		return $html;
	}
?>
<?php
 	return $container->outertext;
}
