/* -------------- Sidebar -------------- */

// show sidebar
btnToggle.on('click', (event) => {
    event.preventDefault();
    newWidth = main.width() - sidebar.width();    
    
    body.addClass("has-sidebar");
    btnToggle.addClass("active");
    overlay.addClass("active");    
    toggled = true;
    header.css({ 
        "width": main.width() -330, 
        "transition": "0.5s",
        "visibility":"visible"
    });

    btnKeyword.css({
        "width":"0px",
        "visibility":"invisible"
    });

});

// hide sidebar
overlay.on('click', (event) => {
    if(btnToggle.hasClass('active')){
        body.removeClass("has-sidebar");
        btnToggle.removeClass("active");
        overlay.removeClass("active");        
    }
    header.css({ 
        "width": "100%", 
        "transition": "0.5s"
    });   

    btnKeyword.css({
        "width":"300px"
    });

    toggled = false;
});


$(window).on("resize", function(){
    header.css({ 
        "width": main.width(), 
        "transition": "0.5s",
        "visibility":"visible"
    });
    
});




