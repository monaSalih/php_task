DB Build
1.	DB Relation:
One-to-one => Ex. student has one instructor
One-to-many => Ex. A Post has many Comments.
Many-to-many => Ex. a Student can enroll in many Courses, and a Course can have many Students.
----------------------------------------
2.	Querys:
Q1: Find the total number of courses offered by the university.
SELECT COUNT(*) AS total_courses FROM Courses;
----------------------------------------
>>Q2: Show the names of all students enrolled in a specific course.
On course enrollment write following query
SELECT Students.first_name, Students.last_name FROM Students JOIN Enrollments ON Students.student_id = Enrollments.student_id JOIN Courses ON Enrollments.course_id = Courses.course_id WHERE Courses.course_id = 2;
------------
>>OR you can make shortcut like the following.
SELECT s.first_name, s.last_name FROM Students s JOIN Enrollments e ON s.student_id = e.student_id JOIN Courses c ON e.course_id = c.course_id WHERE c.course_id = 1;
------------
>>Intermidete question
>Retrieve the courses and the instructors assigned for a specific semester.
SELECT c.course_name, c.course_code, i.first_name AS instructor_first_name, i.last_name AS instructor_last_name FROM Courses c JOIN Course_Assignments ca ON c.course_id = ca.course_id JOIN Instructors i ON ca.instructor_id = i.instructor_id WHERE ca.semester = 'Fall';
----------------------------------------
1.	Left join /right join/ inner/outer
>Left join return student has enrollment in class using left join (left join using just two tables, students and enrollments)
SELECT students.first_name, enrollments.course_id FROM students LEFT JOIN enrollments ON students.student_id = enrollments.student_id;
في حال كانت هناك اشخاص غير مسجلين في كورس فانه سوف تكون  null
القيمه 
------------
Right join
>Ex1: SELECT students.first_name, enrollments.course_id FROM students RIGHT JOIN enrollments ON students.student_id = enrollments.student_id;
------------

>Ex2:
SELECT courses.course_name, enrollments.student_id FROM courses RIGHT JOIN enrollments ON courses.course_id = enrollments.course_id;
----------------------------------------
>Inner join:
SELECT students.first_name, enrollments.course_id FROM students INNER JOIN enrollments ON students.student_id = enrollments.student_id;
----------------------------------------
Function to Count student function
SELECT COUNT(*) AS total_students FROM students;
----------------------------------------
Function Sum
SELECT SUM(enrollments.course_id) AS total_enrollments FROM enrollments;
----------------------------------------
Min function
SELECT MAX(grade) AS highest_score FROM enrollments;
----------------------------------------
Group query
SELECT courses.course_name, COUNT(enrollments.student_id) AS total_students FROM courses LEFT JOIN enrollments ON courses.course_id = enrollments.course_id GROUP BY courses.course_name;

