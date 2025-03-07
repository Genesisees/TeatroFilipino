<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/../connection.php";
    
    $sql = sprintf("SELECT * FROM admin
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $admin = $result->fetch_assoc();
    
    if ($admin) {
        
        if (password_verify($_POST["password"], $admin["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["admin_id"] = $admin["id"];
            
            header("Location: ../Admin/dashboard.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
<link rel="icon" href="../logo.png" type="image/x-icon"/>

        <a href="../index.php" class="logo">
            <img src="../logo.png" alt="Logo" class="logo">
        </a>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="login.css">
    <title>Log-in</title>
</head>
<body>
      
    <div class="container">

       <div class="box">
        <div class="header">
        <p>Mabuhay! Please Log-in.</p>
        </div>
        
        <?php if ($is_invalid): ?>
            <em>Invalid login</em>
        <?php endif; ?>
        
        <form method="post" class="input-box">
            <div class="input-box">
                <label for="email">E-Mail</label>
                <input type="email" name="email" id="email" class="input-field"
                       value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
                <i class="bx bx-envelope"></i>
            </div>
            
            <div class="input-box">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="input-field">
                <i class="bx bx-lock"></i>
            </div>
            
            <div class="input-box">
                <input type="submit" class="input-submit" value="Log in">
            </div>
            
        </form>
        
        <p>Don't have an account? Sign-up <a href="signup.html"> here.</a></p>
        
        </div>
       <div class="wrapper"></div>
    </div>

</body>
</html>
