<?php
    include '..\assets\connect.php';
 

    function jsoncrud($TABLE,$ID,$NAME,$PRICE,$IMAGEURL,$AVAILABILITY,$jsonFilePath){ 
        
        
        // This function use to insert a value in json file
        if (file_exists($jsonFilePath)) {


            // Read the existing JSON data
            $jsonData = file_get_contents($jsonFilePath);
            $productList = json_decode($jsonData, true);  // Decode JSON into associative array
    
            // Flag to check if the product was updated
            $updated = false;
    
            // Loop through the existing products and update the matching ID
            foreach ($productList as &$product) {
                    $product['TABLE'] = $TABLE; 
                    $product['ID'] = $ID; 
                    $product['NAME'] = $NAME;
                    $product['PRICE'] = $PRICE;
                    $product['IMAGEURL'] = $IMAGEURL;
                    $product['AVAILABILITY'] = $AVAILABILITY;
                    $updated = true;
                    break;
                
            }
    
            // If the product was not found, add a new one
            if (!$updated) {
                $productList[] = [
                    'TABLE' => $TABLE,
                    'ID' => $ID,
                    'NAME' => $NAME,
                    'PRICE' => $PRICE,
                    'IMAGEURL' => $IMAGEURL,
                    'AVAILABILITY' => $IMAGEURL
                ];
            }
    
            // Save the updated product list back to the JSON file
            $updatedJsonData = json_encode($productList, JSON_PRETTY_PRINT);
            file_put_contents($jsonFilePath, $updatedJsonData);

            

    
    
  
        }
    }

    if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['availability'])) {

        
        $TABLE_AVAILABILITY= $_POST['TABLE_AVAILABILITY'];
        $ID_AVAILABILITY = $_POST['ID_AVAILABILITY'];
        $NAME_AVAILABILITY = $_POST['NAME_AVAILABILITY'];
        $PRICE_AVAILABILITY = $_POST['PRICE_AVAILABILITY'];
        $IMAGEURL_AVAILABILITY = $_POST['IMAGEURL_AVAILABILITY'];
        $is_it_available = $_POST['availability_availability'];
        $jsonFilePath_availability = '../assets/availability.json';

     

        jsoncrud( $TABLE_AVAILABILITY,
                  $ID_AVAILABILITY,
                  $NAME_AVAILABILITY,
                  $PRICE_AVAILABILITY,
                  $IMAGEURL_AVAILABILITY,
                  $is_it_available,
                  $jsonFilePath_availability );      
                  
                  
        if($is_it_available === "Available"){
            $is_it_available_txt = "Sold Out";
            
        }
        else if ($is_it_available === "Sold Out"){
            $is_it_available_txt = "Available";
        }
        $query = "UPDATE choice$TABLE_AVAILABILITY SET availability = '$is_it_available_txt' WHERE id=$ID_AVAILABILITY"; 
        $add_product = mysqli_query($conn,$query);  

    }
   
    if(isset($_POST["submit"])){
        $productname = $_POST["product_name"];
        $productprice = $_POST["product_price"];
        $select = $_POST["select"];

        $fileName = $_FILES["img"]["name"];
        $ext = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowedTypes = array("jpg", "jpeg", "png", "gif");
        $tempName = $_FILES["img"]["tmp_name"];
        $targetPath = "../assets/uploaded_img/".$fileName;

        echo '<script> console.log("'.$productname.', '. $productprice.', '. $select .', '. $targetPath.'")</script>';

        if(in_array($ext, $allowedTypes)){
            if(move_uploaded_file($tempName, $targetPath)){
                $query = "INSERT INTO $select (name, price,img,availability) VALUES ('$productname', '$productprice', '$fileName','Available')"; 
                $add_product = mysqli_query($conn,$query);

                if(!$add_product){
                    echo "Something went wrong". mysqli_error($conn);
                  }
      
                  else{
                    echo "<script type='text/javascript'>
                    alert('Product Added');
                    window.location.href = '" . $_SERVER['PHP_SELF'] . "';
                    </script>";
                    exit;
                  }

          
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin product</title>
    <link rel="stylesheet" href="product_admin.css">
    <script src="../assets/links.js"></script>
    <script src="product_admin.js" defer></script>

   
</head>


<body>



    <nav >

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
            <h1>Products</h1>

        </div>

        <div class="content_wrapper">


            <form action="" method="post" enctype="multipart/form-data">

                <div class="productname_wrapper">
                    <label for="product_name">Product Name:</label>
                    <input type="text" name="product_name" required>
                </div>

                <div class="price_wrapper">
                    <label for="product_price">Price:</label>
                    <input type="number" min="1" name="product_price" required>
                </div> 

                <div class="file_wrapper">
                    <label for="img">Insert file:</label>
                    <input type="file" accept=".jpg, .jpeg, .png" value="" name="img" required>

                </div>

                <div class="option_wrapper">
                    <label for="select">Select: </label>
                    <select name="select" id="" required>
                        <option value="choice1">Must Try</option>
                        <option value="choice2">Starters</option>
                        <option value="choice3">Japanese</option>
                        <option value="choice4">Korean</option>
                        <option value="choice5">Ramen</option>
                        <option value="choice6">Chinese/Filipino</option>
                        <option value="choice7">Rice</option>
                        <option value="choice8">Soup</option>
                        <option value="choice9">Desserts</option>
                        <option value="choice10">Drinks</option>
                    </select>

                </div>

                <div class="submit_wrapper">
                
                    <input type="submit" value="Add Product" name="submit" >

                </div>
            </form>

            <br>

            <div class="choice">
            <select id="choices"  onchange="displayChoice(this)">
                        <option value="choice1">Must Try</option>
                        <option value="choice2">Starters</option>
                        <option value="choice3">Japanese</option>
                        <option value="choice4">Korean</option>
                        <option value="choice5">Ramen</option>
                        <option value="choice6">Chinese/Filipino</option>
                        <option value="choice7">Rice</option>
                        <option value="choice8">Soup</option>
                        <option value="choice9">Desserts</option>
                        <option value="choice10">Drinks</option>
              </select>
        </div>

        <br>
        <div class='table_wrapper'>

   

            <?php

            // Read the contents of the JSON file
            $json_data = file_get_contents('../assets/product.json');

            // Decode the JSON data
            $product_json = json_decode($json_data, true); // Use 'true' to return an associative array\\


            $availability_list_array=[];

            $jsonFilePath = '../assets/availability.json';
   
            if (file_exists($jsonFilePath)) {
                // Read the existing JSON data
                $jsonData = file_get_contents($jsonFilePath);
                $productList = json_decode($jsonData, true);  // Decode JSON into associative array
                $decodeproductList = json_encode($productList);
           
             //   echo "<script>console.log($decodeproductList)</script>";
                foreach ($productList as $key) {
                    foreach ($key as $val ){
                        $y = json_encode($val);
                        $modifiedString = substr($y, 1, -1);
                        $availability_list_array[] = $modifiedString;
                        
                        //echo "<script>console.log($y)</script>";
                      }
                   
                  }
            }
            
            if (isset($_POST['edit'])) {
                // Declare global variables inside this block to use them
                header('Location: product_admin_edit.php');
               
            
                // Retrieve form data from POST request
                $TABLE= $_POST['TABLE'];
                $ID = $_POST['ID'];
                $NAME = $_POST['NAME'];
                $PRICE = $_POST['PRICE'];
                $IMAGEURL = $_POST['IMAGEURL'];
                $AVAILABILITY = $_POST['AVAILABILITY'];
              
            
              
                // Now you can process the data, for example:
                echo "<script>console.log('Table: $TABLE')</script>";
                echo "<script>console.log('ID: $ID')</script>";
                echo "<script>console.log('Name: $NAME')</script>";
                echo "<script>console.log('Price: $PRICE')</script>";
                echo "<script>console.log('Image URL: $IMAGEURL')</script>";
              

                $jsonFilePath_edit = '../assets/edit_list.json';

                jsoncrud( $TABLE,
                          $ID,
                          $NAME,
                          $PRICE,
                          $IMAGEURL,
                          $AVAILABILITY,
                          $jsonFilePath_edit );  
            }
            
                if(isset($_POST["delete"])){
    
                    $id = $_POST["id"];
                    $urlImg = $_POST["ImageUrl"];
    
                    for ($i=1; $i < 10 ; $i++) { 
                        $delete_id = "DELETE  FROM choice$i WHERE id = $id" ;
                        $result = mysqli_query($conn, $delete_id);
                      
                    }
    
                 //   if (file_exists($urlImg)) {
                 //       // Delete the file
                 //       unlink($urlImg);
                 //   }
                   
                   
                 }
         
            for ($i=1; $i <=10 ; $i++) { 
                     
                echo "<table border='2' class='choice_content'>
                <tr>
                    <th colspan='7'>";
                      echo $product_json['choice' . $i];
                echo"</th>
                </tr>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Price
                    </th>
                    <th>
                        Image
                    </th>

                    <th>
                        Edit
                    </th>


                    <th>
                        Remove
                    </th>

                     <th>
                        Available
                    </th>
                </tr>";

                $select_img = "SELECT * FROM choice$i";
                $result = mysqli_query($conn, $select_img);

                if ($result->num_rows>0) {
                    while($row = mysqli_fetch_array($result)){
                        
                        $id = $row["id"];
                        $name = $row["name"];
                        $price = $row["price"];
                        $fileName = $row["img"];
                        $availability = $row["availability"];
                        $imageUrl = "../assets/uploaded_img/".$fileName;

                        $array_imgname = $imageUrl;
                        //echo "<script>console.log('$i ')</script>";


                        echo "<tr id='products$id'>
                            <td id='product_id'> $id</td>
                            <td id='product_name'> $name</td>
                            <td id='product_price'> $price</td>
                            <td id='product_img'><img src='$imageUrl' alt='AoLogo'></td>

                            <td>   
                                <form id='editForm' method='POST' class='button'>
                                    <input type='hidden' name='TABLE' value='$i'>
                                    <input type='hidden' name='ID' value='$id'>
                                    <input type='hidden' name='NAME' value='$name'>
                                    <input type='hidden' name='PRICE' value='$price'>
                                    <input type='hidden' name='IMAGEURL' value='$fileName'>
                                    <input type='hidden' name='AVAILABILITY' value='$availability'>
                                   
                                   
                                    <button type='submit' name='edit'> Edit </button>

                                </form>
                            </td>
                            <td>
                                <form  method='POST' class='button' >
                                    <input type='hidden' name='ImageUrl' value='$imageUrl'>
                                    <input type='hidden' name='id' value='$id'>
                                    <button name='delete' value ='$id'>Delete</button>
                                </form>
                            </td>

                            <td>
                                <form  method='POST' class='button'>
                                    <input type='hidden' name='TABLE_AVAILABILITY' value='$i'>
                                    <input type='hidden' name='ID_AVAILABILITY' value='$id'>
                                    <input type='hidden' name='NAME_AVAILABILITY' value='$name'>
                                    <input type='hidden' name='PRICE_AVAILABILITY' value='$price'>
                                    <input type='hidden' name='IMAGEURL_AVAILABILITY' value='$fileName'>
                                    <input type='hidden' name='availability_availability' value='$availability'>
                                    
                                    <button name='availability'>$availability</button>
                                </form>
                            </td>
                        </tr>";
                      
                    }
                }

               echo  "</table> <br>";
               

            }
            ?>

              </div>
            <br>
        </div>
    </main>

  
</body>
</html>