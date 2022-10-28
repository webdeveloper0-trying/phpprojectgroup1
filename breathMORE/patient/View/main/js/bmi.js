//Calculation For BMI

$(document).ready(function () {
  $("#calculateButton").click(function () {
    var bmiWeight = $("#inputWeight").val();
    var bmiFeet = $("#inputFeet").val();
    var bmiInches = $("#inputInches").val();
    var bmiResult;
    bmiResult =
      (Number(bmiWeight) /
        Math.pow(Number(bmiFeet) * 12 + Number(bmiInches), 2)) *
      703;
    $("#showResult").html(bmiResult.toFixed(2));
  });

  //Calculation For Advance BMR

  $("#inputWeightBmr").keyup(function () {
    var bmrWeight = $("#inputWeightBmr").val();
    var bmrFeet = $("#inputFeetBmr").val();
    var bmrInches = $("#inputInchesBmr").val();
    var bmrAge = $("#inputAgeBmr").val();
    var bmrGender = $("#inputGenderBmr").val();
    var bmrCalculation;
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation = $("#calculationTee").val();

    if (bmrGender == 1) {
      bmrCalculation =
        66.47 +
        6.24 * Number(bmrWeight) +
        12.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        6.75 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    } else if (bmrGender == 2) {
      bmrCalculation =
        65.51 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
  });

  $("#inputFeetBmr").keyup(function () {
    var bmrWeight = $("#inputWeightBmr").val();
    var bmrFeet = $("#inputFeetBmr").val();
    var bmrInches = $("#inputInchesBmr").val();
    var bmrAge = $("#inputAgeBmr").val();
    var bmrGender = $("#inputGenderBmr").val();
    var bmrCalculation;
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation = $("#calculationTee").val();

    if (bmrGender == 1) {
      bmrCalculation =
        66.47 +
        6.24 * Number(bmrWeight) +
        12.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        6.75 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    } else if (bmrGender == 2) {
      bmrCalculation =
        65.51 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
  });

  $("#inputInchesBmr").keyup(function () {
    var bmrWeight = $("#inputWeightBmr").val();
    var bmrFeet = $("#inputFeetBmr").val();
    var bmrInches = $("#inputInchesBmr").val();
    var bmrAge = $("#inputAgeBmr").val();
    var bmrGender = $("#inputGenderBmr").val();
    var bmrCalculation;
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation = $("#calculationTee").val();

    if (bmrGender == 1) {
      bmrCalculation =
        66.47 +
        6.24 * Number(bmrWeight) +
        12.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        6.75 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    } else if (bmrGender == 2) {
      bmrCalculation =
        65.51 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
  });

  $("#inputAgeBmr").keyup(function () {
    var bmrWeight = $("#inputWeightBmr").val();
    var bmrFeet = $("#inputFeetBmr").val();
    var bmrInches = $("#inputInchesBmr").val();
    var bmrAge = $("#inputAgeBmr").val();
    var bmrGender = $("#inputGenderBmr").val();
    var bmrCalculation;
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation = $("#calculationTee").val();

    if (bmrGender == 1) {
      bmrCalculation =
        66.47 +
        6.24 * Number(bmrWeight) +
        12.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        6.75 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    } else if (bmrGender == 2) {
      bmrCalculation =
        65.51 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
  });

  $("#inputGenderBmr").change(function () {
    var bmrWeight = $("#inputWeightBmr").val();
    var bmrFeet = $("#inputFeetBmr").val();
    var bmrInches = $("#inputInchesBmr").val();
    var bmrAge = $("#inputAgeBmr").val();
    var bmrGender = $("#inputGenderBmr").val();
    var bmrCalculation;
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation = $("#calculationTee").val();

    if (bmrGender == 1) {
      bmrCalculation =
        66.47 +
        6.24 * Number(bmrWeight) +
        12.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        6.75 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    } else if (bmrGender == 2) {
      bmrCalculation =
        65.51 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
  });

  function teeFunction() {
    teeCalculation = bmrCalculation * bmrPal;
  }

  $("#inputGenderBmr").change(function () {
    bmrFunction();
    teeFunction();
  });

  $("#inputPalBmr").change(function () {
    teeCalculation = bmrCalculation * bmrPal;
  });
});
/*if (bmrPal == 1.2) {
  teeCalculation = 
} else if (bmrPal == 1.375) {
  //  block of code to be executed if the condition1 is false and condition2 is true
}
else if (bmrPal == 1.55) {
  //  block of code to be executed if the condition1 is false and condition2 is true
}
else if (bmrPal == 1.725) {
  //  block of code to be executed if the condition1 is false and condition2 is true
}
else if (bmrPal == 1.9) {
  //  block of code to be executed if the condition1 is false and condition2 is true
}*/
