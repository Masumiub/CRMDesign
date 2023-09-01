<?php
    require("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>

    <center><h2> Your tasks </h2></center><br>
    <table class="table">
        <tr>
            <th>Sl no</th>
            <th>Task id</th>
            <th>des</th>
            <th>start date</th>
            <th>end date</th>
            <th>status</th>
            <th>action</th>
        </tr>
        <?php

        $query="SELECT * FROM tasks";
        $sno=1;
         $query_run=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
            <td><?php echo $sno;?></td>
            <td><?php echo $row['tid'];?></td>
            <td><?php echo $row['description'];?></td>
            <td><?php echo $row['startDate'];?></td>
            <td><?php echo $row['endDate'];?></td>
            <td><?php echo $row['status'];?></td>
            <td><a href="updateStatus.php?id=<?php echo $row['tid'];?>">Update</td>
        </tr>

    <?php
    $sno= $sno +1;    
}
?>      
    </table>




<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
</html>