<?php include 'conn.php'; ?>

<?php
    
    $query = "SELECT * FROM employ";
    $result = mysqli_query($connection, $query);
    $records = mysqli_fetch_all($result);
?>
<!DOCTYPE html>
<html lang="en">
<head></head>
<body align='center'>
    <form action='insert.php' method='$_POST'>
                <h2><mark> Register Form </mark></h2>
                <label>Name</label><br>
                <input type="text" name='Name' placeholder="Enter your Name"><br><br>

                <label>Department</label><br>
                <input type="text" name='Department' placeholder="Enter your Department"><br><br>

                <label>Designation</label><br>
                <input type="text" name='Designation' placeholder="Enter your Designation"><br><br>

                <label>Salary</label><br>
                <input type="Salary" name='Salary' placeholder="Enter your Salary"><br><br>

                <input type="submit" value="Add employee" name="submit">
    </form>
        <hr>
        <hr>
    <center>
     <table border='2'>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Salary</th>
        </tr>
        <?php
             foreach($records as $r){
        ?>
            <tr>
                <td><?php echo $r[0]; ?></td>
                <td><?php echo $r[1]; ?></td>
                <td><?php echo $r[2]; ?></td>
                <td><?php echo $r[3]; ?></td>
                <td><?php echo $r[4]; ?></td>
            </tr>        
        <?php
             } 
        ?>        
        </center>  
     </table>       
</body>
</html>




