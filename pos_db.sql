-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 02:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
(95, 9, 15743581, 1),
(106, 3, 15743597, 9),
(110, 3, 15743595, 7),
(111, 3, 15743596, 9),
(239, 11, 15743630, 1),
(250, 1, 15743589, 4),
(252, 1, 15743633, 2),
(253, 1, 15743631, 4),
(257, 1, 15743591, 12),
(259, 1, 15743630, 3),
(260, 12, 15743607, 6),
(261, 12, 15743608, 2),
(262, 12, 15743604, 4),
(269, 13, 15743622, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sub-category` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT 'UNISEX'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `user`, `pass`, `position`) VALUES
(1, 'test employee', 'testemp', 'asd123', 'Cashier');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `supplierId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `transactionId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productId`, `qty`, `total`, `transactionId`) VALUES
(259, 15743609, 1, 546, 941823740),
(260, 15743631, 1, 1500, 941823741),
(261, 15743596, 4, 796, 941823742),
(262, 15743595, 1, 249, 941823742),
(263, 15743597, 1, 200, 941823742),
(264, 15743598, 1, 159, 941823742),
(265, 15743592, 1, 350, 941823742),
(266, 15743593, 1, 350, 941823742),
(267, 15743591, 1, 699, 941823742),
(268, 15743624, 1, 345, 941823742),
(269, 15743606, 1, 800, 941823743),
(270, 15743630, 1, 999, 941823743),
(271, 15743600, 1, 1000, 941823743),
(272, 15743601, 1, 799, 941823743),
(273, 15743599, 1, 500, 941823743),
(274, 15743590, 1, 130, 941823743),
(275, 15743608, 1, 999, 941823743),
(276, 15743583, 1, 251, 941823744),
(277, 15743584, 1, 150, 941823744),
(278, 15743585, 1, 100, 941823744),
(279, 15743580, 1, 312, 941823744),
(280, 15743587, 1, 400, 941823744),
(281, 15743588, 1, 500, 941823744),
(282, 15743589, 1, 400, 941823744),
(283, 15743631, 3, 4500, 941823745),
(284, 15743630, 1, 999, 941823745),
(285, 15743632, 1, 999, 941823745),
(286, 15743633, 3, 3000, 941823745),
(287, 15743622, 2, 698, 941823745),
(288, 15743623, 2, 598, 941823745),
(289, 15743621, 3, 735, 941823745),
(290, 15743584, 1, 150, 941823746),
(291, 15743583, 4, 1002, 941823746),
(292, 15743595, 2, 498, 941823746),
(293, 15743583, 1, 251, 941823747),
(294, 15743584, 1, 150, 941823747),
(295, 15743623, 1, 299, 941823747),
(296, 15743633, 1, 1000, 941823747),
(297, 15743632, 1, 999, 941823747),
(298, 15743589, 1, 400, 941823748),
(299, 15743626, 1, 200, 941823749),
(300, 15743583, 8, 2004, 941823750),
(301, 15743623, 1, 299, 941823750),
(302, 15743631, 2, 3000, 941823751),
(303, 15743623, 1, 299, 941823751);

-- --------------------------------------------------------

--
-- Table structure for table `order_tab`
--

CREATE TABLE `order_tab` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending payment',
  `entry_date` datetime NOT NULL,
  `exp_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_tab`
--

INSERT INTO `order_tab` (`id`, `transaction_id`, `status`, `entry_date`, `exp_date`) VALUES
(6, 941823740, 'Pending payment', '2024-04-22 08:25:48', '2024-04-29 08:25:48'),
(7, 941823741, 'Paid cash', '2024-04-22 18:16:49', '2024-04-29 18:16:49'),
(8, 941823742, 'Pending payment', '2024-04-23 12:04:52', '2024-04-30 12:04:52'),
(9, 941823743, 'Paid online', '2024-04-23 18:01:23', '2024-04-30 18:01:23'),
(10, 941823744, 'Paid cash', '2024-04-24 09:52:34', '2024-05-01 09:52:34'),
(11, 941823745, 'Paid online', '2024-04-24 09:58:25', '2024-05-01 09:58:25'),
(12, 941823746, 'Paid online', '2024-04-24 11:55:59', '2024-05-01 11:55:59'),
(13, 941823747, 'Paid cash', '2024-04-30 09:18:32', '2024-05-07 09:18:32'),
(14, 941823748, 'Pending payment', '2024-04-30 09:28:26', '2024-05-07 09:28:26'),
(15, 941823749, 'Paid online', '2024-04-30 18:12:05', '2024-05-07 18:12:05'),
(16, 941823750, 'Paid cash', '2024-05-01 16:56:28', '2024-05-08 16:56:28'),
(17, 941823751, 'Pending payment', '2024-05-01 19:03:43', '2024-05-08 19:03:43');

