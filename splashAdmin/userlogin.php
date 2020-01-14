
<?php include 'conn.php'; ?>

<?php
$name = $_POST['userName'];
$pass = $_POST['userPassword'];


if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
    
}
else{
  $sql = "SELECT * FROM `users` WHERE `user_name` = '$name' AND `password` = '$pass'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
        $dbuser = $row["user_name"];
        $dbpass = $row["password"];
        if($name==$dbuser AND $pass==$dbpass)
        {
          if($name=="admin"){
            echo "admin user";
            header("location:adminDash.html"); 
          }
          else{
          echo "staff user";  
          header("location:staffDash.html"); 
          }
        }
    

        
    }
}
else {
      header("location:index.html");
      echo "<script type='text/javascript'>alert('invalid');</script>";
      }
}  


$conn->close();
?>
