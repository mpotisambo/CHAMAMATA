<?php
$host = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "db_contact";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id = $_GET['leseni'];
$sql = "SELECT * FROM tbl_contact WHERE leseni ='$id'";
$result = mysqli_query($conn, $sql);

$data = array();
while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);

mysqli_close($conn);
?>
