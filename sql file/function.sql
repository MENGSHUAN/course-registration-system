--"$student_id" is the login student ID.

--Optional courses
--Every student maximun credits is 30 and minimun credits is 9.

select course_id, course_name, department, grade, credits, current_people
from course
where current_people < max_people
and (grade, department) in (select grade, department
			                from student
			                where student_id = '$student_id' and total_credits <30)
and time_slot_id not in(select time_slot_id
			            from course
			            where course_id in (select course_id
					                        from select_course
					                        where student_id = '$student_id'));

--View your selected courses

select course_id, course_name, department, grade, credits
from course 
where course_id in (select course_id
		            from selected_course
		            where student_id = '$student_id');

--View courses you can withdraw from

select course_id, course_name, department, grade, category, credits
from course
where course_id in (select course_id
                    from selected_course
                    where student_id = '$student_id') and category = "Elective";
