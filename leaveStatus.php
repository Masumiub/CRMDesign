<?php
    session_start();
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<body>
   <center><h3>Your leave applications</h3></center> 
    <table class="table" style="background-color:white; width:75vw;">
    <tr>
            <th>s.no</th>
            <th>Subject</th>
            <th style="width:40%;">Message</th>
            <th>Status</th>
    </tr>

    <?php

    $sno=1;
        $query = "SELECT * FROM leaves" ;
            $query_run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($query_run)){
                ?>
                <tr>
                    <td>
                        <?php echo $sno; ?>
                    </td>
                    <td>
                        <?php echo $row['subject']; ?>
                    </td>
                    <td>
                        <?php echo $row['message']; ?>
                    </td>
                    <td>
                        <?php echo $row['status']; ?>
                    </td>
                </tr>
                <?php
                $sno= $sno+1;
                }
    ?>
    </table>
</body>
</html>