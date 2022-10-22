$(".newsLetterBox").click(function(){
        let sendData = {
            searchBlood: $("#searchBloodType").val()
        }

        $.ajax({
            url: "../../Controller/adminBloodDonation/aSearchByBTypeController.php",
            type: "POST",
            data: sendData,
            success: function (res) {
                console.log(res);

                let bloods = JSON.parse(res);

                console.log(bloods);

               
                $("#searchResultByBlood").empty();
                for (const blood of bloods) {

                    $("#searchResultByBlood").append(
                        `
                        <tr>
                        <th scope='row'>1</th>
                        <td>${blood.user_name}</td>
                                <td>${blood.user_email}</td>
                                <td>${blood.ph_num}</td>
                                <td>${blood.date_of_birth}</td>
                                <td>${blood.gender}</td>
                        <td>${blood.blood_type}</td>
                        <td>${blood.rhd}</td>
                    </tr>
                        `
                    );
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    

});