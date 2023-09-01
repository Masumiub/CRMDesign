<?php

include('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <center><h3>All leave applications</h3></center>
    <table class="table" style="background-color: white;width: 75vw;">
        <tr>
            <th>s.no</th>
            <th>User</th>
            <th>Subject</th>
            <th style="width:40%;" >Message</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php
            $sno=1;
            $query= "SELECT * FROM leaves";
            $query_run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
            <tr>
            <td><?php echo $sno; ?></td>
            <?php
            $query1= "SELECT * FROM `leaves`";
            $query_run1 = mysqli_query($conn,$query1);
            while($row1=mysqli_fetch_assoc($query_run1)){
            ?>
                <td><?php echo $row1['uid']; ?></td>
                <?php
            }
            ?>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td> <a href="approveLeave.php?id=<?php echo $row['lid'];?>">Approve</a>|<a href="RejectLeave.php?id=<?php echo $row['lid'];?>>">Reject</a></td>
        </tr>
<?php
        $sno=$sno+1;

            }


        ?>
    </table>
</body>
</html>