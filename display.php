<?php

include "connect.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
     <!-- Bootstrap -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container  my-5">
        <button class="btn btn-primary">
            <a class="text-light text-decoration-none" href="user.php">Add User</a>
        </button>
        <table class="table table-hover mt-5">
        <thead>
            <tr>
            <th scope="col">Seri No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Cta</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql="select * from `crud`";
            $result = mysqli_query($baglan,$sql);

            if ($result){
              while (  $row=mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $password = $row['password'];
                echo '<tr>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                     <button class="btn btn-secondary">edit</button>
                     <button class="btn btn-danger ms-1">Delete</button>
                     </td>
                </tr>';
                # code...
              }            
       

            }
        ?>
        
        </tbody>
</table>
    </div>

</body>
</html>