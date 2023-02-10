// For sticky head navigation
const trigger = $(".accordion-trigger");
const item = $(".accordion-item");


trigger.click(function(){
    $(this).toggleClass('active');
    item.slideToggle(280);
  });
  