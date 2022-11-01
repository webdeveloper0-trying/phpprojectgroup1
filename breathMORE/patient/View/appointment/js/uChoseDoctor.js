
$("#choseSpeciality").change(function () {

    console.log("Change");

    let selected = $(this).val();

    if (selected == "") {
        alert("Please input you want to search!")
    } else {

  
        switch (selected) {
            case "1":
                selected = "Eye";

                break;
            case "2":
                selected = "General";
                break;
            case "3":
                selected = "Skin";
                break;
            case "4":
                selected = "Surgery";
                break;
            case "5":
                selected = "Kidney";
                break;

        }

        

       
        let sendDoctor = {
            searchText: selected
        }

        console.log("SELECT",sendDoctor);

        $.ajax({
            url: "../../Controller/appointment/uChooseDoctorController.php",
            type:'POST',
            data: sendDoctor,

            success: function (result) {
                console.log("result", result);

                let docs = JSON.parse(result);
               

                $("#docNames").empty();
                for (const doc of docs) {

                    $("#docNames").append(`
                    <button class="doctor-btn m-3">
                    <a href="../../View/appointment/uAppointmentForm.php?id=${doc.doctor_id}">Dr.${doc.doctor_name}</a>
                </button>
               
                `)
                }
            },
            error: function (err) {
                console.log("ERR",err);
            }
        })
    }
});


