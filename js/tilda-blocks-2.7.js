 
function t190_scrollToTop(){
    $('html, body').animate({scrollTop: 0}, 700);								
}	  
 
function t228_highlight(){
  var url=window.location.href;
  var pathname=window.location.pathname;
  if(url.substr(url.length - 1) == "/"){ url = url.slice(0,-1); }
  if(pathname.substr(pathname.length - 1) == "/"){ pathname = pathname.slice(0,-1); }
  if(pathname.charAt(0) == "/"){ pathname = pathname.slice(1); }
  if(pathname == ""){ pathname = "/"; }
  $(".t228__list_item a[href='"+url+"']").addClass("t-active");
  $(".t228__list_item a[href='"+url+"/']").addClass("t-active");
  $(".t228__list_item a[href='"+pathname+"']").addClass("t-active");
  $(".t228__list_item a[href='/"+pathname+"']").addClass("t-active");
  $(".t228__list_item a[href='"+pathname+"/']").addClass("t-active");
  $(".t228__list_item a[href='/"+pathname+"/']").addClass("t-active");
}

function t228_checkAnchorLinks(recid) {
    if ($(window).width() >= 960) {
        var t228_navLinks = $("#rec" + recid + " .t228__list_item a:not(.tooltipstered)[href*='#']");
        if (t228_navLinks.length > 0) {
            setTimeout(function(){
              t228_catchScroll(t228_navLinks);
            }, 500);
        }
    }
}

function t228_catchScroll(t228_navLinks) {
    var t228_clickedSectionId = null,
        t228_sections = new Array(),
        t228_sectionIdTonavigationLink = [],
        t228_interval = 100,
        t228_lastCall, t228_timeoutId;
    t228_navLinks = $(t228_navLinks.get().reverse());
    t228_navLinks.each(function() {
        var t228_cursection = t228_getSectionByHref($(this));
        if (typeof t228_cursection.attr("id") != "undefined") {
            t228_sections.push(t228_cursection);
        }
        t228_sectionIdTonavigationLink[t228_cursection.attr("id")] = $(this);
    });
		t228_updateSectionsOffsets(t228_sections);
    t228_sections.sort(function(a, b) {
      return b.attr("data-offset-top") - a.attr("data-offset-top");
    });
		$(window).bind('resize', t_throttle(function(){t228_updateSectionsOffsets(t228_sections);}, 200));
		$('.t228').bind('displayChanged',function(){t228_updateSectionsOffsets(t228_sections);});
		setInterval(function(){t228_updateSectionsOffsets(t228_sections);},5000);
    t228_highlightNavLinks(t228_navLinks, t228_sections, t228_sectionIdTonavigationLink, t228_clickedSectionId);

    t228_navLinks.click(function() {
        var t228_clickedSection = t228_getSectionByHref($(this));
        if (!$(this).hasClass("tooltipstered") && typeof t228_clickedSection.attr("id") != "undefined") {
            t228_navLinks.removeClass('t-active');
            $(this).addClass('t-active');
            t228_clickedSectionId = t228_getSectionByHref($(this)).attr("id");
        }
    });
    $(window).scroll(function() {
        var t228_now = new Date().getTime();
        if (t228_lastCall && t228_now < (t228_lastCall + t228_interval)) {
            clearTimeout(t228_timeoutId);
            t228_timeoutId = setTimeout(function() {
                t228_lastCall = t228_now;
                t228_clickedSectionId = t228_highlightNavLinks(t228_navLinks, t228_sections, t228_sectionIdTonavigationLink, t228_clickedSectionId);
            }, t228_interval - (t228_now - t228_lastCall));
        } else {
            t228_lastCall = t228_now;
            t228_clickedSectionId = t228_highlightNavLinks(t228_navLinks, t228_sections, t228_sectionIdTonavigationLink, t228_clickedSectionId);
        }
    });
}


function t228_updateSectionsOffsets(sections){
	$(sections).each(function(){
		var t228_curSection = $(this);
		t228_curSection.attr("data-offset-top",t228_curSection.offset().top);
	});
}


