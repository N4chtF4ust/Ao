<?php

require_once('..\assets\connect.php');
$query = "SELECT * from employees";
$result = mysqli_query($conn, $query);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Employees</title>
    <link rel="stylesheet" href="staffs_admin.css">
    <script src="../assets/links.js" defer></script>
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
            <h1>EMPLOYEES</h1>

        </div>
        <br>
        <div class="content_wrapper">
           <div>
            <form method="post" class="form1">

            <div>
                <label for = "name">Name:</label>
                <input type="text" name="name" placeholder="Name" required>
            </div>

            <div>
            <label for = "age">Age:</label>
                <input type="number" name="age" placeholder="Age" required>
            </div>

            <div>
            <label for = "sex">Sex:</label>
            <select name="sex" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
            </div>

            <div>
            <label for = "position">Position:</label>
            <input type="text" name="position" placeholder="Position" required>
            </div>

            <div>
            <button type="submit" name="add" class="addbutton">Add</button>
            </div> 


            </form>


            <?php
            //add
            if (isset($_POST['add'])) {
                $name = $_POST['name'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $position = $_POST['position'];
                $sql = "INSERT INTO employees (name, age, sex, position) VALUES ('$name', $age, '$sex', '$position')";
                mysqli_query($conn, $sql);

                echo "<script type='text/javascript'>
                    alert('Employee Added');
                    window.location.href = '" . $_SERVER['PHP_SELF'] . "';
                    </script>";
                    exit;
            }
            //Update
            if (isset($_POST['edit'])) {
                $id = $_POST['id'];
                echo "<script>console.log('$id')</script>";
                $name = $_POST['name'];
                $age = $_POST['age'];
                $sex = $_POST['sex'];
                $position = $_POST['position'];

                echo "<script>console.log('$name')</script>";
                echo "<script>console.log('$age')</script>";
                echo "<script>console.log('$sex')</script>";
                echo "<script>console.log('$position')</script>";

                $jsonFilePath = 'staffs.json';

                if (file_exists($jsonFilePath)) {
                    // Read the existing JSON data
                    $jsonData = file_get_contents($jsonFilePath);
                    $employeeList = json_decode($jsonData, true);  // Decode JSON into associative array
            
                    // Flag to check if the product was updated
                    $updated = false;
            
                    // Loop through the existing staffs and update the matching ID
                    foreach ($employeeList as &$staffs) {
                            $staffs['ID'] = $id; 
                            $staffs['NAME'] = $name; 
                            $staffs['AGE'] = $age;
                            $staffs['SEX'] = $sex;
                            $staffs['POSITION'] = $position;
                            $updated = true;
                            break;
                        
                    }
            
                    // If the product was not found, add a new one
                    if (!$updated) {
                        $employeeList[] = [
                            'ID' => $id,
                            'NAME' => $name,
                            'AGE' => $age,
                            'SEX' => $sex,
                            'POSITION' => $position
                        ];
                    }
            
                    // Save the updated product list back to the JSON file
                    $updatedJsonData = json_encode($employeeList, JSON_PRETTY_PRINT);
                    file_put_contents($jsonFilePath, $updatedJsonData);
                    header('Location: '. 'edit_staffs.php');
            
          
                }


            }


            // Delete
            if (isset($_POST['delete'])) {
                $id = $_POST['id']; // Get the ID of the employee to be deleted
                $sql = "DELETE FROM employees WHERE id = $id";
                mysqli_query($conn, $sql);

                 echo "<script type='text/javascript'>
                    alert('Employee Deleted');
                    window.location.href = '" . $_SERVER['PHP_SELF'] . "';
                    </script>";
                    exit;
}
            ?>
            <table border="2">
                <tr class="tbheader">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Position</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <tr>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>

                <tr class="trVal">
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['NAME']; ?></td>
                    <td><?php echo $row['AGE']; ?></td>
                    <td><?php echo $row['SEX']; ?></td>
                    <td><?php echo $row['POSITION']; ?></td>

                <td>
                <form method="post" class="form2">
                    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                    <input type="hidden" name="name" value="<?php echo $row['NAME']; ?>">
                    <input type="hidden" name="age" value="<?php echo $row['AGE']; ?>">
                    <input type="hidden" name="sex" value="<?php echo $row['SEX']; ?>">
                    <input type="hidden" name="position" value="<?php echo $row['POSITION']; ?>">
                    <button type="submit" name="edit" class="edit_delbutton">Edit</button>
                </form>
                </td>
                <td>
                <form method="post" class="form2">
                    <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
                    <button type="submit" name="delete" class="edit_delbutton">Delete</button>
                </form>
                </td>
                </tr>
                <?php
                    }
                ?>

                </tr>
            </table>
           </div>

        </div>

      

    </main>
    
    
</body>

</html>