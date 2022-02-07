
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hosteldb";


$conn = new mysqli($server,, $username, $password, $database);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
    }

$name = $_POST['name'];
$room = $_POST['room'];
$phno = $_POST['phno'];
$address = $_POST['address'];


$query = "INSERT INTO hosteltable(Name, Room, Phno, Address)VALUES('$name', '$room', '$phno', '$address)";
$result = $conn->query($query);


if($result==1){
$response = array("status"=>"1", "message"=>"Data is inserted successfully");

}else{
$response = array("status"=>"0", "message"=>"Data is not inserted successfully");

}


echo json_encode($response);

?>