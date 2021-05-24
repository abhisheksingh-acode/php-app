
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-12/css/all.min.css" integrity="sha512-pn4RwKFKdSvaTRSYO5WIUGz89e1tJvWWUGRIBym1/k467SuMMjKKw/X5TXJYp2+WLmHumHivCJ2JAJppXF9SoA==" crossorigin="anonymous" />
</head>
<body>
   <table class="table table-striped table-responsive">
     <thead>
       <tr class="bg-dark text-white text-center">
         <th>ID</th>
         <th>NAME</th>
         <th>EMAIL</th>
         <th>PHONE</th>
         <th colspan="2">MODIFY</th>
       </tr>
     </thead>
     <tbody>
     <?php

         include 'server.php';
         $select = "select * from formmysql";
         $getquery = mysqli_query($con,$select);
         $num = mysqli_num_rows($getquery);
      
         while($print = mysqli_fetch_array($getquery)){
               ?>

            <tr class="text-center">
               <td><?php echo $print['id'] ?></td>
               <td><?php echo $print['name'] ?></td>
               <td><?php echo $print['email'] ?></td>
               <td><?php echo $print['phone'] ?></td>
               <td>
                 <a href="update.php?id=<?php echo $print['id'] ?>"><i class="fas fa-edit text-success" title="update"></i> </a>
               </td>
              <td>
              <a href="delete.php?id=<?php echo $print['id']?>"><i class="fa fa-trash text-danger" aria-hidden="true" title="delete"></i></a>
              </td>
            </tr>

      <?php   }
?>
     
     </tbody>
   </table>
   <div class="mx-auto text-center">
      <a href="index.php" class="btn btn-danger">HOME</a>
   </div>
</body>
</html>