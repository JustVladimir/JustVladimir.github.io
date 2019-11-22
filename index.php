<?php
// Query params are:  

require_once dirname(__FILE__) . '/kclick_client.php';
$client = new KClickClient('http://31.31.203.48/api.php?', 't8dsyv5hfzhrxhfwvgtg24s6w1kk6cwd');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output
?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">    	
	<!--metatextblock-->
	<title>Уборка Плюс</title>
	<meta name="description" content="Профессиональная уборка в Киеве и области">	
    <link rel="canonical" href="https://uborkaplus.com.ua/">

	<meta property="og:url" content="https://uborkaplus.com.ua">
	<meta property="og:title" content="Уборка Плюс">
	<meta property="og:description" content="Профессиональная уборка в Киеве и области">
	<meta property="og:type" content="website">
	<meta property="og:image" content="images/noroot_2.png">

		<!--/metatextblock-->

    <meta property="fb:app_id" content="257953674358265">

	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="x-dns-prefetch-control" content="on">
	<link rel="dns-prefetch" href="https://tilda.ws">
	<link rel="dns-prefetch" href="https://static.tildacdn.com">


		
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

	
			<link rel="stylesheet" href="css/tilda-grid-3.0.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/tilda-blocks-2.12.css" type="text/css" media="all">

	<link rel="stylesheet" href="css/tilda-animation-1.0.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/tilda-menusub-1.0.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/tilda-slds-1.4.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/tilda-zoom-2.0.min.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/tilda-popup-1.1.min.css" type="text/css" media="all">


	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/tilda-scripts-2.8.min.js"></script>
	<script src="js/tilda-blocks-2.7.js"></script>

	<script src="js/tilda-animation-1.0.min.js" charset="utf-8"></script>
	<script src="js/tilda-menusub-1.0.min.js" charset="utf-8"></script>
	<script src="js/tilda-slds-1.4.min.js" charset="utf-8"></script>
	<script src="js/hammer.min.js" charset="utf-8"></script>
	<script src="js/tilda-zoom-2.0.min.js" charset="utf-8"></script>
	<script src="js/tilda-forms-1.0.min.js" charset="utf-8"></script>
	<script src="js/typed.min.js" charset="utf-8"></script>

	
	
	
<script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>





</head>

<body class="t-body" style="margin:0;">

	<!--allrecords-->
<div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="518791" data-tilda-page-id="2195464" data-tilda-formskey="a1e54c0b5c1b1f8b323f4d59c450c585">

<div id="rec43102881" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; " data-animationappear="off" data-record-type="360">
<!-- T360 -->




<style type="text/css">
  @media screen and (min-width: 980px) {
  .t-records {
    opacity: 0;
  }
  .t-records_animated {
    -webkit-transition: opacity ease-in-out .5s;
    -moz-transition: opacity ease-in-out .5s;
    -o-transition: opacity ease-in-out .5s;
    transition: opacity ease-in-out .5s;
  }
  .t-records.t-records_visible {
    opacity: 1;
  }
  }
</style>
<script type="text/javascript">
  $(document).ready(function() {
    $(window).bind('pageshow', function(event) {
        if (event.originalEvent.persisted) {
            window.location.reload() 
        }
    });
    
    $("#rec43102881").attr('data-animationappear','off');
    $("#rec43102881").css('opacity','1');
    $('.t-records').addClass('t-records_animated');
    setTimeout(function(){
      $('.t-records').addClass('t-records_visible');
    },200);
  }); 
</script>


<script type="text/javascript">
  $(document).ready(function() { 
    $("button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next), a:not([href*=#],.carousel-control,.t-carousel__control,[href^=#price],[href^=javascript],[href^=mailto],[href^=tel])").click(function(e){
      var goTo = this.getAttribute("href");
        if (goTo && goTo.substring(0,4) == 'tel:' ) {
            return true;
        }
      var target = $(this).attr("target");
      if (target !== "_blank" ) {
        e.preventDefault();
        $(".t-records").removeClass("t-records_visible");
        setTimeout(function(){
           window.location = goTo;
        },500);
      }   
    });
  }); 
</script>



<style type="text/css">
  .t360__bar {
    background-color: #030bff;
  }
</style>
<script type="text/javascript">
$(document).ready(function() { 
  var isSafari = /Safari/.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor);
  if (isSafari) {} else {
    $("body").append('<div class="t360__progress"><div class="t360__bar"></div></div>');
    setTimeout(function(){
      $(".t360__bar").addClass("t360__barprogress");
    },10); 
  }
});
 
  $(window).load(function() {
    $(".t360__bar").removeClass("t360__barprogress");
    $(".t360__bar").addClass("t360__barprogressfinished");
    setTimeout(function(){
      $(".t360__bar").addClass("t360__barprogresshidden");
    },20);
    setTimeout(function(){
      $(".t360__progress").hide();
    },500);
  });
</script>



</div>


<div id="rec42892402" class="r t-rec t-rec_pt_0 t-rec_pb_0 t-screenmin-640px" style="padding-top:0px;padding-bottom:0px; " data-animationappear="off" data-record-type="257" data-screen-min="640px">









<!-- T228 -->
<div id="nav42892402marker"></div>
  <div class="t228__mobile">
    <div class="t228__mobile_container">
      <div class="t228__mobile_text t-name t-name_md" field="text">&nbsp;</div> 
      <div class="t228__burger">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>  
    </div>
  </div>
<div id="nav42892402" class="t228 t228__hidden t228__positionfixed " style="background-color: rgba(252,252,252,1); height:60px; " data-bgcolor-hex="#fcfcfc" data-bgcolor-rgba="rgba(252,252,252,1)" data-navmarker="nav42892402marker" data-appearoffset="" data-bgopacity-two="100" data-menushadow="" data-bgopacity="1" data-bgcolor-rgba-afterscroll="rgba(252,252,252,1)" data-menu-items-align="" data-menu="yes">
    <div class="t228__maincontainer t228__c12collumns" style="height:60px;">
          <div class="t228__padding40px"></div>
          
          <div class="t228__leftside">
                        <div class="t228__leftcontainer">    
                <a href="http://uborkaplus.com.ua" style=""><img src="images/noroot.png" class="t228__imglogo t228__imglogomobile" imgfield="img" style="max-width: 250px;width: 250px; height: auto; display: block;" alt="Logo"></a>            </div>
                      </div>
        
          <div class="t228__centerside ">
                        <div class="t228__centercontainer">
            <ul class="t228__list ">
                        			            <li class="t228__list_item"><a class="t-menu__link-item" href="#rec42892405" style="font-weight:600;letter-spacing:0.5px;text-transform:uppercase;" data-menu-item-number="1">Цены</a>
                            </li>
            			            <li class="t228__list_item"><a class="t-menu__link-item" href="#rec43102636" style="font-weight:600;letter-spacing:0.5px;text-transform:uppercase;" data-menu-item-number="2">Преимущества</a>
                            </li>
            			            <li class="t228__list_item"><a class="t-menu__link-item" href="#rec42892413" style="font-weight:600;letter-spacing:0.5px;text-transform:uppercase;" data-menu-item-number="3">Как заказать</a>
                            </li>
            			            <li class="t228__list_item"><a class="t-menu__link-item" href="#rec42892409" style="font-weight:600;letter-spacing:0.5px;text-transform:uppercase;" data-menu-item-number="4">Отзывы</a>
                            </li>
            			            <li class="t228__list_item"><a class="t-menu__link-item" href="#rec42892415" style="font-weight:600;letter-spacing:0.5px;text-transform:uppercase;" data-menu-item-number="5">Вопросы</a>
                            </li>
                    
                        </ul>
            </div>
                      </div>
          
          <div class="t228__rightside">
                          <div class="t228__rightcontainer">
                                <div class="t228__right_descr" style=""><div style="font-size:16px;" data-customstyle="yes"><a href="tel:+380 111 11 11" style="">+380</a>631398321<br><a href="mailto:mailto:info@uborkaplus.com.ua" style="">info@uborkaplus.com.ua</a><br></div></div>
                                                            
                                        
             </div>
                       </div>
          
          <div class="t228__padding40px"></div>    
  </div>
</div>



<style>
@media screen and (max-width: 980px) {
  #rec42892402 .t228__leftcontainer{
    padding: 20px;
  }
}
@media screen and (max-width: 980px) {
  #rec42892402 .t228__imglogo{
    padding: 20px 0;
  }
}
</style>


<script type="text/javascript">
    
      $(document).ready(function() {
        t228_highlight();
        
                t228_checkAnchorLinks('42892402');
                        
      }); 
    

    
    $(window).resize(function() {
      t228_setWidth('42892402');
    });
    $(window).load(function() {
      t228_setWidth('42892402');
    });
    $(document).ready(function() {
      t228_setWidth('42892402');
    });        
    
 


$(window).resize(function() {
    t228_setBg('42892402');
});
$(document).ready(function() {
    t228_setBg('42892402');
});     




      
        $(document).ready(function() {
            t228_changebgopacitymenu('42892402');
            $(window).bind('scroll', t_throttle(function(){t228_changebgopacitymenu('42892402')}, 200));
        }); 
    
</script>

<script type="text/javascript">
      
        $(document).ready(function() {
            t228_createMobileMenu('42892402');
        }); 
    
</script>

      



<script type="text/javascript">
  $(document).ready(function() {
    setTimeout(function(){
      t_menusub_init('42892402');
    }, 500);
  });
</script>


<style>



@media screen and (max-width: 980px) {
    #rec42892402 .t-menusub__menu .t-menusub__link-item {
        color:#000000 !important;
    }
}



</style>
<!--[if IE 8]>
<style>
#rec42892402 .t228 {
  filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#D9fcfcfc', endColorstr='#D9fcfcfc');
}
</style>
<![endif]-->

</div>


<div id="rec46713612" class="r t-rec t-rec_pt_0 t-rec_pb_0 t-screenmax-640px" style="padding-top:0px;padding-bottom:0px;background-color:#fafafa; " data-animationappear="off" data-record-type="186" data-screen-max="640px" data-bg-color="#fafafa">
<!-- T171 -->
<div class="t171" style="z-index:46713612; top:0px; left:20px; right:; min-height:30px;">
  <a href="/"><div class="t171__title" style="">Звоните:<a href="tel:+380631398321" style="">+380631398321</a><br></div></a></div>
</div>


<div id="rec43109855" class="r t-rec" style=" " data-animationappear="off" data-record-type="205">
<!-- cover -->
	




<div class="t-cover" id="recorddiv43109855" bgimgfield="img" style="height:100vh; background-image:-webkit-linear-gradient(top, #ccc, #777); background-image:-moz-linear-gradient(top, #ccc, #777); background-image:-o-linear-gradient(top, #ccc, #777); background-image:-ms-linear-gradient(top, #ccc, #777); background-image:linear-gradient(top, #ccc, #777); ">

	<div class="t-cover__carrier" id="coverCarry43109855" data-content-cover-id="43109855" data-content-cover-bg="https://static.tildacdn.com/tild6634-3563-4831-b665-613030343238/photo.jpg" data-content-cover-height="100vh" data-content-cover-parallax="fixed" style="background-image:url('images/photo.jpg');height:100vh; background-position:center top;"></div>

    <div class="t-cover__filter" style="height:100vh;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -o-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));background-image: linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.70));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#4c000000', endColorstr='#4c000000');"></div>

	<div class="t-container">
        <div class="t-width t-width_12" style="margin:0 auto;">
			<div class="t-cover__wrapper t-valign_middle" style="height:100vh; position: relative;z-index:1;">
                <div class="t182">
                  <div data-hook-content="covercontent">
                    <div class="t182__wrapper">
                      <div class="t182__title t-title t-title_xl" style="" field="title"><div style="font-size:62px;" data-customstyle="yes">Мы профессионалы в |</div></div>                      <div class="t182__descr t-descr t-descr_lg" style="" field="descr">Профессиональная уборка по доступной цене</div>                                            <div class="t182__buttons">
                            <a href="#popup:myform" target="" class="t-btn js-click-stat " data-tilda-event-name="/tilda/click/rec43109855/button1" style="color:#fcfcfc;background-color:#73b6e6;border-radius:100px; -moz-border-radius:100px; -webkit-border-radius:100px;"><table style="width:100%; height:100%;"><tr><td>Расчитать стоимость</td></tr></table></a>                            <a href="#rec42892405" target="" class="t-btn  " style="color:#ffffff;border:2px solid #73b6e6;border-radius:100px; -moz-border-radius:100px; -webkit-border-radius:100px;"><table style="width:100%; height:100%;"><tr><td>Наши услуги</td></tr></table></a>                      </div>
                                          </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- arrow -->
  <div class="t-cover__arrow"><div class="t-cover__arrow-wrapper t-cover__arrow-wrapper_animated"><div class="t-cover__arrow_mobile"><svg class="t-cover__arrow-svg" x="0px" y="0px" width="38.417px" height="18.592px" viewbox="0 0 38.417 18.592" style="enable-background:new 0 0 38.417 18.592;"><g><path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"/></g></svg></div></div></div>
  <!-- arrow -->
  

</div>
    
<style>

#rec43109855 .t-btn[data-btneffects-first],
#rec43109855 .t-btn[data-btneffects-second],
#rec43109855 .t-submit[data-btneffects-first],
#rec43109855 .t-submit[data-btneffects-second] {
	position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}





</style>



<script type="text/javascript">

$(document).ready(function() {
	

	

});

</script>
</div>


<div id="rec43102636" class="r t-rec t-rec_pt_0" style="padding-top:0px;background-color:#73b6e6; " data-record-type="490" data-bg-color="#73b6e6">
<!-- t490 -->





