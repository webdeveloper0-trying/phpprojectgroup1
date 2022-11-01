
console.log("hi");
$("#submitCount").click(function () {
    console.log("click");
    if ($("#typeCount").val() == "") {
      alert("Type Appointment Count");
    } else {
        let docId = $("#doctorId").val();
        let appointmentCount = $("#typeCount").val();

        if(appointmentCount < 0 || appointmentCount > 5){
            alert("Appointment Count cannot be greater than 5 or minus value");
        }else{
            //for send data to server with object
      let aData = {
        aCount: appointmentCount,
        docId: docId
      };
  
      $.ajax({
        type: "POST",
        url: "../../Controller/doctor/aUpdateDocCountController.php",
  
        data: aData,
  
        success: function (response) {
        //   console.log("OK",response);
        },
        error: function (err) {
          console.log(err);
        },
      });
        }

       
   
      
    }
  });
  