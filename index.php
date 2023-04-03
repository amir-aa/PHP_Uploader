<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
    <?php
    session_start();
    if (isset($_SESSION['username'])) {
        echo '<h2>Welcome, '.$_SESSION['username'].'!</h2>';
        echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
        echo '<input type="file" name="fileToUpload" id="fileToUpload">';
        echo '<input type="submit" value="Upload File" name="submit">';
        echo '</form>';
        echo '<br><a href="logout.php">Logout</a>';
    } else {
        echo '<h2>Please login to upload files.</h2>';
        echo '<form action="login.php" method="post">';
        echo '<input type="text" name="username" placeholder="Username"><br>';
        echo '<input type="password" name="password" placeholder="Password"><br>';
        echo '<input type="submit" value="Login">';
        echo '</form>';
    }
    ?>
</body>
</html>
