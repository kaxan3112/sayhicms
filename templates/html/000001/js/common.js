$(document).ready(function() {

  $("#partners-slider").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items : 6,
    pagination : false,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });

  $("#main-slider").owlCarousel({
    autoPlay : 3000,
    stopOnHover : false,
    navigation:false,
    paginationSpeed : 1000,
    goToFirstSpeed : 2000,
    singleItem : true,
    autoHeight : true,
    transitionStyle:"fade"
  });

});
