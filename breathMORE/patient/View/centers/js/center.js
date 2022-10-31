$("#flush-headingOne").click(function (event) {
  let center = event.target.innerText;
  let center1 = {
    centerName: center,
  };
  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#eye").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#eye").append(`
        <p>(${count++}) Dr. ${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});
$("#flush-headingTwo").click(function (event) {
  let center = event.target.innerText;
  let center1 = {
    centerName: center,
  };
  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#general").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#general").append(`
        <p>(${count++}) Dr.${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});
$("#flush-headingThree").click(function (event) {
  center = event.target.innerText;
  let center1 = {
    centerName: center,
  };
  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#skin").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#skin").append(`<p>(${count++})Dr.${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});
$("#flush-headingFour").click(function (event) {
  let center = event.target.innerText;
  let center1 = {
    centerName: center,
  };
  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#surgery").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#surgery").append(`
        <p>(${count++}) Dr.${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});
$("#flush-headingFive").click(function (event) {
  let center = event.target.innerText;
  let center1 = {
    centerName: center,
  };
  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#og").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#og").append(`
        <p>(${count++}) Dr.${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});

$("#flush-headingSix").click(function (event) {
  let center = event.target.innerText;
  console.log(center);
  let center1 = {
    centerName: center,
  };
  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#child").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#child").append(`
        <p>(${count++}) Dr. ${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});
$("#flush-headingSeven").click(function (event) {
  let center = event.target.innerText;
  let center1 = {
    centerName: center,
  };

  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      // let diseases = JSON.parse(res);
      // console.log(diseases);
      $("#kidney").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#kidney").append(`
        <p>(${count++}) Dr.${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});

$("#flush-headingEight").click(function (event) {
  let center = event.target.innerText;
  let center1 = {
    centerName: center,
  };

  $.ajax({
    url: "../../Controller/centers/centerController.php",
    type: "POST",
    data: center1,
    success: function (res) {
      console.log(res);
      let centerresult = JSON.parse(res);
      console.log(centerresult);
      $("#heart").empty();
      let count = 1;
      for (const doctorlist of centerresult) {
        $("#heart").append(`
      <p>(${count++}) Dr.${doctorlist.doctor_name}</p>`);
      }
    },
    error: function (err) {
      alert("err");
    },
  });
});
