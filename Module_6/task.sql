/*-- Query for Task 1: Customer info with their total order number --*/
SELECT a.*, COUNT(b.`orderId`) AS `totalOrder` FROM `customers` a LEFT JOIN `orders` b ON a.`cmrId` = b.`cmrId` GROUP BY b.`cmrId` ORDER BY `totalOrder` DESC;);

/*-- Query for Task 2: Product name, quantity, and total amount for each order item --*/
SELECT a.`name`, b.`orderId`, b.`quantity`, (b.`quantity` * b.`unitPrice`) AS `totalAmount` FROM `products` a JOIN `orderitems` b ON a.`productId` = b.`productId` ORDER BY b.`orderId`);


/*-- Query for Task 3: Product name, quantity, and total amount for each order item --*/
SELECT a.`name`, b.`orderId`, b.`quantity`, (b.`quantity` * b.`unitPrice`) AS `totalAmount` FROM `products` a JOIN `orderitems` b ON a.`productId` = b.`productId` ORDER BY b.`orderId`);


/*-- Query for Task 4: Customer name along with the total purchase amount in descending order of the purchase amount --*/
SELECT a.`name`, SUM(b.`totalAmount`) AS `totalPurchase` FROM `customers` a JOIN `orders` b ON a.`cmrId` = b.`cmrId` GROUP BY b.`cmrId` ORDER BY `totalPurchase` DESC);
