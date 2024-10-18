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
  obj1.style.marginBottom = value * -.2+ 'px';
  obj2.style.marginBottom = value * -.2+ 'px';
  obj3.style.marginBottom = value * -.2+ 'px';
  obj4.style.marginBottom = value * -.2+ 'px';
  mountain.style.marginBottom = value * -.2+ 'px';

});