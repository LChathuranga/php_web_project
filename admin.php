<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<?php include('navBar.php'); ?>
<body>
<h1>Admin Home</h1> <?php echo $_SESSION["username"] ?>  

</body>
</html>