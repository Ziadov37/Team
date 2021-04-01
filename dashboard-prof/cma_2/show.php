<?php
include "conn.php";

$query = "SELECT * FROM brief ";
$results = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($results as $row) : ?>
        <li class="brief"><a href="<?php echo $row["description"];  ?>"> <?php echo $row["title"];  ?> </a></li>
        <?php endforeach ?>
    </ul>
</body>




</html>