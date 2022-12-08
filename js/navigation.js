//Sticky head navigation

const body = $("body");
let lastScroll = 0;

// When scrolled
window.addEventListener("scroll", () => {

  const currentScroll = window.pageYOffset;
    
//   // If the scroll is at the top of the screen, ignore the rest of the function
//   if (currentScroll <= 0) {
//     body.removeClass("scroll-up");
//   }

  // if scrolled down
  if (currentScroll > lastScroll) {
    body.removeClass("scroll-up");
    body.addClass("scroll-down");
  }

  // if scrolled up
  if (currentScroll < lastScroll) {
    body.removeClass("scroll-down");
    body.addClass("scroll-up");
  }

  // Returns the current scroll Y offset and records it, to be checked against
  // the next scroll
  lastScroll = currentScroll;
});