<div class="t490">

		<div class="t-section__container t-container">
		<div class="t-col t-col_12">
			<div class="t-section__topwrapper t-align_center">
				<div class="t-section__title t-title t-title_xs" field="btitle"><div style="color:#fcfcfc;" data-customstyle="yes">Почему мы вам понравимся?</div></div>							</div>
		</div>
	</div>
		
<div class="t-container">
  
      <div class="t490__col t-col t-col_4 t-align_center t-item">
    
    <img src="images/time.png" class="t490__img  t-img" imgfield="li_img__1476978617855" style="width:80px;">
    <div class="t490__wrappercenter ">
      <div class="t-heading t-heading_md" style="color:#ffffff;" field="li_title__1476978617855">Мы команда профессионалов</div>      <div class="t-descr t-descr_xs" style="color:#ffffff;" field="li_descr__1476978617855">Ваше помещение будет убирать бригада клинеров с опытом профессиональной уборки от 3 лет.</div>    </div>
      </div>

  
      <div class="t490__col t-col t-col_4 t-align_center t-item">
    
    <img src="images/uborka_pod_kluch.png" class="t490__img  t-img" imgfield="li_img__1476978655843" style="width:80px;">
    <div class="t490__wrappercenter ">
      <div class="t-heading t-heading_md" style="color:#ffffff;" field="li_title__1476978655843">Убираем «Под Ключ»</div>      <div class="t-descr t-descr_xs" style="color:#ffffff;" field="li_descr__1476978655843">Вам не нужно ничего предоставлять. Мы привозим с собой профессиональную технику, инвентарь b моющие средства.</div>    </div>
      </div>

  
      <div class="t490__col t-col t-col_4 t-align_center t-item">
    
    <img src="images/vacuum.png" class="t490__img  t-img" imgfield="li_img__1476978778074" style="width:80px;">
    <div class="t490__wrappercenter ">
      <div class="t-heading t-heading_md" style="color:#ffffff;" field="li_title__1476978778074">Профессиональное оборудование <br></div>      <div class="t-descr t-descr_xs" style="color:#ffffff;" field="li_descr__1476978778074">Используем профессиональную технику Karcher и Numatic и профессиональный инвентарь Vileda и Vermop.</div>    </div>
      </div>

  
      <div class="t-clear t490__separator" style="margin-bottom:15px;"></div>
    <div class="t490__col t-col t-col_4 t-align_center t-item">
    
    <img src="images/perfect_cleaning.png" class="t490__img  t-img" imgfield="li_img__1476978737724" style="width:80px;">
    <div class="t490__wrappercenter ">
      <div class="t-heading t-heading_md" style="color:#ffffff;" field="li_title__1476978737724">100% Качество</div>      <div class="t-descr t-descr_xs" style="color:#ffffff;" field="li_descr__1476978737724">Мы уверены в качестве нашего сервиса. Если Вам не понравится уборка, мы уберем повторно БЕСПЛАТНО!</div>    </div>
      </div>

  
      <div class="t490__col t-col t-col_4 t-align_center t-item">
    
    <img src="images/deshevle_net.png" class="t490__img  t-img" imgfield="li_img__1476978621977" style="width:80px;">
    <div class="t490__wrappercenter ">
      <div class="t-heading t-heading_md" style="color:#ffffff;" field="li_title__1476978621977">Дешевле НЕТ</div>      <div class="t-descr t-descr_xs" style="color:#ffffff;" field="li_descr__1476978621977">Заказывая у нас Вы получаете профессиональную уборку по самой низкой цене.</div>    </div>
      </div>

  
      <div class="t490__col t-col t-col_4 t-align_center t-item">
    
    <img src="images/eco_cleaning.png" class="t490__img  t-img" imgfield="li_img__1476978755814" style="width:80px;">
    <div class="t490__wrappercenter ">
      <div class="t-heading t-heading_md" style="color:#ffffff;" field="li_title__1476978755814">Эко-химия</div>      <div class="t-descr t-descr_xs" style="color:#ffffff;" field="li_descr__1476978755814">Во время уборки применяются только сертифицированные, безвредные для жизни и здоровья моющие средства.</div>    </div>
      </div>

  

</div>

	


</div>
</div>


<div id="rec42892405" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;background-color:#efefef; " data-animationappear="off" data-record-type="608" data-bg-color="#efefef">
<!-- T608 -->

  








<div class="t608">
  		<div class="t-section__container t-container">
		<div class="t-col t-col_12">
			<div class="t-section__topwrapper t-align_center">
				<div class="t-section__title t-title t-title_xs" field="btitle">Наши услуги:</div>							</div>
		</div>
	</div>
		  <div class="t-container">
                                                                                                        
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img" data-original="https://static.tildacdn.com/tild3964-6534-4166-a137-333231383430/uborkaposleremonta1.jpg" style="background-image: url('images/uborkaposleremonta1.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title">Уборка после ремонта</div>                <div class="t608__price t-name t-name_md" style="" field="price">от 30 грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr">Комплексная уборка за 1 день. Полностью удаляем строительную пыль. Ликвидируем следы клея, шпаклевки, силикона. Предоставим профессиональний клининг после ремонта.<br></div>        <a href="#popup:myform" target="_blank" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
                                                                                                    
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img2" data-original="https://static.tildacdn.com/tild6537-3861-4937-b765-383134646466/__.jpg" style="background-image: url('images/__.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title2">Генеральная уборка помещений<br></div>                <div class="t608__price t-name t-name_md" style="" field="price2">от 25 грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr2">Всего за день приведем Ваше помещение в идеальное состояние. Отодвинем мебель, протрем все труднодоступные места. Уберем весь жир на кухне. Сделаем дезинфекцию санузлов.</div>        <a href="#popup:myform" target="" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
                                                                                                    
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img3" data-original="https://static.tildacdn.com/tild6633-6533-4834-a638-643064343536/___.jpg" style="background-image: url('images/____2.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title3">Уборка после пожара<br></div>                <div class="t608__price t-name t-name_md" style="" field="price3">от 40  грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr3">Ликвидируем последствия пожара. Удалим следы гари на полу, стенах, потолке и предметах интерьера. Сделаем химчистку. Удалим запах и подготовим помещение к ремонту.</div>        <a href="#popup:myform" target="" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
                                                                                                    
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img4" data-original="https://static.tildacdn.com/tild3062-6561-4963-a530-623065316261/___.jpg" style="background-image: url('images/____4.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title4">Химчистка мягкой мебели</div>                <div class="t608__price t-name t-name_md" style="" field="price4">от 150 грн</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr4">Ваш диван потерял цвет? На кресле пятно, а в матрасе пылевые клещи? Не проблема. Мы с легкостью выведем все пятна и вернем вашу мебель к жизни.</div>        <a href="#popup:myform" target="" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
      </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
      t608_setHeight('42892405');
    });

</script>
   
</div>


<div id="rec43115220" class="r t-rec t-rec_pt_15 t-rec_pb_15" style="padding-top:15px;padding-bottom:15px;background-color:#efefef; " data-animationappear="off" data-record-type="608" data-bg-color="#efefef">
<!-- T608 -->

  








<div class="t608">
  		  <div class="t-container">
                                                                                                        
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img" data-original="https://static.tildacdn.com/tild3665-6237-4034-b162-303863636166/___.jpg" style="background-image: url('images/____1.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title">Химчистка ковров и ковролина <br></div>                <div class="t608__price t-name t-name_md" style="" field="price">от 50  грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr">Ваш ковер или ковролин снова станут как новые. Выводим застарелые загрязнения и уничтожим пылевые клещи и другие бактерии, которые живут в ковре и ковролине.<br></div>        <a href="#popup:myform" target="_blank" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
                                                                                                    
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img2" data-original="https://static.tildacdn.com/tild6630-3366-4161-b231-343539333066/___.jpg" style="background-image: url('images/___.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title2">Мытье окон и витрин<br></div>                <div class="t608__price t-name t-name_md" style="" field="price2"> от 35 грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr2">Помоем окна после ремонта. Удалим все наклейки. Снимем скотч с оконных рам. Натрём стекло до блеска. Очистим оконные рамы. Также выполняем сезонное мытье окон.</div>        <a href="#popup:myform" target="" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
                                                                                                    
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img3" data-original="https://static.tildacdn.com/tild3931-3235-4536-b462-656338313161/___.jpg" style="background-image: url('images/____3.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title3">Уборка офисов и помещений<br></div>                <div class="t608__price t-name t-name_md" style="" field="price3">от 20 грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr3">Уборка офисов и коммерческих помещений на регулярной и разовой основе. Удобная для Вас форма расчета. Весь перечень клининговых услуг на аутсорсинге.<br></div>        <a href="#popup:myform" target="" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
                                                                                                    
            <div class="t608__col t-col t-col_3">
        <div class="t608__bgimg t-margin_auto t-bgimg" data-image-width="260" data-image-height="120" bgimgfield="img4" data-original="https://static.tildacdn.com/tild3464-3136-4438-b865-666630393734/__.jpg" style="background-image: url('images/___2.jpg');"></div>      <div class="t608__textwrapper t-align_center">
        <div class="t608__title t-heading t-heading_xs" style="" field="title4">Другие услуги уборки</div>                <div class="t608__price t-name t-name_md" style="" field="price4">от 15 грн/м²</div>        <div class="t608__descr t-descr t-descr_xs" style="" field="descr4">Чистка бассейнов. Полировки мебели и пола. Промышленный альпинизм. Уборка ресторанов и кафе. Уборка территории. Уборка фитнес клубов, яхт, самолетов, автобусов и т.п.</div>        <a href="#popup:myform" target="" class="t608__btn t-btn t-btn_sm" style="color:#ffffff;background-color:#73b6e6;border-radius:3px; -moz-border-radius:3px; -webkit-border-radius:3px;"><table style="width:100%; height:100%;"><tr><td>Узнать цены</td></tr></table></a>      </div>
    </div>
     
      </div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
      t608_setHeight('43115220');
    });

</script>
   
</div>


<div id="rec42892409" class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:15px;background-color:#73b6e6; " data-record-type="529" data-bg-color="#73b6e6">
<!-- t529 -->





<div class="t529">
		<div class="t-section__container t-container">
		<div class="t-col t-col_12">
			<div class="t-section__topwrapper t-align_center">
				<div class="t-section__title t-title t-title_xs" field="btitle"><div style="color:#fcfcfc;" data-customstyle="yes">Отзывы наших клиентов</div></div>							</div>
		</div>
	</div>
		  <div class="t529__container t-container">
                                    <div class="t529__col t-col t-col_6">
                <div class="t529__bubble t529__bubble_left" style=" ">
          <div class="t529__text t-text t-text_sm" field="li_text__1478014691630" style=" ">Когда нужна уборка после ремонта в Киеве, обращаюсь в "Уборку +". Специалисты справляются даже со снятием устаревшего скотча с оконных рам. <br> Рекомендую всем кому нужно убрать после ремонта квартиру. Отдельное спасибо за программу лояльности. <br></div>          
        </div>          
        <div class="t529__bubble-tail" style=""></div>
                <div class="t529__name-wrapper">
          <div class="t-cell">
          <div class="t529__bgimg t-img" data-original="https://static.tildacdn.com/tild3962-3030-4736-b934-393431656133/images.jpg" bgimgfield="li_img__1478014691630" style=" background-image: url('images/images.jpg');"></div>          </div>
          <div class="t-cell">
            <div class="t529__name t-name t-name_xs" field="li_title__1478014691630" style="  ">Андрей Ковальчук</div>            <div class="t529__descr t-descr t-descr_xxs" field="li_descr__1478014691630" style="  ">Архитектор</div>          
                      
          </div>
        </div>                  
      </div>
                                        <div class="t529__col t-col t-col_6">
                <div class="t529__bubble t529__bubble_left" style=" ">
          <div class="t529__text t-text t-text_sm" field="li_text__1478014727987" style=" ">Спасибо за качественную уборку квартиры после ремонта. Отдельное спасибо Олегу и Маше, вы сделали все даже лучше, чем мы представляли себе. Ребята помогли отчистить межплиточные швы от затирки. Мы с женой убедились в качестве услуги уборки после строителей.</div>          
        </div>          
        <div class="t529__bubble-tail" style=""></div>
                <div class="t529__name-wrapper">
          <div class="t-cell">
          <div class="t529__bgimg t-img" data-original="https://static.tildacdn.com/tild3135-3335-4134-b162-623537663066/carlyraehobbins33134.jpg" bgimgfield="li_img__1478014727987" style=" background-image: url('images/carlyraehobbins33134.jpg');"></div>          </div>
          <div class="t-cell">
            <div class="t529__name t-name t-name_xs" field="li_title__1478014727987" style="  ">Дмитрий</div>            <div class="t529__descr t-descr t-descr_xxs" field="li_descr__1478014727987" style="  ">Бизнесмен</div>          
                      
          </div>
        </div>                  
      </div>
                                  <div class="t-clear t529__separator" style=""></div>
                  <div class="t529__col t-col t-col_6">
                <div class="t529__bubble t529__bubble_left" style=" ">
          <div class="t529__text t-text t-text_sm" field="li_text__1478014761774" style=" ">Купили квартиру на вторичном рынке. Думала придется неделю приводить ее в порядок. К счастью клинеры "Уборка +" справились с этой задачей всего за день. Особое спасибо за диван и кресло. Мы уже собирались их выбрасывать.</div>          
        </div>          
        <div class="t529__bubble-tail" style=""></div>
                <div class="t529__name-wrapper">
          <div class="t-cell">
          <div class="t529__bgimg t-img" data-original="https://static.tildacdn.com/tild3735-3638-4264-b532-613762363535/u2cZ4fbnfD0.jpg" bgimgfield="li_img__1478014761774" style=" background-image: url('images/u2cZ4fbnfD0.jpg');"></div>          </div>
          <div class="t-cell">
            <div class="t529__name t-name t-name_xs" field="li_title__1478014761774" style="  ">Мария Нестерук</div>            <div class="t529__descr t-descr t-descr_xxs" field="li_descr__1478014761774" style="  ">Домохозяйка</div>          
                      
          </div>
        </div>                  
      </div>
                                        <div class="t529__col t-col t-col_6">
                <div class="t529__bubble t529__bubble_left" style=" ">
          <div class="t529__text t-text t-text_sm" field="li_text__1517157964848" style=" ">Команда рабочих делала ремонт в нашем офисе. После них остался хаос. Следы краски, шпаклевки, затирки были повсюду. Спасибо бригаде Алексея за такую кропотливую работу. Работники буквально по сантиметру проходили пол. Убрали отлично. Директор был в восторге от проделанной работы. Если нужна уборка офисов, рекомендую заказать услугу в этой компании.<br></div>          
        </div>          
        <div class="t529__bubble-tail" style=""></div>
                <div class="t529__name-wrapper">
          <div class="t-cell">
          <div class="t529__bgimg t-img" data-original="https://static.tildacdn.com/tild3732-3737-4064-b066-383961373936/images.png" bgimgfield="li_img__1517157964848" style=" background-image: url('images/images.png');"></div>          </div>
          <div class="t-cell">
            <div class="t529__name t-name t-name_xs" field="li_title__1517157964848" style="  ">Гаврилов Сергей</div>            <div class="t529__descr t-descr t-descr_xxs" field="li_descr__1517157964848" style="  ">Заместитель директора</div>          
                      
          </div>
        </div>                  
      </div>
            </div>
	

