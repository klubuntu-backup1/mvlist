/* EasyCookie v3 [Rewrited Class Edition] */
/* Created by Klubuntu */
/* Source Code: https://github.com/Klubuntu/EasyCookieJS */

const $prefix = '[EasyCookie] ';

class EasyCookie {
    static add(cookieName, cookieValue){
        try{
      	  document.cookie =  cookieName + "=" + cookieValue +  "; expires=Thu, 31 Dec 2030 23:59:00 UTC";
          return $prefix + cookieName +  " created";
        }
        catch{
          return $prefix + "invalid cookie name or value";
	    }
    }
    static edit(cookieName, cookieValue){
        return this.add(cookieName, cookieValue);
    }
}

/* End Fragment EasyCookie.js Code */

function detectTheme(){
    if($("body").hasClass("dark")){
        $(".sponsored-txt a img").attr("src","/mvlist/img/host2play/text_light.png");
        $(".sponsored-banner a img").attr("src","/mvlist/img/host2play/banner_dark.png");
    } else {
        $(".sponsored-txt a img").attr("src","/mvlist/img/host2play/text_dark.png");
        $(".sponsored-banner a img").attr("src","/mvlist/img/host2play/banner_light.png");
    }
}

function switchTheme(){
    $("body").toggleClass("dark");
    if($("body").hasClass("dark")){
        $(".sponsored-txt a img").attr("src","/mvlist/img/host2play/text_light.png");
        $(".sponsored-banner a img").attr("src","/mvlist/img/host2play/banner_dark.png");
        EasyCookie.add("theme", "dark")
    } else {
        $(".sponsored-txt a img").attr("src","/mvlist/img/host2play/text_dark.png");
        $(".sponsored-banner a img").attr("src","/mvlist/img/host2play/banner_light.png");
        EasyCookie.edit("theme", "light")
    }
}

window.onload = detectTheme()