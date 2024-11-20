<?php


$servername = "localhost";
$user = "root";
$password = "";
$dbname = "sampledb";

// Create connection
$conn = mysqli_connect($servername, $user, $password, $dbname );

// Check connection
if (!$conn) {
  die( "Connection failed: " . mysqli_connect_error());
} 

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<body>

    <form action="sampleRand.php" method="post">
            
        <input type="text" name="username" required> <br> </br> 
        <input type="submit" name="submit">

    </form>

</body>

</html> 

<?php 

if(isset($_POST["submit"])){


$name = $_POST["username"];
$rando = rand(10,2000);

$adduser = "INSERT INTO usersInfo( username, ticketNum ) VALUES ('$name','$rando')";
 


if (mysqli_query($conn,$adduser)){

        echo " Customer number: " . $rando . "<br> Customer name: " . $name ." <br>";

        echo "Successfully added";
} else {


      echo "Sorry, somethin' went wrong. <br> 
      Error: " . $sql . "<br>" . mysqli_error($conn) . 
      "<br> Please contact your nigga";

}

    
}




?>