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



