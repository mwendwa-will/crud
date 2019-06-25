<?php
if (isset($_POST["password"]))
{

    require "theprocess.php";

    extract($_POST);
    $sql= "INSERT INTO `users`(`user_id`, `names`, `email`, `password`, `phone_number`, `location`, `status`) VALUES 
                                (null,'$u_name','$email','$password',$phone,'$location','$status')";
    mysqli_query($conn,$sql);
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-5">
            <div class="card">
                <div class="card-header">
                    <h1>USER SIGN UP</h1>
                </div>
                <div class="card-body ">
                    <?php
                    if (isset($message))
                        echo $message;
                    ?>
                    <form action="register_form.php" method="post">
                        <div class="form-group">
                            <label for="username">Name</label>
                            <input type="text" name="u_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="form-group">
                            <label for="username">Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-md-6">

                        <div class="form-group">
                            <label for="username">Phone</label>
                            <input type="text" name="phone" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-md-6">

                        <div class="form-group">
                            <label for="username">Location</label>
                            <input type="text" name="location" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-md-6">

                        <select name="status" class="mb-3">Status
                            <option value="active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                        </div>

                        <button class="btn btn-block btn-warning ">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

