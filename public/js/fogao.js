 /**
 Fabio Henrique Rangel
 fabioh.rangel@gmail.com
 Não foram incluidos tratamentos de erro   
*/
var canvas = document.getElementById('stoveCanvas');
var ctx = canvas.getContext('2d');
var numBurners = 5;
var burnerWidth = 50;
var burnerHeight = 50;
var gapBetweenBurners = 20;
var stoveWidth = (numBurners * burnerWidth) + ((numBurners - 1) * gapBetweenBurners);
var stoveHeight = 150;
var startX = (canvas.width - stoveWidth) / 2;
var startY = (canvas.height - stoveHeight) / 2;

var burnerImage = new Image();
burnerImage.src = 'https://fabiorangel.com.br/api_users/public/img/boca.png';
var botImage = new Image();
botImage.src = 'https://fabiorangel.com.br/api_users/public/img/bot.png';
var fireImage = new Image();
fireImage.src = 'https://fabiorangel.com.br/api_users/public/img/fogo.png';


class Igniter {
  constructor(color) {
    this.color = color;
    this.active = false;
 
  }
    activate() {
      this.active = true;
    }

    deactivate() {
      this.active = false;
    }
}

class Glass {
  constructor(material, color) {
    this.material = material;
    this.color = color;
  }
}

class Burners {
  constructor(unitSmall,unitLarge) {
    this.unitSmall = unitSmall;
    this.unitLarge = unitLarge;
  }
}

// Definition of the Dimensions class
class Dimensions {
  constructor(width, height, depth) {
    this.width = width;
    this.height = height;
    this.depth = depth;
  }
}

class Brand {
  constructor(name, color, model) {
    this.name = name;
    this.color = color;
    this.model = model;
  }
}


class Lightbulb {
  constructor() {
    this.on = false;
  }

  turnOn() {
    this.on = true;
    document.getElementById('output').innerHTML += "Lightbulb turned on.<br>";
  }

  turnOff() {
    this.on = false;
    document.getElementById('output').innerHTML += "Lightbulb turned off.<br>";
  }
}

class Oven {
  constructor(lightbulb) {
    this.lightbulb = lightbulb;
  }

  turnOnLightbulb() {
    this.lightbulb.turnOn();
    document.getElementById('output').innerHTML += "Oven turned on.<br>";
    // Changing the fill color of the oven
    var canvas = document.getElementById('stoveCanvas');
    var ctx = canvas.getContext('2d');
    var ovenWidth = stoveWidth * 0.9;
    var ovenHeight = stoveHeight * 1.2;
    var ovenX = (150 - 50);
    var ovenY = startY + stoveHeight + 20;
    ctx.fillStyle = '	#ffbf00';
    ctx.fillRect(ovenX, ovenY, ovenWidth, ovenHeight);
  }

  turnOffLightbulb() {
    this.lightbulb.turnOff();
    document.getElementById('output').innerHTML += "Oven turned off.<br>";
    var canvas = document.getElementById('stoveCanvas');
    var ctx = canvas.getContext('2d');
    var ovenWidth = stoveWidth * 0.9;
    var ovenHeight = stoveHeight * 1.2;
    var ovenX = (150 - 50);
    var ovenY = startY + stoveHeight + 20;
    ctx.fillStyle = '	#000000';
    ctx.fillRect(ovenX, ovenY, ovenWidth, ovenHeight);
  }
}




function toggleOven() {
  const ovenSwitch = document.getElementById('ovenSwitch');
  if (ovenSwitch.checked) {
    stove.turnOnOven();
  } else {
    stove.turnOffOven();
  }
}

function toggleLightbulb() {
  const lightbulbSwitch = document.getElementById('lightbulbSwitch');
  if (lightbulbSwitch.checked) {
    oven.turnOnLightbulb();
  } else {
    oven.turnOffLightbulb();
  }
}





class Stove {
  constructor(dimensions, brand, burners, oven, igniters, glass) {
    this.dimensions = dimensions;
    this.brand = brand;
    this.burners = burners;
    this.oven = oven;
    this.igniters = igniters;
    this.glass = glass;
  }

  turnOnOven() {
    let audio = new Audio('https://fabiorangel.com.br/api_users/public/img/som.m4a'); // Replace 'path/to/audio/file/som_desligar.mp3' with the correct path to your audio file
    audio.play();
    ctx.drawImage(fireImage, (120), 549, 260, 20);
  }

