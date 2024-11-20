
<?php



include ("../PHP/Ao_connect.php");



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../CSS/tab-icon/logo.ico">
    <link rel="stylesheet" href="../CSS/about.css">
    <script src="../JSC/about.js" defer></script>
    <title>AO Japanese Cuisine</title>
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
            <h3 onclick="window.location.href='#'">About Us</h3>
            <h3 onclick="window.location.href='../PHP/Ao_product.php'">Products</h3>
            <h3 onclick="window.location.href='../PHP/Ao_contacts.php'">Contacts</h3>
           
        </div>

        <button>Back</button>
    </nav>

    <section class="about">
        <div class="main">
            <img src="../CSS/about-assets/AoPlace.jpg"> 
            <div class="all-text">
                <h1>About Us</h1>
                <p>Ao is a vibrant and innovative restaurant that brings together the rich culinary traditions of Japanese, Filipino, and various Asian cuisines. Our mission is to create an unforgettable dining experience where guests can savor the unique flavors and textures that define these diverse cultures.
                </p>

            </div>
        </div>
    </section>

    
    <div class="cart_wrapper" id="cart_wrapper">
        <button id="cart_buy">Buy</button>
    </div>
    
</body>


</html>