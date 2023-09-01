<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<body>
<center><h3>All asigned task</h3></center><br>
<table class="table">
    <tr>
        <th>sno</th>
        <th>taskid</th>
        <th>EmployeeId</th>
        <th>EmployeeName</th>
        <th>desc</th>
        <th>startdate</th>
        <th>enddate</th>
        <th>status</th>
        <th>action</th>
    </tr>
    <?php
    $sno=1;
    $query="SELECT * FROM tasks";
    $query_run = mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
        <td><?php echo $sno; ?></td>
        <td><?php echo $row['tid'] ;?></td>
        <td><?php echo $row['EmployeeId'] ;?></td>
        <td><?php echo $row['EmployeeName'] ;?></td>
        <td><?php echo $row['description'] ; ?></td>
        <td><?php echo $row['startDate'] ;?></td>
        <td><?php echo $row['endDate'] ;?></td>
        <td><?php echo $row['status'] ;?></td>
        <td><a href="editTask.php?id=<?php echo $row['tid']  ;?>" target="_blank">Edit</a> | <a href="deleteTask.php?id=<?php echo $row['tid']  ?>">Delete</a> </td>
        </tr>
<?php
    $sno=$sno+1;
    }
    ?>

</table>
</body>
</html>