</div>


<style>
    .t-review-social-links {
        line-height: 0px;
    }

    .t-review-social-links__wrapper {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
            -ms-flex-align: center;
                align-items: center;
        -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        width: auto;
    }

    .t-review-social-links {
        margin-top: 15px;
    }

    .t-review-social-links__item {
        padding: 0px 4px;
    }

    .t-review-social-links__item svg {
        width: 20px;
        height: 20px;
    }

    .t-review-social-links__wrapper_round .t-review-social-links__item svg {
        width: 23px;
        height: 23px;
    }

    .t-review-social-links__item:first-child {
        padding-left: 0px;
    }


    @media screen and (max-width: 960px) {
        .t-review-social-links__item {
            margin-bottom: 3px;
        }
    }


    @media screen and (max-width: 640px) {
        .t-review-social-links {
            margin-top: 13px;
        }

        .t-review-social-links__item {
            padding: 0px 3px;
        }

        .t-review-social-links__item svg {
            width: 17px;
            height: 17px;
        }

        .t-review-social-links__wrapper_round .t-review-social-links__item svg {
            width: 20px;
            height: 20px;
        }
    }
</style>



<script>

    function t_reviews_social_init(recid){
      var rec = $('#rec' + recid);
      var social = rec.find('.t-review-social-links');

      if (social !== 'undefined' && social.length > 0) {
          social.each(function() {
              var $this = $(this);
              var socialAttr = $this.attr('data-social-links');
              var socialWrapper = $this.find('.t-review-social-links__wrapper');
              var links;
              $this.removeAttr('data-social-links');
              if (typeof socialAttr !== 'undefined') {
                  links = socialAttr.split(',');
                  links.forEach(function(item) {
                      t_reviews_social_add_item(item, socialWrapper);
                  });
              }
          });
      }
    }


    function t_reviews_social_add_item(item, socialWrapper) {
        var fill = socialWrapper.attr('data-social-color') || '#000000';
        var fb = '';
            fb = '<div class="t-review-social-links__item">';
            fb += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                fb += '<svg class="t-review-social-links__svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve" fill="' + fill + '"><desc>Facebook</desc><path d="M47.761,24c0,13.121-10.638,23.76-23.758,23.76C10.877,47.76,0.239,37.121,0.239,24c0-13.124,10.638-23.76,23.764-23.76C37.123,0.24,47.761,10.876,47.761,24 M20.033,38.85H26.2V24.01h4.163l0.539-5.242H26.2v-3.083c0-1.156,0.769-1.427,1.308-1.427h3.318V9.168L26.258,9.15c-5.072,0-6.225,3.796-6.225,6.224v3.394H17.1v5.242h2.933V38.85z"></path></svg>';
            } else {
                fb += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M21.1 7.8C22.5 6.5 24.5 6 26.4 6h6v6.3h-3.9c-.8-.1-1.6.6-1.8 1.4v4.2h5.7c-.1 2-.4 4.1-.7 6.1h-5v18h-7.4V24h-3.6v-6h3.6v-5.9c.1-1.7.7-3.3 1.8-4.3z"/></svg>';
            }
            fb += '</a>';
            fb += '</div>';

        var twi = '';
            twi += '<div class="t-review-social-links__item">';
            twi += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                twi += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48" fill="' + fill + '"><path d="M47.762 24c0 13.121-10.639 23.76-23.761 23.76S.24 37.121.24 24C.24 10.876 10.879.24 24.001.24S47.762 10.876 47.762 24m-9.731-11.625a12.148 12.148 0 0 1-3.87 1.481 6.08 6.08 0 0 0-4.455-1.926 6.095 6.095 0 0 0-6.093 6.095c0 .478.054.941.156 1.388a17.302 17.302 0 0 1-12.559-6.367 6.066 6.066 0 0 0-.825 3.064 6.088 6.088 0 0 0 2.711 5.07 6.075 6.075 0 0 1-2.761-.762v.077c0 2.951 2.1 5.414 4.889 5.975a6.079 6.079 0 0 1-2.752.106 6.104 6.104 0 0 0 5.692 4.232 12.226 12.226 0 0 1-7.567 2.607c-.492 0-.977-.027-1.453-.084a17.241 17.241 0 0 0 9.34 2.736c11.209 0 17.337-9.283 17.337-17.337 0-.263-.004-.527-.017-.789a12.358 12.358 0 0 0 3.039-3.152 12.138 12.138 0 0 1-3.498.958 6.089 6.089 0 0 0 2.686-3.372"/></svg>';
            } else {
                twi += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M41.8 12.7c-1.3.6-2.8 1-4.2 1.1 1.5-1 2.6-2.3 3.2-4-1.5.8-2.9 1.5-4.7 1.8-1.3-1.5-3.2-2.3-5.3-2.3-4 0-7.3 3.2-7.3 7.3 0 .6 0 1.1.2 1.6-6-.3-11.3-3.2-15.1-7.6-.6 1.1-1 2.3-1 3.7 0 2.6 1.3 4.7 3.2 6-1.1 0-2.3-.3-3.2-1v.2c0 3.6 2.4 6.5 5.8 7.1-.6.2-1.3.3-1.9.3-.5 0-1 0-1.3-.2 1 2.9 3.6 5 6.8 5-2.4 1.9-5.7 3.1-9.1 3.1-.6 0-1.1 0-1.8-.2 3.2 2.1 7 3.2 11.2 3.2 13.4 0 20.7-11 20.7-20.7v-1c1.7-.7 2.8-2 3.8-3.4z"/></svg>';
            }
            twi += '</a>';
            twi += '</div>';

        var vk = '';
            vk += '<div class="t-review-social-links__item">';
            vk += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                vk += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48" fill="' + fill + '"><path d="M47.761 24c0 13.121-10.639 23.76-23.76 23.76C10.878 47.76.239 37.121.239 24 .239 10.877 10.878.24 24.001.24c13.121 0 23.76 10.637 23.76 23.76m-12.502 4.999c-2.621-2.433-2.271-2.041.89-6.25 1.923-2.562 2.696-4.126 2.45-4.796-.227-.639-1.64-.469-1.64-.469l-4.71.029s-.351-.048-.609.106c-.249.151-.414.505-.414.505s-.742 1.982-1.734 3.669c-2.094 3.559-2.935 3.747-3.277 3.524-.796-.516-.597-2.068-.597-3.171 0-3.449.522-4.887-1.02-5.259-.511-.124-.887-.205-2.195-.219-1.678-.016-3.101.007-3.904.398-.536.263-.949.847-.697.88.31.041 1.016.192 1.388.699.484.656.464 2.131.464 2.131s.282 4.056-.646 4.561c-.632.347-1.503-.36-3.37-3.588-.958-1.652-1.68-3.481-1.68-3.481s-.14-.344-.392-.527c-.299-.222-.722-.298-.722-.298l-4.469.018s-.674-.003-.919.289c-.219.259-.018.752-.018.752s3.499 8.104 7.573 12.23c3.638 3.784 7.764 3.36 7.764 3.36h1.867s.566.113.854-.189c.265-.288.256-.646.256-.646s-.034-2.512 1.129-2.883c1.15-.36 2.624 2.429 4.188 3.497 1.182.812 2.079.633 2.079.633l4.181-.056s2.186-.136 1.149-1.858c-.197-.139-.715-1.269-3.219-3.591"/></svg>';
            } else {
                vk += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M41.2 22.2c.6-.8 1.1-1.5 1.5-2 2.7-3.5 3.8-5.8 3.5-6.8l-.2-.2c-.1-.1-.3-.3-.7-.4-.4-.1-.9-.1-1.5-.1h-7.2c-.2 0-.3 0-.3.1 0 0-.1 0-.1.1v.1c-.1 0-.2.1-.3.2-.1.1-.2.2-.2.4-.7 1.9-1.5 3.6-2.5 5.2-.6 1-1.1 1.8-1.6 2.5s-.9 1.2-1.2 1.5c-.3.3-.6.6-.9.8-.2.3-.4.4-.5.4-.1 0-.3-.1-.4-.1-.2-.1-.4-.3-.5-.6-.1-.2-.2-.5-.3-.9 0-.4-.1-.7-.1-.9v-4c0-.7 0-1.2.1-1.6v-1.3c0-.4 0-.8-.1-1.1-.1-.3-.1-.5-.2-.7-.1-.2-.3-.4-.5-.6-.2-.1-.5-.2-.8-.3-.8-.2-1.9-.3-3.1-.3-2.9 0-4.7.2-5.5.6-.3.2-.6.4-.9.7-.3.3-.3.5-.1.6.9.1 1.6.5 2 1l.1.3c.1.2.2.6.3 1.1.1.5.2 1.1.2 1.7.1 1.1.1 2.1 0 2.9-.1.8-.1 1.4-.2 1.9-.1.4-.2.8-.3 1.1-.1.3-.2.4-.3.5 0 .1-.1.1-.1.1-.1-.1-.4-.1-.6-.1-.2 0-.5-.1-.8-.3-.3-.2-.6-.5-1-.9-.3-.4-.7-.9-1.1-1.6-.4-.7-.8-1.5-1.3-2.4l-.4-.7c-.2-.4-.5-1.1-.9-1.9-.4-.8-.8-1.6-1.1-2.4-.1-.3-.3-.6-.6-.7l-.1-.1c-.1-.1-.2-.1-.4-.2s-.3-.1-.5-.2H3.2c-.6 0-1.1.1-1.3.4l-.1.1c0 .1-.1.2-.1.4s0 .4.1.6c.9 2.2 1.9 4.3 3 6.3s2 3.6 2.8 4.9c.8 1.2 1.6 2.4 2.4 3.5.8 1.1 1.4 1.8 1.7 2.1.3.3.5.5.6.7l.6.6c.4.4.9.8 1.6 1.3.7.5 1.5 1 2.4 1.5.9.5 1.9.9 3 1.2 1.2.3 2.3.4 3.4.4H26c.5 0 .9-.2 1.2-.5l.1-.1c.1-.1.1-.2.2-.4s.1-.4.1-.6c0-.7 0-1.3.1-1.8s.2-.9.4-1.2c.1-.3.3-.5.5-.7.2-.2.3-.3.4-.3.1 0 .1-.1.2-.1.4-.1.8 0 1.3.4s1 .8 1.4 1.3c.4.5 1 1.1 1.6 1.8.6.7 1.2 1.2 1.6 1.5l.5.3c.3.2.7.4 1.2.5.5.2.9.2 1.3.1l5.9-.1c.6 0 1-.1 1.4-.3.3-.2.5-.4.6-.6.1-.2.1-.5 0-.8-.1-.3-.1-.5-.2-.6-.1-.1-.1-.2-.2-.3-.8-1.4-2.2-3.1-4.4-5.1-1-.9-1.6-1.6-1.9-1.9-.5-.6-.6-1.2-.3-1.9.3-.5 1-1.5 2.2-3z"/></svg>';
            }
            vk += '</a>';
            vk += '</div>';

        var ok = '';
            ok += '<div class="t-review-social-links__item">';
            ok += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                ok += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="' + fill + '"><path d="M15.001 29.997C6.715 29.997 0 23.28 0 14.997 0 6.714 6.715 0 15.001 0 23.282-.001 30 6.713 30 14.998c0 8.283-6.716 14.999-14.998 14.999zM15 9.163c.986 0 1.787.803 1.787 1.787 0 .987-.801 1.788-1.787 1.788a1.788 1.788 0 0 1 0-3.574zm4.317 1.787a4.322 4.322 0 0 0-4.317-4.319 4.323 4.323 0 0 0-4.319 4.32A4.322 4.322 0 0 0 15 15.266a4.32 4.32 0 0 0 4.316-4.317zm-2.57 7.84a8.126 8.126 0 0 0 2.507-1.038 1.266 1.266 0 0 0-1.347-2.143 5.482 5.482 0 0 1-5.816 0 1.265 1.265 0 0 0-1.348 2.143c.78.49 1.628.838 2.507 1.038l-2.414 2.414a1.267 1.267 0 0 0 .894 2.16c.324 0 .649-.125.895-.37l2.371-2.373 2.373 2.373a1.265 1.265 0 0 0 1.788-1.789l-2.41-2.415z"/></svg>';
            } else {
                ok += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="' + fill + '"><path d="M12.498 6.2a1.932 1.932 0 0 0-1.929 1.93 1.932 1.932 0 0 0 3.861 0 1.932 1.932 0 0 0-1.932-1.93zm0 6.592a4.668 4.668 0 0 1-4.66-4.662 4.665 4.665 0 0 1 4.66-4.663 4.666 4.666 0 0 1 4.664 4.663 4.669 4.669 0 0 1-4.664 4.662zm-1.884 3.801a8.75 8.75 0 0 1-2.708-1.12 1.367 1.367 0 1 1 1.455-2.312 5.925 5.925 0 0 0 6.276 0 1.367 1.367 0 1 1 1.456 2.311c-.832.522-1.749.9-2.707 1.12l2.606 2.608a1.367 1.367 0 0 1-1.933 1.931L12.5 18.569l-2.561 2.562a1.368 1.368 0 0 1-1.934-1.934l2.609-2.604z"/></svg>';
            }
            ok += '</a>';
            ok += '</div>';

        var behance = '';
            behance += '<div class="t-review-social-links__item">';
            behance += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                behance += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-421.541 278.608c-3.095 0-3.526 3.09-3.526 3.09h6.581c0-.001.042-3.09-3.055-3.09zM-436.472 281.697h-5.834v5.356h5.165c.088 0 .219.002.374 0 .831-.02 2.406-.261 2.406-2.604-.001-2.78-2.111-2.752-2.111-2.752z"/><path d="M-430.984 257C-444.248 257-455 267.75-455 281.014c0 13.263 10.752 24.016 24.016 24.016 13.262 0 24.014-10.752 24.014-24.016-.001-13.263-10.754-24.014-24.014-24.014zm5.054 14.756h8.267v2.467h-8.267v-2.467zm-4.179 12.943c0 6.116-6.364 5.914-6.364 5.914h-10.428v-20.038h10.428c3.168 0 5.668 1.75 5.668 5.335s-3.057 3.813-3.057 3.813c4.031 0 3.753 4.976 3.753 4.976zm15.466-.328h-10.384c0 3.722 3.526 3.487 3.526 3.487 3.329 0 3.213-2.156 3.213-2.156h3.527c0 5.722-6.859 5.33-6.859 5.33-8.227 0-7.698-7.661-7.698-7.661s-.008-7.698 7.698-7.698c8.112.001 6.977 8.698 6.977 8.698z"/><path d="M-435.055 276.221c0-2.084-1.417-2.084-1.417-2.084H-442.306v4.471h5.472c.944 0 1.779-.304 1.779-2.387z"/></svg>';
            } else {
                behance += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="' + fill + '"><path d="M22.4 7.5h-5.6V6.1h5.6v1.4zm-9.3 5.7c.4.6.5 1.2.5 2s-.2 1.6-.6 2.2c-.3.4-.6.8-1 1.1-.4.3-1 .6-1.6.7-.6.1-1.3.2-2 .2H2.3V5.6H9c1.7 0 2.9.5 3.6 1.5.4.6.6 1.3.6 2.1s-.2 1.5-.6 2c-.2.3-.6.6-1.1.8.7.2 1.2.7 1.6 1.2zM5.5 11h2.9c.6 0 1.1-.1 1.5-.3.4-.2.6-.6.6-1.2s-.2-1.1-.7-1.3C9.3 8.1 8.7 8 8.1 8H5.5v3zm5.2 4c0-.7-.3-1.2-.9-1.5-.3-.2-.8-.2-1.4-.2h-3V17h2.9c.6 0 1.1-.1 1.4-.2.7-.3 1-.9 1-1.8zm13.8-2.2c.1.5.1 1.1.1 2h-7.2c0 1 .4 1.7 1 2.1.4.3.9.4 1.4.4.6 0 1.1-.1 1.4-.5.2-.2.4-.4.5-.7h2.6c-.1.6-.4 1.2-1 1.8-.9 1-2.1 1.4-3.7 1.4-1.3 0-2.5-.4-3.5-1.2-1-.8-1.5-2.1-1.5-4 0-1.7.5-3 1.4-4 .9-.9 2.1-1.4 3.5-1.4.9 0 1.6.2 2.3.5.7.3 1.3.8 1.7 1.5.6.6.8 1.3 1 2.1zm-2.7.2c0-.7-.3-1.2-.7-1.6-.4-.4-.9-.5-1.5-.5-.7 0-1.2.2-1.5.6-.4.4-.6.9-.7 1.5h4.4z"/></svg>';
            }
            behance += '</a>';
            behance += '</div>';

        var vimeo = '';
            vimeo += '<div class="t-review-social-links__item">';
            vimeo += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                vimeo += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-431 256.971c13.267 0 24.023 10.755 24.023 24.023s-10.755 24.023-24.023 24.023-24.023-10.755-24.023-24.023 10.756-24.023 24.023-24.023zm-12.262 19.146l.996 1.306s2.054-1.619 2.739-.81c.685.81 3.299 10.584 4.171 12.387.761 1.581 2.862 3.672 5.166 2.179 2.302-1.493 9.959-8.03 11.329-15.749 1.369-7.717-9.213-6.1-10.335.623 2.802-1.682 4.297.683 2.863 3.362-1.431 2.676-2.739 4.421-3.424 4.421-.683 0-1.209-1.791-1.992-4.92-.81-3.236-.804-9.064-4.17-8.403-3.171.623-7.343 5.604-7.343 5.604z"/></svg>';
            } else {
                vimeo += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M2.9 16.5l1.6 2s3.2-2.5 4.3-1.3c1.1 1.3 5.2 16.5 6.5 19.3 1.2 2.5 4.5 5.7 8.1 3.4S39 27.4 41.1 15.3s-14.4-9.5-16.1 1c4.4-2.6 6.7 1.1 4.5 5.3s-4.3 6.9-5.3 6.9c-1.1 0-1.9-2.8-3.1-7.7-1.3-5.1-1.3-14.2-6.5-13.1-5.2 1-11.7 8.8-11.7 8.8z"/></svg>';
            }
            vimeo += '</a>';
            vimeo += '</div>';

        var youtube = '';
            youtube += '<div class="t-review-social-links__item">';
            youtube += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                youtube += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-431 257.013c13.248 0 23.987 10.74 23.987 23.987s-10.74 23.987-23.987 23.987-23.987-10.74-23.987-23.987 10.739-23.987 23.987-23.987zm11.815 18.08c-.25-1.337-1.363-2.335-2.642-2.458-3.054-.196-6.119-.355-9.178-.357-3.059-.002-6.113.154-9.167.347-1.284.124-2.397 1.117-2.646 2.459a40.163 40.163 0 0 0 0 11.672c.249 1.342 1.362 2.454 2.646 2.577 3.055.193 6.107.39 9.167.39 3.058 0 6.126-.172 9.178-.37 1.279-.124 2.392-1.269 2.642-2.606a39.769 39.769 0 0 0 0-11.654zm-14.591 9.342v-7.115l6.627 3.558-6.627 3.557z"/></svg>';
            } else {
                youtube += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M43.9 15.3c-.4-3.1-2.2-5-5.3-5.3-3.6-.3-11.4-.5-15-.5-7.3 0-10.6.2-14.1.5-3.3.3-4.8 1.8-5.4 4.9-.4 2.1-.6 4.1-.6 8.9 0 4.3.2 6.9.5 9.2.4 3.1 2.5 4.8 5.7 5.1 3.6.3 10.9.5 14.4.5s11.2-.2 14.7-.6c3.1-.4 4.6-2 5.1-5.1 0 0 .5-3.3.5-9.1 0-3.3-.2-6.4-.5-8.5zM19.7 29.8V18l11.2 5.8-11.2 6z"/></svg>';
            }
            youtube += '</a>';
            youtube += '</div>';

        var instagram = '';
            instagram += '<div class="t-review-social-links__item">';
            instagram += ' <a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                instagram += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="' + fill + '"><path d="M15 11.014a3.986 3.986 0 1 0 .001 7.971A3.986 3.986 0 0 0 15 11.014zm0 6.592A2.604 2.604 0 0 1 12.393 15 2.604 2.604 0 0 1 15 12.394 2.614 2.614 0 0 1 17.607 15 2.604 2.604 0 0 1 15 17.606zM19.385 9.556a.915.915 0 0 0-.92.921c0 .512.407.919.92.919a.914.914 0 0 0 .921-.919.916.916 0 0 0-.921-.921z"/><path d="M15.002.15C6.798.15.149 6.797.149 15c0 8.201 6.649 14.85 14.853 14.85 8.199 0 14.85-6.648 14.85-14.85 0-8.203-6.651-14.85-14.85-14.85zm7.664 18.115c0 2.423-1.979 4.401-4.416 4.401h-6.5c-2.438 0-4.417-1.979-4.417-4.386v-6.546c0-2.422 1.978-4.4 4.417-4.4h6.5c2.438 0 4.416 1.978 4.416 4.4v6.531z"/></svg>';
            } else {
                instagram += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="' + fill + '"><path d="M16.396 3.312H8.604c-2.921 0-5.292 2.371-5.292 5.273v7.846c0 2.886 2.371 5.256 5.292 5.256h7.791c2.922 0 5.292-2.37 5.292-5.274V8.586c.001-2.903-2.37-5.274-5.291-5.274zM7.722 12.5a4.778 4.778 0 1 1 9.554 0 4.778 4.778 0 0 1-9.554 0zm10.034-4.318c-.615 0-1.104-.487-1.104-1.102s.488-1.103 1.104-1.103c.614 0 1.102.488 1.102 1.103s-.488 1.102-1.102 1.102z" /><path d="M12.5 9.376A3.12 3.12 0 0 0 9.376 12.5a3.12 3.12 0 0 0 3.124 3.124 3.12 3.12 0 0 0 3.124-3.124A3.133 3.133 0 0 0 12.5 9.376z"/></svg>';
            }
            instagram += '</a>';
            instagram += '</div>';

        var pinterest = '';
            pinterest += '<div class="t-review-social-links__item">';
            pinterest += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                pinterest += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="-455 257 48 48" fill="' + fill + '"><path d="M-407 281c0 13.254-10.746 24-23.999 24-13.257 0-24.003-10.746-24.003-24 0-13.256 10.746-24 24.003-24 13.253 0 23.999 10.744 23.999 24zm-30.628 14.811c.027.205.29.254.409.1.17-.223 2.365-2.932 3.111-5.639.211-.768 1.212-4.738 1.212-4.738.599 1.145 2.349 2.148 4.21 2.148 5.539 0 9.297-5.049 9.297-11.809 0-5.111-4.329-9.873-10.909-9.873-8.186 0-12.314 5.871-12.314 10.766 0 2.963 1.122 5.6 3.527 6.582.395.162.749.006.863-.43.08-.303.268-1.065.353-1.385.114-.432.07-.582-.248-.959-.694-.818-1.138-1.879-1.138-3.381 0-4.353 3.259-8.252 8.484-8.252 4.627 0 7.169 2.828 7.169 6.603 0 4.969-2.198 9.162-5.461 9.162-1.804 0-3.153-1.49-2.722-3.32.518-2.182 1.522-4.537 1.522-6.113 0-1.41-.758-2.588-2.324-2.588-1.843 0-3.323 1.908-3.323 4.461 0 1.627.55 2.727.55 2.727l-2.217 9.391c-.657 2.787-.099 6.203-.051 6.547z"/></svg>';
            } else {
                pinterest += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M24.9 5.5c4.2 0 7.7 1.3 10.5 3.9s4.1 5.7 4.1 9.2c0 4.6-1.2 8.4-3.5 11.3-2.3 3-5.3 4.5-8.9 4.5-1.2 0-2.3-.3-3.4-.9s-1.8-1.3-2.2-2c-.9 3.5-1.4 5.6-1.6 6.3-.7 2.4-2 4.9-4.1 7.5-.2.2-.4.2-.5-.1-.5-3.5-.5-6.4.1-8.7l2.9-12.6c-.5-.9-.7-2.1-.7-3.6 0-1.7.4-3.1 1.3-4.2s1.9-1.7 3.2-1.7c1 0 1.8.3 2.3 1 .5.6.8 1.5.8 2.4 0 .6-.1 1.4-.3 2.3-.2.9-.5 1.9-.9 3.1s-.6 2.1-.8 2.8c-.3 1.2-.1 2.2.7 3.1.7.9 1.7 1.3 3 1.3 2.1 0 3.8-1.2 5.2-3.6 1.4-2.4 2-5.3 2-8.7 0-2.6-.8-4.7-2.5-6.3-1.7-1.6-4-2.4-7-2.4-3.4 0-6.1 1.1-8.2 3.2S13 17.4 13 20.4c0 1.8.5 3.3 1.5 4.5.3.4.4.8.3 1.2 0 .1-.1.3-.2.6-.1.4-.1.6-.2.7 0 .1-.1.4-.2.6-.1.3-.3.4-.4.4h-.6c-3.1-1.3-4.7-4.2-4.7-8.7 0-3.6 1.5-6.9 4.4-9.9s7-4.3 12-4.3z"/></svg>';
            }
            pinterest += '</a>';
            pinterest += '</div>';

        var linkedin = '';
            linkedin += '<div class="t-review-social-links__item">';
            linkedin += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                linkedin += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="-615 1477 48 48" fill="' + fill + '"><path d="M-566.999 1501c0 13.256-10.746 24-24 24-13.256 0-24.002-10.744-24.002-24 0-13.254 10.746-24 24.002-24 13.254 0 24 10.746 24 24zm-38.507 13.975h6.22v-20.004h-6.22v20.004zm3.11-22.739a3.606 3.606 0 0 0 0-7.211 3.603 3.603 0 0 0-3.604 3.605 3.604 3.604 0 0 0 3.604 3.606zm26.396 11.766c0-5.387-1.163-9.529-7.454-9.529-3.023 0-5.054 1.658-5.884 3.231h-.085v-2.733h-5.964v20.004h6.216v-9.896c0-2.609.493-5.137 3.729-5.137 3.186 0 3.232 2.984 3.232 5.305v9.729h6.21v-10.974z"/></svg>';
            } else {
                linkedin += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M42.3 23.1v13.5h-7.9V24c0-3.2-1.1-5.3-4-5.3-2.2 0-3.5 1.5-4 2.9-.2.5-.3 1.2-.3 1.9v13.2h-7.9s.1-21.4 0-23.6h7.9v3.3s0 .1-.1.1h.1v-.1c1-1.6 2.9-3.9 7.1-3.9 5.2-.1 9.1 3.3 9.1 10.6zM10.1 1.6c-2.7 0-4.4 1.8-4.4 4.1S7.4 9.8 10 9.8h.1c2.7 0 4.4-1.8 4.4-4.1s-1.7-4.1-4.4-4.1zm-3.9 35H14V13H6.2v23.6z"/></svg>';
            }
            linkedin += '</a>';
            linkedin += '</div>';

        var soundcloud = '';
            soundcloud += '<div class="t-review-social-links__item">';
            soundcloud += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                soundcloud += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30" viewBox="0 0 48 48" fill="' + fill + '"><defs><path id="a" d="M0 0h48v48H0V0z"/></defs><g fill-rule="evenodd"><path d="M38.206 22.171c-.635 0-1.241.129-1.793.36-.369-4.177-3.871-7.453-8.144-7.453a8.28 8.28 0 0 0-2.965.553c-.35.136-.442.275-.446.546v14.709a.545.545 0 0 0 .5.531c.013.002 12.848 0 12.848 0 2.56 0 4.634-2.051 4.634-4.611a4.634 4.634 0 0 0-4.634-4.635zM24.17 16.237a.5.5 0 0 0-.582.043.517.517 0 0 0-.189.392v.053l-.21 10.388.107 1.92.103 1.869a.514.514 0 0 0 .51.505.515.515 0 0 0 .51-.509v.004l.228-3.79-.227-10.44a.517.517 0 0 0-.25-.435zm-1.364 14.72v-.001.001-.002.002zm-.215-13.813a.47.47 0 0 0-.264-.081.486.486 0 0 0-.478.477l-.001.09-.18 9.48.181 3.847.001.016a.48.48 0 0 0 .477.458c.246 0 .248-.054.335-.14a.486.486 0 0 0 .144-.336l.02-.38.181-3.463-.201-9.573a.487.487 0 0 0-.215-.395zm-1.853 1.479a.447.447 0 0 0-.446.444l-.2 8.044.2 3.87c.005.465.2.442.446.442.245 0 .44.023.446-.444v.003l.223-3.87-.223-8.046a.447.447 0 0 0-.446-.443zm-1.577-.273a.416.416 0 0 0-.414.412l-.219 8.349.219 3.895c.005.228.187.41.414.41a.416.416 0 0 0 .413-.412v.002l.246-3.895-.246-8.35a.416.416 0 0 0-.413-.411zm-1.184 12.693v-.002.002zm0-12.5a.385.385 0 0 0-.382-.38.384.384 0 0 0-.381.38l-.238 8.567.238 3.932c.006.21.173.377.381.377a.385.385 0 0 0 .382-.378l.268-3.931-.268-8.568zm-1.935-.069a.354.354 0 0 0-.35.347l-.256 8.288.257 3.957c.006.193.16.346.35.346a.354.354 0 0 0 .349-.347v.002l.29-3.958-.29-8.288a.355.355 0 0 0-.35-.347zm-1.564.691a.322.322 0 0 0-.318.315l-.275 7.65.276 3.998a.321.321 0 0 0 .317.313c.17 0 .31-.138.317-.315v.002l.312-3.999-.312-7.65a.323.323 0 0 0-.317-.314zM12.974 20.6a.29.29 0 0 0-.285.282l-.295 6.226.295 4.023a.29.29 0 0 0 .285.281.292.292 0 0 0 .285-.282v.001l.333-4.023-.333-6.226a.292.292 0 0 0-.285-.282zm-1.264 2.678a.258.258 0 0 0-.253-.248.257.257 0 0 0-.253.25l-.314 3.826.314 4.024c.008.142.117.25.253.25a.259.259 0 0 0 .253-.25l.356-4.024-.356-3.828zm0 7.851v.001zm-1.757-8.366a.226.226 0 0 0-.221.217l-.333 4.126.333 3.99c.009.124.104.217.22.217s.21-.093.221-.216l.4-3.991-.4-4.126c-.01-.123-.105-.217-.22-.217zm-1.493.142c-.1 0-.179.078-.189.185l-.351 4.015.351 3.868c.01.108.09.185.19.185.097 0 .176-.077.188-.184l.4-3.869-.4-4.015c-.012-.107-.091-.185-.189-.185zm-2.873 1.96c-.079 0-.14.06-.151.147l-.276 2.094.276 2.056c.01.086.072.147.15.147s.14-.06.152-.147l.326-2.056-.326-2.095c-.013-.086-.074-.145-.151-.145zM6.98 23.57c-.08 0-.146.064-.157.152l-.25 3.385.25 3.308c.011.088.077.152.157.152s.144-.062.156-.152l.422-3.308-.422-3.385c-.012-.09-.077-.152-.156-.152zM48 24c0 13.255-10.745 24-24 24C10.757 48 0 37.255 0 24 0 10.757 10.757 0 24 0c13.255 0 24 10.757 24 24z"/></g></svg>';
            } else {
                soundcloud += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 48 48" fill="' + fill + '"><path d="M1.6 24.3c-.2 0-.3.1-.3.3l-.5 6.2.5 6c0 .2.2.3.3.3.2 0 .3-.1.3-.3l.6-6-.6-6.2c0-.2-.1-.3-.3-.3zm3.3 12.6zm0-11.8c0-.2-.2-.4-.4-.4s-.4.2-.4.4l-.5 5.8.5 6.1c0 .2.2.4.4.4s.4-.2.4-.4l.5-6.1-.5-5.8zm2.7-6.2c-.3 0-.5.2-.5.5l-.4 11.5.4 6c0 .3.2.5.5.5s.5-.2.5-.5l.5-6-.5-11.6c-.1-.2-.3-.4-.5-.4zm3.8-1c0-.3-.3-.6-.6-.6s-.6.3-.6.6l-.4 13 .4 5.9c0 .3.3.6.6.6s.6-.3.6-.6l.4-5.9-.4-13zm2.7.1c-.4 0-.7.3-.7.7l-.3 12.2.3 5.9c0 .4.3.7.7.7.4 0 .7-.3.7-.7l.3-5.9-.3-12.2c0-.4-.3-.7-.7-.7zm3.7-3.6c-.1-.1-.3-.1-.4-.1-.2 0-.4.1-.5.2-.2.1-.3.4-.3.6v.1l-.3 15.7.2 2.9.2 2.8c0 .4.4.8.8.8s.8-.3.8-.8l.3-5.7-.3-15.8c-.1-.3-.3-.5-.5-.7zm22.4 9c-1 0-1.9.2-2.7.5-.6-6.3-5.9-11.3-12.3-11.3-1.6 0-3.1.3-4.5.8-.5.2-.7.4-.7.8v22.2c0 .4.3.8.8.8h19.4c3.9 0 7-3.1 7-7 0-3.7-3.1-6.8-7-6.8z"/></svg>';
            }
            soundcloud += '</a>';
            soundcloud +=' </div>';

        var telegram = '';
            telegram += '<div class="t-review-social-links__item">';
            telegram += '<a href="' + item + '" target="_blank">';
            if (socialWrapper.hasClass('t-review-social-links__wrapper_round')) {
                telegram += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 60 60" fill="' + fill + '"><path d="M30 0C13.4 0 0 13.4 0 30s13.4 30 30 30 30-13.4 30-30S46.6 0 30 0zm16.9 13.9l-6.7 31.5c-.1.6-.8.9-1.4.6l-10.3-6.9-5.5 5.2c-.5.4-1.2.2-1.4-.4L18 32.7l-9.5-3.9c-.7-.3-.7-1.5 0-1.8l37.1-14.1c.7-.2 1.4.3 1.3 1z"/><path d="M22.7 40.6l.6-5.8 16.8-16.3-20.2 13.3"/></svg>';
            } else {
                telegram += '<svg class="t-review-social-links__svg" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 60 60" fill="' + fill + '"><path d="M52.5 9L6.1 26.9c-.9.4-.9 1.8 0 2.3L18 34.1l4.4 14.1c.3.8 1.2 1 1.8.5l6.8-6.4L43.9 51c.7.4 1.6 0 1.7-.7l8.4-40c.2-.8-.7-1.6-1.5-1.3zm-28 27.7l-.7 7.3-3.6-11.2L45.5 16l-21 20.7z"/></svg>';
            }
            telegram += '</a>';
            telegram += '</div>';

        if (item.indexOf('facebook') != -1) {
            socialWrapper.append(fb);
        }

        if (item.indexOf('twitter') != -1) {
            socialWrapper.append(twi);
        }

        if (item.indexOf('vk.com') != -1) {
            socialWrapper.append(vk);
        }

        if (item.indexOf('ok.ru') != -1) {
            socialWrapper.append(ok);
        }

        if (item.indexOf('behance') != -1) {
            socialWrapper.append(behance);
        }

        if (item.indexOf('vimeo') != -1) {
            socialWrapper.append(vimeo);
        }

        if (item.indexOf('youtube') != -1) {
            socialWrapper.append(youtube);
        }

        if (item.indexOf('instagram') != -1) {
            socialWrapper.append(instagram);
        }

        if (item.indexOf('pinterest') != -1) {
            socialWrapper.append(pinterest);
        }

        if (item.indexOf('linkedin') != -1) {
            socialWrapper.append(linkedin);
        }

        if (item.indexOf('soundcloud') != -1) {
            socialWrapper.append(soundcloud);
        }

        if (item.indexOf('telegram') != -1) {
            socialWrapper.append(telegram);
        }
    }

