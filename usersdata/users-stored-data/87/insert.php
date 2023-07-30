<?php
     include 'conn.php';
     
     $name = $_POST["name"];
     $department = $_POST["department"];
     $designation = $_POST["designation"];
     $salary = $_POST["salary"];
 
     $query = "INSERT INTO employ('name', 'department','designation', 'salary')
     VALUES('$name','$department','$designation','$salary')";
 
     
     //echo $sql;
     mysqli_query($connection, $query);
     header("Location:index.php");
     
?>