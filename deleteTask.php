<?php
include('connection.php');

    $query="DELETE FROM tasks where tid= $_GET[id]";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
         echo "<script>alert('Task deleted successfully');
         windows.location.href='supervisor_dashboard.php';</script>";
    }
    else
    {
        echo "<script type='text/javascript'>
        alert('Try again');
        windows.location.href='supervisor_dashboard.php';
        </script>
        ";
   
    }
?>

