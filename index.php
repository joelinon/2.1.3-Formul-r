<?php
$username = '';
$password = '';
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = ($_POST['username'] ?? '');
    $password = ($_POST['password'] ?? '');
    $submitted = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php if (!$submitted): ?>
        <h1>Inloggning</h1>
        <form method="POST">
            <div>
                <label for="username">Användarnamn:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Lösenord:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Logga in</button>
        </form>
    <?php else: ?>
        <p><strong>Användarnamn:</strong> <?php echo $username; ?></p>
        <p><strong>Lösenord:</strong> <?php echo $password; ?></p>
    <?php endif; ?>
    </div>
</body>
</html>