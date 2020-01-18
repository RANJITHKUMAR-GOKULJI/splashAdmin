<?php include 'db/conn.php'; ?>
<?php

$product_name = $_POST['product_name'];
$sales_person_name = $_POST['sales_person_name'];
$customer_name = $_POST['customer_name'];
$customer_email_id = $_POST['customer_email_id'];
$customer_contact_number = $_POST['customer_contact_number'];
$customer_serial_number = $_POST['customer_serial_number'];
$billing_date = $_POST['billing_date'];
$paid_amount = $_POST['paid_amount'];



if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}else{
    echo "Connection successfully";
}

$sql = "INSERT INTO `sales` (`product_name`,`sales_person_name`,`customer_name`,`customer_email_id`,`customer_contact_number`,`customer_serial_number`,`billing_date`,`paid_amount`) VALUES ('$product_name', '$sales_person_name', '$customer_name', '$customer_email_id','$customer_contact_number','$customer_serial_number','$billing_date','$paid_amount')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>