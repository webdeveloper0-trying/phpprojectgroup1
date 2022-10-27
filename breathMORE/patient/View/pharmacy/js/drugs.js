$("#search").click(function () {
  if ($("#searchtext").val() == "") {
    alert("ok");
  } else {
    let sendData = {
      searchtext: $("#searchtext").val(),
    };
    $.ajax({
      url: "../../Controller/pharmacy/drugsController.php",
      type: "POST",
      data: sendData,
      success: function (res) {
        console.log(res);
        let diseases = JSON.parse(res);
        $("#drugResult").empty();
        for (const drug of diseases) {
          $("#drugResult").append(`
                        <h6 class="bg-green fw-bold ps-2 pt-2 pb-2">${drug.disease_names}</h6>
                        <p class="text-muted bg-light pt-2">${drug.medicine_names}</p>`)
        }
      },
      error: function (err) {
        alert("err");
      },
    });
  }
});
// pharmacy
$("#state").change(function () {
  var selectedSubject = $("#state option:selected").val();
  // alert("You have selected the country " + selectedSubject);

  if (selectedSubject == 0) {
    alert("Pleased Choose Your township!!");
  } else {
    console.log(selectedSubject);
    let sendData = {
      searchtownship: selectedSubject,
    };
    $.ajax({
      url: "../../Controller/pharmacy/pharmacyController.php",
      type: "POST",
      data: sendData,
      success: function (res) {
        console.log(res);
        let township = JSON.parse(res);
        $("#pharmacy").empty();
        for (const town of township) {

          $("#pharmacy").append(`
          <div class="pharmacyCard card d-flex justify-content-center align-items-center flex-column mt-4 mx-2 animate__animated animate__fadeInLeft">
          <img src="../storage/pharmacy/${town.pharmacy_photo}" class="card-img-top" alt="Chicago Skyscrapers"/>
          
          <ul class="list-group list-group-small rounded-0">
            <li class="pharmacyInfo list-group-item px-4">${town.pharmacy_name}</li>
            <li class="pharmacyInfo list-group-item px-4">${town.pharmacy_address}</li>
            <li class="pharmacyInfo list-group-item px-4">${town.ph_num}</li>
          </ul>
          
        </div>
  
           `);
        }
      },
      error: function (err) {
        alert("err");
      },
    });
  }
});
