<?php
//Task 1
SELECT COUNT(a.order ID) as total_order, a.customer ID, b.name, b.email, b.location
FROM Orders a INNER JOIN Customers b ON a.customer ID=b.customer ID
GROUP BY a.customer ID
ORDER BY total_order DESC;

//Task 2
SELECT a.order item ID, a.quantity, a.unit price, (a.quantity*a.unit price) as total_price, b.order ID, c.name
FROM Order_Items a 
INNER JOIN Orders b ON a.order ID=b.order ID
INNER JOIN Products c ON a.product ID=c.product ID
ORDER BY a.order ID;

//Task 3
SELECT SUM(a.quantity*a.unit price) as total_revenue, c.name
FROM Order_Items a 
INNER JOIN Products b ON a.product ID ID=b.product ID
INNER JOIN Categories c ON b.category ID=c.category ID
GROUP BY b.category ID
ORDER BY total_revenue DESC;

//Task 4
SELECT SUM(a.total amount) as total_purchase_amount, b.name
FROM Orders a 
INNER JOIN Products b ON a.customer ID=b.customer ID
GROUP BY a.customer ID
ORDER BY total_purchase_amount DESC LIMIT 5;
?>