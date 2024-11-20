<?php

include '..\assets\connect.php';
if(isset($_POST['submit'])){
 
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
   $cpassword = sha1($_POST['cpassword']);

   $sql = "SELECT * FROM login WHERE username = '$username' && password = '$password' ";

   $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) > 0){

 $error[] = 'user already exist!';
    
}else{
    
    if($password != $cpassword){
 $error[] = 'password not matched!';

 }else{
    //sa reset gagawin mong user_form
 $insert = "INSERT INTO login(username, password, usertype) VALUES ('$username', '$password', 'admin')";

mysqli_query($conn, $insert); 
    }
    $row = mysqli_fetch_array($result);
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Settings</title>
<link rel="stylesheet" href="settings_admin.css">
<script src="../assets/links.js" defer></script></head>

<body>
  <nav>

  <div class="logo_wrapper">

  <img src="..\assets\logo_processed.png" alt="AoLogo">
  </div>
  <div class="customer_acc_wrapper" onclick="redirect(this)">
   <h1>Accounts</h1>
  </div>
  <div class="product_wrapper" onclick="redirect(this)">
   <h1>Product</h1>
   </div>
   <div class="staffs_wrapper" onclick="redirect(this)">
   <h1>Staffs</h1>
 </div>
  <div class="transaction_wrapper" onclick="redirect(this)">
  <h1>Transactions</h1>

  </div>
   <div class="settings_wrapper" onclick="redirect(this)">
  <h1>Settings</h1>
   </div>
    <div class="signout_wrapper">
   <button>Sign Out</button>
   </div>
   </nav>
   <main>
   <div class="page_title">
    <h1>Settings</h1>
   </div>
    <div class="content_wrapper">
      <form action="" method="POST">
    <h3 class="header-text">ADD USER TYPE</h3>
        <label>Enter a username</label>
 <input type="username" name="username" required placeholder="Username">
     <br>
 <label>Enter a password</label>
  <input type="password" name="password" required placeholder="Password">
 <br>
 <label>Confirm a password</label>
  <input type="password" name="cpassword" required placeholder="Confirm Password">
  <br>
<input type="submit" name="submit" value="Add User" class="submit-btn">
   <?php
if(isset($error)){
     foreach($error as $error){
      echo '<span class="error-msg">'.$error.'</span>';
   };
 } 
 ?>
</form>
    </div>

  </main>
  </body>
</html>