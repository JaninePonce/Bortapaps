-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 08:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `userId`, `productId`, `qty`) VALUES
(47, 1, 1, 4),
(48, 1, 4, 1),
(49, 1, 2, 2),
(50, 3, 1, 1),
(51, 3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `pass` int(11) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `supplierId` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `cartId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `transactionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category`, `path`) VALUES
(1, 'asd', '', 123, 'New Arrival', 'duck.jpg'),
(2, 'choyens', '', 12, 'Womens', 'dreamfood.png'),
(3, 'test_product', '', 12, 'Womens', 'rich.jpg'),
(4, 'testproduct2', '', 12.51, 'New Arrival', 'lezgoblimp.png'),
(5, 'valoy', 'shdjshgfagswefih', 123, 'Mens', 'deer.png'),
(6, 'Valerie Trouser', 'The high-waist trousers for women feature a flattering silhouette that elongates the legs and cinches the waist, offering both comfort and style for any occasion.', 450, 'Womens', 'women highwaisted trouser.jpg'),
(15743580, 'Corduroy Croptop Jacket', 'The yellow croptop jacket with buttons and pockets offers a chic and versatile addition to any wardrobe, providing both style and functionality in one vibrant piece.', 312.21, 'Womens', 'women jacket.jpg'),
(15743581, 'Paul Black Trouser', 'The black trousers for men are a classic wardrobe staple, offering timeless style and versatility suitable for both formal and casual settings, ensuring a sophisticated look with every wear.', 500, 'Mens', 'men classy pants.jpg'),
(15743582, 'Men Bomber Jacket', 'The men\'s bomber jacket is a timeless outerwear piece characterized by its iconic silhouette, featuring a zip-front closure, ribbed cuffs and hem, and a versatile design suitable for casual and semi-formal occasions, providing both style and comfort effortlessly.', 200, 'Mens', 'men bomber jacket.jpg'),
(15743583, 'Red Dress', 'The red minidress is a striking and bold garment that exudes confidence and glamour, featuring a flirtatious silhouette with a hemline above the knee, perfect for making a statement at any special event or night out.', 250.5, 'Womens', 'women minidress.jpg'),
(15743584, 'Flare Jeans', 'Flare jeans are a retro-inspired denim style characterized by their fitted hips and thighs that gradually widen into a dramatic flare below the knee, offering a flattering and effortlessly chic silhouette reminiscent of 1970s fashion.', 150, 'Womens', 'women pants.jpg'),
(15743585, 'Heart Graphic Tshirt', 'The heart graphic t-shirt is a playful and expressive garment featuring a vibrant or subtle heart design printed on the front, adding a touch of charm and personality to casual outfits, perfect for showcasing love or adding a whimsical element to everyday wear.', 100, 'Womens', 'women tshirt hearrttt.jpg'),
(15743586, 'Polo Shirt', 'The polo shirt is a classic and versatile garment, featuring a collar, buttoned placket, and short sleeves, offering a timeless and sophisticated look suitable for both casual and semi-formal occasions, providing comfort and style with its breathable fabric and understated elegance.', 199, 'Womens', 'women polo.jpg'),
(15743587, 'Pattern Playsuit', 'The pattern playsuit is a fun and stylish one-piece garment featuring a variety of playful prints and designs, offering a chic and effortless outfit solution perfect for warmer weather or casual outings, combining comfort with trend-forward aesthetics.', 399.5, 'Womens', 'women dress aesthetic.jpg'),
(15743588, 'Bomber Croptop Jacket', 'The bomber crop top jacket is a trendy fusion of two iconic styles, featuring the classic bomber jacket silhouette with a cropped length, offering a contemporary and edgy look that\'s perfect for layering over high-waisted bottoms or pairing with dresses for a modern twist on casual or streetwear fashion.', 499.5, 'Womens', 'women bomber jacket.jpg'),
(15743589, 'Beige Trouser', 'The beige trousers are a versatile wardrobe staple, offering a timeless and sophisticated option suitable for both casual and formal settings, featuring a neutral hue that effortlessly complements a variety of outfits and occasions, ensuring a polished and refined look with every wear.', 400, 'Womens', 'women beige trouser.jpg'),
(15743590, 'Skeleton Graphic Tshirt', 'The skeleton graphic t-shirt is a bold and edgy garment featuring a striking skeletal design printed on the front, adding a unique and alternative flair to casual outfits, perfect for those who embrace a rebellious or avant-garde aesthetic.', 129.5, 'Womens', 'women tshirt.jpg'),
(15743591, 'Vintage Jeans', 'Men\'s vintage jeans offer a timeless and rugged style inspired by classic denim designs from past decades, characterized by their distressed detailing, relaxed fit, and worn-in look, providing a nostalgic and effortlessly cool vibe that pairs well with a variety of casual outfits.', 699, 'Mens', 'men jeans.jpg'),
(15743592, 'Mark Jogger Pants', 'Jogger pants are a comfortable and versatile bottomwear option, featuring a tapered fit, elasticized cuffs at the ankles, and an adjustable drawstring waist, offering a stylish blend of athletic and casual aesthetics that\'s perfect for both lounging at home and running errands around town.', 350, 'Mens', 'men jogger pants.jpg'),
(15743593, 'Beige Pants', 'Men\'s beige pants offer a timeless and versatile option for casual and semi-formal occasions, featuring a neutral hue that pairs effortlessly with a variety of colors and patterns, providing a sophisticated and polished look suitable for both work and leisure.', 350, 'Mens', 'men pants beige.jpg'),
(15743594, 'Black Polo', 'The black polo shirt for men is a classic wardrobe staple, characterized by its collared neckline, buttoned placket, and short sleeves, offering a timeless and versatile option suitable for casual outings, sports activities, or semi-formal occasions, providing a sleek and effortlessly stylish look with its neutral color and understated design.', 199.5, 'Mens', 'men polo black.jpg'),
(15743595, 'Stripes Polo ', 'The striped polo shirt for men is a stylish and timeless garment featuring horizontal or vertical stripes, adding a touch of sophistication and visual interest to casual outfits, perfect for achieving a smart-casual look with its classic polo silhouette and versatile design.', 249, 'Mens', 'men polo stripes.jpg'),
(15743596, 'Cars Graphic Tshirt', 'The cars graphic t-shirt is a vibrant and playful garment featuring colorful illustrations or images of cars, perfect for automotive enthusiasts or anyone looking to add a fun and casual flair to their outfit, offering a dynamic and eye-catching look that\'s sure to turn heads.', 199, 'Mens', 'men tshirt.jpg'),
(15743597, 'Nirvana Tshirt', 'The Nirvana t-shirt is an iconic and timeless piece of band merchandise featuring the band\'s logo, album artwork, or other imagery associated with the legendary grunge band Nirvana, offering fans a stylish and nostalgic way to pay homage to their music and legacy while adding a touch of rock-inspired edge to their wardrobe.', 200, 'Mens', 'men tshirtt.jpg'),
(15743598, 'Dryfit Tshirt', 'The DryFit t-shirt for men is a performance-oriented garment crafted from moisture-wicking fabric, designed to keep the wearer dry and comfortable during intense workouts or outdoor activities by quickly wicking away sweat, offering breathability and freedom of movement, making it an ideal choice for active individuals seeking comfort and performance in their athletic wear.', 159, 'Mens', 'men dryfit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone-num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `total` double NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `userId` int(11) NOT NULL,
  `employeeId` int(11) NOT NULL,
  `supplierId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123'),
(2, 'test', 'asd@gmail.com', '123'),
(3, 'bortakid', 'bortakid@gmail.com', 'bortakid123');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `phonenum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productId` (`productId`),
  ADD KEY `supplierId` (`supplierId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactionId` (`transactionId`),
  ADD KEY `productId` (`productId`),
  ADD KEY `cartId` (`cartId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `employeeId` (`employeeId`),
  ADD KEY `supplierId` (`supplierId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15743599;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9223372036854775807;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`supplierId`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`transactionId`) REFERENCES `transactions` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`cartId`) REFERENCES `carts` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`employeeId`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `transactions_ibfk_4` FOREIGN KEY (`supplierId`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
