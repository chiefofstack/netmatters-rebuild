/* -------------- Sidebar -------------- */

function sidebarTop(){
    sidebar.css({
        "z-index": "0",
    });
}


// show sidebar
btnToggle.on('click', (event) => {
    event.preventDefault();
    newWidth = main.width() - sidebar.width();   
    
    btnToggle.addClass("active");
    overlay.addClass("active");    
    toggled = true;

    main.css({
        "left": "-330px",
    });
    overlay.css({
        "left": "-330px",
    });

    setTimeout(sidebarTop,500);
    
    
});

// hide sidebar
overlay.on('click', (event) => {    
    
    if(!cookieConsent.hasClass("active")){ //only hide overlay if cookie consent  is not displayed
        
        if(btnToggle.hasClass('active')){
            
            btnToggle.removeClass("active");
            overlay.removeClass("active");        
        }
        
        main.css({
            "left": "0",
        });
        overlay.css({
            "left": "0",
        });
        sidebar.css({
            "z-index": "-1",
        });
        
        toggled = false;
    }

});


$(window).on("resize", function(){
    header.css({ 
        "width": main.width(), 
        "transition": "0.5s",
        "visibility":"visible"
    });
    
});





