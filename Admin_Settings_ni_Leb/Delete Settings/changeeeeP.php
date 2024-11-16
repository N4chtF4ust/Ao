<?php
include 'Config.php';

$sql = "SELECT id, username FROM reset";// yung reset dapat the same sa table name ni Ej

$result = mysqli_query($conn, $sql);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user_id"]) && isset($_POST["new_password"])) {
$user_id = $_POST["user_id"];
$new_password = $_POST["new_password"];

    if (strlen($new_password) < 8) {
    echo "Password must be at least 8 characters long."; 
     exit;
    }

          $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
            $sql = "UPDATE user_form SET password = ? WHERE id = ?";
             $stmt = mysqli_prepare($conn, $sql);
   if ($stmt === false) {
  echo "Error preparing statement: " . mysqli_error($conn); 
  exit;
 } 
mysqli_stmt_bind_param($stmt, 'si', $hashed_password, $user_id);
     if (mysqli_stmt_execute($stmt)) {
   header("Location: changeeeeP.php");
     exit; 
} else {
    echo "Error: " . mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Users</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
<div class="wrapper">
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
 <h1>Manage Users</h1>
 </div>
<div class="content_wrapper">
<form action="changeeeeP.php" method="POST"> 
 <h3 class="header-text">User List</h3>
  <table border="1">
        <thead> 
                      <tr>
                        <th>Username</th>
                        <th>Action</th>
                          </tr> 
                             </thead> 
                       <tbody>
                         <?php
                   if (mysqli_num_rows($result) > 0) {
                   while ($row = mysqli_fetch_assoc($result)) {
                                   echo "<tr>";
                           echo "<td>" . htmlspecialchars($row['username']) . "</td>";
                          echo "<td><a href='changeeeeP.php?user_id=" . $row['id'] . "'>Reset Password</a></td>";
                                echo "</tr>";
          } 
} else {
 echo "<tr>
                 <td colspan='2'>No users found</td></tr>";
                    }
                     ?>
</tbody>
            </table>
                 <?php
                if (isset($_GET['user_id'])) {
                       $user_id = $_GET['user_id'];
                                   ?>
                    <h3 class="header-text">Reset Password for User ID: 
    <?php
    
      echo htmlspecialchars($user_id); 
?>
</h3>
<label>New Password</label>
 <input type="password" name="new_password" required placeholder="New Password">
<br>
<input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user_id); ?>">
<input type="submit" value="Reset Password" class="submit-btn">
<?php 
} 
?>
</form>
 </div>
 </main> 
</div>
</body>
</html>