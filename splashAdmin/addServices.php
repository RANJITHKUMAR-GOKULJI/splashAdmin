<?php include 'db/conn.php'; ?>
<?php

$service_type = $_POST['service_type'];
$staff_id = $_POST['staff_id'];
$activity_status = $_POST['activity_status'];
$comments = $_POST['comments'];



if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}else{
    echo "Connection successfully";
}

$sql = "INSERT INTO `service` (`service_type`,`staff_id`,`activity_status`,`comments`) VALUES ('$service_type','$staff_id','$activity_status','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>