-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 10:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `brandname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `image`, `price`, `brandname`) VALUES
(1, 'Green cotton short suit', 'img\\products\\f1.jpg', 78, 'adidas'),
(2, 'white flowered', 'img\\products\\f2.jpg', 78, 'adidas'),
(3, 'red attractive', 'img\\products\\f3.jpg', 78, 'adidas'),
(4, 'sky blue perfect outfit ', 'img\\products\\f4.jpg', 78, 'adidas'),
(5, 'cream and white style', 'img\\products\\f5.jpg', 78, 'adidas'),
(6, 'Maroon meted shirt', 'img\\products\\f6.jpg', 89, 'nike'),
(7, 'blue short dress', 'img\\products\\f7.jpg', 80, 'jockey'),
(8, 'Orange designed kurti', 'img\\products\\f8.jpg', 59, 'dior'),
(9, 'Sky Blue Shirt Style', 'img\\products\\n1.jpg', 79, 'nike'),
(10, 'sky blue perfect outfit ', 'img\\products\\n2.jpg', 79, 'nike'),
(11, 'different color and style', 'img\\products\\n3.jpg', 89, 'dior'),
(12, 'grey chex kurti ', 'img\\products\\n4.jpg', 59, 'jockey'),
(13, 'flower designed dress', 'img\\products\\n5.jpg', 89, 'dior'),
(14, 'multi color design', 'img\\products\\n6.jpg', 79, 'jockey'),
(15, 'Full Sleeve Formal Shirt', 'img\\products\\n7.jpg', 78, 'adidas'),
(16, 'Half Sleeve Formal T-Shirt', 'img\\products\\n8.jpg', 89, 'adidas'),
(17, 'Cartoon Astronaut T-shirts', 'img\\products\\a1.jpg', 68, 'adidas'),
(18, 'Cartoon Astronaut T-shirts', 'img\\products\\a2.jpg', 98, 'adidas'),
(19, 'Cartoon Astronaut T-shirts', 'img\\products\\a3.jpg', 102, 'adidas'),
(20, 'Cartoon Astronaut T-shirts', 'img\\products\\a4.jpg', 100, 'adidas'),
(21, 'Cartoon Astronaut T-shirts', 'img\\products\\a5.jpg', 95, 'adidas'),
(22, 'Two Piece Shirt', 'img\\products\\a6.jpg', 89, 'nike'),
(23, 'Cotton Comfy Pants', 'img\\products\\a7.jpg', 80, 'jockey'),
(24, 'Full Sleeve Flower Loose Top', 'img\\products\\a8.jpg', 59, 'dior'),
(25, 'Chinese Collar Full Sleeve Shi', 'img\\products\\a9.jpg', 79, 'nike'),
(26, 'Full Sleeve Formal Shirt', 'img\\products\\a10.jpg', 79, 'nike'),
(27, 'Chinese Collar Full Sleeve Shi', 'img\\products\\a11.jpg', 89, 'dior'),
(28, 'Half Sleeve Casual Shirt', 'img\\products\\a12.jpg', 59, 'jockey'),
(32, 'Cartoon Astronaut T-shirts', 'img\\products\\h4.jpg', 78, 'adidas'),
(33, 'Cartoon Astronaut T-shirts', 'img\\products\\h5.jpg', 78, 'adidas'),
(34, 'Two Piece Shirt', 'img\\products\\h6.jpg', 89, 'nike'),
(35, 'Cotton Comfy Pants', 'img\\products\\h7.jpg', 80, 'jockey'),
(36, 'Full Sleeve Flower Loose Top', 'img\\products\\h8.jpg', 59, 'dior'),
(37, 'Chinese Collar Full Sleeve Shi', 'img\\products\\h9.jpg', 79, 'nike'),
(38, 'Full Sleeve Formal Shirt', 'img\\products\\h10.jpg', 79, 'nike'),
(39, 'Chinese Collar Full Sleeve Shi', 'img\\products\\h11.jpg', 89, 'dior'),
(40, 'Half Sleeve Casual Shirt', 'img\\products\\h12.jpg', 59, 'jockey'),
(41, 'Full Sleeve Denim Shirt', 'img\\products\\h13.jpg', 89, 'dior'),
(43, 'Full Sleeve Formal Shirt', 'img\\products\\h15.jpg', 78, 'adidas'),
(44, 'Half Sleeve Formal T-Shirt', 'img\\products\\h16.jpg', 89, 'adidas'),
(45, 'Cartoon Astronaut T-shirts', 'img\\products\\m1.jpg', 68, 'adidas'),
(46, 'Cartoon Astronaut T-shirts', 'img\\products\\m2.jpg', 98, 'adidas'),
(47, 'Cartoon Astronaut T-shirts', 'img\\products\\m3.jpg', 102, 'adidas'),
(48, 'Cartoon Astronaut T-shirts', 'img\\products\\m4.jpg', 100, 'adidas'),
(49, 'Cartoon Astronaut T-shirts', 'img\\products\\m5.jpg', 95, 'adidas'),
(50, 'Two Piece Shirt', 'img\\products\\m6.jpg', 89, 'nike'),
(61, 'Chinese Collar Full Sleeve Shi', 'img\\products\\m17.jpg', 69, 'dior'),
(65, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x3.jpg', 99, 'dior'),
(66, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x4.jpg', 79, 'dior'),
(68, 'Half Sleeve Casual Shirt', 'img\\products\\x6.jpg', 59, 'jockey'),
(69, 'Full Sleeve Denim Shirt', 'img\\products\\x7.jpg', 89, 'dior'),
(70, 'Cotton Comfy Textured Shorts', 'img\\products\\x8.jpg', 79, 'jockey'),
(72, 'Half Sleeve Formal T-Shirt', 'img\\products\\x10.jpg', 89, 'adidas'),
(73, 'Cartoon Astronaut T-shirts', 'img\\products\\x11.jpg', 68, 'adidas'),
(74, 'Cartoon Astronaut T-shirts', 'img\\products\\x12.jpg', 98, 'adidas'),
(75, 'Cartoon Astronaut T-shirts', 'img\\products\\x13.jpg', 102, 'adidas'),
(76, 'Cartoon Astronaut T-shirts', 'img\\products\\x14.jpg', 100, 'adidas'),
(78, 'Cartoon Astronaut T-shirts', 'img\\products\\x15.jpg', 95, 'adidas'),
(79, 'Two Piece Shirt', 'img\\products\\x16.jpg', 89, 'nike'),
(80, 'Cotton Comfy Pants', 'img\\products\\x17.jpg', 80, 'jockey'),
(81, 'Full Sleeve Flower Loose Top', 'img\\products\\x18.jpg', 59, 'dior'),
(82, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x19.jpg', 79, 'nike'),
(83, 'Full Sleeve Formal Shirt', 'img\\products\\x20.jpg', 79, 'nike'),
(84, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x21.jpg', 89, 'dior'),
(86, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x23.jpg', 79, 'dior'),
(87, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x24.jpg', 59, 'dior'),
(88, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x25.jpg', 99, 'dior'),
(89, 'Chinese Collar Full Sleeve Shi', 'img\\products\\x26.jpg', 109, 'dior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
