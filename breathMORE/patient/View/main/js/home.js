new Splide( '.splide' ).mount();

$(".newsLetterBox").click(function(){

    $(".newsLetterBox").removeClass('hover');

 

    let sendData = {
        userId:true
    }

    console.log("SEND date", sendData);

    $.ajax({
        url: "../../Controller/subscribeNew/usubscribeNewController.php",
        type: "POST",
        data: sendData,
        success: function (res) {
            console.log("OKAY");
        },
        error: function (err) {
            console.log(err);
        }
    })
});

