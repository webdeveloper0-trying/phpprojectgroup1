$(".form-control").keyup(function(){
    console.log("keyup");
    if($(".form-control").val()){
        $(this).next().css("display","none");
    }
});