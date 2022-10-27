document.getElementById('alertSubmit').addEventListener('click', (e) => {
    console.log("c");

    // if($("#alertTxt").val()){
        let sendAlert = {
            alert:$("#alertTxt").val()
         }

        //  let sendAlert = $("#alertTxt").val();

        //  $(".dailyAlert").innerHTML = `a,${sendAlert}`;
         
     
         console.log("PROPS", sendAlert["alert"]);
     
         $.ajax({
             url: "../../Controller/adminProfile/adminAlertController.php",
             type: "POST",
             data: sendAlert,
             success: function () {
                 console.log("OK");
     
             },
             error: function (err) {
                 console.log(err);
             }
         })
    // }

});






