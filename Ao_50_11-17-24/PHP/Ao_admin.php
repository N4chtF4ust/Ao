
<?php


include("../PHP/Ao_connect.php");


if(isset($_POST["enter_Admin"])){

  $pass = $_POST["password"];

  $enc = sha1($pass);

  $sql = "SELECT * from login where password ='". $enc ."'";
  
  $result = mysqli_query($conn, $sql);

  $fetch = mysqli_fetch_array($result);

  if($fetch["password"]== $enc)
  {
    header("location: ../accountsAdmin/accounts_admin.php");

  } else{
    
    echo "<script language='javascript' >
          alert('Wrong password.');
        </script>" ;
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ao Restaurant</title>
<link rel="stylesheet" href="../CSS/signin_signup.css">
<link rel="icon" href="../CSS/homepage_photo/logo.png" type="image/x-icon">
<script src="../JSC/signin_signup.js" defer></script>

</head>
<body>
  <div class="homepage">
          <div class="right_container" id="right_container">

            <div id="sign_in">
              <img src="../CSS/homepage_photo/logo.png" alt="AOLogo" id="logo">
              <h1>VERIFY LOG IN</h1>


              <form action="Ao_admin.php" method="post">  
                 <div id="password-wrapper" class="outline">
                  <input type="password" id="password1" name="password" placeholder="Enter password" style="order: 2">
                  <label for="password1" id="placehold" ></label>

                  <div id="eye" style="order: 3">
                  
                    <img src="..\CSS\homepage_photo\eye-fill.svg" id="img_eye1" alt="" onclick="eye(document.getElementById('password1'),this)">
             
                  </div>
                 
                  <div id="logo_pass" style="order: 1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80%" height="80%" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                      <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                  </div>
                </div>

                <input type="submit"  name="enter_Admin" value = "Sign in">
                <input type="button" onclick="window.location.href='../PHP/Ao_userType.php'" value = "Back">

              </form>


              <div id="form_lower_wrapper">            
              </div>       
            </div>

  
              </div>
             
            </div>
          </div>

          

          <div class="bg">
                  <img src="..\CSS\homepage_photo\land.png" alt="land" id="land">
                  <img src="..\CSS\homepage_photo\obj1.svg" alt="temple" id="obj1">
                  <img src="..\CSS\homepage_photo\obj2.svg" alt="shinto" id="obj2">
                  <img src="..\CSS\homepage_photo\obj3.svg" alt="temple" id="obj3">
                  <img src="..\CSS\homepage_photo\obj4.svg" alt="temple" id="obj4">
                  <img src="..\CSS\homepage_photo\Fujjjii.svg" alt="mountain" id="Mountain">
                  <img src="..\CSS\homepage_photo\cloud1.svg" alt="cloud" id="cloud1">
                  <img src="..\CSS\homepage_photo\cloud2.svg" alt="cloud" id="cloud2">
                  <img src="..\CSS\homepage_photo\cloud3.svg" alt="cloud" id="cloud3">
                  <img src="..\CSS\homepage_photo\moon.svg" alt="moon" id="moon">
          </div>

  </div>

  <div class="Footer">
    <p>&#169; 2024 AO Japanese Cuisine</p>
  </div>
  
</body>
</html>