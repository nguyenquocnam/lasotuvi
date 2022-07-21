let arrJs = [
	"jquery.js",
    "popper.min.js",
    "bootstrap.min.js", 
    "jquery.mCustomScrollbar.js",
    "select2.min.js",
    "paging/pagination.js",
    "bootstrap-slider.min.js",
    "jquery.lazy.min.js"];
let arrCss = [

    "style.min.css",
	"styleMain.css"
];

arrCss.forEach(addCss);

function addCss(item) {
  let link = document.createElement('link'); 
  
        // set the attributes for link element
           link.rel = 'stylesheet'; 
      
        link.type = 'text/css';
      
        link.href = '/wp-content/themes/tuvicohoc/css/'+item; 
  
        // Get HTML head element to append 
        // link element to it 
        document.getElementsByTagName('HEAD')[0].appendChild(link);
}
arrJs.forEach(dynamicallyLoadScript);
function dynamicallyLoadScript(url) {
    var script = document.createElement("script");  
    script.src = '/wp-content/themes/tuvicohoc/js/'+url;  
   
    document.head.appendChild(script); 
}
window.onload = function() {
	if($('#data_post').val()){

	let data = JSON.parse($('#data_post').val());
	console.log(data.ho_ten=='');
	$.ajax({
                    url : "https://tuvi.vn/la-so", // gửi ajax đến file result.php
                    type : "post", // chọn phương thức gửi là get
                    dateType:"html", // dữ liệu trả về dạng text
                    data : data,
					beforeSend: function() {
						console.log("loading");
					},
                    success : function (result){
						
							result = result.replace("<!DOCTYPE html>", "")
						const parser = new DOMParser();

						const xmlString = result;
						const doc1 = parser.parseFromString(xmlString, "text/html").querySelector('#body-detail-laso .container #wide-left-content ');
						
						let html = doc1;
						html.querySelectorAll(".view-sao-xau")[0].remove();
						html.querySelectorAll(".regular-p")[0].remove();
						if(data.ho_ten!=''){
						html.querySelectorAll(".thien-ban-top table tr")[0].outerHTML='<tr><td width="32%" class="td-title-thien-ban"><p align="left" class="text-title-thien-ban txt-sub-content-bold">Họ tên:</p></td><td><p align="left" class="mb-0"><span class="txt-sub-content letter-spacing-42" id="name-la-so">'+data.ho_ten+'</span></p></td></tr>';
						}else{
						html.querySelectorAll(".thien-ban-top table tr")[0].outerHTML='<tr><td width="32%" class="td-title-thien-ban"><p align="left" class="text-title-thien-ban txt-sub-content-bold">Họ tên:</p></td><td><p align="left" class="mb-0"><span class="txt-sub-content letter-spacing-42" id="name-la-so">'+"lasotuvi.com.vn"+'</span></p></td></tr>';
						}
						

						html.querySelectorAll(".thien-ban-top p")[0].outerHTML = "<h1 style='color:#ef2b2b;font-size: 23px !important;font-weight: bold;'>TỬ VI NGÔ GIA PHÁI</h1>"; 
						html.querySelectorAll(".thien-ban-top p")[0].outerHTML = "<h5 style='font-weight:bold;'>Zalo: 091 459 96 87 </h5><h5 style='font-weight:bold'>Website:<a style='cursor: pointer;' href='https://lasotuvi.com.vn' target='_blank'> https://lasotuvi.com.vn</a></h5><h5 style='font-weight:bold'>Fanpage:<a href='https://www.facebook.com/tuvingogiaphai' target=_blank> facebook.com/tuvingogiaphai</a></h5><hr style='height: 2px;background: blue;width: 60%;margin-left: 20% !important; margin-right: 20% !important;'>"; 
						
						html.querySelectorAll("#binh-giai-tieu-van")[0].outerHTML = "";
						html.querySelectorAll(".thien-ban-top table")[0].style.border = "none";
						html.querySelectorAll(".logo-dia-ban")[0].outerHTML = "";
						html.querySelectorAll(".thien-ban-top")[0].style = "margin-top:22px";
						html.querySelectorAll(".widget-corner-left").forEach(element => element.parentElement.style.marginBottom="10px");
						html.querySelectorAll(".widget-corner-left").forEach(element => element.src="/wp-content/themes/tuvicohoc/images/icon/widget-corner.png");
						html.querySelectorAll(".widget-corner-right").forEach(element => element.src="/wp-content/themes/tuvicohoc/images/icon/widget-corner.png");
						/*html.querySelectorAll(".widget-text").forEach(element => {$(element).before("<span class='leftarrow'></span>");
																				 $(element).after("<span class='leftarrow'></span>");
																				 }
																	 );*/
						                      console.log($("#content_la_so").html(html.outerHTML)) ;
						let arrJs = [
							
							"main.min.js",
							];
						arrJs.forEach(dynamicallyLoadScript);

                        

                  }
                });
			
	}
	
		

};






