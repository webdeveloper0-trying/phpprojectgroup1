let chBgColor1 = document.getElementById("chBgColor1");
let chBgColor2 = document.getElementById("chBgColor2");
let chBgColor3 = document.getElementById("chBgColor3");
let chTxtColor1 = document.getElementById("chTxtColor1");
let chTxtColor2 = document.getElementById("chTxtColor2");

var applyBgColor1, applyBgColor2, applyBgColor3, applyTxtColor1, applyTxtColor2;
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





pickr1.on('init', instance => {
    // console.log('Event: "init"', instance);
}).on('hide', instance => {
    // console.log('Event: "hide"', instance);
}).on('show', (color, instance) => {
    // console.log('Event: "show"', color, instance);
}).on('save', (color, instance) => {
    // console.log('Event: "save"', color, instance);
}).on('clear', instance => {
    // console.log('Event: "clear"', instance);
}).on('change', (color, source, instance) => {
    // console.log('Event: "change"', color, source, instance);
    color = color.toRGBA();
    console.log("Color", color);

    this.chBgColor1.style.backgroundColor = `rgba(${color[0]},
                                                        ${color[1]},
                                                        ${color[2]},
                                                        ${color[3]})`;
    applyBgColor1 = `rgba(${color[0]},
                ${color[1]},
                ${color[2]},
                ${color[3]})`;

    document.documentElement.style.setProperty('--firstColor', `${applyBgColor1}`);
}).on('changestop', (source, instance) => {
    // console.log('Event: "changestop"', source, instance);
}).on('cancel', instance => {
    // console.log('Event: "cancel"', instance);
}).on('swatchselect', (color, instance) => {
    // console.log('Event: "swatchselect"', color, instance);
});


pickr2.on('init', instance => {
    // console.log('Event: "init"', instance);
}).on('hide', instance => {
    // console.log('Event: "hide"', instance);
}).on('show', (color, instance) => {
    // console.log('Event: "show"', color, instance);
}).on('save', (color, instance) => {
    // console.log('Event: "save"', color, instance);
}).on('clear', instance => {
    // console.log('Event: "clear"', instance);
}).on('change', (color, source, instance) => {
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
}).on('changestop', (source, instance) => {
    // console.log('Event: "changestop"', source, instance);
}).on('cancel', instance => {
    // console.log('Event: "cancel"', instance);
}).on('swatchselect', (color, instance) => {
    // console.log('Event: "swatchselect"', color, instance);
});


pickr3.on('init', instance => {
    // console.log('Event: "init"', instance);
}).on('hide', instance => {
    // console.log('Event: "hide"', instance);
}).on('show', (color, instance) => {
    // console.log('Event: "show"', color, instance);
}).on('save', (color, instance) => {
    // console.log('Event: "save"', color, instance);
}).on('clear', instance => {
    // console.log('Event: "clear"', instance);
}).on('change', (color, source, instance) => {
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
}).on('changestop', (source, instance) => {
    // console.log('Event: "changestop"', source, instance);
}).on('cancel', instance => {
    // console.log('Event: "cancel"', instance);
}).on('swatchselect', (color, instance) => {
    // console.log('Event: "swatchselect"', color, instance);
});


pickr4.on('init', instance => {
    // console.log('Event: "init"', instance);
}).on('hide', instance => {
    // console.log('Event: "hide"', instance);
}).on('show', (color, instance) => {
    // console.log('Event: "show"', color, instance);
}).on('save', (color, instance) => {
    // console.log('Event: "save"', color, instance);
}).on('clear', instance => {
    // console.log('Event: "clear"', instance);
}).on('change', (color, source, instance) => {
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
}).on('changestop', (source, instance) => {
    // console.log('Event: "changestop"', source, instance);
}).on('cancel', instance => {
    // console.log('Event: "cancel"', instance);
}).on('swatchselect', (color, instance) => {
    // console.log('Event: "swatchselect"', color, instance);
});

pickr5.on('init', instance => {
    // console.log('Event: "init"', instance);
}).on('hide', instance => {
    // console.log('Event: "hide"', instance);
}).on('show', (color, instance) => {
    // console.log('Event: "show"', color, instance);
}).on('save', (color, instance) => {
    // console.log('Event: "save"', color, instance);
}).on('clear', instance => {
    // console.log('Event: "clear"', instance);
}).on('change', (color, source, instance) => {
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
}).on('changestop', (source, instance) => {
    // console.log('Event: "changestop"', source, instance);
}).on('cancel', instance => {
    // console.log('Event: "cancel"', instance);
}).on('swatchselect', (color, instance) => {
    // console.log('Event: "swatchselect"', color, instance);
});



document.getElementById('tChange').addEventListener('click', () => {
    localStorage.setItem("BgColor1", applyBgColor1);
    localStorage.setItem("BgColor2", applyBgColor2);
    localStorage.setItem("BgColor3", applyBgColor3);
    localStorage.setItem("txtColor1", applyTxtColor1);
    localStorage.setItem("txtColor2", applyTxtColor2);
    
});





   




