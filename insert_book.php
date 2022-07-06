<?php
session_start();
include_once "connect_db.php";
echo $_POST['room'];

//insert data into table roomResult
$result = "INSERT INTO roomResult (username, blockID, roomID, roomTimeStart, roomTimeEnd, roomDate) 
VALUES ('$_SESSION[USER]','$_POST[sblock]', '$_POST[room]', '$_POST[meet_time_start]', '$_POST[meet_time_end]', '$_POST[meet_date]')";

mysqli_query($con, $result);

header("location:room_result.php");

//close connection
mysqli_close($con);

?>