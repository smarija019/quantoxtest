<?php
include 'db_connection.php';

//check if all inputs are filled
if(empty($_POST['email']) || empty($_POST['password']))
{
    header('Location: login.php?error=1');
    die();
}

//validate email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: login.php?error=2');
    die();
}

//check if user with this email exists and collect data
$stmt = $conn->prepare("SELECT id, name, salt, password FROM users WHERE email='". $_POST['email'] ."'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$data = $stmt->fetchAll()[0];
if(empty($data['salt'])){
    header('Location: login.php?error=3');
    die();
}
//check user password
$options = [
    'cost' => 10,
    'salt' => $data['salt'],
];
$hashedPassword = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
if ($hashedPassword == $data['password']) {
    session_start();
    $_SESSION["user_name"] = $data['name'];
    header('Location: index.php?success=1');
    die();
} else {
    header('Location: login.php?error=4');
    die();
}

?>