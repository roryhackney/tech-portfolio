colors = {
    "black"     : "#000000",
    "white"     : "#ffffff",
    "gray"      : "#828282",

    "red"       : "#ff0000",
    "orange"    : "#ff7300",
    "yellow"    : "#fbff00",
    "green"     : "#29ff44",
    "blue"      : "#4c4cea",
    "purple"    : "#b816ea",
    "pink"      : "#ff8fe6",
    
    "dk_red"    : "#b40303",
    "dk_orange" : "#cf5c00",
    "dk_yellow" : "#d5c000",
    "dk_green"  : "#0ed725",
    "dk_blue"   : "#2222cd",
    "dk_purple" : "#9603c5",
    "dk_pink"   : "#E35FC6",

    "lt_red"    : "#ff5151",
    "lt_orange" : "#ff8728",
    "lt_yellow" : "#fcff5b",
    "lt_green"  : "#62ff76",
    "lt_blue"   : "#7878ff",
    "lt_purple" : "#d74cff",
    "lt_pink"   : "#ffb5ee",

    "teal1"     : "#074749",
    "teal2"     : "#206062",
    "teal3"     : "#446E6F",
    "teal4"     : "#4C8384",
    "teal5"     : "#66B2B3",
    "teal6"     : "#91DFE0",
    "teal7"     : "#D5F6F2"
}

function draw_logo() {
    drawHor();
    drawVer();
    drawCircles();
}

function drawHor() {
    posX = padding;
    posY = padding;
    context.fillStyle = vcolor;
    context.fillRect(posX, posY, width, size - padding * 2);
    posX = size - padding - width;
    context.fillRect(posX, posY, width, size - padding * 2);
}

function drawVer() {
    horWidth = size - (padding * 2) - (width * 2);

    posX = padding + width;
    posY = (size / 2) - (height / 2) - space_between - height;
    context.fillStyle = hColor;
    context.fillRect(posX, posY, horWidth, height);
    posY += height + space_between;
    context.fillRect(posX, posY, horWidth, height);
    posY += height + space_between;
    context.fillRect(posX, posY, horWidth, height);
}

function drawCircles() {
    console.log("circsize", circSize);
    console.log("horwidth", horWidth);
    if ((quantity * circSize) > horWidth) {
        circSize = Math.floor(horWidth / quantity);
        console.log('new circsize', circSize);
        cPercent = Math.floor(circSize / size * 100);
        console.log("cpercent", cPercent);
        circleSize.value = cPercent;
        v6.innerHTML = cPercent;
    }
    
    //circles on top row
    posX = Math.floor(circSize / 2) + padding + width;
    posY = (size / 2) - space_between - height;
    drawRow(row1, posX, posY);
    posY += space_between + height;
    drawRow(row2, posX, posY);
    posY += space_between + height;
    drawRow(row3, posX, posY);
}

function drawRow(row, posX, posY) {
    orig = posX;
    colorIndex = 0;
    for (circle = 1; circle <= quantity; circle++) {
        // console.log(colors[row[colorIndex]]);
        context.fillStyle = colors[row[colorIndex]];
        colorIndex++;
        if (colorIndex >= row.length) {
            colorIndex = 0;
        }
        context.beginPath();
        context.arc(posX, posY, circSize / 2, 0, 360);
        context.fill();
        posX += circSize;
    }
    posX = orig;
}

// //set values of each input to defaults
// document.getElementById("update").onclick = update(context, SIZE, [button1, button2], [value1, value2]);
// drawLogo();

//steps:
//setup - canvas, select all inputs / buttons, onclicks, onchanges, etc
//calculate default values
//draw the initial logo: vertical, horizontal, spheres
//when the save button is clicked, overwrite default values with saved values, clear, redraw
function init_values() {
    //set logo size to 200
    logoSize.value = 200;
    document.getElementById("v1").innerHTML = 200;
    //set padding to 20
    paddingSize.value = 20;
    document.getElementById("v2").innerHTML = 20;
    //set vbar to 10
    verticalsWidth.value = 10;
    document.getElementById("v3").innerHTML = 10;
    //set hbar to 5, blue
    horizontalsHeight.value = 5;
    document.getElementById("v4").innerHTML = 5;
    horizontalsColor.value = colors["blue"];
    //set circle to 5, 5
    circleQuantity.value = 5;
    document.getElementById("v5").innerHTML = 5;
    circleSize.value = 5;
    document.getElementById("v6").innerHTML = 5;
    //spacing between bars = 5
    space.value = 5;
    document.getElementById("v7").innerHTML = 5;
}

function make_canvas() {
    canvas = document.getElementById("logo");
    canvas.width = size;
    canvas.height = size;
    canvas.style = "border: 1px solid black";
    context = canvas.getContext("2d");
}

