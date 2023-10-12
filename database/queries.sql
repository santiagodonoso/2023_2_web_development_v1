SELECT * FROM orders ORDER BY RANDOM() LIMIT 20


SELECT item_id, item_price FROM items

SELECT * FROM orders_items ORDER BY orders_items_order_fk


SELECT * FROM users WHERE user_email = 'admin@company.com'


SELECT * FROM users


UPDATE users
SET user_name = '<script>alert()</script>'
WHERE user_id = 'd813e27644c19c01cfc4e160268c120e'

UPDATE users
SET user_name = 'Kiera'
WHERE user_id = '4cc6a5fe22ad1b0f635fee02cab25967'


SELECT * FROM users LIMIT 10


CREATE VIEW get_10_users AS
SELECT * FROM users LIMIT 10


SELECT * FROM get_10_users


DROP VIEW get_10_users


-- employees for the salary
-- users for name and last_name

CREATE VIEW employees_info AS
SELECT user_name, user_last_name, employee_salary
FROM users
JOIN employees 
ON user_id = employee_id


SELECT * FROM employees_info



SELECT * FROM users WHERE user_id = '71665dc11bf5759f452c26453ed66a47'















