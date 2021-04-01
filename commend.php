
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
  <!--Bootstrap cdn-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!--Bootstrap cdn-->
  <!--font-awesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <!--font-awesome-->
</head>
<body>
  <div class="container">
    <h2>Md israfil
        <a class="btn btn-primary float-right" href="sign_out.php">Sign out</a> </h2>
  </div>
  <!--   -->

<?php 
require_once 'connection.php';
if (!isset($_SESSION['role'])) 
{
	header("Location: admin_login.php");
}

 $sql ="SELECT * FROM contact";
 $query= mysqli_query($conn,$sql);
 
if (mysqli_num_rows($query) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($query)) {
    ?>
<div class="container">
  <div class="row">
    <table  class="table">
      <thead class="thead-dark">
          
        <tr>
          <th>SL</th>
          <th>Name</th>
          <th>Email</th>
          <th>Subject</th>
          <th>Massage</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><?php echo $row["id"];?></th>
          <td><?php echo $row["name"];?></td>
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["subject"];?></td>
          <td><?php echo $row["message"];?></td>
          <td><a href="del.php?del=<?php echo $row["id"];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
        </tr>
      </tbody>
    </table>
  </div>  
  </div>
 <?php }
} else {
  echo "0 results";
}



 ?>

</body>
</html>