  turnOffOven() {
    document.getElementById('output').innerHTML += "Oven turned off.<br>";
    var canvas = document.getElementById('stoveCanvas');
    var ctx = canvas.getContext('2d');
    var ovenWidth = stoveWidth * 0.9;
    var ovenHeight = stoveHeight * 1.2;
    var ovenX = (150 - 50);
    var ovenY = startY + stoveHeight + 20;
    ctx.fillStyle = '	#000000';
    ctx.fillRect(ovenX, ovenY, ovenWidth, ovenHeight);
  }
}


const ovenLightbulb = new Lightbulb();
const oven = new Oven(ovenLightbulb); 
var burners = new Burners(4,1);
var brand = new Brand('Eletrolux', 'Gray', 'X45');
var stoveDimensions = new Dimensions(100, 60, 80); // Stove dimensions: width x height x depth
var glass = new Glass('Tempered Glass','Smoke'); // Stove glass material
//instances of Igniter colors 
var stoveIgniters = [
  new Igniter("#0000ff"), // Blue
  new Igniter("#00ff80"), // Green
  new Igniter("#ff8000"), // Orange
  new Igniter("#ff0000"), // Red
  new Igniter("#ff0000"), // Red
  new Igniter("#ffff00")  // Red
];

const stove = new Stove(stoveDimensions, brand, burners, oven, stoveIgniters, glass);

//burners
burnerImage.onload = function () {

  for (var i = 0; i < numBurners; i++) {
    ctx.drawImage(burnerImage, startX + i * (burnerWidth + gapBetweenBurners), startY + (stoveHeight - burnerHeight) / 2, burnerWidth, burnerHeight);
    //buttons
    var b = i * 70.00;
    if (numBurners == 4) {
      var m = 145;
    } else if (numBurners == 5) {
      var m = 110;
    } else if (numBurners == 6) {
      var m = 75;
    }

    if (i == 0) {
      ctx.fillStyle = stoveIgniters[0].color;
    } else if (i == 1) {
      ctx.fillStyle = stoveIgniters[1].color;
    } else if (i == 2) {
      ctx.fillStyle = stoveIgniters[2].color;
    } else if (i == 3) {
      ctx.fillStyle = stoveIgniters[4].color;
    } else if (i == 4) {
      ctx.fillStyle = stoveIgniters[5].color;
    } else if (i == 5) {
      ctx.fillStyle = stoveIgniters[6].color;
    }

    ctx.beginPath();
    ctx.arc(m + b, 350, 10, 0, 2 * Math.PI);
    ctx.fill();
  }

}


//Canvas
//oven
//main body of the stove
ctx.fillStyle = '#8B8B8B';
ctx.fillRect(startX, startY, stoveWidth, stoveHeight);
var ovenWidth = stoveWidth * 1.0;
var ovenHeight = stoveHeight * 1.4;
var ovenX = startX + (stoveWidth - ovenWidth) / 2;
var ovenY = startY + stoveHeight + 0;
ctx.fillStyle = '#A9A9A9';
ctx.fillRect(ovenX, ovenY, ovenWidth, ovenHeight);

var ovenWidth = stoveWidth * 0.9;
var ovenHeight = stoveHeight * 1.2;
var ovenX = (150 - 50);
var ovenY = startY + stoveHeight + 20;
ctx.fillStyle = '	#000000';
ctx.fillRect(ovenX, ovenY, ovenWidth, ovenHeight);

//oven bot
botImage.onload = function () {
  ctx.fillStyle = '#000000';
  ctx.beginPath();
  ctx.drawImage(botImage, (230), 350, 40, 40);
  ctx.fill();
};



//divs
document.getElementById('data').innerHTML += "<b>Stove Color: </b> " + stove.brand.color + "<br>";
document.getElementById('data').innerHTML += "<b>Stove Dimensions: </b> Width: " + stoveDimensions.width + " cm, Height: " + stoveDimensions.height + " cm, Depth: " + stoveDimensions.depth + " cm<br>";
document.getElementById('data').innerHTML += "<b>Burners: </b> " + stove.burners.unitSmall+" Small and " + stove.burners.unitLarge+ " Large<br>";
document.getElementById('data').innerHTML += "<b>Brand of the stove: </b> " + stove.brand.name + "<br>";
document.getElementById('data').innerHTML += "<b>Number of Igniters:</b>" + stove.igniters.length + "<br>";
document.getElementById('data').innerHTML += "<b>Glass:</b> " + stove.glass.material + " Color:"+ stove.glass.color + "<br>";

console.log(stove);
