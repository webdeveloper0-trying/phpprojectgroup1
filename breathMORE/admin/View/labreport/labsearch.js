$("#searchBtns").click(function () {
  if ($("#patientID").val() == "") {
    alert("Write Something");
  } else {
    let sendData = {
      searchText: $("#patientID").val(),
    };
    $.ajax({
      type: "POST",
      url: "../../Controller/labreport/lab_searchController.php",
      data: sendData,

      success: function (res) {
        // console.log(res);
        let pinfoLists = JSON.parse(res);
        console.log(pinfoLists);
        $("#pname").empty();
        $("#phno").empty();
        $("#age").empty();
        $("#gender").empty();

        for (const pinfo of pinfoLists) {
          let gen = pinfo.gender == "0" ? "Male" : "Female";
          $("#pname").append(
            ` <label for="exampleFormControlInput1" class="form-label">Patient Name</label>
            <div class="mylabsearchRes"  name="pname">${pinfo.user_name}</div>
            `
          );

          $("#phno").append(
            `
             <label for="exampleFormControlInput1" class="form-label">Ph.No</label>
             <div class="mylabsearchRes" name="phnum">${pinfo.ph_num}</div>
              
             `
          );
          $("#age").append(
            `<label for="exampleFormControlInput1" class="form-label">Age</label>
      
            <div class="mylabsearchRes" name="age">${pinfo.age}</div>`
          );
          $("#gender").append(
            `<label for="exampleFormControlInput1" class="form-label">Gender</label>
            <div class="mylabsearchRes" name="gender">${gen}</div>`
          );
        }
        // $("#patientID").val("");
      },
      error: function (err) {
        console.log(err);
      },
    });
  }
});
