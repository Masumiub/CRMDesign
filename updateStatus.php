<?php

include('connection.php');

if(isset($_POST['update'])){
    $query= "UPDATE tasks set status='$_POST[status]' WHERE tid = $_GET[id]";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
       echo  "<script> 
       alert('Status Updated successfully');
       windows.location.href='employee_dashboard.php';
       </script> ";
    }
    else{
        echo  "<script> 
       alert('error');
       windows.location.href='employee_dashboard.php';
       </script>";
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
<h2>update Task</h2>
   <div class="row">
    <div class="col-md-6">
      <?php 
      
      $query="SELECT * FROM tasks where tid = $_GET[id]" ;      
        $query_run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($query_run))
        {
           ?>
        <form action="" method="post">
        <div class="form-group">

            <input type="hidden" name="id" class="form-control" value="" required>
        </div> 
            <div class="form-group">

            <select class="form-control" name="status">
            <option>-Select-</option>
            <option>In-Progress</option>
            <option>Complete</option>
            </select>
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