function t228_getSectionByHref(curlink) {
    var t228_curLinkValue = curlink.attr("href").replace(/\s+/g, '');
    if (t228_curLinkValue[0]=='/') { t228_curLinkValue = t228_curLinkValue.substring(1); }
    if (curlink.is('[href*="#rec"]')) {
        return $(".r[id='" + t228_curLinkValue.substring(1) + "']");
    } else {
        return $(".r[data-record-type='215']").has("a[name='" + t228_curLinkValue.substring(1) + "']");
    }
}

function t228_highlightNavLinks(t228_navLinks, t228_sections, t228_sectionIdTonavigationLink, t228_clickedSectionId) {
    var t228_scrollPosition = $(window).scrollTop(),
        t228_valueToReturn = t228_clickedSectionId;
    /*if first section is not at the page top (under first blocks)*/
    if (t228_sections.length != 0 && t228_clickedSectionId == null && t228_sections[t228_sections.length-1].attr("data-offset-top") > (t228_scrollPosition + 300)){
      t228_navLinks.removeClass('t-active');
      return null;
    }

    $(t228_sections).each(function(e) {
        var t228_curSection = $(this),
            t228_sectionTop = t228_curSection.attr("data-offset-top"),
            t228_id = t228_curSection.attr('id'),
            t228_navLink = t228_sectionIdTonavigationLink[t228_id];
        if (((t228_scrollPosition + 300) >= t228_sectionTop) || (t228_sections[0].attr("id") == t228_id && t228_scrollPosition >= $(document).height() - $(window).height())) {
            if (t228_clickedSectionId == null && !t228_navLink.hasClass('t-active')) {
                t228_navLinks.removeClass('t-active');
                t228_navLink.addClass('t-active');
                t228_valueToReturn = null;
            } else {
                if (t228_clickedSectionId != null && t228_id == t228_clickedSectionId) {
                    t228_valueToReturn = null;
                }
            }
            return false;
        }
    });
    return t228_valueToReturn;
}

function t228_setPath(){
}

function t228_setWidth(recid){
  var window_width=$(window).width();
  if(window_width>980){
    $(".t228").each(function() {
      var el=$(this);
      var left_exist=el.find('.t228__leftcontainer').length;
      var left_w=el.find('.t228__leftcontainer').outerWidth(true);
      var max_w=left_w;
      var right_exist=el.find('.t228__rightcontainer').length;
      var right_w=el.find('.t228__rightcontainer').outerWidth(true);
	  var items_align=el.attr('data-menu-items-align');
      if(left_w<right_w)max_w=right_w;
      max_w=Math.ceil(max_w);
      var center_w=0;
      el.find('.t228__centercontainer').find('li').each(function() {
        center_w+=$(this).outerWidth(true);
      });
      var padd_w=40;
      var maincontainer_width=el.find(".t228__maincontainer").outerWidth(true);
      if(maincontainer_width-max_w*2-padd_w*2>center_w+20){
          //if(left_exist>0 && right_exist>0){
		  if(items_align=="center" || typeof items_align==="undefined"){
            el.find(".t228__leftside").css("min-width",max_w+"px");
            el.find(".t228__rightside").css("min-width",max_w+"px");
            el.find(".t228__list").removeClass("t228__list_hidden");
          }
       }else{
          el.find(".t228__leftside").css("min-width","");
          el.find(".t228__rightside").css("min-width","");  
          
      }
    });
  }
}

function t228_setBg(recid){
  var window_width=$(window).width();
  if(window_width>980){
    $(".t228").each(function() {
      var el=$(this);
      if(el.attr('data-bgcolor-setbyscript')=="yes"){
        var bgcolor=el.attr("data-bgcolor-rgba");
        el.css("background-color",bgcolor);             
      }
      });
      }else{
        $(".t228").each(function() {
          var el=$(this);
          var bgcolor=el.attr("data-bgcolor-hex");
          el.css("background-color",bgcolor);
          el.attr("data-bgcolor-setbyscript","yes");
      });
  }
}