</script>
<script type="text/javascript">

    $(document).ready(function() {
        t_reviews_social_init('42892409');
    });

</script>


<style>
.t529 .t-review-social-links {
    margin-top: 7px;
}

.t529 .t-review-social-links__wrapper_round .t-review-social-links__item svg {
    width: 20px;
    height: 20px;
}

.t529 .t-review-social-links__item {
    padding: 0 3px;
}

@media screen and (max-width: 640px){
  .t529 .t-review-social-links__wrapper_round .t-review-social-links__item svg {
      width: 17px;
      height: 17px;
  }
}
</style>

</div>


<div id="rec42892413" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;background-color:#ffffff; " data-animationappear="off" data-record-type="549" data-bg-color="#ffffff">
<!-- T549 -->





<div class="t549">
  		<div class="t-section__container t-container">
		<div class="t-col t-col_12">
			<div class="t-section__topwrapper t-align_center">
				<div class="t-section__title t-title t-title_xs" field="btitle">Из каких этапов состоит уборка?</div>							</div>
		</div>
	</div>
		  <div class="t-container">
                                                                          
          
    <div class="t549__col t-col t-col_3">
      <div class="t549__imgwrapper t-align_center">
                <div class="t549__bgimg  t-margin_auto t-bgimg" bgimgfield="img" data-original="https://static.tildacdn.com/tild3934-3763-4630-b461-366663623131/phonecall.png" style="width: 65px; height: 65px; background-image: url('images/phonecall.png');"></div>
              </div>
      <div class="t549__textwrapper t-align_center">
        <div class="t549__uptitle t-uptitle t-uptitle_md" style="" field="subtitle">1</div>        <div class="t549__title t-name t-name_xl" style="" field="title">Заявка</div>        <div class="t549__text t-text t-text_xs" style="" field="descr">Вы звоните или оставляете заявку на сайте.</div>      </div>
    </div>
    	
                                                                      
          
    <div class="t549__col t-col t-col_3">
      <div class="t549__imgwrapper t-align_center">
                  <div class="t549__arrow"><svg fill="#73b6e6" width="24" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 23.8 43.5"><path d="M2.085.645l21.213 21.213-1.415 1.414L.67 2.06z"/><path d="M23.345 21.83L2.132 43.045.718 41.63 21.93 20.417z"/></svg></div>
                <div class="t549__bgimg  t-margin_auto t-bgimg" bgimgfield="img2" data-original="https://static.tildacdn.com/tild3131-3562-4364-b664-323836353239/budget.png" style="width: 65px; height: 65px; background-image: url('images/budget.png');"></div>
              </div>
      <div class="t549__textwrapper t-align_center">
        <div class="t549__uptitle t-uptitle t-uptitle_md" style="" field="subtitle2">2</div>        <div class="t549__title t-name t-name_xl" style="" field="title2">Расчет стоимости</div>        <div class="t549__text t-text t-text_xs" style="" field="descr2">Оценка объемов работ в телефонном режиме или бесплатный выезд оценщика для формирования точной цены.</div>      </div>
    </div>
    	
                                                                      
          
    <div class="t549__col t-col t-col_3">
      <div class="t549__imgwrapper t-align_center">
                  <div class="t549__arrow"><svg fill="#73b6e6" width="24" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 23.8 43.5"><path d="M2.085.645l21.213 21.213-1.415 1.414L.67 2.06z"/><path d="M23.345 21.83L2.132 43.045.718 41.63 21.93 20.417z"/></svg></div>
                <div class="t549__bgimg  t-margin_auto t-bgimg" bgimgfield="img3" data-original="https://static.tildacdn.com/tild3262-6431-4537-b836-306532303035/manvacuuming.png" style="width: 65px; height: 65px; background-image: url('images/manvacuuming.png');"></div>
              </div>
      <div class="t549__textwrapper t-align_center">
        <div class="t549__uptitle t-uptitle t-uptitle_md" style="" field="subtitle3">3</div>        <div class="t549__title t-name t-name_xl" style="" field="title3">Выполнение работ</div>        <div class="t549__text t-text t-text_xs" style="" field="descr3">Уборка выполняется в пределах одного рабочего дня (6-8 ч.)</div>      </div>
    </div>
    	
                                                                      
          
    <div class="t549__col t-col t-col_3">
      <div class="t549__imgwrapper t-align_center">
                  <div class="t549__arrow"><svg fill="#73b6e6" width="24" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 23.8 43.5"><path d="M2.085.645l21.213 21.213-1.415 1.414L.67 2.06z"/><path d="M23.345 21.83L2.132 43.045.718 41.63 21.93 20.417z"/></svg></div>
                <div class="t549__bgimg  t-margin_auto t-bgimg" bgimgfield="img4" data-original="https://static.tildacdn.com/tild6330-6532-4164-b465-613535663562/candidate.png" style="width: 65px; height: 65px; background-image: url('images/candidate.png');"></div>
              </div>
      <div class="t549__textwrapper t-align_center">
                <div class="t549__title t-name t-name_xl" style="" field="title4">Прием работы</div>        <div class="t549__text t-text t-text_xs" style="" field="descr4">Вы проверяете результаты работы. Если у вас есть замечания, они исправляются и только тогда происходит расчет.</div>      </div>
    </div>
    	
      </div>
  	

