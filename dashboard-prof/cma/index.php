<?php
require_once "./core/database.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main>
        <div class="left">
            <h1>Add Student account:</h1>
            <form action="./core/add-student.php" method="post">
                <input required="true" type="email" name="email" id="email" placeholder="email...">
                <input required="true" type="password" name="password" id="password" placeholder="password...">
                <button type="submit" name="add">Add</button>
                <?php if(isset($_GET['s'])){?>
                    <div class="alert success">
                        <?php echo $_GET['s']; ?>
                    </div>
                <?php } ?>
                <?php if(isset($_GET['e'])){?>
                    <div class="alert error">
                    <?php echo $_GET['e']; ?>
                    </div>
                <?php } ?>
            </form>
        </div>
        <div class="right">
            <h1>Students</h1>
            <table>
                <thead>
                    <th>Id</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Actions</th>
                </thead>
                <tbody>
                    <?php 
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                <td><?= $row['email'] ?></td>
                                <td><?= $row['password'] ?></td>
                                <td>
                                    <a class="update" href="./update-student.php?id=<?= $row['id'] ?>">UPDATE</a>
                                    <a class="delete" href="./core/delete-student.php?id=<?= $row['id'] ?>">DELETE</a>
                                </td>
                            </tr>
                       <?php }
                    }else{
                    ?>
                    <tr>
                        <td colspan="4">Not student found!</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>