function t228_appearMenu(recid) {
      var window_width=$(window).width();
      if(window_width>980){
           $(".t228").each(function() {
                  var el=$(this);
                  var appearoffset=el.attr("data-appearoffset");
                  if(appearoffset!=""){
                          if(appearoffset.indexOf('vh') > -1){
                              appearoffset = Math.floor((window.innerHeight * (parseInt(appearoffset) / 100)));
                          }

                          appearoffset=parseInt(appearoffset, 10);

                          if ($(window).scrollTop() >= appearoffset) {
                            if(el.css('visibility') == 'hidden'){
                                el.finish();
                                el.css("top","-50px");  
                                el.css("visibility","visible");
                                var topoffset = el.data('top-offset');
                                if (topoffset && parseInt(topoffset) > 0) {
                                    el.animate({"opacity": "1","top": topoffset+"px"}, 200,function() {
                                    });       
                                    
                                } else {
                                    el.animate({"opacity": "1","top": "0px"}, 200,function() {
                                    });       
                                }
                            }
                          }else{
                            el.stop();
                            el.css("visibility","hidden");
							el.css("opacity","0");	
                          }
                  }
           });
      }

}

function t228_changebgopacitymenu(recid) {
  var window_width=$(window).width();
  if(window_width>980){
    $(".t228").each(function() {
      var el=$(this);
      var bgcolor=el.attr("data-bgcolor-rgba");
      var bgcolor_afterscroll=el.attr("data-bgcolor-rgba-afterscroll");
      var bgopacityone=el.attr("data-bgopacity");
      var bgopacitytwo=el.attr("data-bgopacity-two");
      var menushadow=el.attr("data-menushadow");
      if(menushadow=='100'){
        var menushadowvalue=menushadow;
      }else{
        var menushadowvalue='0.'+menushadow;
      }
      if ($(window).scrollTop() > 20) {
        el.css("background-color",bgcolor_afterscroll);
        if(bgopacitytwo=='0' || (typeof menushadow == "undefined" && menushadow == false)){
          el.css("box-shadow","none");
        }else{
          el.css("box-shadow","0px 1px 3px rgba(0,0,0,"+ menushadowvalue +")");
        }
      }else{
        el.css("background-color",bgcolor);
        if(bgopacityone=='0.0' || (typeof menushadow == "undefined" && menushadow == false)){
          el.css("box-shadow","none");
        }else{
          el.css("box-shadow","0px 1px 3px rgba(0,0,0,"+ menushadowvalue +")");
        }
      }
    });
  }
}

function t228_createMobileMenu(recid){
  var window_width=$(window).width(),
      el=$("#rec"+recid),
      menu=el.find(".t228"),
      burger=el.find(".t228__mobile");
  burger.click(function(e){
    menu.fadeToggle(300);
    $(this).toggleClass("t228_opened")
  })
  $(window).bind('resize', t_throttle(function(){
    window_width=$(window).width();
    if(window_width>980){
      menu.fadeIn(0);
    }
  }, 200));
}



 
function t389_scrollToTop(){
  $('html, body').animate({scrollTop: 0}, 700);								
}	  
function t585_init(recid){
  var el= $('#rec'+recid),
      toggler = el.find(".t585__header");
  
  toggler.click(function(){
    $(this).toggleClass("t585__opened");
    $(this).next().slideToggle();
    if(window.lazy=='y'){t_lazyload_update();}
  });
}
 
function t608_setHeight(recid) {  
  var el=$("#rec"+recid); 
  var image = el.find(".t608__bgimg");
  image.each(function() {
    var width = $(this).attr("data-image-width");
    var height = $(this).attr("data-image-height"); 
    var ratio = height/width;
    var padding = ratio*100;      
    $(this).css("padding-bottom", padding+"%");    
  });
} 
function t635_init(recid){
	t635_startType(recid);
}




