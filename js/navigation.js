// For sticky head navigation
const header = $(".header");
const banner = $(".banner");
const tinySlider1 = $("#tns1-ow");
const main = $("main");

// For sidebar popup
const btnKeyword = $(".btn-search-input .input-field");
const overlay = $(".overlay");
const sidebar = $(".sidebar");
const body = $("body");
const btnToggle = $(".btn-toggle");

// For cookie
const html = $("html");
const cookieConsent = $(".cookie-consent");
const btnAccept = $(".btn-accept");
const btnChange = $(".btn-change");
const cookieOverlay = $(".cookie-overlay");
const btnPreferences = $(".btn-preferences");
const btnCancel = $(".btn-cancel");
const btnContinue = $(".btn-continue");
const prefTable = $(".cookie-overlay .table");


let lastScroll = 0;
let toggled = false;

/* -------------- Sticky header -------------- */

document.getElementById('main').addEventListener("scroll", () => {
    var currentScroll = main.scrollTop();


    
    // if scrolled right before the header bottom
    if(currentScroll > header.height() - 10 && currentScroll <= header.height() + 10){
    
        //if scrolled down
        if (currentScroll > lastScroll) {    
            header.css({ 
                "top": -header.height(),
                "transition": "all 300ms ease-in-out"
            }); 
        }    
        // if scrolled up, put the nav to top immediately without transition
        if (currentScroll < lastScroll) {     
            header.css({ 
                "top": "0",
                "transition": "all 300ms ease-in-out"
            });
        }
    }

    // if scrolled within the nav, fix the whitespace
    else if(currentScroll > 0 && currentScroll <= header.height()){
        //if scrolled down
        if (currentScroll > lastScroll) {            
            header.removeAttr('style');
            tinySlider1.removeAttr('style');
        }    
        // if scrolled up, put the nav to top immediately without transition
        if (currentScroll < lastScroll) {            
            header.css({ 
                        "top": "0",
                        "transition":"none"
                    });
        }
    }

    // if scrolled beyond the nav, just do the default nav slide animations
    else if(currentScroll > header.height() && !toggled){
        // if scrolled down, slide nav up (hide nav)
        if (currentScroll > lastScroll) {
            header.css({ 
                        "position":"fixed", 
                        "top": -header.height(), 
                        "width": "calc(100% - 17px)", 
                        "z-index":"3",
                        "transition": "all 300ms ease-in-out"
                        });
            tinySlider1.css({ "margin-top": header.height() });
        }

        // if scrolled up, slide nav down (show nav)
        if (currentScroll < lastScroll) {            
            header.css({ 
                        "top": "0",
                    });
        }
    }

    // if scrolled to the top
    else if( currentScroll == 0){
        header.removeAttr("style");
        tinySlider1.removeAttr("style");
       
    }  


    // store next scroll for next time
    lastScroll = currentScroll;
});