--
-- Triggers `order_tab`
--
DELIMITER $$
CREATE TRIGGER `exp_trigger` BEFORE INSERT ON `order_tab` FOR EACH ROW SET
    NEW.entry_date = IFNULL(NEW.entry_date, NOW()),
    NEW.exp_date = TIMESTAMPADD(DAY, 7, NEW.entry_date)
$$
DELIMITER ;

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
(15743580, 'Corduroy Croptop Jacket', 'The yellow croptop jacket with buttons and pockets offers a chic and versatile addition to any wardrobe, providing both style and functionality in one vibrant piece.', 312.21, 'Womens', 'women jacket.png'),
(15743581, 'Paul Black Trouser', 'The black trousers for men are a classic wardrobe staple, offering timeless style and versatility suitable for both formal and casual settings, ensuring a sophisticated look with every wear.', 500, 'Mens', 'men classy pants.png'),
(15743582, 'Men Bomber Jacket', 'The men\'s bomber jacket is a timeless outerwear piece characterized by its iconic silhouette, featuring a zip-front closure, ribbed cuffs and hem, and a versatile design suitable for casual and semi-formal occasions, providing both style and comfort effortlessly.', 200, 'Mens', 'men bomber jacket.png'),
(15743583, 'Red Dress', 'The red minidress is a striking and bold garment that exudes confidence and glamour, featuring a flirtatious silhouette with a hemline above the knee, perfect for making a statement at any special event or night out.', 250.5, 'Womens', 'women minidress.png'),
(15743584, 'Flare Jeans', 'Flare jeans are a retro-inspired denim style characterized by their fitted hips and thighs that gradually widen into a dramatic flare below the knee, offering a flattering and effortlessly chic silhouette reminiscent of 1970s fashion.', 150, 'Womens', 'women pants.png'),
(15743585, 'Heart Graphic Tshirt', 'The heart graphic t-shirt is a playful and expressive garment featuring a vibrant or subtle heart design printed on the front, adding a touch of charm and personality to casual outfits, perfect for showcasing love or adding a whimsical element to everyday wear.', 100, 'Womens', 'women tshirt hearrttt.png'),
(15743586, 'Polo Shirt', 'The polo shirt is a classic and versatile garment, featuring a collar, buttoned placket, and short sleeves, offering a timeless and sophisticated look suitable for both casual and semi-formal occasions, providing comfort and style with its breathable fabric and understated elegance.', 199, 'Womens', 'women polo.png'),
(15743587, 'Pattern Playsuit', 'The pattern playsuit is a fun and stylish one-piece garment featuring a variety of playful prints and designs, offering a chic and effortless outfit solution perfect for warmer weather or casual outings, combining comfort with trend-forward aesthetics.', 399.5, 'Womens', 'women dress aesthetic.png'),
(15743588, 'Bomber Croptop Jacket', 'The bomber crop top jacket is a trendy fusion of two iconic styles, featuring the classic bomber jacket silhouette with a cropped length, offering a contemporary and edgy look that\'s perfect for layering over high-waisted bottoms or pairing with dresses for a modern twist on casual or streetwear fashion.', 499.5, 'Womens', 'women bomber jacket.png'),
(15743589, 'Beige Trouser', 'The beige trousers are a versatile wardrobe staple, offering a timeless and sophisticated option suitable for both casual and formal settings, featuring a neutral hue that effortlessly complements a variety of outfits and occasions, ensuring a polished and refined look with every wear.', 400, 'Womens', 'women beige trouser.png'),
(15743590, 'Skeleton Graphic Tshirt', 'The skeleton graphic t-shirt is a bold and edgy garment featuring a striking skeletal design printed on the front, adding a unique and alternative flair to casual outfits, perfect for those who embrace a rebellious or avant-garde aesthetic.', 129.5, 'Womens', 'women tshirt.png'),
(15743591, 'Vintage Jeans', 'Men\'s vintage jeans offer a timeless and rugged style inspired by classic denim designs from past decades, characterized by their distressed detailing, relaxed fit, and worn-in look, providing a nostalgic and effortlessly cool vibe that pairs well with a variety of casual outfits.', 699, 'Mens', 'men jeans.png'),
(15743592, 'Mark Jogger Pants', 'Jogger pants are a comfortable and versatile bottomwear option, featuring a tapered fit, elasticized cuffs at the ankles, and an adjustable drawstring waist, offering a stylish blend of athletic and casual aesthetics that\'s perfect for both lounging at home and running errands around town.', 350, 'Mens', 'men jogger pants.png'),
(15743593, 'Beige Pants', 'Men\'s beige pants offer a timeless and versatile option for casual and semi-formal occasions, featuring a neutral hue that pairs effortlessly with a variety of colors and patterns, providing a sophisticated and polished look suitable for both work and leisure.', 350, 'Mens', 'men pants beige.png'),
(15743594, 'Black Polo', 'The black polo shirt for men is a classic wardrobe staple, characterized by its collared neckline, buttoned placket, and short sleeves, offering a timeless and versatile option suitable for casual outings, sports activities, or semi-formal occasions, providing a sleek and effortlessly stylish look with its neutral color and understated design.', 199.5, 'Mens', 'men polo black.jpg'),
(15743595, 'Stripes Polo ', 'The striped polo shirt for men is a stylish and timeless garment featuring horizontal or vertical stripes, adding a touch of sophistication and visual interest to casual outfits, perfect for achieving a smart-casual look with its classic polo silhouette and versatile design.', 249, 'Mens', 'men polo stripes.png'),
(15743596, 'Cars Graphic Tshirt', 'The cars graphic t-shirt is a vibrant and playful garment featuring colorful illustrations or images of cars, perfect for automotive enthusiasts or anyone looking to add a fun and casual flair to their outfit, offering a dynamic and eye-catching look that\'s sure to turn heads.', 199, 'Mens', 'men tshirt.png'),
(15743597, 'Nirvana Tshirt', 'The Nirvana t-shirt is an iconic and timeless piece of band merchandise featuring the band\'s logo, album artwork, or other imagery associated with the legendary grunge band Nirvana, offering fans a stylish and nostalgic way to pay homage to their music and legacy while adding a touch of rock-inspired edge to their wardrobe.', 200, 'Mens', 'men tshirtt.png'),
(15743598, 'Dryfit Tshirt', 'The DryFit t-shirt for men is a performance-oriented garment crafted from moisture-wicking fabric, designed to keep the wearer dry and comfortable during intense workouts or outdoor activities by quickly wicking away sweat, offering breathability and freedom of movement, making it an ideal choice for active individuals seeking comfort and performance in their athletic wear.', 159, 'Mens', 'men dryfit.png'),
(15743599, 'Blue Corset Dress', 'A stunning blue corset dress, with its sculpted bodice, flowing skirt, and captivating hue, exudes elegance and allure for any occasion.', 500, 'Womens', 'blue.png'),
(15743600, 'Aesthetic Maxi Dress', 'An aesthetic maxi dress, with its flowing silhouette, soft fabrics, and whimsical details, epitomizes effortless bohemian chic.', 1000, 'Womens', 'cute.png'),
(15743601, 'Flower Cardigan', 'A flower cardigan, adorned with delicate floral motifs, adds a charming touch of femininity and warmth to any outfit.', 799, 'Womens', 'WOMEN SUNSHINE.png'),
(15743602, 'Black Polo Shirt', 'A men\'s black polo, with its timeless style and versatility, offers a classic yet sleek option for casual or semi-formal occasions.', 499, 'Mens', 'Black polo.png'),
(15743603, 'Black Leather Jacket', 'Men\'s leather garments, ranging from jackets to trousers, exude a rugged yet sophisticated charm, offering timeless style and durability with a hint of edgy elegance.', 1500, 'Mens', 'men leather.png'),
(15743604, 'Cute Jacket', 'A cute jacket, with its playful design, flattering fit, and charming details, adds a touch of whimsy and style to any outfit.', 999, 'Womens', 'jacket.png'),
(15743605, 'White Polo Shirt', 'A white polo shirt, crisp and classic, epitomizes timeless sophistication and effortless style for any occasion.', 599, 'Mens', 'polo zip.png'),
(15743606, 'Cargo Pants', 'Cargo pants, with their functional pockets and rugged aesthetic, offer practicality and versatility, perfect for both outdoor adventures and urban exploration.', 800, 'Mens', 'cargo pants.png'),
(15743607, 'PoloShirt', 'A polo shirt, with its collared neckline and sporty elegance, strikes the perfect balance between casual comfort and refined style, making it a wardrobe essential for any occasion.', 399, 'Womens', 'zip poloshirt.png'),
(15743608, 'Black Maxidress', 'A black maxidress, with its flowing silhouette and timeless elegance, exudes sophistication and versatility for any formal or casual affair.', 999, 'Womens', 'black maxidress.png'),
(15743609, 'Longsleeve', 'A black long-sleeve shirt, with its sleek and versatile design, offers understated elegance and timeless style for any occasion, effortlessly blending sophistication with comfort.', 546, 'Mens', 'men longsleeve.png'),
(15743610, 'Blue Polo', 'A blue polo shirt, with its classic yet vibrant style, offers a versatile and polished look suitable for both casual outings and semi-formal occasions.', 899, 'Mens', 'blue.png'),
(15743611, 'Brown Longsleeve', 'A brown long-sleeve shirt, with its warm and earthy tone, adds a touch of rustic charm and versatility to any outfit, perfect for casual or outdoor settings.', 600, 'Mens', 'basta.png'),
(15743612, 'Blue Tube Minidress', 'A blue tube minidress, with its sleek and flirty design, exudes confidence and style, making it the perfect choice for a night out or special occasion.', 1200, 'Womens', 'blue minidress.png'),
(15743613, 'White Corset Dress', 'A white corset dress, with its structured bodice and elegant silhouette, emanates sophistication and timeless charm, making it a stunning choice for weddings or formal events.', 999, 'Womens', 'white.png'),
(15743614, 'White Tshirt', 'A white T-shirt, with its simplicity and versatility, serves as a timeless wardrobe staple, offering comfort and effortless style for any casual occasion.', 450, 'Womens', 'white tee.png'),
(15743615, 'Graphic Tshirt', 'A graphic T-shirt, adorned with vibrant designs or witty slogans, adds personality and flair to any casual ensemble, making it a stylish choice for expressing individuality and creativity.', 500, 'Womens', 'sunshine.png'),
(15743616, 'Stripes Tshirt', 'A striped T-shirt, with its timeless pattern and casual charm, brings a touch of classic sophistication to any outfit, effortlessly elevating your everyday style with a hint of nautical flair.', 299, 'Womens', 'stripes.png'),
(15743617, 'Women Nirvana Tshirt', 'Nirvana was an iconic American rock band from the 1990s, known for their influential sound, led by the late Kurt Cobain, and their album \"Nevermind,\" which propelled them to global fame, shaping the landscape of alternative rock music.', 399, 'Womens', 'nirvana.png'),
(15743618, 'Blue Tshirt', 'A blue T-shirt, with its versatile and understated style, offers a timeless and effortlessly cool option for casual wear, perfect for any occasion.', 399, 'Mens', 'blue tshirt.png'),
(15743619, 'Gray Tshirt', 'A gray T-shirt, with its subtle and versatile hue, provides a classic and understated option for casual attire, offering effortless style and comfort for everyday wear.', 400, 'Mens', 'gray.png'),
(15743620, 'White T-shirt ', 'A white T-shirt, with its clean and classic appeal, serves as a timeless wardrobe essential, offering versatility and simplicity for a wide range of outfits and occasions.', 400, 'Mens', 'white tee.png'),
(15743621, 'Pink sunglasses', 'Pink sunglasses add a vibrant and playful touch to any ensemble while offering protection from the sun\'s glare.', 245, 'Womens/Accessories', 'pink sunglasses.png'),
(15743622, 'Aesthetic Black Sunglass', 'Black glasses exude a timeless and sophisticated aesthetic, effortlessly adding an intellectual edge to any look with their classic appeal.', 349, 'Mens/Accessories', 'glasses.png'),
(15743623, 'Unisex Sunglass', 'Unisex sunglasses offer versatile style options suitable for anyone, regardless of gender, providing a fashionable and inclusive accessory for all.', 299, 'Accessories', 'ehe.png'),
(15743624, 'Y2K glasses', 'Y2K glasses, inspired by the early 2000s fashion, often feature sleek, futuristic designs with small frames, tinted lenses, and bold colors, adding a nostalgic yet trendy touch to any outfit.', 345, 'Accessories', 'weh.png'),
(15743625, 'Silver Bracelet', 'A silver bracelet is a timeless accessory, offering understated elegance and versatility that can complement both casual and formal attire with its sleek metallic shine.', 200, 'Mens/Accessories', 'silver.png'),
(15743626, 'Black Bracelet', 'A black bracelet brings a touch of sophistication and versatility to any ensemble, effortlessly blending with various styles and occasions, whether it\'s a sleek leather cuff or a minimalist beaded design.', 200, 'Mens/Accessories', 'lack.png'),
(15743627, 'Lucky Bracelet', 'A lucky bracelet often carries symbolic charms or beads believed to bring good fortune or protection, serving as a meaningful and personal accessory that can inspire positivity and confidence in its wearer.', 250, 'Womens/Accessories', 'brace.png'),
(15743628, 'Chain Bracelet', 'A chain bracelet is a stylish and versatile accessory, featuring interlocking links that can range from delicate and dainty to bold and chunky, adding a touch of edgy sophistication to any outfit.', 250, 'Womens/Accessories', 'bracelet.png'),
(15743629, 'Square shaped watch', 'A square watch offers a unique and modern take on traditional timepieces, with its distinctive shape adding a sleek and contemporary touch to your wrist, making a subtle yet stylish statement.', 999, 'Accessories', 'watch.png'),
(15743630, 'Rounded Shaped Watch', 'A round watch exudes timeless elegance and classic sophistication, with its traditional shape serving as a versatile accessory that complements any outfit or occasion, epitomizing refined style and functionality.', 999, 'Accessories', 'round.png'),
(15743631, 'Brown Watch', 'A brown watch exudes warmth and versatility, offering a classic yet distinctive alternative to traditional black or silver timepieces, making it a stylish choice for both casual and formal wear, especially with its ability to complement earthy tones and add a touch of sophistication to any ensemble.', 1500, 'Accessories', 'brown.png'),
(15743632, 'Butterfly Watch', 'A butterfly watch features a whimsical and feminine design, often with a dial or strap adorned with butterfly motifs, symbolizing beauty, transformation, and freedom, making it a charming and enchanting accessory for those who appreciate nature-inspired elegance.', 999, 'Womens/Accessories', 'butterfly.png'),
(15743633, 'Heart Watch', 'A heart watch showcases a romantic and playful design, with its dial or strap adorned with heart-shaped elements, symbolizing love, affection, and passion, making it a delightful and sentimental accessory for expressing heartfelt sentiments and adding a touch of sweetness to any outfit.', 1000, 'Womens/Accessories', 'heart.png');

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

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `location`, `phone-num`) VALUES
(1, 'Bortapaps Inc.', 'Ubec Chapter', 98362546);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `total` double DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `userId` int(11) NOT NULL,
  `employeeId` int(11) DEFAULT NULL,
  `inventoryId` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `total`, `amount`, `status`, `userId`, `employeeId`, `inventoryId`, `date`) VALUES
