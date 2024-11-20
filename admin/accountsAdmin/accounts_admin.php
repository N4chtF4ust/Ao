<?php
    
    $conn = mysqli_connect("localhost","root","","Ao");

    $sql = "SELECT * FROM customers";
    $result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <link rel="stylesheet" href="../accountsAdmin/accounts_admin.css">
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
            <br>
            <h1>Account List</h1>

        </div>

        <div class="content_wrapper">

            <br><br>
            <table border="2">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Name</th>
                        <th> Ticket Number </th>
                    </tr>


                    <?php
                    while($row=mysqli_fetch_array($result)){
                    
                        $ID = $row["ID"];
                        $name = $row["username"];
                        $tickNum = $row["ticketNum"];

                        echo "<tr>

                            <td> $ID </td>
                            <td> $name </td>
                            <td> $tickNum </td>

                            </tr>   
                        ";
                    }
                        
                    ?>
                </thead>

            </table>
        </div>
    </main>

  
</body>
</html>