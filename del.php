<?php
require_once 'connection.php';
?>
<?php 
        $del = $_GET['del'];
        $delquery =mysqli_query($conn,"DELETE FROM contact WHERE id = '$del'") ;
        if ($delquery) {
        	echo "<script>alert('are you sure to delete!!')</script>";
        	echo '<script>window.location.href = "commend.php";</script>';
      }

    ?>