(941823740, 546, NULL, 'Closed', 10, NULL, 1, '2024-04-22 08:25:48'),
(941823741, 1500, 1510, 'Closed', 10, 1, 1, '2024-04-22 18:16:49'),
(941823742, 345, NULL, 'Pending', 1, NULL, 1, '2024-04-23 12:04:52'),
(941823743, 999, NULL, 'Pending', 10, 1, 1, '2024-04-23 18:01:23'),
(941823744, 400, 509, 'Closed', 1, 1, 1, '2024-04-24 09:52:34'),
(941823745, 735, NULL, 'Closed', 10, 1, 1, '2024-04-24 09:58:25'),
(941823746, 498, NULL, 'Pending', 10, NULL, 1, '2024-04-24 11:55:59'),
(941823747, 999, 1000, 'Closed', 1, 1, 1, '2024-04-30 09:18:32'),
(941823748, 400, NULL, 'Pending', 1, NULL, 1, '2024-04-30 09:28:26'),
(941823749, 200, NULL, 'Closed', 1, 1, 1, '2024-04-30 18:12:05'),
(941823750, 299, 1000, 'Closed', 12, 1, 1, '2024-05-01 16:56:28'),
(941823751, 299, NULL, 'Pending', 13, NULL, 1, '2024-05-01 19:03:43');

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
(3, 'bortakid', 'bortakid@gmail.com', 'bortakid123'),
(4, 'testuser', 'test@asdasd', '$2y$10$DDB5qWEaSgRH5imyuFDIMunLcT9yhDGeGID.CEqh4hj0AkX0dAdk6'),
(5, 'asd', 'asd@asd', '$2y$10$DJbgar.6YgkJ8tgXnQPxQ.jHKZCKqE9EOZzwbl4gtlqyKg8QEr6Vy'),
(6, 'newuser', 'newuser@gmail.com', '$2y$10$XOgNpTeXZ2FHntRTNV.IoegtU2vFs4nAnr8zRXb7xTrNbn9l3jG1m'),
(7, 'paulchoy', 'paul@choy.com', '$2y$10$R0cxK1yGKvSCWTZCVcg6IOoTUHtayLZc5GohR4krP9RmS1YaiaMdu'),
(9, 'userpaul', 'userpaul@gmail.com', '$2y$10$F.qerHYwhadH/voy5r5XHewZv6clhb1y0nIyKtyZ5CLE8u.Pm8wcy'),
(10, 'test_user', 'test@gmail.com', '$2y$10$08zthMccYgJAMubC0e5TEelVvRh.cgMSl/AR70K4fY60J8iaF5Zuq'),
(11, 'janine', 'ja9@gmail.com', '$2y$10$BM64WlLQhjZtTwdx7Mj1h.R8JJnPvKi6TlKkgfFNNF3fMh6MtpOGe'),
(12, 'demo_user', 'demo@gmail.com', '$2y$10$sNmEW3bJ6DvJ8aph2NIQO.XR5oxPR5GTxGemNpuy16WG6HUQYzJw2'),
(13, 'demo1', 'demo1@gmail.com', '$2y$10$egasa/q7bEJXg54ZquvOY.VaRenTaqy8iClQMFqyFZf9tZ9JyrGDC');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `phonenum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`id`, `user_id`, `product_id`) VALUES
(12, 10, 15743633),
(14, 11, 15743582),
(15, 1, 15743598),
(16, 1, 15743587),
(17, 1, 15743588),
(18, 1, 15743584),
(19, 1, 15743591),
(20, 1, 15743582),
(21, 12, 15743582);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `supplierId` (`supplierId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactionId` (`transactionId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `order_tab`
--
ALTER TABLE `order_tab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`);

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
  ADD KEY `inventoryId` (`inventoryId`);

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
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=304;

--
-- AUTO_INCREMENT for table `order_tab`
--
ALTER TABLE `order_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15743634;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=941823752;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`supplierId`) REFERENCES `suppliers` (`id`),
  ADD CONSTRAINT `inventory_ibfk_3` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`transactionId`) REFERENCES `transactions` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_tab`
--
ALTER TABLE `order_tab`
  ADD CONSTRAINT `order_tab_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`employeeId`) REFERENCES `employees` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD CONSTRAINT `user_wishlist_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `user_wishlist_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
