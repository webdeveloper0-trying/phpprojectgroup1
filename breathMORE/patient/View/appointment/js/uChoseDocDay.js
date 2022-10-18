
$(".docDay").click(function () {

let selected = $(this).val();

console.log("Selected",selected);

if (selected == "") {
    alert("Please input you want to search!")
} else {

   
    let sendDocDay = {
        searchText: selected
    }

    $.ajax({
        url: "../../Controller/appointment/uchoseDocDayController.php",
        type: "POST",
        data: sendDocDay,

        success: function (result) {
            console.log("result", result);
        }
    })
}
});
