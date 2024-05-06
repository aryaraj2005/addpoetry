<?php
$conn = mysqli_connect("localhost","root" , "");
mysqli_select_db($conn, "dbpoetry");

$poetry =$_POST['poetry'];
$poet_name =$_POST['poet_name'];

$qry = "INSERT INTO dbtable(poetry_data, poet_name) VALUES ('$poetry', '$poet_name')";

$res = mysqli_query($conn ,$qry);
if($res==true)
$response = array("status"=>"1", "message"=>"Poetry inserted succsesfully");
else
$response = array("status"=>"0", "message"=>"Poetry not inserted succesfully");
echo json_encode($response);

?>