//Sticky head navigation
const header = $(".header");
let lastScroll = 0;


// When scrolled
window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    
    //if scrolled beyond the nav, slide the nav up or down
    if(currentScroll > header.height()){
        // if scrolled down, slide the nav up 
        if (currentScroll > lastScroll) {
            //  if have scrolled beyond the nav before, just do as normal slide up
            if(header.hasClass('haveScrolledUp')){                
                header.css({ "top": -header.height() });  
                header.addClass("sticky");  
            }
            else{ //if not, apply sticky position first and move up without transition
                header.addClass("sticky"); 
                header.css({ "top": -header.height(), "transition":"none" });
            }
        }
        // if scrolled up, slide the nav down up
        if (currentScroll < lastScroll) {            
            header.removeAttr("style"); //clear styles to activate default transition
            header.css({ "top":"0" });
            header.addClass('haveScrolledUp');
            
        }
            
    }

    //if scrolled within the nav
    else if (currentScroll <= header.height() && currentScroll != 0){   
        // if scrolled up, return the nav default position
        if (currentScroll < lastScroll) {
            header.css({ "top":"0" });       
        } 
    }    

    // if scrolled to the top
    else if(currentScroll == 0){
        header.removeAttr("style");
        header.removeClass('sticky');
        header.removeClass('haveScrolledUp'); 
        
    }
    
    // store next scroll for next time
    lastScroll = currentScroll;
});