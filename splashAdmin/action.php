<?php include 'conn.php'; ?>
<?php

$fullname = $_POST['userFullName'];
$username = $_POST['userName'];
$pass = $_POST['userPassword'];
$email = $_POST['userEmail'];
$category = "SALES";



if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}else{
    echo "Connection successfully";
}

$sql = "INSERT INTO `users` (`full_name`, `user_name`, `password`, `category`, `user_email`) VALUES ('$fullname', '$username', '$pass', '$category', '$email');";

if ($conn->query($sql) == TRUE) {
    $last_id = $conn->insert_id;
   
    header("location:login.html?id=$last_id");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>