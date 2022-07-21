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
"bootstrap.min.css",
    "jquery.mCustomScrollbar.min.css",
    "select2.min.css",
    "bootstrap-slider.min.css",
    "style.min.css",
	"styleMain.css"
];

arrCss.forEach(addCss);

function addCss(item) {
  let link = document.createElement('link'); 
  
        // set the attributes for link element
           link.rel = 'stylesheet'; 
      
        link.type = 'text/css';
      
        link.href = 'wp-content/themes/jnews-child/css/'+item; 
  
        // Get HTML head element to append 
        // link element to it 
        document.getElementsByTagName('HEAD')[0].appendChild(link);
}
arrJs.forEach(dynamicallyLoadScript);
function dynamicallyLoadScript(url) {
    var script = document.createElement("script");  
    script.src = 'wp-content/themes/jnews-child/js/'+url;  
   
    document.head.appendChild(script); 
}
window.onload = function() {
	let data = JSON.parse($('#data_post').val());
	console.log(data);
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
						html.querySelectorAll(".thien-ban-top table tr")[0].remove()
						html.querySelectorAll(".thien-ban-top p")[0].outerHTML = "<h1 style='color:blue;font-size: 30px !important;font-family: 'UTM-Azuki';'>TỬ VI NGÔ GIA PHÁI</h1>"; 
						html.querySelectorAll(".thien-ban-top p")[0].outerHTML = "<h2 style='color:red;'>HOTLINE:<p>0986888704</p></h2><hr style='    height: 2px;background: blue;width: 60%;margin-left: 20% !important; margin-right: 20% !important;'>"; 
						html.querySelectorAll(".thien-ban-top p")[0].outerHTML = "<p class='title-la-so-thien-ban m-b-10' style='color:black;'>Lá số tử vi</p>"; 
						html.querySelectorAll("#binh-giai-tieu-van")[0].outerHTML = "";
						html.querySelectorAll(".thien-ban-top table")[0].style.border = "none";
						html.querySelectorAll(".logo-dia-ban")[0].outerHTML = "";
						html.querySelectorAll(".thien-ban-top")[0].style = "margin-top:50px";

						html.querySelectorAll(".widget-corner-left").forEach(element => element.src="/wp-content/themes/jnews-child/images/icon/widget-corner.png");
						html.querySelectorAll(".widget-corner-right").forEach(element => element.src="/wp-content/themes/jnews-child/images/icon/widget-corner.png");
						
						                      console.log($("#content_la_so").html(html.outerHTML)) ;
						let arrJs = [
							
							"main.min.js",
							];
						arrJs.forEach(dynamicallyLoadScript);

                        

                  }
                });
	
		

};






