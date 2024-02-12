/*create database*/

CREATE DATABASE db_pagination;

/*create table*/

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(150) NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`pid`)
);

/*insert data in the table*/

INSERT INTO `products` (`pid`, `product`, `price`) VALUES
(1, 'Product 1', 264.00),
(2, 'Product 2', 152.00),
(3, 'Product 3', 660.00),
(4, 'Product 4', 728.00),
(5, 'Product 5', 538.00),
(6, 'Product 6', 229.00),
(7, 'Product 7', 628.00),
(8, 'Product 8', 253.00),
(9, 'Product 9', 604.00),
(10, 'Product 10', 286.00),
(11, 'Product 11', 392.00),
(12, 'Product 12', 718.00),
(13, 'Product 13', 400.00),
(14, 'Product 14', 969.00),
(15, 'Product 15', 894.00),
(16, 'Product 16', 254.00),
(17, 'Product 17', 698.00),
(18, 'Product 18', 123.00),
(19, 'Product 19', 678.00),
(20, 'Product 20', 413.00),
(21, 'Product 21', 406.00),
(22, 'Product 22', 938.00),
(23, 'Product 23', 489.00),
(24, 'Product 24', 973.00),
(25, 'Product 25', 482.00),
(26, 'Product 26', 474.00),
(27, 'Product 27', 577.00),
(28, 'Product 28', 977.00),
(29, 'Product 29', 175.00),
(30, 'Product 30', 863.00),
(31, 'Product 31', 758.00),
(32, 'Product 32', 354.00),
(33, 'Product 33', 410.00),
(34, 'Product 34', 513.00),
(35, 'Product 35', 576.00),
(36, 'Product 36', 181.00),
(37, 'Product 37', 641.00),
(38, 'Product 38', 180.00),
(39, 'Product 39', 833.00),
(40, 'Product 40', 107.00),
(41, 'Product 41', 757.00),
(42, 'Product 42', 224.00),
(43, 'Product 43', 269.00),
(44, 'Product 44', 592.00),
(45, 'Product 45', 540.00),
(46, 'Product 46', 701.00),
(47, 'Product 47', 545.00),
(48, 'Product 48', 430.00),
(49, 'Product 49', 283.00),
(50, 'Product 50', 905.00);