function t635_startType(recid){
	var t635_el = $('#rec'+recid),
			t635_data = t635_el.find(".t635__textholder"),
			t635_animRecId = t635_data.attr("data-recid"),
			t635_animText = t635_findAnimElem(t635_animRecId),
			t635_phrasesList = [],
			t635_phrase1 = t635_data.attr("data-text1"),
			t635_phrase2 = t635_data.attr("data-text2"),
			t635_phrase3 = t635_data.attr("data-text3"),
			t635_phrase4 = t635_data.attr("data-text4"),
			t635_phrase5 = t635_data.attr("data-text5"),
			t635_speed = t635_data.attr("data-speed"),
		  t635_loop = t635_data.attr("data-loop"),
      t635_backspaceDelay = t635_data.attr("data-backspacing-delay");
    if (typeof t635_animText=="undefined"){return;}  
	if (typeof t635_phrase1!="undefined") {t635_phrasesList.push(t635_phrase1.slice(0,80));}
	if (typeof t635_phrase2!="undefined") {t635_phrasesList.push(t635_phrase2.slice(0,80));}
	if (typeof t635_phrase3!="undefined") {t635_phrasesList.push(t635_phrase3.slice(0,80));}
	if (typeof t635_phrase4!="undefined") {t635_phrasesList.push(t635_phrase4.slice(0,80));}
	if (typeof t635_phrase5!="undefined") {t635_phrasesList.push(t635_phrase5.slice(0,80));}


  if(t635_animText.length != 0 && t635_phrasesList.length != 0) {
    var t635_animTextHtml = t635_animText.html(),
        t635_animTextSplitted = t635_animTextHtml.split("|"),
		t635_curWin = $(window);
    t635_animText.html(t635_animTextSplitted[0] + "<span class=\"t635__typing-text\"></span>" + t635_animTextSplitted[1]);

    t635_updateAnimTextLimits(t635_animRecId);
    t635_curWin.bind('resize', t_throttle(function(){t635_updateAnimTextLimits(t635_animRecId);}, 200));
    setInterval(function(){t635_updateAnimTextLimits(t635_animRecId);},5000);

    var t635_animatedText = $("#rec"+t635_animRecId+" .t635__typing-text"),
        t635_animTextTop = t635_animatedText.attr("data-top-limit"),
        t635_animTextBottom = t635_animatedText.attr("data-bottom-limit"),
        t635_winTop = t635_curWin.scrollTop(),
        t635_winBottom = t635_winTop + t635_curWin.height();
        t635_animateText(t635_animRecId,t635_phrasesList,t635_speed,t635_loop,t635_backspaceDelay);
    if (t635_animTextBottom<t635_winTop || t635_animTextTop>t635_winBottom){
      $("#rec"+t635_animRecId+" .t635__typing-text").data('typed').pauseTyping();
      $("#rec"+t635_animRecId+" .t635__typing-text").html("");
    }

    t635_curWin.bind('scroll', t_throttle( function(){
      t635_animTextTop = t635_animatedText.attr("data-top-limit");
      t635_animTextBottom = t635_animatedText.attr("data-bottom-limit");
      t635_winTop = t635_curWin.scrollTop();
      t635_winBottom = t635_winTop + t635_curWin.height();
      if (t635_animTextBottom<t635_winTop || t635_animTextTop>t635_winBottom){
        $("#rec"+t635_animRecId+" .t635__typing-text").data('typed').pauseTyping();
        $("#rec"+t635_animRecId+" .t635__typing-text").html("");
      } else {
	    $("#rec"+t635_animRecId+" .t635__typing-text").data('typed').continueTyping();
      }
    }, 200));
  }
}




function t635_findAnimElem(animRecId) {
  var animRec = $("#rec"+animRecId);
  var animH1 = animRec.find("h1:contains(\'|\')").last();
  var animH2 = animRec.find("h2:contains(\'|\')").last();
  var animH3 = animRec.find("h3:contains(\'|\')").last();
  var animDiv = animRec.find("div:contains(\'|\')").last();
  if (typeof animH1!="undefined" && animH1.length>0) {
    return animH1;
  }
  if (typeof animH2!="undefined" && animH2.length>0) {
    return animH2;
  }
  if (typeof animH3!="undefined" && animH3.length>0) {
    return animH3;
  }
  if (typeof animDiv!="undefined" && animDiv.length>0) {
    return animDiv;
  }
}




