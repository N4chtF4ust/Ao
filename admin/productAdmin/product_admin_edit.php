<?php
    include '..\assets\connect.php';
    include 'product_admin.php';
    $edit_list_array=[];

    $json_data = file_get_contents('../assets/product.json');

    // Decode the JSON data
    $product_json = json_decode($json_data, true); // Use 'true' to return an associative array


  

    $jsonFilePath = '../assets/edit_list.json';
  
    if (file_exists($jsonFilePath)) {
        // Read the existing JSON data
        $jsonData = file_get_contents($jsonFilePath);
        $productList = json_decode($jsonData, true);  // Decode JSON into associative array
        $decodeproductList = json_encode($productList);

     //   echo "<script>console.log($decodeproductList)</script>";
        foreach ($productList as $row) {
       

            foreach ($row as $col ){
                $y = json_encode($col);
                $modifiedString = substr($y, 1, -1);
                $edit_list_array[] = $modifiedString;
                
                //echo "<script>console.log($y)</script>";
              }

           
          }

          if(isset($_POST["save"])){
            $productname = $_POST["product_name"];
            $productprice = $_POST["product_price"];
           
            
    
            echo "<script>console.log('$productname')</script>";
            echo "<script>console.log('$productprice')</script>";
    
          //  $query = "UPDATE choice$edit_list_array[0] SET name = '$productname', price = '$productprice' WHERE id=$edit_list_array[1]";
          //  $add_product = mysqli_query($conn,$query);

   
            $fileName = $_FILES["img"]["name"];
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $allowedTypes = array("jpg", "jpeg", "png", "gif");
            $tempName = $_FILES["img"]["tmp_name"];
            $targetPath = "../assets/uploaded_img/".$fileName;
    
           // echo '<script> console.log("'.$productname.', '. $productprice.', '. $select .', '. $targetPath.'")</script>';
    
            if(in_array($ext, $allowedTypes)){
                if(move_uploaded_file($tempName, $targetPath)){
                    $query = "UPDATE choice$edit_list_array[0] SET name = '$productname', price = '$productprice', img = '$fileName' WHERE id=$edit_list_array[1]"; 
                    $add_product = mysqli_query($conn,$query);
    
                    if(!$add_product){
                        echo "Something went wrong". mysqli_error($conn);
                      }
          
                      else{
                        echo "<script type='text/javascript'>
                        alert('Product Edited Successfully');
                        window.location.href = 'product_admin.php';
                        </script>";
                        exit;
                      }
    
              
                }
            }
       
           
    
        }
   


    }
?>

<link rel="stylesheet" href="product_admin_edit.css">

<div class="edit_wrapper" id="draggable">
<form action="" method="post" enctype="multipart/form-data" id = "edit">
    <h1><?php echo  $product_json['choice' . $edit_list_array[0]]; ?></h1>
    <h2>Product ID: <?php echo  $edit_list_array[1] ?></h2>

  

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



    <div class="submit_wrapper">
    
        <input type="submit" value="Save" name="save" >
        <button onclick="window.location.href='product_admin.php'">close</button>
       
        
    </div>


</form>


    

</div>



