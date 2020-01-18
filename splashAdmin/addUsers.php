<?php include 'db/conn.php'; ?>
<?php

$full_name = $_POST['full_name'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];
$category = $_POST['category'];
$email_id = $_POST['email_id'];


if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}else{
    echo "Connection successfully";
}

$sql = "INSERT INTO `users` (`full_name`,`user_name`,`password`,`category`,`email_id`) VALUES ('$full_name','$user_name','$password','$category','$email_id')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>