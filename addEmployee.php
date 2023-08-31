<?php

include('connection.php');


?>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $uid = $_POST["uid"];
        $userName = $_POST["userName"];
        $password = $_POST["password"];
        $role = $_POST["role"];
        
            $sql ="INSERT INTO `users` (`UserId`, `UserName`, `Password`, `Role`) 
            VALUES ('$uid', '$userName', '$password', '$role')";

            if ($conn->query($sql) === TRUE) {
                echo  '<script>alert("New employee as user has been added successfully")</script>';

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

    }
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h3>Add Employee</h3><br>
    <div class="row">
        <div class="col-md-6">
            <form action="addEmployee.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="uid" placeholder="Enter User ID">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="userName" placeholder="Enter User Name">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="role" placeholder="Enter Role" value="Employee">
                </div>

                <input type="submit" class="btn btn-warning" name="addEmployee" value="Add Employee">
                
            </form>
        </div>
    </div>
    
</body>
</html>


