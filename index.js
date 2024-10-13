
//For scrolling
//---------------------------------------------
var Homepage = document.querySelector("#Homepage");
var homepage = document.querySelector(".homepage");
 
Homepage.addEventListener("click", function() {
homepage.scrollIntoView({ behavior: 'smooth' });
});


var menuList = document.querySelector("#Menu_list");
var foodList = document.querySelector(".foodlist");
 
menuList.addEventListener("click", function() {
foodList.scrollIntoView({ behavior: 'smooth' });
});



var Loc_ = document.querySelector("#Location");
var loc_ = document.querySelector(".location");
 
Loc_.addEventListener("click", function() {
    loc_.scrollIntoView({ behavior: 'smooth' });
});
//------------------------------------------------

//for footer

var phone = document.querySelector("#phone");
phone.addEventListener("click", function() {

  window.location.href = "tel:+639682487864"; 
});

var fb = document.querySelector("#fb");
fb.addEventListener("click", function() {

  window.location.href = "https://www.facebook.com/p/AO-Japanese-Cuisine-Restaurant-Catering-100086916185458/"; 
});

var gmail = document.querySelector("#gmail");
gmail.addEventListener("click", function() {

  window.location.href = "mailto:aojapanesecuisine.ph@gmail.com"; 
});

//--------------------------------------------------

//button for square icon  
//---------------------------------------------------
let container_for_square_icon = document.querySelector(".container-for-square-icon");
let nav_header = document.querySelector(".nav_header");
let square_icon = document.querySelector(".square-icon");
let rec_1 = document.querySelector("#rec-1");
let rec_3 = document.querySelector("#rec-3");
let rec_2 = document.querySelector("#rec-2");

container_for_square_icon.addEventListener("click", ()=> {
  container_for_square_icon.classList.toggle("click");
  nav_header.classList.toggle("click");
  square_icon.classList.toggle("click");
  rec_1.classList.toggle("click");
  rec_3.classList.toggle("click");
  rec_2.classList.toggle("click");
});
//---------------------------------------------------


//-----------------------------------
//scrolling effect animation

let land = document.getElementById("land");
let obj1 = document.getElementById("obj1");
let obj2 = document.getElementById("obj2");
let obj3 = document.getElementById("obj3");
let obj4 = document.getElementById("obj4");
let mountain = document.getElementById("Mountain");
let cloud1 = document.getElementById("cloud1");
let cloud2 = document.getElementById("cloud2");
let cloud3 = document.getElementById("cloud3");
let moon = document.getElementById("moon");

window.addEventListener('scroll', () => {

  let value = window.scrollY;
  moon.style.marginTop = value * 1 + 'px';
  cloud1.style.left = value * -3+ 'px';
  cloud2.style.marginLeft = value * -3+ 'px';
  cloud3.style.right = value * -3+ 'px';
  obj1.style.marginBottom = value * -.6+ 'px';
  obj2.style.marginBottom = value * -.8+ 'px';
  obj3.style.marginBottom = value * -.5+ 'px';
  obj4.style.marginBottom = value * -.6+ 'px';
  mountain.style.marginBottom = value * -.3+ 'px';

});

//eye switching

function eye(pass1,eye) {
  

  if (pass1.type === "password") {
    pass1.type = "text";
    eye.src = "homepage_photo/eye-slash-fill.png";

  } else {
    pass1.type = "password";
    eye.src = "homepage_photo/eye-fill.png";
    
  }
}

function toggle_signup(a,b){
  a.style.right=-50+'%';
  b.style.right=30+'%';

}



//-----------------------