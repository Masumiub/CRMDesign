<?php

include('connection.php');


?>
<?php

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $uid = $_POST["uid"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];

        
            $sql ="INSERT INTO `repairRequest` ( `Subject`, `Message`, `uid`) 
            VALUES ('$subject', '$message', '$uid')";

            if ($conn->query($sql) === TRUE) {
                echo  '<script>alert("New repair application sent successfully")</script>';

            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

    }
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h3>Apply for Repair</h3><br>
    <div class="row">
        <div class="col-md-6">
            <form action="repairForm.php" method="POST">
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="uid" placeholder="Enter User ID">
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                </div>
                <div class="form-group mb-3">
                    <textarea class="form-control" name="message" cols="50" rows="5" placeholder="Type Message"></textarea>
                </div>

                <div class="form-group mb-3">
                    <input type="submit" class="btn btn-warning" name="submit_leave">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>


