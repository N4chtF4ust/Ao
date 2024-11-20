<?php
    include '..\assets\connect.php';

    include 'product_admin.php';

    
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

                  echo "<script type='text/javascript'>
                  window.location.href = 'product_admin.php';
                  </script>";


                

       if($is_it_available === "Available"){
           $is_it_available = "Sold Out";
           
       }
       else if ($is_it_available === "Sold Out"){
           $is_it_available = "Available";
       }
       $query = "UPDATE choice$availability_list_array[0] SET availability = '$is_it_available' WHERE id=$availability_list_array[1]"; 
       $add_product = mysqli_query($conn,$query);
     

     

           

    }
?>