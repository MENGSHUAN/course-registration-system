<a href = "homepage.php"> 回上頁(Homepage) </a> <p>
<?php
include_once('db.php');
include_once('html.php');
include_once('html_utility.php');
@header("Content-type:text/html;charset=utf-8");

session_start();

if(isset($_SESSION["student_id"])) {
	
	$student_id =$_SESSION["student_id"];	

	$sql = "select course_id, course_name, department, grade, credits, category
			from course 
			where course_id in (select course_id from select_course
				where student_id = \"$student_id\")";

	//echo $sql;
	$result = mysqli_query($conn, $sql) or die('MySQL query error');

	html_start_box('****  Student Selected Courses ****  ', '50%', '   ', '5', 'left', '   ');

	$display_text = array(
		array('display' => 'course_id',             'align' => 'left'),
		array('display' => 'Course Name',         'align' => 'left'),
		array('display' => 'Department',       'align' => 'left'),
		array('display' => 'Grade',     'align' => 'right'),
		array('display' => 'Credits', 'align' => 'right'),
		array('display' => 'Category', 'align' => 'right'),		
	);
	html_header($display_text, 2, false);


	while($row = mysqli_fetch_array($result)){

		form_selectable_cell($row['course_id'] , $row['course_id']);
		form_selectable_cell($row['course_name'], $row['course_name']);
		form_selectable_cell($row['department'], $row['department']);			
		form_selectable_cell($row['grade'], $row['grade']);
		form_selectable_cell($row['credits'], $row['credits']);			
		form_selectable_cell(($row['category'] == 'Required' ? "必修" : "選修"), $row['category']);		
	//	form_selectable_cell(filter_value("Add", "", 'add.php?action=add&id=' . $row['student_id'] ), "Add");			
	//	form_selectable_cell(filter_value("Delete", "", 'delete.php?action=delete&id=' . $row['course_id'] ), "Delete");			

		form_end_row();
	}
	html_end_box(false);

		

	$sql = "select course_id, course_name, department, grade, credits
			from course 
			where course_id in (select course_id from select_course
				where student_id = \"$student_id\") and category = \"Elective\"";

	//echo $sql;
				
	$result = mysqli_query($conn, $sql) or die('MySQL query error');
		
	html_start_box('****  Student Could Withdraw Courses ****  ', '50%', '   ', '5', 'left', '   ');

	$display_text = array(
		array('display' => 'course_id',             'align' => 'left'),
		array('display' => 'Course Name',         'align' => 'left'),
		array('display' => 'Department',       'align' => 'left'),
		array('display' => 'Grade',     'align' => 'right'),
		array('display' => 'Credits', 'align' => 'right'),
		array('display' => 'Action', 'align' => 'right'),		
	);
	html_header($display_text, 2, false);


	while($row = mysqli_fetch_array($result)){

		form_selectable_cell($row['course_id'] , $row['course_id']);
		form_selectable_cell($row['course_name'], $row['course_name']);
		form_selectable_cell($row['department'], $row['department']);			
		form_selectable_cell($row['grade'], $row['grade'], '', 'text-align:right');
		form_selectable_cell($row['credits'], $row['credits'], '', 'text-align:right');			

		//form_selectable_cell(filter_value("Add", "", 'add.php?action=add&id=' . $row['student_id'] ), "Add");			
		form_selectable_cell(filter_value("Delete", "", 'delete.php?action=delete&id=' . $row['course_id'] . '&student_id=' . $student_id), "Delete");			

		form_end_row();
	}
	html_end_box(false);

}
?>