function t635_updateAnimTextLimits(t635_animRecId){
	var t635_animatedBlock = $("#rec"+t635_animRecId),
		t635_animatedText = t635_animatedBlock.find(".t635__typing-text");
	t635_animatedText.attr("data-top-limit",t635_animatedText.offset().top);
	t635_animatedText.attr("data-bottom-limit",(t635_animatedBlock.offset().top+t635_animatedBlock.height()));
}




function t635_animateText(t635_animRecId,t635_phrasesList,t635_speed,t635_loop,t635_backspaceDelay) {
	if (typeof t635_speed=="undefined"){t635_speed = 40;}
  if (typeof t635_backspaceDelay=="undefined"){t635_backspaceDelay = 800;}
  if (typeof t635_loop=="undefined"){t635_loop = true;}else{t635_loop = false;}
	$("#rec"+t635_animRecId+" .t635__typing-text").typed({
		strings: t635_phrasesList,
		typeSpeed: t635_speed*1,
		startDelay: 600,
		backSpeed: 10,
		backDelay: t635_backspaceDelay*1,
		loop: t635_loop,
		contentType: 'text'
	});
}
 
function t651_initPopup(recid){
  if(window.$isMobile){
    if ($('#rec'+recid+' .t651__phone').length==0){ return; }  
    t651_phone = $('#rec'+recid+' .t651__phone').html().replace(/\s+/g, '');
    $('#rec'+recid+' .t651__btn').click(function(){
	  window.location.href="tel:"+t651_phone;	                             
      $('.t651__btn_wrapper').removeClass('t651__btn_animate');
      $('.t651__btn-text').css('display','none');	                             	
    });                         
  	return;
  }
  $('#rec'+recid).attr('data-animationappear','off');
  $('#rec'+recid).css('opacity','1');
  var el=$('#rec'+recid).find('.t651__popup'),
      analitics=el.attr('data-track-popup'),
      hook="TildaCallBackWidget"+recid,
      obj = $('#rec'+recid+' .t651__btn');
  obj.click(function(e){
    if (obj.hasClass("t651__btn_active")) {t651_closePopup(); return;}
    obj.addClass("t651__btn_active");
    t651_showPopup(recid);
    e.preventDefault();    
    if (analitics > '') {
        Tilda.sendEventToStatistics(analitics, hook);
    }
  });
}

function t651_showPopup(recid){
  var el=$('#rec'+recid),
      popup = el.find('.t651__popup');
                             
  $('.t651__btn_wrapper').removeClass('t651__btn_animate');
  $('.t651__btn-text').css('display','none');	

  popup.css('display', 'block');
  setTimeout(function() {
    popup.addClass('t651__popup_show');
  }, 50);

  $(document).keydown(function(e) {
    if (e.keyCode == 27) { t651_closePopup(); }
  });
}

function t651_closePopup(){
  $('.t651__btn').removeClass('t651__btn_active');
  $('.t651__popup').removeClass('t651__popup_show');
  setTimeout(function() {
    $('.t651__popup').not('.t651__popup_show').css('display', 'none');
  }, 300);
}

function t651_sendPopupEventToStatistics(popupname) {
  var virtPage = '/tilda/popup/';
  var virtTitle = 'Popup: ';
  if (popupname.substring(0,7) == '#popup:') {
      popupname = popupname.substring(7);
  }

  virtPage += popupname;
  virtTitle += popupname;
  if (window.Tilda && typeof Tilda.sendEventToStatistics == 'function') {
    Tilda.sendEventToStatistics(virtPage, virtTitle, '', 0);
  } else {

   if(ga) {
     if (window.mainTracker != 'tilda') {
       ga('send', {'hitType':'pageview', 'page':virtPage,'title':virtTitle});
     }
   }

   if (window.mainMetrika > '' && window[window.mainMetrika]) {
     window[window.mainMetrika].hit(virtPage, {title: virtTitle,referer: window.location.href});
   }

  }
}
 
