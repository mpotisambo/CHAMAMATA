<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact');

// get the post records

$txtName = $_POST['txtName'];
$txtumri= $_POST['txtumri'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtleseni= $_POST['txtleseni'];
$txtMessage = $_POST['txtMessage'];
$txtnum= $_POST['txtnum'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`,`age`, `fldEmail`, `fldPhone`,`platenumber`,`leseni`, `fldMessage`) VALUES ('0', '$txtName','$txtumri', '$txtEmail', '$txtPhone','$txtnum','$txtleseni', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	//echo "Contact Records Inserted";
    echo json_encode($rs);
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>