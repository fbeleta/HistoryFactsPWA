<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History Facts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="logo">
        <a href="index.php"><img width='100px' src="./historyfacts.png" alt="Logo"></a>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="WorldTab.php">Svijet</a></li>
            <li><a href="EuropeTab.php">Europa</a></li>
            <?php if (!isset($_SESSION['username'])): ?>
            <?php endif; ?>
            <?php if (isset($_SESSION['username']) && $_SESSION['razina'] == 1): ?>
                <li><a href="administracija.php">Administracija</a></li>
            <?php endif; ?>
            <?php if (isset($_SESSION['username'])): ?>
                <li><a href="unos.php">Dodaj činjenicu</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a><?php echo htmlspecialchars($_SESSION['username']); ?></a></li>
            <?php else: ?>
                <li><a href="loginForm.php">Login</a></li>
                <li><a href="registerForm.php">Registracija</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
</body>
</html>
