
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>bootstrap form layout with php form submission</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<style>
   *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
   }
   .form-radius{
      border-radius: 20px;
   }
   .container-radius{
      border-top-left-radius: 50%;
      border-bottom-right-radius: 50%;
      background: #B993D6;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #8CA6DB, #B993D6); 
      background: linear-gradient(to right, #00d2ff, #3a7bd5); 
   }
   </style>
</head>
<body>
  
  <div class="container d-flex flex-md-row flex-column h-50 mt-5 py-5 container-radius">
    
    <div class="w-50 h-100 text-center mx-md-0 mx-auto ">
      <img src="verify.png" class="w-50 h-50 " alt=""> <br>
      <a href="select.php" class="btn btn-light my-4">Check Form</a>
      
    </div>

    <!-- bootstrap form div start -->
   <div class="form-container w-50 mx-md-0 mx-auto bg-light shadow p-3 form-radius">
   <form action="" method="POST" >
               <?php
            include 'server.php' ;
            $ids = $_GET['id'];
            $fetsql = "select * from formmysql where id = $ids" ;
            $query = mysqli_query($con,$fetsql);

            $fetarr = mysqli_fetch_array($query);

            
            if(isset($_POST['update'])){
               
               $ides = $_GET['id'];
              

               $name = $_POST['username'] ;
               $email = $_POST['email'] ;
               $phone = $_POST['phone'] ;
               
               $sqlupdatequery = "update formmysql set id = $ides , name = '$name', email = '$email', phone = '$phone' where id = $ides" ;
               
               $updatequery = mysqli_query($con,$sqlupdatequery);
               
               if ($updatequery) {
                  echo '<script> alert("updated") </script>' ;
               }else{
                  echo '<script> alert("failed") </script>' ;
               };
            } 
           ;
            ?>
             
  <div class="mb-3">
    <label for="exampleInputusername" class="form-label">Username</label>
    <input value="<?php echo $fetarr['name']  ?>" type="text" name="username"  autocomplete="none"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input value="<?php echo  $fetarr['email']  ?>" type="email" name="email"  autocomplete="none" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Phone</label>
    <input value="<?php echo $fetarr['phone']  ?>" type="number" name="phone"  autocomplete="none" class="form-control" id="exampleInputPhone1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPhone" class="form-label">Password</label>
    <input type="password" name="password"  autocomplete="none" class="form-control" id="exampleInputPhone1" value="<?php echo $fetarr['password']  ?>" placeholder="create your password for login">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="check" required class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1"><span class="small">T&C</span> accepted</label>
  </div>
  <button type="submit" name="update" class="btn btn-primary">Update</button>
</form>
   </div>
   <!-- bootstrap form div ends -->
  

   </div>
</body>
</html>




