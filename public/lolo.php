<?php
require_once '../config/database.php';
require_once '../class/auth.php';

$db = new Database();
$conn = $db->getConnection();
$auth = new Auth($conn);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
 
    if ($auth->login($email, $password)) {
 
        // header("Location: ../backend/dashboard.php");
        // exit;
        echo "bisa";
    } else {
     $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($error)) : ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p>Belum punya akun? <a href="register.php">Register di sini</a></p>
</body>
</html>
