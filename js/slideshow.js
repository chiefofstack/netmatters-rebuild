/* -------------- Slideshow -------------- */
//Banner Slideshow
var slider = tns({
    container: '.banner.slider',
    mouseDrag: true,
    touch: true,
    controls: false,
    autoplay: true,
    lazyload: true,
    navPosition: "bottom",
    nav: true,
    autoplayHoverPause: true,
    autoplayButtonOutput: false
});

//Partners Slideshow
var partners = tns({
    container: ".partners-strip.slider",
    slideBy: 1,
    loop: true,
    touch: true,
    nav:false,
    controls: false,
    mouseDrag: true,
    swipeAngle: false,
    autoplay: true,
    speed: 400,
    fixedWidth: 250,
    autoplayDirection: "backward",
});