</div>

</div>


<div id="rec42892414" class="r t-rec t-rec_pt_0" style="padding-top:0px;background-color:#f0f0f0; " data-record-type="255" data-bg-color="#f0f0f0">
<!-- T225 -->
<div class="t225">
  <div class="t-container t-align_center">
    <div class="t-col t-col_8 t-prefix_2">
            <div class="t225__title t-title t-title_md" field="title" style=""><div style="line-height:50px;" data-customstyle="yes">Важные вопросы и ответы на них</div></div>          </div>
  </div>
</div>
</div>


<div id="rec42892415" class="r t-rec t-rec_pt_0" style="padding-top:0px;background-color:#eeeeee; " data-animationappear="off" data-record-type="585" data-bg-color="#eeeeee">


<!-- T585-->
<div class="t585">
  <div class="t-container">
                          <div class="t-col t-col_8 t-prefix_2">
      <div class="t585__accordion">
        <div class="t585__wrapper">
          <div class="t585__header" style=" border-top: 1px solid #73b6e6">
            <div class="t585__title t-name t-name_xl" field="li_title__1480611044356" style="">Как узнать точную цену на уборку?</div>            <div class="t585__icon">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: transparent;"></div>
            </div>
            <div class="t585__icon t585__icon-hover">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#ffffff">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: #ff822e"></div>
            </div>
          </div>
          <div class="t585__content">
            <div class="t585__textwrapper">
                            <div class="t585__text t-descr t-descr_xs" field="li_descr__1480611044356" style="">Позвоните по номеру 063 139 83 21 или оставьте заявку и Вам перезвонит профессиональный менеджер, который назовет цену, соответствующую Вашим объемам работ. Также мы можем отправить оценщика для Бесплатной оценки объемов работ и определения тонной цены на клининговые услуги </div>            </div>
          </div>
        </div>
      </div>
          </div>
                        <div class="t-col t-col_8 t-prefix_2">
      <div class="t585__accordion">
        <div class="t585__wrapper">
          <div class="t585__header" style=" border-top: 1px solid #73b6e6">
            <div class="t585__title t-name t-name_xl" field="li_title__1480611048442" style="">Можно заказать уборку в Киеве на выходной день?</div>            <div class="t585__icon">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: transparent;"></div>
            </div>
            <div class="t585__icon t585__icon-hover">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#ffffff">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: #ff822e"></div>
            </div>
          </div>
          <div class="t585__content">
            <div class="t585__textwrapper">
                            <div class="t585__text t-descr t-descr_xs" field="li_descr__1480611048442" style="">Конечно. Наша клининговая компания убирает  в удобное для Вас время. Даже если это выходной день или ночное время. Заказать услугу вы можете 24/7</div>            </div>
          </div>
        </div>
      </div>
          </div>
                        <div class="t-col t-col_8 t-prefix_2">
      <div class="t585__accordion">
        <div class="t585__wrapper">
          <div class="t585__header" style=" border-top: 1px solid #73b6e6">
            <div class="t585__title t-name t-name_xl" field="li_title__1489600117321" style="">Сколько времени происходит уборка?</div>            <div class="t585__icon">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: transparent;"></div>
            </div>
            <div class="t585__icon t585__icon-hover">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#ffffff">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: #ff822e"></div>
            </div>
          </div>
          <div class="t585__content">
            <div class="t585__textwrapper">
                            <div class="t585__text t-descr t-descr_xs" field="li_descr__1489600117321" style="">В среднем 6-8 часов, это примерное время. Все зависит от степени загрязнения и срочности.</div>            </div>
          </div>
        </div>
      </div>
          </div>
                        <div class="t-col t-col_8 t-prefix_2">
      <div class="t585__accordion">
        <div class="t585__wrapper">
          <div class="t585__header" style=" border-top: 1px solid #73b6e6">
            <div class="t585__title t-name t-name_xl" field="li_title__1508930778327" style="">Сколько людей будет убирать мою квартиру?</div>            <div class="t585__icon">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: transparent;"></div>
            </div>
            <div class="t585__icon t585__icon-hover">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#ffffff">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: #ff822e"></div>
            </div>
          </div>
          <div class="t585__content">
            <div class="t585__textwrapper">
                            <div class="t585__text t-descr t-descr_xs" field="li_descr__1508930778327" style="">Все зависит от объёма работ, глубины уборки и срочности. У нас ежедневно выполняются объекты, на которых одновременно могут работать как два человека так и 9-15 человек. На любом объекте, всегда есть старший специалист, который несет ответственность за выполнение всех работ. На бесплатной оценке объёма работ наш технолог определит четкое количество персонала, исходя из ваших требований.</div>            </div>
          </div>
        </div>
      </div>
          </div>
                        <div class="t-col t-col_8 t-prefix_2">
      <div class="t585__accordion">
        <div class="t585__wrapper">
          <div class="t585__header" style=" border-top: 1px solid #73b6e6">
            <div class="t585__title t-name t-name_xl" field="li_title__1516978783293" style="">Мне нужно весь день находиться дома во время уборки?</div>            <div class="t585__icon">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#222222">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: transparent;"></div>
            </div>
            <div class="t585__icon t585__icon-hover">
              <div class="t585__lines">
                <svg width="24px" height="24px" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1px" fill="none" fill-rule="evenodd" stroke-linecap="square">
                    <g transform="translate(1.000000, 1.000000)" stroke="#ffffff">
                      <path d="M0,11 L22,11"/>
                      <path d="M11,0 L11,22"/>
                    </g>
                  </g>
                </svg>
              </div>
              <div class="t585__circle" style="background-color: #ff822e"></div>
            </div>
          </div>
          <div class="t585__content">
            <div class="t585__textwrapper">
                            <div class="t585__text t-descr t-descr_xs" field="li_descr__1516978783293" style="">Нет, такой необходимости нет. Вы можете заниматься собственными делами, Наш менеджер сообщит Вам о завершении уборки заранее.</div>            </div>
          </div>
        </div>
      </div>
      <div class="t585__border" style="height: 1px; background-color: #73b6e6"></div>    </div>
        </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        t585_init('42892415');
    });
