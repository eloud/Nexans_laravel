"use strict";
const canvas = document.querySelector('canvas');
const c = canvas.getContext('2d');

canvas.width = 714;

if($(window).width()<991){
  canvas.width = 489;
}

if($(window).width()<576){
  canvas.width = $(window).width()/1.1;
}

canvas.height = 480; 



const mouse = {
  x: $('.content').width(),
  y: $('.content').height(),
  isDown: false
};

let circles = [];
let colors = ['#174C4F', '#207178', '#FF9666', '#FFE184', '#F5E9BE'];

window.addEventListener("mousedown", function() {
  mouse.isDown = true;
});

window.addEventListener("mouseup", function() {
  mouse.isDown = false;
});

// window.addEventListener("mousemove", function(event) {
//   mouse.x = event.clientX;
//   mouse.y = event.clientY;

//   if (mouse.isDown === true)
//     createCircles(2); 
// });

  window.addEventListener("resize", function() {
     canvas.width = $('.content').width(); 
     canvas.height = $('.content').height();
    // canvas.width = 714;

    // if($(window).width()<991){
    //   canvas.width = 489;
    // }

    // if($(window).width()<576){
    //   canvas.width = $(window).width()/1.1;
    // }
 });



//  window.addEventListener("click", function() {
//    createCircles(500);  
//  });

canvas.addEventListener("touchstart", function() {
  mouse.isDown = true;
});

// canvas.addEventListener("touchmove", function(event) {
//   event.preventDefault();
//   mouse.x = event.touches[0].pageX;
//   mouse.y = event.touches[0].pageY;

//   if (mouse.isDown === true)
//     createCircles(2);
// });

canvas.addEventListener("touchend", function() {
  mouse.isDown = false;
});

function createCircles(amount) {
  for (let i = 0; i < amount; i++) {
    let radius = (Math.random() * 1) + 2;
    let color = colors[Math.floor((Math.random() * colors.length))];
    circles.push(new Circle(mouse.x, mouse.y, radius, color));
  }
}

function Circle(x, y, radius, color) {
  this.x = x;
  this.y = y;
  this.radius = radius;
  this.color = color;
  this.velocity = {
    x: (Math.random() - 0.5) * 40,
    y: (Math.random() - 0.5) * 40
  };
  this.isAlive = true;

  this.update = function() {
    if (this.x - this.radius > canvas.width || this.x + this.radius < 0 || this.y - this.radius > canvas.height || this.y + this.radius < 0) {
      this.isAlive = false;
    }

    this.x += this.velocity.x;
    this.y += this.velocity.y;
    this.draw();
  };

  this.draw = function() {
    c.beginPath();
    c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);  
    c.fillStyle = this.color;
    c.fill();
    c.closePath();
  };
}

let timer = 0;
function animate() {
    
  window.requestAnimationFrame(animate);
  timer += 1;
  c.fillStyle = "white";
  c.fillRect(0, 0, canvas.width, canvas.height);
  
  if (timer < 35 && timer % 5 === 0)  
    createCircles(55);

  for (let i = 0; i < circles.length; i++) {
    if (circles[i].isAlive === false)
      circles.splice(i, 1); 
    
    // Placed below splice since having it above caused circles to flash
    if (circles[i] !== undefined) 
      circles[i].update();
  }
}


    animate();

    setInterval(function() {
      document.getElementById("canvas").style.width =parseFloat($('#modale2').width())+"px";
      document.getElementById("canvas").style.height =parseFloat($('#modale2').height())+"px";
    }, 2);



    //  $('.lancer').click(function(){
    //     $('#exampleModalCenter').modal('hide');
    //     createCircles(500);
        
    //  });
    
    