SELECT * FROM NIIIT WHERE city LIKE "A%" ORDER BY name;
SELECT * FROM NIIIT WHERE MONTH(birthday) = MONTH(NOW()) AND DAY(birthday) = DAY(NOW());
SELECT * FROM NIIIT WHERE salary = (SELECT MAX(salary) FROM NIIIT) UNION SELECT * FROM NIIIT WHERE salary = (SELECT MIN(salary) FROM NIIIT);
SELECT max_salary1.* FROM NIIIT max_salary1 LEFT JOIN NIIIT max_salary2 ON max_salary1.department_id = max_salary2.department_id AND max_salary1.salary < max_salary2.salary WHERE max_salary2.salary IS NULL ORDER BY department_id;