</script>

</div>


<div id="rec53749701" class="r t-rec t-rec_pt_30 t-rec_pb_15" style="padding-top:30px;padding-bottom:15px; " data-record-type="795">
<!-- T795 -->
<div class="t795">
  <div class="t-container t-align_center">
    <div class="t-col t-col_10 t-prefix_1">
      <h2 class="t795__title t-title t-title_xs t-margin_auto" field="title" style=""><strong>Наши работники и результаты работы</strong><strong></strong></h2>          </div>
  </div>
</div>
</div>


<div id="rec53406169" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-animationappear="off" data-record-type="603">
<!-- t603-->






<div class="t603">
  <div class="t603__container t-container_100">
                        <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6436-6465-4566-b466-626336366561/_.jpg" data-original="https://static.tildacdn.com/tild6436-6465-4566-b466-626336366561/_.jpg" style="background: url('images/_.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild6436-6465-4566-b466-626336366561/_.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3466-6233-4366-b632-376437303731/photo.jpg" data-original="https://static.tildacdn.com/tild3466-6233-4366-b632-376437303731/photo.jpg" style="background: url('images/photo_1.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild3466-6233-4366-b632-376437303731/photo.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3662-3562-4237-a465-326565303731/__.jpg" data-original="https://static.tildacdn.com/tild3662-3562-4237-a465-326565303731/__.jpg" style="background: url('images/___4.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild3662-3562-4237-a465-326565303731/__.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__3" data-zoom-target="3" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6265-6430-4531-a336-663534336535/ubprmeb1.jpg" data-original="https://static.tildacdn.com/tild6265-6430-4531-a336-663534336535/ubprmeb1.jpg" style="background: url('images/ubprmeb1.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild6265-6430-4531-a336-663534336535/ubprmeb1.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__4" data-zoom-target="4" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6137-3935-4265-a530-656230356561/ubprpus3.jpg" data-original="https://static.tildacdn.com/tild6137-3935-4265-a530-656230356561/ubprpus3.jpg" style="background: url('images/ubprpus3.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild6137-3935-4265-a530-656230356561/ubprpus3.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__5" data-zoom-target="5" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild6562-6166-4665-b138-306134326538/__.jpg" data-original="https://static.tildacdn.com/tild6562-6166-4665-b138-306134326538/__.jpg" style="background: url('images/___1.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild6562-6166-4665-b138-306134326538/__.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__6" data-zoom-target="6" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3933-3461-4866-b533-653738353365/1.jpg" data-original="https://static.tildacdn.com/tild3933-3461-4866-b533-653738353365/1.jpg" style="background: url('images/1.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild3933-3461-4866-b533-653738353365/1.jpg"></div>
			    </div>
                    <div class="t603__tile t603__tile_25" itemscope="" itemtype="http://schema.org/ImageObject">
      <div class="t603__blockimg t603__blockimg_4-3 t-bgimg" bgimgfield="gi_img__7" data-zoom-target="7" data-zoomable="yes" data-img-zoom-url="https://static.tildacdn.com/tild3465-3437-4565-a466-636138343938/__.jpg" data-original="https://static.tildacdn.com/tild3465-3437-4565-a466-636138343938/__.jpg" style="background: url('images/___3.jpg') center center no-repeat; background-size:cover;"><meta itemprop="image" content="https://static.tildacdn.com/tild3465-3437-4565-a466-636138343938/__.jpg"></div>
			    </div>
              </div>
</div>

<style>
</style>

</div>


<div id="rec42892412" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; " data-animationappear="off" data-record-type="690">

<!-- t690 -->
<div class="t690">    
  
    		<div class="t-section__container t-container">
		<div class="t-col t-col_12">
			<div class="t-section__topwrapper t-align_center">
				<div class="t-section__title t-title t-title_xs" field="btitle">Остались вопросы?</div>				<div class="t-section__descr t-descr t-descr_xl t-margin_auto" field="bdescr">Оставьте номер и профессиональный менеджер перезвонит Вам и ответит на вопросы.</div>			</div>
		</div>
	</div>
		    <div class="t-container">
        <div class="t-col t-col_8 t-prefix_2">
                                    	  		
    <form id="form42892412" name="form42892412" role="form" action="" method="POST" data-formactiontype="2" data-inputbox=".t-input-group" class="t-form js-form-proccess t-form_inputs-total_1  " data-success-callback="t690_onSuccess">
	
	  			        	            	                <input type="hidden" name="formservices[]" value="a20d5bab8cdbbc7dd46b417056f60d72" class="js-formaction-services">
	            	                <input type="hidden" name="formservices[]" value="3aa48ada54447f007ae5bebcfb8ff4ca" class="js-formaction-services">
	            	                <input type="hidden" name="formservices[]" value="f7df49f977d1d130eccabf90ab221f0b" class="js-formaction-services">
	            	        
                            <input type="hidden" name="tildaspec-formname" tabindex="-1" value="Остались фопросы?">
            
            <div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;"></div>

            <div class="t-form__inputsbox">

				
            <div class="t-input-group t-input-group_in" data-input-lid="1517154819679">
          <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1517154819679" style="">Ваш телефон</div>                    <div class="t-input-block">
                          <input type="text" name="Ваш телефон" class="t-input js-tilda-rule js-tilda-mask " value="" placeholder="+38 " data-tilda-req="1" data-tilda-mask=" + 38 (999) 9999999 " style="color:#403838; border:1px solid #73b6e6;  ">
                    <div class="t-input-error"></div>
          </div>
      </div>





				<div class="t-form__errorbox-middle">
					                <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                    <div class="t-form__errorbox-text t-text t-text_md">
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                    </div>
                </div>				</div>

                <div class="t-form__submit">
                    <button type="submit" class="t-submit" style="color:#ffffff;background-color:#73b6e6;">Отправить</button>
                </div>

            </div>

            <div class="t-form__errorbox-bottom">
            	                <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                    <div class="t-form__errorbox-text t-text t-text_md">
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                    </div>
                </div>            </div>


    </form>


		
	<style>
	#rec42892412 input::-webkit-input-placeholder {color:#403838; opacity: 0.5;}
	#rec42892412 input::-moz-placeholder          {color:#403838; opacity: 0.5;}
	#rec42892412 input:-moz-placeholder           {color:#403838; opacity: 0.5;}
	#rec42892412 input:-ms-input-placeholder      {color:#403838; opacity: 0.5;}
	#rec42892412 textarea::-webkit-input-placeholder {color:#403838; opacity: 0.5;}
	#rec42892412 textarea::-moz-placeholder          {color:#403838; opacity: 0.5;}
	#rec42892412 textarea:-moz-placeholder           {color:#403838; opacity: 0.5;}
	#rec42892412 textarea:-ms-input-placeholder      {color:#403838; opacity: 0.5;}
	</style>
	
	          <div class="t-form__bottom-text t-text t-text_xs" field="text">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div>    
        </div>   
    </div> 
