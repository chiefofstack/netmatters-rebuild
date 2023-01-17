/* -------------- Cookie -------------- */

function setCookie(cookieName, cookieValue, expirationDays) {
    const date = new Date();
    date.setTime(date.getTime() + (expirationDays * 24 * 60 * 60 * 1000));
    let expires = "expires="+date.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";
}
  
function getCookie(cookieName) {
    let name = cookieName + "=";
    let cookieAttributes = document.cookie.split(';');
    for(let i = 0; i < cookieAttributes.length; i++) {
        let cookieValue = cookieAttributes[i];
        while (cookieValue.charAt(0) == ' ') {
            cookieValue = cookieValue.substring(1);
        }
        if (cookieValue.indexOf(name) == 0) {
            return cookieValue.substring(name.length, cookieValue.length);
        }
    }
    return "";
}

// show cookie dialog
$(window).on('load', () => {   
    if(!getCookie("accepted")){
        overlay.addClass("active");    
        overlay.addClass("with-form");    
        cookieConsent.addClass("active");  
        body.addClass("no-scroll"); 
    }        
});

btnChange.on('click', () => {
    //hide consent modal
    overlay.removeClass("active");
    overlay.removeClass("with-form");
    cookieConsent.removeClass("active");

    //show cookie overlay
    cookieOverlay.addClass("active");
    
   
});

btnAccept.on('click', () => {    
    setCookie("accepted", true, 365);
    overlay.removeClass("active"); 
    overlay.removeClass("with-form");
    cookieConsent.removeClass("active");        
    body.removeClass("no-scroll");   
});


/* -------------- Cookie Overlay -------------- */

btnCancel.on('click', () => {    
    //show consent modal again
    overlay.addClass("active");    
    cookieConsent.addClass("active"); 

    //hide consent Overlay
    cookieOverlay.removeClass("active");

});

btnContinue.on('click', () => {    
    setCookie("accepted", true, 365);
    cookieOverlay.removeClass("active");
    body.removeClass("no-scroll");   
});

btnPreferences.on('click', () => {
    if(btnPreferences.hasClass('active')){
        btnPreferences.removeClass("active");
        prefTable.removeAttr("style");
    }
    else{
        btnPreferences.addClass("active");
        prefTable.css({ "display": "block"});
    }
});