$("#searchBtn").click(function () {
  if ($("#searchDoctext").val() == "") {
    alert("Search Something");
  } else {
    let type = "";
    if ($("#rname").prop("selected")) {
      type = "name";
    } else if ($("#rcenter").prop("selected")) {
      type = "center";
    } else {
      type = "phone";
    }
    //for send data to server with object
    let searchData = {
      searchText: $("#searchDoctext").val(),
      searchType: type,
    };

    $.ajax({
      type: "POST",
      url: "../../Controller/doctor/searchController.php",

      data: searchData,

      success: function (response) {
        console.log(response);
        let doctorList = JSON.parse(response);
        console.log(doctorList);
        $("#searchresult").empty();
        let count = 1;

        for (const doctor of doctorList) {
          let gender = doctor.doctor_gender == "0" ? "Male" : "Female";
          $("#searchresult").append(
            `
            <tr>
                <td>${count++}</td>
                <td>Dr.${doctor.doctor_name}</td>
                <td>${gender}</td>
                <td>${doctor.doctor_sama}</td>
                <td>${doctor.doctor_bachelar}</td>
                <td>${doctor.center}</td>
                <td>${doctor.ph_num}</td>
                <td>${doctor.day}</td>
                <td>${doctor.start_time}-${doctor.start_time}</td>
                <td><a href="../../Controller/doctor/editController.php?id=${
                  doctor.doctor_id
                }">Edit</a> </td>
                <td><a href="../../Controller/doctor/deleteController.php?id=${
                  doctor.doctor_id
                }">delete</a></td>
               
            </tr>
            `
          );
        }

        $("#searchDoctext").val("");
      },
      error: function (err) {
        console.log(err);
      },
    });
  }
});
