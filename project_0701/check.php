<a href = "index.php"> 回上頁 </a> <p>
<?php
//確認student_id是否正確

include_once('html.php');
include_once('html_utility.php');
include_once('db.php'); 

session_start();
  $MyHead=$_POST["MyHead"];
  $_SESSION["student_id"] = $MyHead; 
  $sql = "SELECT * FROM student where student_id = \"".$MyHead."\";";
  $result = mysqli_query($conn, $sql) or die('MySQL query error');


  if ($result->num_rows > 0) {
    // output data of each row
//    echo "----" . $MyHead;
//	set_request_var('student_id', $MyHead);

//	$id = get_request_var('student_id', '100' );
//	print $id;	
	header("location: homepage.php");
  } else {
    echo "student_id is wrong";
  }
  $conn->close();
?>