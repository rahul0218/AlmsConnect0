<?php
$server = "localhost";
$user = "id8744727_root";
$password = "help12";
$db="id8744727_project";
$conn = mysqli_connect($server,$user,$password,$db);
if($conn==false){
    die( "Error : Could not connect ".mysqli_connect_error() );
}
else 
//echo "Connection successfull host info is :".mysqli_get_host_info($conn);
?>