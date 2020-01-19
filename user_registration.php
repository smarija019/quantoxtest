<?php
include 'db_connection.php';
var_dump($_POST);

//check if all inputs are filled
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['repeat_password']))
{
    header('Location: registration.php?error=1');
    die();
}

//validate email
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    header('Location: registration.php?error=2');
    die();
}

//check if password is valid
if(!($_POST['password'] === $_POST['repeat_password'])){
    header('Location: registration.php?error=3');
    die();
} else {
    $password = $_POST['password'];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    
    if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
        header('Location: registration.php?error=4');
        die();
    }
}

//check if user with this email exists
$stmt = $conn->prepare("SELECT id FROM users WHERE email='". $_POST['email'] ."'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
if(!empty($stmt->fetchAll())){
    header('Location: registration.php?error=5');
    die();
}

// MD5 password hash
function generatePassword($password){
    $options = [
        'cost' => 10,
        'salt' => bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)),
    ];
    $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);

    return array($passwordHash, $options['salt']);
}
$hashed = generatePassword($_POST['password']);

//create user and insert into database
$sql = "INSERT INTO users (name, email, salt, password) VALUES ('". $_POST['name'] ."', '".$_POST['email']."', '".$hashed[1]."', '".$hashed[0]."')";
$conn->exec($sql);
header('Location: login.php?success=1');

?>