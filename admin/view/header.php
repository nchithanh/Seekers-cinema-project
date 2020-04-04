<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/792cf9d6f3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="view/css/admin.css">
    <title>ADMIN</title>
</head>
<body>
    <header class="admin_header col_12">
        <div class="col_2">
            <a href="admin.php?contro=home">
                <img src="view/images/logo.png" alt="">
                <h4><?php echo $_SESSION['user'] ; ?></h4>
            </a>
        </div>
        <div class="col_10">
            <div class="avt">
                <i class="fas fa-user-tie"></i>
                <?php
                    echo '<h4 class="username">Username: '.$_SESSION['mail'].'</h4>';
                ?>
            </div>
            <div class="header_menu">
                <a href="../index.php">Home</a>
                <a href="admin.php?contro=logout">Logout</a>
            </div>
        </div>
    </header>