function t690_onSuccess(t690_form){
	var t690_inputsWrapper = t690_form.find('.t-form__inputsbox');
    var t690_inputsHeight = t690_inputsWrapper.height();
    var t690_inputsOffset = t690_inputsWrapper.offset().top;
    var t690_inputsBottom = t690_inputsHeight + t690_inputsOffset;
	var t690_targetOffset = t690_form.find('.t-form__successbox').offset().top;

    if ($(window).width()>960) {
        var t690_target = t690_targetOffset - 200;
    }	else {
        var t690_target = t690_targetOffset - 100;
    }

    if (t690_targetOffset > $(window).scrollTop() || ($(document).height() - t690_inputsBottom) < ($(window).height()-100)) {
        t690_inputsWrapper.addClass('t690__inputsbox_hidden');
		setTimeout(function(){
			if ($(window).height() > $('.t-body').height()) {$('.t-tildalabel').animate({ opacity:0 }, 50);}
		}, 300);                                                                                                                           
    } else {
        $('html, body').animate({ scrollTop: t690_target}, 400);
        setTimeout(function(){t690_inputsWrapper.addClass('t690__inputsbox_hidden');}, 400);
    }
                                                                                                                           
	var successurl = t690_form.data('success-url');
    if(successurl && successurl.length > 0) {
        setTimeout(function(){
            window.location.href= successurl;
        },500);
    }
                                                                                                                           
} 
function t702_onSuccess(t702_form){
	var t702_inputsWrapper = t702_form.find('.t-form__inputsbox');
    var t702_inputsHeight = t702_inputsWrapper.height();
    var t702_inputsOffset = t702_inputsWrapper.offset().top;
    var t702_inputsBottom = t702_inputsHeight + t702_inputsOffset;
	var t702_targetOffset = t702_form.find('.t-form__successbox').offset().top;

    if ($(window).width()>960) {
        var t702_target = t702_targetOffset - 200;
    }	else {
        var t702_target = t702_targetOffset - 100;
    }

    if (t702_targetOffset > $(window).scrollTop() || ($(document).height() - t702_inputsBottom) < ($(window).height() - 100)) {
        t702_inputsWrapper.addClass('t702__inputsbox_hidden');
		setTimeout(function(){
			if ($(window).height() > $('.t-body').height()) {$('.t-tildalabel').animate({ opacity:0 }, 50);}
		}, 300);
    } else {
        $('html, body').animate({ scrollTop: t702_target}, 400);
        setTimeout(function(){t702_inputsWrapper.addClass('t702__inputsbox_hidden');}, 400);
    }

	var successurl = t702_form.data('success-url');
    if(successurl && successurl.length > 0) {
        setTimeout(function(){
            window.location.href= successurl;
        },500);
    }

}


function t702_lockScroll(){
  var body = $("body");
	if (!body.hasClass('t-body_scroll-locked')) {
		var bodyScrollTop = (typeof window.pageYOffset !== 'undefined') ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
		body.addClass('t-body_scroll-locked');
		body.css("top","-"+bodyScrollTop+"px");
    body.attr("data-popup-scrolltop",bodyScrollTop);
	}
}

function t702_unlockScroll(){
  var body = $("body");
	if (body.hasClass('t-body_scroll-locked')) {
    var bodyScrollTop = $("body").attr("data-popup-scrolltop");
		body.removeClass('t-body_scroll-locked');
		body.css("top","");
    body.removeAttr("data-popup-scrolltop")
		window.scrollTo(0, bodyScrollTop);
	}
}


