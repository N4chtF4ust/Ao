<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../CSS/tab-icon/logo.ico">
    <link rel="stylesheet" href="../CSS/product.css">
    <script src="../JSC/product.js" defer></script>
    <title>Products</title>
</head>
<body>

    <nav>
        <div class="logo_wrapper">
            <img src="..\CSS\product-asset\logo_processed.png" alt="">
        </div>
        
        <div class="menu_logo_wrapper" onclick="menu_click(document.getElementById('nav_wrapper'),document.getElementById('menu_logo'))">
            <div class="menu_logo" id="menu_logo"></div>
            <div class="menu_logo_center" id="menu_logo_center"></div>
        </div>

        <div class="nav_wrapper" id="nav_wrapper">
            <h3 onclick="window.location.href='../PHP/Ao_homepage.php'">Home</h3>
            <h3 onclick="window.location.href='../PHP/Ao_about.php'">About Us</h3>
           
            <h3 onclick="window.location.href='../PHP/Ao_product.php'">Products</h3>
            <h3 onclick="window.location.href='../PHP/Ao_contacts.php'">Contacts</h3>
           
        </div>

      <img src="..\CSS\product-asset\cart.svg" alt=""  id="cart" onclick="toggleCart(document.getElementById('cart_wrapper'))">
        <button>Back</button>
    </nav>

    
    <div class="slideshow-container">
        <div class="myslides fade">
            <div class="number-text"> 1 / 3</div>
            <img src="../CSS/product-asset/Banner 1.jpg" class="slide-image">
        </div>

        <div class="myslides fade">
            <div class="number-text"> 2 / 3</div>
            <img src="../CSS/product-asset/Banner 2.jpg" class="slide-image">
        </div>

        <div class="myslides fade">
            <div class="number-text"> 3 / 3</div>
            <img src="../CSS/product-asset/Banner 3.jpg" class="slide-image">
        </div> 
    </div>


    <div class="container_wrapper">
        <div class="choice">
            <select id="choices"  onchange="displayChoice(this)">
                <option value="choice1" selected>choice1</option>
                <option value="choice2">choice2</option>
                <option value="choice3">choice3</option>
                <option value="choice4">choice4</option>
                <option value="choice5">choice5</option>
                <option value="choice6">choice6</option>
                <option value="choice7">choice7</option>
                <option value="choice8">choice8</option>
                <option value="choice9">choice9</option>
                <option value="choice10">choice10</option>
              </select>
        </div>

        <div class="menu_choice_wrapper">
            <div class="wrapper_container">

                <div class="choice_content" id="choice_content1"  >
                    <div class="choice_content_wrapper">
                        <div class="review_box">
                            <div class="review_content">

                                <div class="img_wrapper">

                                </div>

                                <div class="quantity_wrapper">
                                    <p>Robert</p>
                                    <p>Php <span>69</span></p>
                                </div>

                                <button>
                                    Add to cart
                                </button>        
                            </div>
                        </div>

                        <div class="review_box">
                            <div class="review_content">

                                <div class="img_wrapper">

                                </div>

                                <div class="quantity_wrapper">
                                    <p>Robert</p>
                                    <p>Php <span>69</span></p>
                                </div>

                                <button>
                                    Add to cart
                                </button>        
                            </div>
                        </div>  <div class="review_box">
                            <div class="review_content">

                                <div class="img_wrapper">

                                </div>

                                <div class="quantity_wrapper">
                                    <p>Robert</p>
                                    <p>Php <span>69</span></p>
                                </div>

                                <button>
                                    Add to cart
                                </button>        
                            </div>
                        </div>  <div class="review_box">
                            <div class="review_content">

                                <div class="img_wrapper">

                                </div>

                                <div class="quantity_wrapper">
                                    <p>Robert</p>
                                    <p>Php <span>69</span></p>
                                </div>

                                <button>
                                    Add to cart
                                </button>        
                            </div>
                        </div>

                        <div class="review_box">
                            <div class="review_content">

                                <div class="img_wrapper">

                                </div>

                               

                                <div class="quantity_wrapper">
                                    <p>Pogi</p>
                                    <p>Php <span>69</span></p>
                                </div>

                                <button>
                                    Add to cart
                                </button>
                                
                              
                                    
                            </div>
                        </div>
            
                    </div>

                </div>

                <div class="choice_content" id="choice_content2" style="display: none;" >
                    This is option 2
                 
                    
                </div>

                <div class="choice_content" id="choice_content3" style="display: none;" >
                    this is choice 3
                    
                </div>
                <div class="choice_content" id="choice_content4" style="display: none;" >
                    this is choice 4
                    
                </div>

                <div class="choice_content" id="choice_content5" style="display: none;" >
                    this is choice 5
                    
                </div>

                <div class="choice_content" id="choice_content6" style="display: none;" >
                    this is choice 6
                    
                </div>

                <div class="choice_content" id="choice_content7" style="display: none;" >
                    this is choice 7
                    
                </div>

                <div class="choice_content" id="choice_content8" style="display: none;" >
                    this is choice 8
                    
                </div>

                <div class="choice_content" id="choice_content9" style="display: none;" >
                    this is choice 9
                    
                </div>

                <div class="choice_content" id="choice_content10" style="display: none;" >
                    this is choice 10
                    
                </div>

          


            </div>
            
        </div>

    

  
     

    </div>

    <div class="cart_wrapper" id="cart_wrapper">
        <button id="cart_buy">Buy</button>
    </div>
    
</body>


</html>