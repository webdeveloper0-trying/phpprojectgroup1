
let chBgColor1 = document.getElementById("chBgColor1");
let chBgColor2 = document.getElementById("chBgColor2");
let chBgColor3 = document.getElementById("chBgColor3");
let chTxtColor1 = document.getElementById("chTxtColor1");
let chTxtColor2 = document.getElementById("chTxtColor2");
let chLogoColor = document.getElementById("chLogoColor");


var applyBgColor1 = "", applyBgColor2 = "", applyBgColor3 = "", applyTxtColor1 = "", applyTxtColor2 = "", applyLogoColor = "",
    logoImg = "", fontOne = "", fontTwo = "", webName = "";
// Simple example, see optional options for more configuration.
const pickr1 = Pickr.create({
    el: '.color-picker1',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

const pickr2 = Pickr.create({
    el: '.color-picker2',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

const pickr3 = Pickr.create({
    el: '.color-picker3',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

const pickr4 = Pickr.create({
    el: '.color-picker4',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});

const pickr5 = Pickr.create({
    el: '.color-picker5',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});


const pickr6 = Pickr.create({
    el: '.color-picker6',
    theme: 'classic', // or 'monolith', or 'nano'

    swatches: [
        'rgba(244, 67, 54, 1)',
        'rgba(233, 30, 99, 0.95)',
        'rgba(156, 39, 176, 0.9)',
        'rgba(103, 58, 183, 0.85)',
        'rgba(63, 81, 181, 0.8)',
        'rgba(33, 150, 243, 0.75)',
        'rgba(3, 169, 244, 0.7)',
        'rgba(0, 188, 212, 0.7)',
        'rgba(0, 150, 136, 0.75)',
        'rgba(76, 175, 80, 0.8)',
        'rgba(139, 195, 74, 0.85)',
        'rgba(205, 220, 57, 0.9)',
        'rgba(255, 235, 59, 0.95)',
        'rgba(255, 193, 7, 1)'
    ],

    components: {

        // Main components
        preview: true,
        opacity: true,
        hue: true,

        // Input / output Options
        interaction: {
            hex: true,
            rgba: true,
            hsla: true,
            hsva: true,
            cmyk: true,
            input: true,
            clear: true,
            save: true
        }
    }
});





pickr1.on('change', (color, source, instance) => {
    // console.log('Event: "change"', color, source, instance);
    color = color.toRGBA();
    console.log("Color", color);

    this.chBgColor1.style.backgroundColor = `red`;
    applyBgColor1 = `rgba(${color[0]},
                ${color[1]},
                ${color[2]},
                ${color[3]})`;

    document.documentElement.style.setProperty('--firstColor', `${applyBgColor1}`);
});


pickr2.on('change', (color, source, instance) => {
    // console.log('Event: "change"', color, source, instance);
    color = color.toRGBA();
    console.log("Color", color);

    this.chBgColor2.style.backgroundColor = `rgba(${color[0]},
                                                        ${color[1]},
                                                        ${color[2]},
                                                        ${color[3]})`;
    applyBgColor2 = `rgba(${color[0]},
                    ${color[1]},
                    ${color[2]},
                    ${color[3]})`;

    document.documentElement.style.setProperty('--secondaryColor', `${applyBgColor2}`);
});


pickr3.on('change', (color, source, instance) => {
    // console.log('Event: "change"', color, source, instance);
    color = color.toRGBA();
    console.log("Color", color);

    this.chBgColor3.style.backgroundColor = `rgba(${color[0]},
                                                        ${color[1]},
                                                        ${color[2]},
                                                        ${color[3]})`;
    applyBgColor3 = `rgba(${color[0]},
                    ${color[1]},
                    ${color[2]},
                    ${color[3]})`;

    document.documentElement.style.setProperty('--thirdColor', `${applyBgColor3}`);
});


pickr4.on('change', (color, source, instance) => {
    // console.log('Event: "change"', color, source, instance);
    color = color.toRGBA();
    console.log("Color", color);

    this.chTxtColor1.style.backgroundColor = `rgba(${color[0]},
                                                        ${color[1]},
                                                        ${color[2]},
                                                        ${color[3]})`;
    applyTxtColor1 = `rgba(${color[0]},
                    ${color[1]},
                    ${color[2]},
                    ${color[3]})`;

    document.documentElement.style.setProperty('--textColorOne', `${applyTxtColor1}`);
});

pickr5.on('change', (color, source, instance) => {
    // console.log('Event: "change"', color, source, instance);
    color = color.toRGBA();
    console.log("Color", color);

    this.chTxtColor2.style.backgroundColor = `rgba(${color[0]},
                                                        ${color[1]},
                                                        ${color[2]},
                                                        ${color[3]})`;
    applyTxtColor2 = `rgba(${color[0]},
                    ${color[1]},
                    ${color[2]},
                    ${color[3]})`;

    document.documentElement.style.setProperty('--textColorTwo', `${applyTxtColor2}`);
});

pickr6.on('change', (color, source, instance) => {

    color = color.toRGBA();
    console.log("Color", color);

    this.chLogoColor.style.backgroundColor = `rgba(${color[0]},${color[1]},${color[2]},${color[3]})`;
    applyLogoColor = `rgba(${color[0]},${color[1]},${color[2]},${color[3]})`;

    document.documentElement.style.setProperty('--logoColor', `${applyLogoColor}`);
});



document.getElementById('tChange').addEventListener('click', (e) => {

    if (applyBgColor1 == "") {
        applyBgColor1 = $("#bgColor1").val();
    }
    if (applyBgColor2 == "") {
        applyBgColor2 = $("#bgColor2").val();
    }
    if (applyBgColor3 == "") {
        applyBgColor3 = $("#bgColor3").val();
    }
    if (applyTxtColor1 == "") {
        applyTxtColor1 = $("#txtColor1").val();
    }
    if (applyTxtColor2 == "") {
        applyTxtColor2 = $("#txtColor2").val();
    }
    if (applyLogoColor == "") {
        applyLogoColor = $("#logoColor").val();
    }
    if ($("#logoImg").val() == "") {
        logoImg = $("#logoImg1").val();

    }else{
        logoImg = $("#logoImg").val();
    }
    if ($("#fontOne").val() == "") {
        fontOne = $("#fontOne1").val();
    }else{
        fontOne = $("#fontOne").val();
    }
    if ($("#fontTwo").val() == "") {
        fontTwo = $("#fontTwo1").val();
    }else{
        fontTwo = $("#fontTwo").val();
    }
    if ($("#webName").val() == "") {
        webName = $("#webName1").val();
    }else{
        webName = $("#webName").val();
    }


    let sendChProps = {
        logoImg: logoImg,
        webName: webName,
        fontOne: fontOne,
        fontTwo: fontTwo,
        bgcolor1: applyBgColor1,
        bgcolor2: applyBgColor2,
        bgcolor3: applyBgColor3,
        txtColor1: applyTxtColor1,
        txtColor2: applyTxtColor2,
        logoColor: applyLogoColor
    }

    console.log("PROPS", sendChProps);

    $.ajax({
        url: "../../Controller/adminProfile/aUpColorTxtController.php",
        type: "POST",
        data: sendChProps,
        success: function () {
            console.log("OK");

        },
        error: function (err) {
            console.log(err);
        }
    })

});