function t702_showPopup(recid){
  var el=$('#rec'+recid),
      popup = el.find('.t-popup');

  popup.css('display', 'block');
  el.find('.t-range').trigger('popupOpened');
  if(window.lazy=='y'){t_lazyload_update();}
  setTimeout(function() {
    popup.find('.t-popup__container').addClass('t-popup__container-animated');
    popup.addClass('t-popup_show');
  }, 50);

  $('body').addClass('t-body_popupshowed t702__body_popupshowed');
  /*fix IOS11 cursor bug + general IOS background scroll*/
  if (/iPhone|iPad|iPod/i.test(navigator.userAgent) && !window.MSStream) {
    setTimeout(function() {
      t702_lockScroll();
    }, 500);
  }
  el.find('.t-popup').mousedown(function(e){
    var windowWidth = $(window).width();
    var maxScrollBarWidth = 17;
    var windowWithoutScrollBar = windowWidth - maxScrollBarWidth;
    if(e.clientX > windowWithoutScrollBar) {
        return;
    }  
    if (e.target == this) { t702_closePopup(); }
  });

  el.find('.t-popup__close').click(function(e){
    t702_closePopup();
  });

  el.find('a[href*="#"]').click(function(e){
    var url = $(this).attr('href');
    if (!url || url.substring(0,7) != '#price:') {
      t702_closePopup();
      if (!url || url.substring(0,7) == '#popup:') {
        setTimeout(function() {
          $('body').addClass('t-body_popupshowed');
        }, 300);
      }
    }
  });

  $(document).keydown(function(e) {
    if (e.keyCode == 27) { t702_closePopup(); }
  });
}

function t702_closePopup(){
  $('body').removeClass('t-body_popupshowed t702__body_popupshowed');
  /*fix IOS11 cursor bug + general IOS background scroll*/
  if (/iPhone|iPad|iPod/i.test(navigator.userAgent) && !window.MSStream) {
    t702_unlockScroll();
  }  
  $('.t-popup').removeClass('t-popup_show');
  setTimeout(function() {
    $('.t-popup').not('.t-popup_show').css('display', 'none');
  }, 300);
}

function t702_resizePopup(recid){
  var el = $("#rec"+recid),
      div = el.find(".t-popup__container").height(),
      win = $(window).height() - 120,
      popup = el.find(".t-popup__container");
  if (div > win ) {
    popup.addClass('t-popup__container-static');
  } else {
    popup.removeClass('t-popup__container-static');
  }
}
/* deprecated */
function t702_sendPopupEventToStatistics(popupname) {
  var virtPage = '/tilda/popup/';
  var virtTitle = 'Popup: ';
  if (popupname.substring(0,7) == '#popup:') {
      popupname = popupname.substring(7);
  }

  virtPage += popupname;
  virtTitle += popupname;
  if (window.Tilda && typeof Tilda.sendEventToStatistics == 'function') {
    Tilda.sendEventToStatistics(virtPage, virtTitle, '', 0);
  } else {
    if(ga) {
      if (window.mainTracker != 'tilda') {
        ga('send', {'hitType':'pageview', 'page':virtPage,'title':virtTitle});
      }
    }

    if (window.mainMetrika > '' && window[window.mainMetrika]) {
      window[window.mainMetrika].hit(virtPage, {title: virtTitle,referer: window.location.href});
    }
  }
}

function t702_initPopup(recid){
  $('#rec'+recid).attr('data-animationappear','off');
  $('#rec'+recid).css('opacity','1');
  var el=$('#rec'+recid).find('.t-popup'),
      hook=el.attr('data-tooltip-hook'),
      analitics=el.attr('data-track-popup');
  if(hook!==''){
    var obj = $('a[href="'+hook+'"]');
    obj.click(function(e){
      t702_showPopup(recid);
      t702_resizePopup(recid);
      e.preventDefault();
      if(window.lazy=='y'){t_lazyload_update();}
      if (analitics > '') {
          var virtTitle = hook;
        if (virtTitle.substring(0,7) == '#popup:') {
            virtTitle = virtTitle.substring(7);
        }
          
        Tilda.sendEventToStatistics(analitics, virtTitle);
      }

    });
  }
}
