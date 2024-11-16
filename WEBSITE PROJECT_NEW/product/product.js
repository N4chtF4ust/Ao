function menu_click(a,b){
    a.classList.toggle("click");
    b.classList.toggle("click");
}

function dropdown(ddown){
    ddown.classList.toggle("click");

}

function displayChoice(choices) {
   
  
    const choice_content = document.getElementsByClassName("choice_content");
   

    Array.from(choice_content).forEach(element => {
      element.style.display="none";
        
    });
    
       switch (choices.value) {
           case "choice1":
            choice_content[0].style.display = "block";
               break;
           case "choice2":
            choice_content[1].style.display = "block";
               break;
           case "choice3":
            choice_content[2].style.display = "block";
               break;
            case "choice4":
                choice_content[3].style.display = "block";
                break;
            case "choice5":
                choice_content[4].style.display = "block";
                break;
            case "choice6":
                choice_content[5].style.display = "block";
                break;
            case "choice7":
                choice_content[6].style.display = "block";
                break;
            case "choice8":
                choice_content[7].style.display = "block";
                break;
            case "choice9":
                choice_content[8].style.display = "block";
                break;
            case "choice10":
                choice_content[9].style.display = "block";
                break;
          
       }
      
}
function quantity_minus(a){
    let x = 0;
    x--;
    console.log(a=x);

}

function toggleCart(cart){
    cart.classList.toggle("click");


}

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("myslides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000);
    
}