



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../CSS/tab-icon/logo.ico">
    <script src="../JSC/contact.js" defer></script>
    <link rel="stylesheet" href="../CSS/contact.css">
    <title>Contact</title>
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
            <h3 onclick="window.location.href='#'">Contacts</h3>
        </div>
       
        
        <button>Back</button>
    </nav>





    <div class="container_wrapper">   
            <div class="contact_wrapper">
               
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.5779508871879!2d121.26411999999999!3d14.524149000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397eb7aa95c0815%3A0xefdc29a848e2d9a5!2sAO%20Japanese%20Cuisine%20Restaurant!5e0!3m2!1sen!2sph!4v1729160080076!5m2!1sen!2sph"
                    class="left_container" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             
                <div class="right_container">

                    <h1>Contacts</h1>
                    <form action="" id="contact_form">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name">

                        <label for="contact">Phone Number: </label>
                        <input type="tel" name="contact" id="contact">

                        <label for="Messages">Messages: </label>
                        <textarea name="Messages" id="Messages" placeholder="Enter your message here...." form="contact_form"></textarea>
                        <br>
                        <input type="submit" value="Send" class="Send" id="Send">
                    </form>
                
                    <div class="social">
                        <h3>Social Links</h3>
                        <div class="social_svg" >
                            <img src="..\CSS\contact-assets\fb.svg" alt="" onclick="window.location.href='https://www.facebook.com/profile.php?id=100086916185458&mibextid=JRoKGi'">
                            <img src="..\CSS\contact-assets\instagram.svg" alt="" onclick="window.location.href='https://www.instagram.com/aojapanese_restaurantph?igsh=MW42NXo4cGc5a2ttMw=='">

                        </div>
                       
                    </div>
                    
                </div>
                
            </div>
       
    </div>
    
</body>


</html>