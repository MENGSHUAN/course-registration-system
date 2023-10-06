<a href = "selectedpage.php"> 回上頁 </a> <p>
<?php
include_once('db.php');
include_once('html.php');
include_once('html_utility.php');

session_start();

switch (get_request_var('action')) {
	case 'delete':
		$student_id = get_request_var('student_id');
		
		$id = get_request_var('id');

		$sql = "delete from select_course where student_id = \"$student_id\" and course_id = \"$id\""; 


//		echo $sql;
			
		$result = mysqli_query($conn, $sql) or die('MySQL query error');	
		
		echo "select course id = $id deleted  ";
		
		break;
}

?>


