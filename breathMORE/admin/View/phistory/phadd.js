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
      url: "../../Controller/phistory/phsearchController.php",
      data: pdata,

      success: function (res) {
        let plists = JSON.parse(res);
        console.log(plists);
        $("#searchresult").empty();

        for (const plist of plists) {
          $("#searchresult").append(
            `
            <tr>
               
                <td>${plist.user_name}</td>
                <td>${plist.diagnosis}</td>
                <td>${plist.categories}</td>
                <td>${plist.doctor_id}</td>   
                
            </tr>
          
            `
          );
        }

        // $("#searchpid").val("");
      },
    });
  }
});

// {
//
// }
