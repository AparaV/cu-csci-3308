SELECT * FROM store ORDER BY name;
SELECT * FROM store ORDER BY name LIMIT 3;
SELECT * FROM (SELECT * FROM store ORDER BY name DESC LIMIT 3) t ORDER BY name; 
SELECT * FROM store WHERE price > 1;
SELECT *, price*qty AS total FROM store;
SELECT sum(price*qty) FROM store;
SELECT COUNT(DISTINCT(name)) FROM store;

SELECT name FROM course WHERE department_id = (SELECT id FROM department WHERE name = 'CSC');
SELECT SUM(count) from enrollment;
SELECT COUNT(DISTINCT(name)) FROM course;
SELECT COUNT(DISTINCT(name)) from department;
SELECT department.name, course.name FROM department, course WHERE department.id = course.department_id;
SELECT CONCAT(department.name, course.name) FROM department, course WHERE department.id = course.department_id;
SELECT department.name, course.name, enrollment.count FROM department, course, enrollment WHERE department.id = course.department_id AND enrollment.id = course.id;

