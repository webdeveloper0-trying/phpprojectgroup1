$(".newsLetterBox").click(function(){
        let sendData = {
            userId: true
        }

        $.ajax({
            url: "../../Controller/subscribeNew/usubscribeNewController.php",
            type: "POST",
            data: sendData,
            success: function (res) {
                console.log("OKAY")            

            },
            error: function (err) {
                console.log(err);
            }
        })
    

});