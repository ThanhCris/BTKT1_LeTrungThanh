<?php
// goi file ket noi
include'connect.php';
$sql="SELECT * FROM `employees`";
$query=mysqli_query($conn,$sql);


// $total_row=mysqli_num_rows($query);

// echo $total_row;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xproject</title>
</head>
<body>
    <?php
        while($row=mysqli_fetch_array($query)){
            echo $row['Name']."<br>";
            echo $row['Address']."<br>";
            echo $row['Salary']."<br>";
        }


    ?>
</body>
</html>