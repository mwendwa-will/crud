<?php
require 'theprocess.php';
require 'security.php';
extract($_POST);
$sql= "INSERT INTO `tasks`(`task_id`, `task_name`, `date_todo`, `status`) VALUES 
                                (null,'$task_name','$date_todo','$status')";
mysqli_query($conn,$sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP  CRUD</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>


</head>
<body>
<?php
require 'navbar.php';
?>

<div class="container">
<div class="card-body">
    <div class="card-header">
        Apply Task
        <div class="card-body">
            <form action="tasks.php" method="post">
                <div class="form-group">
                    <label for="username">Task</label>
                    <input type="text" name="task_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <input type="date" name="date_todo" class="form-control" required>
                </div>
                <div class="form-group">
                    <select name="status">
                        <option value="Incomplete">Incomplete</option>
                        <option value="Complete">Complete</option>
                    </select>
                </div>

                <button class="btn btn-block btn-warning">Give Task</button>
            </form>
        </div>
    </div>
</div>
</div>






</body>
</html>