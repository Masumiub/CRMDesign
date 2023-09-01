<?php
    session_start();
    require("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>

   <div class="row" style="margin-top: 10%;">
   <div class="m-auto" id="login_home_page">
   <h2 style="text-align: center; padding: 10px; color: #FFF; margin-top: 20px;">Digi 5 LTD CRM</h2>
   <form action="index.php" method = "POST">

            <div class="mb-3">
                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            
            
            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="role" id="role" >
                        <option value="Supervisor">Supervisor</option>
                        <option value="Employee">Employee</option>
                    </select>
            </div>
                
            <center>
            <div class="form-group" >
                <input type="submit" name="Login" class="btn btn-warning" value="Login"> 
            </div>
            </center>
            <br>


        </form> 
        </div>
    </div>
   
   
    <?php
   
   if(isset($_POST['Login']))
   {
       $query2 = "SELECT * FROM `users` WHERE `UserName`='$_POST[username]' AND `Password`='$_POST[password]' AND `role`='$_POST[role]'";
       $result2=mysqli_query($conn,$query2);
       if(mysqli_num_rows($result2)==1)
       {   
       if ($_POST['role'] == 'Supervisor') 
    {
        header("location: supervisor_dashboard.php");
    } 

        elseif ($_POST['role'] == 'Employee') 
    {
        header("location: employee_dashboard.php");
    }
}
    else{
        echo "<script>alert('TRY AGAIN');</script>";
      }

   }
  

   
   ?>



<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>  

</body>
</html>