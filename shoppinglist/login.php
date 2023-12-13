<?php
$email = $_POST['email'];
$password = $_POST['password'];
echo $email;

$con = new mysqli("localhost", "root", "", "test");
if($con->connect_error)
{
    die("Failed toconnect: " .$con->connect_error);
}
else
{
    $stmt = $con->prepare("SELECT * FROM `registration` WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        // User exists, now check the password
        $user = $result->fetch_assoc();
        $hashed_password_from_db = $user['password'];
    
        if (password_verify($password, $hashed_password_from_db)) {
            // Passwords match, login successful
            // Set session variables or other authentication mechanisms as needed
    
            // Redirect to the main page
            header("Location: index.html");
            exit();
        } else {
            // Incorrect password
            header("Location: login.php?login_error=1");
            exit();
        }
    } else {
        // User not found
        header("Location: register.php?login_error=1");
        exit();
   }
}


  








?>