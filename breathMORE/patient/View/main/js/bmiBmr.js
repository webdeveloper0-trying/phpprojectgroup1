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
        655 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
    var calculateBmrResult = $("#calculationBmr").val();
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation;
    teeCalculation = calculateBmrResult * bmrPal;
    $("#calculationTee").val(Number(teeCalculation));
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
        655 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
    var calculateBmrResult = $("#calculationBmr").val();
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation;
    teeCalculation = calculateBmrResult * bmrPal;
    $("#calculationTee").val(Number(teeCalculation));
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
        655 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
    var calculateBmrResult = $("#calculationBmr").val();
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation;
    teeCalculation = calculateBmrResult * bmrPal;
    $("#calculationTee").val(Number(teeCalculation));
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
        655 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
    var calculateBmrResult = $("#calculationBmr").val();
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation;
    teeCalculation = calculateBmrResult * bmrPal;
    $("#calculationTee").val(Number(teeCalculation));
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
        655 +
        4.35 * Number(bmrWeight) +
        4.7 * (Number(bmrFeet) * 12 + Number(bmrInches)) -
        4.7 * Number(bmrAge);
      $("#calculationBmr").val(Number(bmrCalculation));
    }
    var calculateBmrResult = $("#calculationBmr").val();
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation;
    teeCalculation = calculateBmrResult * bmrPal;
    $("#calculationTee").val(Number(teeCalculation));
  });

  $("#inputPalBmr").change(function () {
    var calculateBmrResult = $("#calculationBmr").val();
    var bmrPal = $("#inputPalBmr").val();
    var teeCalculation;
    teeCalculation = calculateBmrResult * bmrPal;
    $("#calculationTee").val(Number(teeCalculation));
  });
});
