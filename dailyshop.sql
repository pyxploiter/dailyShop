-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2017 at 07:21 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailyshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'a@b.com', '123'),
(2, 'asad@gmail.com', '123'),
(3, 'c@d.com', '123'),
(4, 'e@b.com', '123'),
(5, 'a@f.com', '123'),
(6, 'g@h.com', '123'),
(7, 'i@j.com', '123'),
(8, 'k@l.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'DELL'),
(3, 'LENOVO'),
(4, 'Sony'),
(5, 'Nintendo'),
(6, 'Samsung'),
(7, 'Asus'),
(8, 'Apple'),
(9, 'Huawei'),
(10, 'NOKIA'),
(11, 'NIKON'),
(12, 'Play Station'),
(13, 'Xbox');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) DEFAULT NULL,
  `ip_add` varchar(16) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'LEDs'),
(3, 'Gaming Consoles'),
(4, 'Smart Phones'),
(5, 'Cameras');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_ip` varchar(100) DEFAULT NULL,
  `customer_fname` text NOT NULL,
  `customer_lname` text,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text,
  `customer_city` text,
  `Address` varchar(255) NOT NULL,
  `customer_contact` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_fname`, `customer_lname`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `Address`, `customer_contact`) VALUES
(1, '::1', 'Mohammad', 'Uzair', 'mohduzair9@gmail.com', 'asd', 'Pakistan', 'Karachi', '', '03135284998'),
(2, '::1', 'Asad', 'Ali', 'asadali@gmail.com', 'asad', 'Pakistan', 'Layyah', 'House #13, Street #7, Housing Colony', '03025855267'),
(3, '1', 'Mujeeb', 'Ur Rehman', 'mrehman.bscs15seecs@seecs.edu.pk', '15bscsmrehman', 'Pakistan', 'Islamabad', 'H-12', '7777-7777777'),
(4, '2', 'Muhammad', ' Asad Ali', 'mali@seecs.edu.pk', '15bscsmali', 'Pakistan', 'Islamabad', 'H-11', '0012-3456789'),
(5, '6', 'Mohammad', 'Uzair', 'muzair.bscs15seecs@seecs.edu.pk', '15bscsmuzair', 'Pakistan', 'Islamabad', 'H-12', NULL),
(6, '10', 'Hafiz', ' Muhammad Uzair', 'hmuzair.bscs15seecs@seecs.edu.pk', '15bscshmuzair', 'Pakistan', 'Islamabad', 'H-12', '1234-5678910'),
(7, '16', 'Isha', 'Shafique', 'ishafique.bscs15seecs@seecs.edu.pk', '15bscsishafique', 'Pakistan', 'Islamabad', 'H-12', NULL),
(8, '12', 'Mueed', 'Ur Rehman', 'murehman.bscs15seecs@seecs.edu.pk', '15bscsmurehman', 'Pakistan', 'Islamabad', 'H-12', '9999-9999999'),
(9, '17', 'Abdullah', 'Rashid', 'arashid.bscs15seecs@seecs.edu.pk', '15bscsarashid', 'Pakistan', 'Islamabad', 'H-12', NULL),
(10, '19', 'Huzaifah', 'Saleem', 'hsaleem.bscs15seecs@seecs.edu.pk', '15bscshsaleem', 'Pakistan', 'Islamabad', 'H-12', '4512-6216453'),
(11, '25', 'Syed Ajwad', 'Ud Din', 'sdin.bscs15seecs@seecs.edu.pk', '15bscssdin', 'Pakistan', 'Islamabad', 'H-12', '2575-7525725'),
(12, '75', 'Maheen', 'Jamil', 'mjamil.bscs15seecs@seecs.edu.pk', '15bscsmjamil', 'Pakistan', 'Islamabad', 'H-12', '7525-2575275');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`) VALUES
(1, 11, 2, 1),
(2, 5, 2, 1),
(3, 12, 2, 1),
(4, 8, 2, 1),
(5, 4, 5, 3),
(6, 2, 4, 3),
(7, 8, 6, 1),
(8, 1, 7, 1),
(9, 3, 8, 2),
(10, 5, 9, 4),
(11, 3, 1, 5),
(12, 1, 1, 1),
(13, 9, 1, 1),
(14, 10, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `customer_id`, `product_id`, `payment_date`) VALUES
(1, 1330, 2, 7, '2017-01-17 01:30:44'),
(2, 360, 2, 5, '2017-01-17 01:33:20'),
(3, 490, 2, 10, '2017-01-17 01:33:20'),
(4, 460, 2, 12, '2017-01-17 01:34:32'),
(5, 800, 2, 8, '2017-01-17 01:35:13'),
(6, 1330, 2, 7, '2017-01-17 01:37:30'),
(7, 360, 1, 5, '2017-01-17 01:37:30'),
(8, 490, 2, 5, '2017-01-17 01:37:30'),
(9, 460, 4, 5, '2017-01-17 01:37:30'),
(10, 800, 7, 5, '2017-01-17 01:37:30'),
(11, 460, 1, 5, '2017-01-17 01:37:30'),
(12, 360, 3, 5, '2017-01-17 01:37:30'),
(13, 800, 5, 5, '2017-01-17 01:37:30'),
(14, 4460, 8, 5, '2017-01-17 01:37:30'),
(15, 360, 9, 5, '2017-01-17 01:37:30'),
(16, 1190, 1, 3, '2017-01-17 06:37:43'),
(17, 360, 1, 5, '2017-01-17 06:37:43'),
(18, 890, 1, 2, '2017-01-17 06:37:43'),
(19, 4460, 1, 1, '2017-01-17 08:32:10'),
(20, 910, 1, 9, '2017-01-18 11:28:17'),
(21, 490, 1, 10, '2017-05-29 18:07:02'),
(22, 800, 1, 8, '2017-05-29 18:07:02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `product_title` text NOT NULL,
  `product_img1` text,
  `product_img2` text,
  `product_img3` text,
  `price` int(11) NOT NULL,
  `product_desc` text,
  `status` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `price`, `product_desc`, `status`) VALUES
(1, 5, 11, '2017-01-16 22:14:24', 'Nikon D3300 1532 18-55mm f/3.5-5.6G VR II', '81aLEVAFXnL._SL1500_.jpg', '', '', 4460, '24.2 MP CMOS DX-format sensor\r\n5 frames per second continuous shooting\r\n11 AF points with 3D tracking\r\nISO 100-12800 (expandable to 25600)\r\n1080 (60, 50, 30, 25, 24 fps) HD video (MPEG-4/H.264/MOV)\r\n3 inch LCD with 921,000 dots\r\nExpeed 4 processing', 'on'),
(4, 3, 5, '2017-01-16 22:29:29', 'Wii Uâ„¢ GamePad', 'Wii-U.jpg', '', '', 340, 'The Wii U GamePad controller removes the traditional barriers between games, players and the TV by creating a second window into the video game world.\r\n\r\nIt also offers a new way for viewers to engage with their favorite entertainment. The GamePad incorporates a 6.2-inch, 16:9 aspect ratio LCD touch screen, as well as traditional button controls and two analog sticks. Inputs include a +Control Pad, L/R sticks, L/R stick buttons, A/B/X/Y buttons, L/R buttons, ZL/ZR buttons, Power button, HOME button, -/SELECT button, +/START button, and TV CONTROL button.\r\n\r\nThe GamePad also includes motion control (powered by an accelerometer, gyroscope and geomagnetic sensor), a front-facing camera, a microphone, stereo speakers, rumble features, a sensor bar, an included stylus and support for Near Field Communication (NFC) functionality.', 'on'),
(2, 5, 4, '2017-01-16 22:16:34', 'Sony DSCW800/B 20.1 MP Digital Camera', '61SY905+enL._SL1200_.jpg', '', '', 890, 'MP Super HAD CCD sensor for beautifully detailed images\r\nSony Lens w/ 5x Optical Zoom\r\nReduced blur with SteadyShot Image stabilization\r\nCapture your videos in 720p HD Movie mode\r\nSimplify camera menu with Easy Mode.\r\nSuper HAD CCD 20.1 MP sensor\r\nSony Lens with F3.2 (W) â€“ 6.4 (T) Maximum Aperture', 'on'),
(3, 5, 4, '2017-01-16 22:18:13', 'Nikon COOLPIX L32 Digital Camera', '51tpjvrtztL.jpg', '', '', 1190, '5x wide-angle NIKKOR zoom lens\r\nLarge 3.0-inch LCD\r\n720p HD video with sound\r\nSmart Portrait System\r\nRuns on regular AA batteries', 'on'),
(5, 3, 13, '2017-01-16 22:30:36', 'Xbox 360 250GB', 'Xbox360-250GB.jpg', '', '', 360, 'Xbox 360 brings you a total games and entertainment experience. The largest library of games , including titles that get you right into the thick of it with Kinect. Plus, your whole family can watch HD movies, TV shows, live events, music, sports and moreâ€”across all your devices 5. Xbox 360 is the center of your games and entertainment universe.', 'on'),
(6, 3, 12, '2017-01-16 22:31:43', 'Sony PlayStation 4 1TB UK Black', 'Sony-Playstation-4.jpg', '', '', 450, 'The PS4â„¢ system focuses on the gamer, ensuring that the very best games and the most immersive experiences are possible on the platform. The PS4â„¢ system enables the greatest game developers in the world to unlock their creativity and push the boundaries of play through a system that is tuned specifically to their needs. The PS4â„¢ system is centered around a powerful custom chip that contains eight x86-64 cores and a state of the art 1.84 TFLOPS graphics processor with 8 GB of ultra-fast GDDR5 unified system memory, easing game creation and increasing the richness of content achievable on the platform. The end result is new games with rich, high-fidelity graphics and deeply immersive experiences', 'on'),
(7, 1, 3, '2017-01-16 22:34:28', 'Lenovo Yoga 900 13 Core i7-6500U 256GB 8GB QHD', 'Yoga-900-13.jpg', '', '', 1330, 'Specifications\r\n\r\nProcessor\r\n6th Generation IntelÂ® Coreâ„¢ i7-6500U (2.5GHz Turbo Boost 3.1GHz, 4MB Cache)\r\nDisplay\r\n13.3" Quad HD+ IPS, 300 nits x360 Convertible Touch (3200 x 1800)\r\nStorage\r\n256GB SSD SATA\r\nRam\r\n8GB DDR3L\r\nOperating System\r\nGenuine Windows 10 Home (64-bit)\r\nGraphics Card\r\nIntel HD 520 Shared\r\nExtra Features\r\nTouch Screen, QHD', 'on'),
(8, 1, 2, '2017-01-16 22:36:04', 'Dell Inspiron 13 Convertible Core i7-6500U FHD Touch', 'Inspiron-13-7353.jpg', '', '', 800, 'Specifications\r\n\r\nProcessor\r\n6th Generation IntelÂ® Coreâ„¢ i7-6500U (2.5GHz Turbo Boost upto 3.1GHz)\r\nDisplay\r\n13.3" Full HD LED x360 Convertible Touch Screen (1920x1080)\r\nStorage\r\n256GB 5400rpm SSD SATA\r\nRam\r\n8GB DDR3L\r\nOperating System\r\nGenuine Windows 10 (64-bit)\r\nGraphics Card\r\nIntel HD 520 Shared\r\nExtra Features\r\nTouch Screen, FHD', 'on'),
(9, 1, 1, '2017-01-16 22:36:54', 'HP Probook 440 G3 Core i7-6500U 1TB 8GB 2GB-GC ', 'Probook-440-G3.jpg', '', '', 910, 'Specifications\r\n\r\nProcessor\r\n6th Generation IntelÂ® Coreâ„¢ i7-6500U (2.5 GHz Turbo Boost 3.1 GHz)\r\nDisplay\r\n14" diagonal HD anti-glare flat LED-backlite (1366 x 768)\r\nStorage\r\n1 TB 5400 rpm SATA\r\nRam\r\n8 GB DDR3L\r\nOperating System\r\nFreeDOS 2.0\r\nGraphics Card\r\nAMD Radeonâ„¢ R7 M340 ( 2 GB DDR3 dedicated, switchable)\r\nExtra Features\r\nFinger Print Reader', 'on'),
(10, 2, 6, '2017-01-16 22:47:49', 'Samsung 32J5100 32" Full HD Flat LED', '32J5100.jpg', '', '', 490, 'More vibrant colours for better images\r\nBringing a full multimedia experience into your living room with HDMI\r\nWatch movies from your USB', 'on'),
(11, 2, 4, '2017-01-16 22:48:35', 'Sony Bravia 40" KDL-R562C LED', 'KDL-R562C.jpg', '', '', 690, 'Connect with great entertainment with Built-in Wi-FiÂ®\r\nClear Resolution Enhancer\r\nMotion flow XR 100hz\r\nFlatter any living space with beautiful styling and class-leading slimness.\r\nYouTubeâ„¢ and more', 'on'),
(12, 1, 2, '2017-01-17 00:48:23', 'Dell 3521', 'Inspiron-13-7353.jpg', '', '', 460, 'abc', 'on'),
(13, 3, 10, '2017-01-17 06:41:03', 'gaskjd', 'space_painting-wallpaper-1366x768.jpg', '', '', 32432, 'sadsa', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
