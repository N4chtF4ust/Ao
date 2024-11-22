<?php
    
    
    include '..\assets\connect.php';

    include 'product_admin.php';

   

    $productList_edit = $_SESSION['productList'];

    foreach ($productList_edit as $key => $value) {
        echo "<script>console.log('" . $value. "');</script>";
    }


    

    $json_data = file_get_contents('../assets/product.json');
   
    // Decode the JSON data
    $product_json = json_decode($json_data, true); // Use 'true' to return an associative array
   
   
   
   
  /*  $jsonFilePath = '../assets/edit_list.json';

    $edit_list_array=[];
   
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
                $edit_list_array[] = $modifiedString;
                
                //echo "<script>console.log($y)</script>";
              }
   
           
          }
    }*/
    
   

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
                    $query = "UPDATE choice" . $productList_edit['TABLE'] . " SET name = '$productname', price = '$productprice', img = '$fileName' WHERE id = " . $productList_edit['ID'];

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
   


    
?>

<link rel="stylesheet" href="product_admin_edit.css">



<div class="edit_wrapper" id="draggable">



<div class="img_wrapper">

<h1><?php echo  $productList_edit['NAME'] ?></h1>
  
<img src="../assets/uploaded_img/<?php echo $productList_edit['IMAGEURL']; ?>" alt="sadsad">
  
</div>



<form action="" method="post" enctype="multipart/form-data" id = "edit">
    <h1>Table: <?php echo $product_json['choice'.$productList_edit['TABLE']]; ?></h1>
 
    <h2>Product ID: <?php echo  $productList_edit['ID'] ?></h2>
    


  

<div class="productname_wrapper">
        <label for="product_name"> <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-archive-fill" viewBox="0 0 16 16">
  <path d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1M.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8z"/>
</svg> </label> 
        <input type="text" name="product_name" placeholder="Enter new product name" required>
    </div>

    <div class="price_wrapper">
        <label for="product_price"> <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-tag-fill" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l4.586-4.586a1 1 0 0 0 0-1.414l-7-7A1 1 0 0 0 6.586 1zm4 3.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
</svg> </label> 
        <input type="number" min="1" name="product_price" placeholder="Enter new product price" required>
    </div> 

    <div class="file_wrapper">
        <label for="img"> <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
  <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
  <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1z"/>
</svg> </label> 
        <input type="file" accept=".jpg, .jpeg, .png" value="" name="img" required>

    </div>



    <div class="submit_wrapper">
    
        <input type="submit" value="Save" name="save" >
        <button onclick="window.location.href='product_admin.php'">close</button>
       
        
    </div>


</form>


    

</div>





