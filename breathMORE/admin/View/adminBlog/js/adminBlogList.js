$(document).ready(function() {
    
    $(".showContent").click(function() {
        console.log("clicked");
        console.log($(this).next());

        $(this).next().removeClass("content-hide");

        $(this).next().addClass("content-show");
        
    });

    $(".btnClose").click(function(e) {
        $(this).parent().removeClass("content-show");
        $(this).parent().addClass("content-hide");
    })
})