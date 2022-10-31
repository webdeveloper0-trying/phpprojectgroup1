$("#searchBtn").click(function () {
  if ($("#searchpid").val() == "") {
    alert("TYPE ID");
  } else {
    //json obj data key value
    let pdata = {
      searchid: $("#searchpid").val(),
    };
    $.ajax({
      type: "POST",
      url: "../../Controller/phistory/listSController.php",
      data: pdata,

      success: function (res) {
        console.log(res);
        let id = JSON.parse(res);
        console.log(id);
        $("#searchresult").empty();
        let count = 0;
        for (const pnote of id) {
          $("#searchresult").append(
            `
                <tr>
                    <td>${++count}</td>
                    <td>${pnote.write_date}</td>
                    <td>${pnote.patient_id}</td>
                    <td>Dr.${pnote.doctor_name}</td>
                    <td>${pnote.doctor_note}</td>
                    <td>${pnote.center}</td>
                    
                   
                   
                </tr>
                `
          );
        }
      },
      error: function (err) {
        console.log(err);
      },
    });
  }
});
