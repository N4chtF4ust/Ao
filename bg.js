
let leftcontainer = document.getElementById("leftcontainer");
let rightcontainer = document.getElementById("rightcontainer");
let rightgrass = document.getElementById("rightgrass");
let leftgrass = document.getElementById("leftgrass");
let water = document.getElementById("water");


window.addEventListener('scroll', () => {

  let value = window.scrollY;

  leftcontainer.style.left = value * -.05 + 'vh';
  rightcontainer.style.right = value * -.03 + 'vh';
  rightgrass.style.bottom = value * -.03 + '%';
  leftgrass.style.bottom = value * -.03 + '%';
  water.style.bottom = value * -.01 + '%';




});