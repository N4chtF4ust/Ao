
<?php

include("connectdb.php");


  if(isset($_POST["submit"])){
    

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $contactNum = $_POST["contactNum"];
    $pass = $_POST["password"];

    $insert_query = "INSERT INTO customer_SignUp(FirstName, LastName, Username, ContactNum, Password) VALUES ('$fname','$lname','$username','$contactNum','$pass')";
    mysqli_query($conn, $insert_query);

  }


  


?>  


<!DOCTYPE html>

<html>
</body>


<form action="Login.php" method="post">

<label for="fName"> First Name</label> <br>
<input type="text" name="fname" id="fname" placeholder="First Name" value="" required> <br>
<label for="lName"> Last Name</label> <br>
<input type="text" name="lname" id="lname" placeholder="Last Name" value="" required> <br>
<label for="username"> Username</label> <br>
<input type="text" name="username" id="username" placeholder="Username" value="" required> <br>
<label for="contactNum"> Contact Number</label> <br>
<input type="text" name="contactNum" id="contactNum" placeholder="Contact No." value="" required> <br>
<label for="password"> Password </label> <br>
<input type="password" name="password" id="password" placeholder="Password" value="" required> <br>

<button type="submit" name="submit" >Submit</button>


</form>

</body>
</html>




