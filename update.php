<?php
include "connect.php";
$id = $_GET["updateid"];

$sql = "SELECT * FROM `crud` where id=$id";
$result = mysqli_query($baglan,$sql);

$row=mysqli_fetch_assoc($result);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];

    $sql = "UPDATE `crud` SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

    $result = mysqli_query($baglan,$sql);

    if($result){
        header("Location:display.php");
    }
    else{
        die("Veritabanı bağlantısı başarısız: ".mysqli_connect_error($baglan));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
  
<div class="container-md mx-auto d-flex justify-content-center align-items-center my-5 ">
    <form class="row mx-auto g-3" method="post">
          <div class="col-md-8">
                <label for="name" class="form-label">Name</label>
                <input  type="text" class="form-control" name="name" id="name" value=<?php echo $name; ?> >
            </div>
           <div class="col-md-8">
                <label for="email" class="form-label">email</label>
                <input  type="email" class="form-control" name="email" id="email"  value=<?php echo $email; ?> >
            </div>
             <div class="col-md-8">
                <label for="mobile" class="form-label">Mobile</label>
                <input  type="number" class="form-control" name="mobile" id="mobile"  value=<?php echo $mobile; ?> >
            </div>
            <div class="col-md-8">
                <label for="password" class="form-label">Password</label>
                <input  type="password" class="form-control" name="password" id="password"  value=<?php echo $password; ?> >
            </div>
            <div class="col-md-6 mt-2">
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
            </div>
    </form>
</div>
    
</body>
</html>