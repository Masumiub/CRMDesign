<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include('connection.php');
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $EmployeeId = $_POST["EmployeeId"];
    $EmployeeName = $_POST["EmployeeName"];
    $description = $_POST["description"];
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    
        $sql ="INSERT INTO `tasks` (`EmployeeId`, `EmployeeName`, `description`, `startDate`, `endDate`, `status`) 
        VALUES ('$EmployeeId', '$EmployeeName', '$description', '$startDate', '$endDate', 'Not Finished')";

        if ($conn->query($sql) === TRUE) {
            echo  '<script>alert("New Task has been assigned successfully")</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

}
?>

   <h2>Assign Task</h2>
   <div class="row">
    <div class="col-md-6">
        <form action="createTask.php" method="POST">
            <div class="form-group">
                <label> EmployeeId</label>
                <input type="text" class="form-control" name="EmployeeId" >
            </div>

            <div class="form-group">
                <label> EmployeeName</label>
                <input type="text" class="form-control" name="EmployeeName" >
            </div>

            <div class="form-group">
                <label> Description:</label>
                <textarea class="form-control" rows="3" cols="50" name="description" placeholder="Mention the task">
                </textarea>
            </div>
            <div class="form-group">
                <label >Start date:</label>
                <input type="date" class="form-control" name="startDate" >
            </div>
            <div class="form-group">
                <label >End date:</label>
                <input type="date" class="form-control" name="endDate">
            </div>
                
            <input type="submit" class="btn btn-warning" name="create-task" value="Assign Task">
        </form>
    </div>
   </div> 
</body>
</html>