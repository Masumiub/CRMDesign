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

    $Subject= $_POST["Subject"];
    $Description = $_POST["Description"];
    $Date = $_POST["Date"];
    $Time = $_POST["Time"];
    $Link = $_POST["Link"];
    
        $sql ="INSERT INTO `meeting` (`Subject`, `Description`, `Date`, `Time`, `Link`) 
        VALUES ('$Subject', '$Description', '$Date', '$Time', '$Link')";

        if ($conn->query($sql) === TRUE) {
            echo  '<script>alert("New Meeting has been created successfully")</script>';

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

}
?>

   <h2>Create Meeting</h2>
   <div class="row">
    <div class="col-md-6">
        <form action="createMeeting.php" method="POST">
            <div class="form-group mb-3">
                <label >Subject:</label>
                <input type="text" class="form-control" name="Subject">
            </div>
            <div class="form-group mb-3">
                <label> Description:</label>
                <textarea class="form-control" rows="3" cols="50" name="Description" placeholder="Write Something">
                </textarea>
            </div>
            <div class="form-group mb-3">
                <label >Date:</label>
                <input type="date" class="form-control" name="Date" >
            </div>
            <div class="form-group mb-3">
                <label >Time:</label>
                <input type="text" class="form-control" name="Time">
            </div>
            <div class="form-group mb-3">
                <label >Link:</label>
                <input type="text" class="form-control" name="Link">
            </div>
            
            <div class="form-group mb-3">
                <input type="submit"class="btn btn-warning" name="create-task" value="Create Meeting">
            </div>
            
        </form>
    </div>
   </div> 
</body>
</html>