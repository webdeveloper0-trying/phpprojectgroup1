$("#search").click(function () {
  if ($("#searchtext").val() == "") {
    alert("ok");
  } else {
    let sendData = {
      searchtext: $("#searchtext").val(),
    };
    $.ajax({
      url: "../Controller/drugsController.php",
      type: "POST",
      data: sendData,
      success: function (res) {
        console.log(res);
        let diseases = JSON.parse(res);
        $("#searchResult").empty();
        for (const drug of diseases) {
          $("#searchResult").append(`
        <p>${drug.disease_names}------>${drug.medicine_names}</p>`);
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
  alert("You have selected the country " + selectedSubject);
});