</div>

                  
                  

<style>

#rec42892412 .t-btn[data-btneffects-first],
#rec42892412 .t-btn[data-btneffects-second],
#rec42892412 .t-submit[data-btneffects-first],
#rec42892412 .t-submit[data-btneffects-second] {
	position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}





</style>



<script type="text/javascript">

$(document).ready(function() {
	

	

});

</script>
</div>


<div id="rec43165154" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;background-color:#73b6e6; " data-record-type="595" data-bg-color="#73b6e6">
<!-- t595 -->




<div class="t595">

		<div class="t-section__container t-container">
		<div class="t-col t-col_12">
			<div class="t-section__topwrapper t-align_center">
				<div class="t-section__title t-title t-title_xs" field="btitle"><div style="color:#fcfcfc;" data-customstyle="yes">Нам доверяют:</div></div>							</div>
		</div>
	</div>
		
<div class="t595__container t-container">
   
                          <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_1  " style=""></div>      
          
        <img src="images/Privatbank_logo1chb.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481692290784">          </div>
                            <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_2  t595__line_vertical_2order" style=""></div>      
          
        <img src="images/photo_2.jpg" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481771908709">          </div>
                              <div class="t-clear t595__line t595__line_horizontal_mob2col" style=""></div>
        <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_3 t595__line_vertical_3order " style=""></div>      
          
        <img src="images/thumb_mid_logo_text.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481692319184">          </div>
                          <div class="t-clear t595__line t595__line_horizontal_mob3col" style=""></div>
            <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_4  t595__line_vertical_2order" style=""></div>      
          
        <img src="images/__.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481695425422">          </div>
                              <div class="t-clear t595__line t595__line_horizontal_mob2col" style=""></div>
        <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_5  " style=""></div>      
          
        <img src="images/1pl1_gray_2013now.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481695427218">          </div>
                            <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_0 t595__line_vertical_3order t595__line_vertical_2order" style=""></div>      
          
        <img src="images/infiniti47.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481717865677">          </div>
                      <div class="t-clear t595__line t595__line_horizontal" style=""></div>
              <div class="t-clear t595__line t595__line_horizontal_mob3col" style=""></div>
              <div class="t-clear t595__line t595__line_horizontal_mob2col" style=""></div>
        <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_1  " style=""></div>      
          
        <img src="images/ibis_black.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481695805357">          </div>
                            <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_2  t595__line_vertical_2order" style=""></div>      
          
        <img src="images/blob_1.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481695807365">          </div>
                              <div class="t-clear t595__line t595__line_horizontal_mob2col" style=""></div>
        <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_3 t595__line_vertical_3order " style=""></div>      
          
        <img src="images/poshta.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481776916481">          </div>
                          <div class="t-clear t595__line t595__line_horizontal_mob3col" style=""></div>
            <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_4  t595__line_vertical_2order" style=""></div>      
          
        <img src="images/blob_2.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481776917860">          </div>
                              <div class="t-clear t595__line t595__line_horizontal_mob2col" style=""></div>
        <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_5  " style=""></div>      
          
        <img src="images/Kyivstar_logo16.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481776919108">          </div>
                            <div class="t-col t595__item t595__item_6-in-row ">      
                  
            <div class="t595__line t595__line_vertical t595__line_vertical_0 t595__line_vertical_3order t595__line_vertical_2order" style=""></div>      
          
        <img src="images/blob.png" class="t595__img t-img t595__greyonhovercolor t595__alphaonhover" imgfield="li_img__1481776920287">          </div>
    </div>

	


</div>

</div>


<div id="rec42892417" class="r t-rec t-rec_pt_0 t-rec_pb_15" style="padding-top:0px;padding-bottom:15px;background-color:#ffffff; " data-record-type="580" data-bg-color="#ffffff">
<!-- T580 -->




<div class="t580">
	<div class="t-container">
		<div class="t-col t-col_10 t-prefix_1 t-align_center">
			<div class="t580__title t-title t-title_sm t-margin_auto" style="color:#303030;" field="title">Рассчитайте стоимость уборки</div>			<div class="t580__descr t-descr t-descr_xl t-margin_auto" style="color:#303030;max-width:600px;" field="descr">Мы свяжемся с вами, сделаем замеры, расчеты работ и отправим вам документы на подпись в течение 2-3х дней</div>						<div class="t580__buttons">
				<div class="t580__buttons-wrapper t-margin_auto">
								                                      <svg class="t580__arrow-icon_mobile" style="fill:#73b6e6;" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 35 70"><path d="M32.1 46.5c-1.5-1.2-3.7-1-4.9.5l-6 7.4V6c0-1.9-1.6-3.5-3.5-3.5S14.2 4.1 14.2 6v48.4l-6-7.4c-1.2-1.5-3.4-1.7-4.9-.5s-1.7 3.4-.5 4.9L15 66.6c.7.8 1.7 1.3 2.7 1.3s2.1-.5 2.7-1.3l12.2-15.2c1.3-1.5 1-3.7-.5-4.9z"/></svg>
                    <svg class="t580__arrow-icon " style="fill:#73b6e6; " xmlns="http://www.w3.org/2000/svg" viewbox="0 0 80 180"><path d="M54.1 110c-1.1 0-2.2-.5-2.9-1.5-1.1-1.6-.7-3.8.8-4.9 1-.7 4.9-2.9 8.9-5.2-14.8-2-27.2-8.9-36.1-20.2C7.9 56.3 7.5 24.1 12.3 3.2c.4-1.9 2.3-3.1 4.2-2.6 1.9.4 3.1 2.3 2.6 4.2-4.5 19.4-4.2 49.2 11.4 69.1 8.4 10.7 19.9 16.7 34.2 17.9l-.4-.5c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-1.2-1.5-1-3.7.5-4.9s3.7-1 4.9.5l6.4 8c.5.5.9 1.1 1.4 1.6 1.5 1.8 3.1 3.7 4.5 5.6.1.1.1.2.2.3.2.4.4.8.4 1.3v.7c0 .3-.1.7-.2 1-.1.2-.2.4-.3.5-.2.3-.5.6-.7.9-.2.2-.4.3-.7.5-.1 0-.1.1-.2.1-1.7.8-16 8.6-17.9 9.9-.7.5-1.4.7-2.1.7zM74 99.5s-.1 0 0 0c-.1 0 0 0 0 0z"/></svg>
                                                  				<a href="#popup:myform" target="" class="t580__btn t-btn  " style="color:#292929;border:3px solid #73b6e6;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;"><table style="width:100%; height:100%;"><tr><td>Отправить заявку</td></tr></table></a>								</div>
			</div>
			       </div>
	</div>
</div>


		
		
		
	
	<style>
	#rec42892417 .t-btn:not(.t-animate_no-hover):hover{
	  background-color: #73b6e6 !important;
	  color: #ffffff !important;
	  
	  
	}	
	#rec42892417 .t-btn:not(.t-animate_no-hover){
	  -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
	}
	</style>
	
	

<style>

#rec42892417 .t-btn[data-btneffects-first],
#rec42892417 .t-btn[data-btneffects-second],
#rec42892417 .t-submit[data-btneffects-first],
#rec42892417 .t-submit[data-btneffects-second] {
	position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}





</style>



<script type="text/javascript">

$(document).ready(function() {
	

	

});

</script>
</div>


<div id="rec43414316" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;background-color:#111111; " data-record-type="144" data-bg-color="#111111">
<!-- T134 -->


<div class="t134">
	<div class="t-container">
		<div class="t-col t-col_10 t-prefix_1">
		  	          
                          <img src="images/noroot_1.png" class="t134__img" imgfield="img">
                            
          				<div class="t134__descr" field="descr" style="color:#ffffff;"><div style="font-size:22px;" data-customstyle="yes"><a href="tel:+380 111 11 11" style="">+380</a>631398321<br><span style="color: rgb(255, 255, 255);"><a href="mailto:mailto:info@uborkaplus.com.ua" style="">info@uborkaplus.com.ua</a> </span><br>  Адрес : Саксаганського, 12 <br><br></div></div>		</div>
	</div>
</div>
</div>


<div id="rec43413729" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px;background-color:#111111; " data-animationappear="off" data-record-type="389" data-bg-color="#111111">
<!-- T389 -->


<div class="t389" id="t-footer_43413729">
  <div class="t389__maincontainer" style="height: 70px;">
    <div class="t389__content">
      <div class="t389__col t389__col_hiddenmobile">
        <div class="t389__typo t389__copyright t-name t-name_xs" field="text" style="color: #ffffff;">
          © 2018 Уборка+
        </div>
      </div>
      <div class="t389__col t389__col_center t-align_center">
                <div class="t389__centercontainer">
        <ul class="t389__list">
                <li class="t389__list_item t-name t-name_xs"><a class="t389__typo" style="color: #ffffff;" href="#rec42892405" data-menu-item-number="1">Цены</a></li>
                <li class="t389__list_item t-name t-name_xs"><a class="t389__typo" style="color: #ffffff;" href="#rec43102636" data-menu-item-number="2">Преимущества</a></li>
                <li class="t389__list_item t-name t-name_xs"><a class="t389__typo" style="color: #ffffff;" href="#rec42892413" data-menu-item-number="3">Как заказать</a></li>
                <li class="t389__list_item t-name t-name_xs"><a class="t389__typo" style="color: #ffffff;" href="#rec42892409" data-menu-item-number="4">Отзывы</a></li>
                <li class="t389__list_item t-name t-name_xs"><a class="t389__typo" style="color: #ffffff;" href="Вопросы" data-menu-item-number="5">Вопросы</a></li>
                
                </ul>
        </div>
              </div>
      <div class="t389__col t389__col_mobile">
        <div class="t389__typo t389__copyright t-name t-name_xs" field="text" style="color: #ffffff;">
          © 2018 Уборка+
        </div>
      </div>
      <div class="t389__col">
        <div class="t389__scroll t-align_right">
          <a class="t389__typo t-name t-name_xs t389_scrolltop" style="color: #ffffff;" href="javascript:t389_scrollToTop();">
            Наверх
            <span class="t389__icon">
          <svg width="5px" height="17px" viewbox="0 0 6 20" version="1.1">
    <defs/>
    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
        <g id="Desktop-HD-Copy-39" sketch:type="MSArtboardGroup" transform="translate(-569.000000, -1797.000000)" fill="#ffffff">
            <path d="M565.662286,1804.2076 L562.095536,1806.87166 C561.958036,1807.00916 561.958036,1807.16385 562.095536,1807.30135 L565.662286,1809.96541 C565.799786,1810.10291 565.941411,1810.0431 565.941411,1809.83616 L565.941411,1808.11741 L581.816411,1808.11741 L581.816411,1806.05491 L565.941411,1806.05491 L565.941411,1804.33616 C565.941411,1804.18147 565.866474,1804.1141 565.769536,1804.14297 C565.737224,1804.1526 565.696661,1804.17322 565.662286,1804.2076 Z" id="Shape" sketch:type="MSShapeGroup" transform="translate(571.904411, 1807.088000) rotate(-270.000000) translate(-571.904411, -1807.088000) "/>
        </g>
    </g>
</svg>
          </span>
                      </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<div id="rec43406971" class="r t-rec" style=" " data-animationappear="off" data-record-type="635">
<!-- T635 -->

<div class="t635__textholder" data-recid="43109855" data-text1="уборке квартир и домов после ремонта!" data-text2="генеральной уборке квартир" data-text3="химчистке ковров и мягкой мебели" data-text4="мытье окон" data-text5="КЛИНИНГЕ!" data-speed="100" data-backspacing-delay="1600"></div>

<script type="text/javascript">

    $(document).ready(function() {
      setTimeout(function() {
        t635_init('43406971');
      }, 500);
    });

</script>

<style>
#rec43109855 .t635__typing-text{
  color:#73b6e6;
}
#rec43109855 .typed-cursor{
  color:#ffffff;
}
</style>

</div>


