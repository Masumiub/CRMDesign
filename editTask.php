<?php

include('connection.php');

if(isset($_POST['update'])){


        $sql ="UPDATE tasks SET EmployeeId= '$_POST[EmployeeId]', EmployeeName= '$_POST[EmployeeName]', description = '$_POST[description]', startDate = '$_POST[startDate]', endDate = '$_POST[endDate]', 
        status = 'Not Finished'  WHERE tid = $_GET[id]; ";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Task has been assigned successfully")</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<h2>Edit Assigned Task</h2>
   <div class="row">
    <div class="col-md-6">
      
        <?php 
          $query="SELECT * FROM tasks where tid = $_GET[id]" ;      
            $query_run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($query_run))
            {
        ?>

        <form action="" method="post">
        <div class="form-group mb-3">
                <input type="hidden" name="id" class="form-control" value="" required>

                <label> EmployeeId</label>
                <input type="text" class="form-control" name="EmployeeId" value="<?php echo $row['EmployeeId'];?>">
            </div>

            <div class="form-group mb-3">
                <label> EmployeeName</label>
                <input type="text" class="form-control" name="EmployeeName" value="<?php echo $row['EmployeeName'];?>">
            </div>
         
            <div class="form-group mb-3">
                <label> Description:</label>
                <input type="text" class="form-control" name="description" value="<?php echo $row['description'];?>">
                <!-- <textarea class="form-control" rows="3" cols="50" name="description" >
                   
                </textarea> -->
            </div>
            <div class="form-group mb-3">
                <label >Start date:</label>
                <input type="date" class="form-control" name="startDate" value="<?php echo $row['startDate'];?>" >
            </div>
            <div class="form-group mb-3">
                <label >End date:</label>
                <input type="date" class="form-control" name="endDate" value="<?php echo $row['endDate'];?>" >
            </div>
                
            <input type="submit"class="btn btn-success" name="update" value="Update">
        </form>
        <?php 
            }
        ?>
    </div>
   </div> 


<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
</html>