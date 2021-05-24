
<?php
include 'index.php' ;
include 'server.php' ;

if(isset($_POST['submit'])){
   $name = $_POST['username'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $password = $_POST['password'];

   $pass_hash = password_hash($password,PASSWORD_BCRYPT) ;

$table = " INSERT INTO formmysql(name,email,password,phone) VALUES ('$name','$email','$pass_hash','$phone')" ; 
if($con){
  echo "<script>
      alert ('connection successful');
   </script>" ;
}
else{
  echo "<script>
      alert ('No connection with database');
   </script>" ;
}
  $submit = mysqli_query($con,$table);
if ($submit) {
   echo "<script>
      alert ('submit successful');
   </script>" ;
   
}else {
   echo "<script>
      alert ('submit failure');
   </script>" ;
}


}

?>
