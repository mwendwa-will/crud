<?php
require 'security.php';

//get the id
//retrieve the movie
//display details
//update the movie

if (isset($_GET["id"]))
{
    $id = $_GET["id"];
    require 'theprocess.php';
    $sql ="select * from tasks where task_id = $id";
    $result =mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    extract($row);


}
if (isset($_POST["status"]))
{

    $date_todo=$_REQUEST["date"];
    $status = $_REQUEST["status"];
    $id = $_REQUEST["id"];
    require 'theprocess.php';
    $sql = "update tasks set status='$status', date_todo='$date_todo'
            where task_id = '$id'";
    mysqli_query($conn, $sql) or die(mysqli_error($conn));
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Task</title>

</head>
<body>
<?php
require 'navbar.php';
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6">


            <div class="card">





                    <?php
                    if(isset($message))
                        echo "<p class='text-danger'>$message</p>";
                    ?>
                    <form action="edit.php" method="post" >
                        <input type="hidden" name="id" value="<?=$id ?>">
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" value="<?=$date_todo?>">
                        </div>


                        <div class="form-group">
                            <select name="status" >
                                <option value="Incomplete">Incomplete</option>
                                <option value="Complete">Complete</option>
                            </select>

                        <button class="btn btn-info btn-block">Update Task</button>

                    </form>

                </div>
            </div>

        </div>
    </div>


</div>
</body>
</html>
