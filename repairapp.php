<?php

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <center><h3>All Repair Requests</h3></center>
    <table class="table" style="background-color: white;width: 75vw;">
        <tr>
            <th>s.no</th>
            <th>User</th>
            <th>Subject</th>
            <th style="width:40%;" >Message</th>
        </tr>
        <?php
            $sno=1;
            $query= "SELECT * FROM repairrequest";
            $query_run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
            <tr>
            <td><?php echo $sno; ?></td>
            <?php
            $query1= "SELECT * FROM `repairrequest`";
            $query_run1 = mysqli_query($conn,$query1);
            while($row1=mysqli_fetch_assoc($query_run1)){
            ?>
                <td><?php echo $row1['uid']; ?></td>
                <?php
            }
            ?>
            <td><?php echo $row['Subject']; ?></td>
            <td><?php echo $row['Message']; ?></td>
            
        </tr>
<?php
        $sno=$sno+1;

            }


        ?>
    </table>
</body>
</html>