<div id="rec43331385" class="r t-rec t-rec_pt_0" style="padding-top:0px; " data-animationappear="off" data-record-type="702">
<!-- T702 -->
<div class="t702">
  <div class="t-popup" data-tooltip-hook="#popup:myform" style="background-color: rgba(0,0,0,0.70);">
    <div class="t-popup__close">
      <div class="t-popup__close-wrapper">
        <svg class="t-popup__close-icon" width="23px" height="23px" viewbox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
            <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"/>
            <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"/>
          </g>
        </svg>
      </div>  
    </div>
    <div class="t-popup__container t-width t-width_6" style="background-color: #fafafa;">
                <div class="t702__wrapper">
          <div class="t702__text-wrapper t-align_center">
                        <div class="t702__descr t-descr t-descr_xs" style="font-size:24px;"><div style="font-size:22px;text-align:center;" data-customstyle="yes"><strong>Просто оставьте номер телефона и наш менеджер перезвонит Вам в течении 3 минут и задаст вопросы, которые помогут рассчитать стоимость</strong></div></div>          </div>  
                                    	  		        
    <form id="form43331385" name="form43331385" role="form" action="" method="POST" data-formactiontype="2" data-inputbox=".t-input-group" data-success-url="http://uborkaplus.com.ua/thank_you" class="t-form js-form-proccess t-form_inputs-total_1  " data-success-callback="t702_onSuccess">
	
	  			        	            	                <input type="hidden" name="formservices[]" value="3aa48ada54447f007ae5bebcfb8ff4ca" class="js-formaction-services">
	            	                <input type="hidden" name="formservices[]" value="a20d5bab8cdbbc7dd46b417056f60d72" class="js-formaction-services">
	            	                <input type="hidden" name="formservices[]" value="f7df49f977d1d130eccabf90ab221f0b" class="js-formaction-services">
	            	        
            
            <div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;"></div>

            <div class="t-form__inputsbox">

				
            <div class="t-input-group t-input-group_in" data-input-lid="1495810354468">
                              <div class="t-input-block">
                          <input type="text" name="Input" class="t-input js-tilda-rule js-tilda-mask " value="" placeholder="Введите номер телефона" data-tilda-req="1" data-tilda-mask=" + 38 (999) 9999999 " style="color:#383131; border:2px solid #73b6e6;  border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                    <div class="t-input-error"></div>
          </div>
      </div>





				<div class="t-form__errorbox-middle">
					                <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                    <div class="t-form__errorbox-text t-text t-text_md">
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                    </div>
                </div>				</div>

                <div class="t-form__submit">
                    <button type="submit" class="t-submit" style="color:#ffffff;background-color:#73b6e6;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">Отправить</button>
                </div>

            </div>

            <div class="t-form__errorbox-bottom">
            	                <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                    <div class="t-form__errorbox-text t-text t-text_md">
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-minlength"></p>
                        <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                    </div>
                </div>            </div>


    </form>


		
	<style>
	#rec43331385 input::-webkit-input-placeholder {color:#383131; opacity: 0.5;}
	#rec43331385 input::-moz-placeholder          {color:#383131; opacity: 0.5;}
	#rec43331385 input:-moz-placeholder           {color:#383131; opacity: 0.5;}
	#rec43331385 input:-ms-input-placeholder      {color:#383131; opacity: 0.5;}
	#rec43331385 textarea::-webkit-input-placeholder {color:#383131; opacity: 0.5;}
	#rec43331385 textarea::-moz-placeholder          {color:#383131; opacity: 0.5;}
	#rec43331385 textarea:-moz-placeholder           {color:#383131; opacity: 0.5;}
	#rec43331385 textarea:-ms-input-placeholder      {color:#383131; opacity: 0.5;}
	</style>
	
	          <div class="t702__form-bottom-text t-text t-text_xs t-align_center"><div style="font-size:14px;" data-customstyle="yes">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c политикой конфиденциальности</div></div>        </div>
      </div>
    </div>
</div>



<script type="text/javascript">

$(document).ready(function(){
  setTimeout(function(){
    t702_initPopup('43331385');
  }, 500);
  
    /* hack for Android */
    var ua = navigator.userAgent.toLowerCase();
    var isAndroid = ua.indexOf("android") > -1;
    if(isAndroid) {
        $('.t-body').addClass('t-body_scrollable-hack-for-android');
        $('head').append("<style>@media screen and (max-width: 560px) {\n.t-body_scrollable-hack-for-android {\noverflow: visible !important;\n}\n}\n</style>");
        console.log('Android css hack was inited');
    }
});
</script>




		
		
		
	
	<style>
	#rec43331385 .t-submit:hover{
	  background-color: #38c244 !important;
	  
	  
	  
	}	
	#rec43331385 .t-submit{
	  -webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out; transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
	}
	</style>
	
	

<style>

#rec43331385 .t-btn[data-btneffects-first],
#rec43331385 .t-btn[data-btneffects-second],
#rec43331385 .t-submit[data-btneffects-first],
#rec43331385 .t-submit[data-btneffects-second] {
	position: relative;
  overflow: hidden;
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}





</style>



<script type="text/javascript">

$(document).ready(function() {
	

	

});

</script>
</div>


<div id="rec43418017" class="r t-rec" style=" " data-animationappear="off" data-record-type="651">
<!-- T651 -->
<div class="t651" style="">
    <div class="t651__btn" style="">
        <div class="t651__btn_wrapper ">   	  
      <svg class="t651__icon" style="fill:#ffffff;" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewbox="0 0 19.3 20.1"><desc>Call</desc><path d="M4.6 7.6l-.5-.9 2-1.2L4.6 3l-2 1.3-.6-.9 2.9-1.7 2.6 4.1"/><path d="M9.9 20.1c-.9 0-1.9-.3-2.9-.9-1.7-1-3.4-2.7-4.7-4.8-3-4.7-3.1-9.2-.3-11l.5.9C.2 5.7.4 9.7 3 13.9c1.2 2 2.8 3.6 4.3 4.5 1.1.6 2.7 1.1 4.1.3l1.9-1.2L12 15l-2 1.2c-1.2.7-2.8.3-3.5-.8l-3.2-5.2c-.7-1.2-.4-2.7.8-3.5l.5.9c-.7.4-.9 1.3-.5 2l3.2 5.2c.4.7 1.5.9 2.2.5l2.8-1.7 2.6 4.1-2.8 1.7c-.7.5-1.4.7-2.2.7zM13.7 11.3l-.9-.3c.4-1.1.2-2.2-.4-3.1-.6-1-1.7-1.6-2.8-1.7l.1-1c1.5.1 2.8.9 3.6 2.1.7 1.2.9 2.7.4 4z"/><path d="M16.5 11.9l-1-.3c.5-1.8.2-3.7-.8-5.3-1-1.6-2.7-2.6-4.7-2.9l.1-1c2.2.3 4.2 1.5 5.4 3.3 1.2 1.9 1.6 4.1 1 6.2z"/><path d="M18.9 12.5l-1-.3c.7-2.5.2-5.1-1.1-7.2-1.4-2.2-3.7-3.6-6.3-4l.1-1c2.9.4 5.4 2 7 4.4 1.6 2.4 2.1 5.3 1.3 8.1z"/></svg>
      <svg class="t651__icon-close" width="16px" height="16px" viewbox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <desc>Close</desc>
        <g stroke="none" stroke-width="1" fill="#000" fill-rule="evenodd">
          <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"/>
          <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"/>
        </g>
      </svg>
    </div>
  </div>
  



  <div class="t651__popup">
    <div class="t651__popup-container" style="">
                <div class="t651__wrapper">
          <div class="t651__title t-name t-name_xl" style="">Оставьте свой телефон, и мы свяжемся с вами!</div>          <form id="form43418017" name="form43418017" role="form" action="https://forms.tildacdn.com/procces/" method="POST" data-formactiontype="2" data-inputbox=".t651__blockinput" class="js-form-proccess " data-tilda-captchakey="">                                                <input type="hidden" name="formservices[]" value="3aa48ada54447f007ae5bebcfb8ff4ca" class="js-formaction-services">
                                    <input type="hidden" name="formservices[]" value="a20d5bab8cdbbc7dd46b417056f60d72" class="js-formaction-services">
                                    <input type="hidden" name="formservices[]" value="f7df49f977d1d130eccabf90ab221f0b" class="js-formaction-services">
                            
                                                      <div class="t651__input-container">
                <div class="t651__allert-wrapper">
                  <div class="js-errorbox-all t651__blockinput-errorbox" style="display:none;">
                    <div class="t651__blockinput-errors-text t-descr t-descr_xs">
                      <p class="t651__blockinput-errors-item js-rule-error js-rule-error-all"></p>
                      <p class="t651__blockinput-errors-item js-rule-error js-rule-error-req">Required field</p>
                      <p class="t651__blockinput-errors-item js-rule-error js-rule-error-email">Please correct e-mail address</p>
                      <p class="t651__blockinput-errors-item js-rule-error js-rule-error-name">Name Wrong. Correct please</p>
                      <p class="t651__blockinput-errors-item js-rule-error js-rule-error-phone">Please correct phone number</p>
                      <p class="t651__blockinput-errors-item js-rule-error js-rule-error-string">Please enter letter, number or punctuation symbols.</p>
                    </div>
                  </div>
                  <div class="js-successbox t651__blockinput-success t-text t-text_md" style="display:none;">
                    <div class="t651__success-icon">
                      <svg width="50px" height="50px" viewbox="0 0 50 50">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g fill="#222">
                            <path d="M25.0982353,49.2829412 C11.5294118,49.2829412 0.490588235,38.2435294 0.490588235,24.6752941 C0.490588235,11.1064706 11.53,0.0670588235 25.0982353,0.0670588235 C38.6664706,0.0670588235 49.7058824,11.1064706 49.7058824,24.6752941 C49.7058824,38.2441176 38.6664706,49.2829412 25.0982353,49.2829412 L25.0982353,49.2829412 Z M25.0982353,1.83176471 C12.5023529,1.83176471 2.25529412,12.0794118 2.25529412,24.6752941 C2.25529412,37.2705882 12.5023529,47.5182353 25.0982353,47.5182353 C37.6941176,47.5182353 47.9411765,37.2705882 47.9411765,24.6752941 C47.9411765,12.0794118 37.6941176,1.83176471 25.0982353,1.83176471 L25.0982353,1.83176471 Z"/>
                            <path d="M22.8435294,30.5305882 L18.3958824,26.0829412 C18.0511765,25.7382353 18.0511765,25.18 18.3958824,24.8352941 C18.7405882,24.4905882 19.2988235,24.4905882 19.6435294,24.8352941 L22.8429412,28.0347059 L31.7282353,19.1488235 C32.0729412,18.8041176 32.6311765,18.8041176 32.9758824,19.1488235 C33.3205882,19.4935294 33.3205882,20.0517647 32.9758824,20.3964706 L22.8435294,30.5305882 L22.8435294,30.5305882 Z"/>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div class="t651__success-message t-descr t-descr_sm">Данные успешно отправлены. Спасибо!</div>
				</div>
              </div>

                <div class="t651__input-wrapper">
                  <div class="t651__blockinput">
                    <input type="text" name="phone" class="t651__input t-input js-tilda-rule " value="" placeholder="+38 (000) 000 0000" data-tilda-req="1" data-tilda-rule="phone" style=" border:1px solid #d1d1d1;  ">
                  </div>
                  <div class="t651__blockbutton">
                    <button type="submit" class="t651__submit t-submit" style="background-color:#199c68;text-transform:uppercase;">Позвоните мне</button>                  </div>
                </div>
              </div>
        </form>  		<div class="t651__additional-info">
		<div class="t651__text t-descr t-descr_sm" style="">Или вы можете позвонить нам сами:</div>  		<div class="t651__phone t-descr t-descr_sm" style="">+38 063 139 83 21</div>  		          
		</div>  
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
$(document).ready(function(){
  setTimeout(function(){
    t651_initPopup('43418017');
  }, 500);
});
</script>

      
      


</div>


<div id="rec43418968" class="r t-rec" style=" " data-animationappear="off" data-record-type="217">
<div class="t190" style="position:fixed; z-index:100000; bottom:30px; left:30px; min-height:30px;">
  <a href="javascript:t190_scrollToTop();">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewbox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
  <path style="fill:#73b6e6;" d="M47.875,24c0,13.186-10.689,23.875-23.875,23.875S0.125,37.186,0.125,24S10.814,0.125,24,0.125
      S47.875,10.814,47.875,24z M25.503,16.881l6.994,7.049c0.583,0.588,1.532,0.592,2.121,0.008c0.588-0.583,0.592-1.533,0.008-2.122
      l-9.562-9.637c-0.281-0.283-0.664-0.443-1.063-0.443c0,0,0,0-0.001,0c-0.399,0-0.782,0.159-1.063,0.442l-9.591,9.637
      c-0.584,0.587-0.583,1.537,0.005,2.121c0.292,0.292,0.675,0.437,1.058,0.437c0.385,0,0.77-0.147,1.063-0.442L22.5,16.87v19.163
      c0,0.828,0.671,1.5,1.5,1.5s1.5-0.672,1.5-1.5L25.503,16.881z"/>
  </svg>
      
      
      
  </a>
</div>

<script type="text/javascript">

  $(document).ready(function(){
    $('.t190').css("display","none");
    $(window).bind('scroll', t_throttle(function(){
      if ($(window).scrollTop() > $(window).height()) {
         if($('.t190').css('display')=="none"){$('.t190').css("display","block");}
       }else{
         if($('.t190').css('display')=="block"){$('.t190').css("display","none");}           
       }
    }, 200));  
  });  

</script>

</div>

</div>
<!--/allrecords-->

	
</body>
</html>