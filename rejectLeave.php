<?php

    include('connection.php');
    $query="Update leaves set status='Rejected' where lid= $GET[id]";
    $query_run= mysqli_query($conn,$query);
    if($query_run){


        echo "<script>alert('Leave status updated success');
        windows.location.href='supervisor_dashboard.php'</script>";

    }

    else{
        echo "<script>alert('error try again');
        windows.location.href='supervisor_dashboard.php'</script>";
    }
?>