//////////////
//GET INPUTS//
//////////////
function get_inputs() {
    //size of the logo
    logoSize = document.getElementById("logo_size");
    //padding 0-100%
    paddingSize = document.getElementById("padding");
    //width of verticals 1-50%
    verticalsWidth = document.getElementById("vbar_width");
    //color of verticals
    verticalsColor = document.getElementById("vbar_color");
    //height of horizontals 1-33%
    horizontalsHeight = document.getElementById("hbar_height");
    //color of horizontals
    horizontalsColor = document.getElementById("hbar_color");
    //if padding + width/height > 100 remove it from padding?
    //number of spheres 1-7?
    circleQuantity = document.getElementById("circle_qty");
    //height of spheres 1-33%?
    circleSize = document.getElementById("circle_size");
    //color scheme for each row of spheres eg solid color for row, multicolor schemes?
    row1Color = document.getElementById("row1colors");
    row2Color = document.getElementById("row2colors");
    row3Color = document.getElementById("row3colors");
    //space between bars
    space = document.getElementById("space_between");
}

function get_params() {
    //logo width/height
    size = logoSize.value;
    console.log("size:", size)
    //padding
    padding = Math.floor(Number(paddingSize.value) * size / 100);
    console.log("padding:", padding);
    //verticals width
    width = Math.floor(verticalsWidth.value * size / 100);
    console.log("width:", width);
    //spacing between bars
    space_between = Math.floor(Number(space.value) * size / 100);
    
    percent = Number(verticalsWidth.value);
    //if the padding + width is 100% or more, remove extra space from padding (there must be at least 1% for horizontals)
    if (percent * 2 + Number(paddingSize.value) * 2 >= 100) {
        percent = Math.floor((99 - (Number(verticalsWidth.value) * 2)) / 2);
        newpad = Math.floor(percent * size / 100);
        if (newpad < 0) {
            percent = 0;
            newpad = 0;
        }
        if (padding > newpad) {
            padding = newpad;
            paddingSize.value = percent;
            document.getElementById("v2").innerHTML = percent;
            console.log("new padding:", padding);
        }
    }

    //if the bars + spacing > height of vertical bars (100% - padding), remove from spacing. space = input, space_between = value
    vertHeightPerc = (size - padding * 2) / size * 100;
    if (Number(horizontalsHeight.value) * 3 + Number(space.value) * 2 > vertHeightPerc) {
        spacePercent = Math.floor((vertHeightPerc - Number(horizontalsHeight.value) * 3) / 2);
        if (spacePercent < 0) spacePercent = 0;
        newspace = spacePercent * size / 100;
        if (space_between > newspace) {
            space_between = newspace;
            space.value = spacePercent;
            document.getElementById("v7").innerHTML = spacePercent;
        }
    }
    console.log("space between:", space_between);

    //verticals color
    vcolor = verticalsColor.value;
    console.log("vcolor:", vcolor);
    //horizontals height
    height = Math.round(Number(horizontalsHeight.value) * size / 100);
    console.log("height:", height);
    //horizontals color
    hColor = horizontalsColor.value;
    console.log("hcolor:", hColor);
    //number of circles per row
    quantity = Number(circleQuantity.value);
    console.log("circles per row:", quantity);
    //width/height of circles
    circSize = Math.round(Number(circleSize.value) * size / 100);
    colorOptions = {
        "black":["black"],
        "gray": ["gray"],
        "rainbow": ["red", "orange", "yellow", "green", "blue", "purple", "pink"],
        "rainbow-dark": ["dk_red", "dk_orange", "dk_yellow", "dk_green", "dk_blue", "dk_purple", "dk_pink"],
        "rainbow-light": ["lt_red", "lt_orange", "lt_yellow", "lt_green", "lt_blue", "lt_purple", "lt_pink"],
        "site-colors": ["teal1", "teal2", "teal3", "teal4", "teal5", "teal6", "teal7"]
    };
    //color schemes per row
    row1 = colorOptions[row1Color.value];
    console.log("Row 1:", row1);
    // console.log(row2Color.value);
    row2 = colorOptions[row2Color.value];
    console.log("Row 2:", row2);
    row3 = colorOptions[row3Color.value];
    console.log("Row 3:", row3);
}

function update() {
    console.log("Updating...")
    //update vars with new values of form
    get_params();
    //set canvas to new size
    canvas.width = size;
    canvas.height = size;
    //clear canvas
    context.clearRect(0, 0, size, size);
    draw_logo();
}

get_inputs();
init_values();
get_params();
make_canvas();
draw_logo();

document.getElementById("update").addEventListener("click", update);
