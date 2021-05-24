<?php

include 'server.php';
include 'select.php';
 $delid = $_GET['id'];
$deleteQuery = "delete from formmysql where id = $delid" ;

   $execquery = mysqli_query($con,$deleteQuery) ;


   if($execquery){
      echo "<script>alert('deleted successfully')</script>" ;
   }
   header('location:select.php')
?>