<?php
session_start();
include 'conn.php';
if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if (empty($username)) {
        header("Location: login.php?error=username is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM user_info WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_id'] = $row['user_id'];
                header("Location: index.html");
                exit();
            }else{
                header("Location: login.php?error=Incorect Username or Password");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect Username or Password");
            exit();
        }
    }
}else{
    header("Location: login.php");
    exit();
}
?>