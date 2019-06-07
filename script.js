$( document ).ready(function() {
    $(".swiper").swipe( {
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
             $(".nav-tabs li.active").next('li').find('a').tab('show');
             console.log("left");
           },
        swipeRight:function(event, direction, distance, duration, fingerCount) {
             $(".nav-tabs li.active").prev('li').find('a').tab('show');
             console.log("right");
           },
     });
       
    $(".fa-search").click(function(){
        $("#searchbox").show();
    });
});