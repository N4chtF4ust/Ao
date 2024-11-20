<?php
include ('..\assets\connect.php');
include ('staffs.php');

        $jsonFilePath = 'staffs.json';

        $staff_list_array=[];

                if (file_exists($jsonFilePath)) {
                    // Read the existing JSON data
                    $jsonData = file_get_contents($jsonFilePath);
                    $employeeList = json_decode($jsonData, true);  // Decode JSON into associative array
            
                    foreach ($employeeList as $row) {
       

                        foreach ($row as $col ){
                            $y = json_encode($col);
                            $modifiedString = substr($y, 1, -1);
                            $staff_list_array[] = $modifiedString;
                            
                            echo "<script>console.log($y)</script>";
                          }
            
                       
                      }
                    
            
          
                }
                if (isset($_POST['save'])) {
                    $name = $_POST['name'];
                    echo "<script>console.log('$name')</script>";
                    $age = $_POST['age'];
                    echo "<script>console.log('$age')</script>";
                    $sex = $_POST['sex'];
                    echo "<script>console.log('$sex')</script>";
                    $position = $_POST['position'];
                    echo "<script>console.log('$position')</script>";


                    $sql = "UPDATE employees SET name='$name', age=$age, sex='$sex', position='$position' WHERE id=$staff_list_array[0]";
                    mysqli_query($conn, $sql);

                    echo "<script type='text/javascript'>
                        alert('Employee Edited Successfully');
                        window.location.href = 'staffs.php';
                        </script>";
                }
                echo "<script>console.log('abcd $staff_list_array[0]')</script>";
?>

<link rel="stylesheet" href="edit_staffs.css">
<script>
    function closeForm() {
        document.querySelector('.edit_wrapper').style.display = 'none';
    }
</script>

<div class="edit_wrapper">
<form action= "" method="post">

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
        <button type="submit" name="save" class="editButtons">Save</button>
        <button class="editButtons" onclick="closeForm()">Close</button>
    </div> 


    

</form>
</div>