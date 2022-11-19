-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 09:24 PM
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
-- Database: `webpagecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(10) UNSIGNED NOT NULL,
  `url_cover` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `about_you` text DEFAULT NULL,
  `phone` int(32) DEFAULT NULL,
  `location` varchar(32) DEFAULT NULL,
  `service_product` varchar(32) DEFAULT NULL,
  `about_company` text DEFAULT NULL,
  `linkedin` varchar(55) DEFAULT NULL,
  `facebook` varchar(55) DEFAULT NULL,
  `twitter` varchar(55) DEFAULT NULL,
  `google` varchar(55) DEFAULT NULL,
  `card1image` varchar(255) DEFAULT NULL,
  `card1text` text DEFAULT NULL,
  `card2image` varchar(255) DEFAULT NULL,
  `card2text` text DEFAULT NULL,
  `card3image` varchar(255) DEFAULT NULL,
  `card3text` text DEFAULT NULL,
  `last_edit` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `url_cover`, `title`, `subtitle`, `about_you`, `phone`, `location`, `service_product`, `about_company`, `linkedin`, `facebook`, `twitter`, `google`, `card1image`, `card1text`, `card2image`, `card2text`, `card3image`, `card3text`, `last_edit`) VALUES
(12, 'https://wallpaperaccess.com/full/656665.jpg', 'Smith and Johnson Corporate', 'We are the best there is today', 'Join us in the race for the best business in the world', 123123123, 'New York', 'Services', 'You can find us easily if you search top 10 businesses in finance today', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/', 'https://wallpaperaccess.com/full/656668.jpg', 'Finance support and counselling in the best business in America', 'https://wallpaperaccess.com/full/656665.jpg', 'Business planning and stock operations around the world 24/7', 'https://wallpaperaccess.com/full/6030036.jpg', 'Investments in secure assets and long term financial standings', ' 2022-11-16 01:04:59'),
(13, 'https://six-walls.com/wp-content/uploads/2020/04/DSC2563-1.jpg', 'Warner and Forber', 'Financial intelligence at it\'s f', 'We are the leaders of the financial market and industry since 1977 and still soaring at the top 5 on the market', 123123123, 'London', 'Services', 'Contact us if you are interested in the development and research of the most stunning economic currents in Europe', 'https://www.linkedin.com', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.google.com/', 'https://images.unsplash.com/photo-1508385082359-f38ae991e8f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJ1aWxkaW5nJTIw', 'Offering the finest cold wallet services on the market since the crypto value started', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YnVzaW5lc3MlMjBi', 'Selected offices for the best managers yet to come in the industry', 'https://wallpaper.dog/large/20407836.jpg', 'Precise statistics and accounting on every field you can imagine, of course in financial aspect primarily', '2022-11-16 02:05:21'),
(14, 'https://six-walls.com/wp-content/uploads/2020/04/DSC2563-1.jpg', 'Warner and Forber', 'Financial intelligence at it\'s finest', 'We are the leaders of the financial market and industry since 1977 and still soaring at the top 5 on the market', 123123123, 'London', 'Services', 'Contact us if you are interested in the development and research of the most stunning economic currents in Europe', 'https://www.linkedin.com', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.google.com/', 'https://images.unsplash.com/photo-1508385082359-f38ae991e8f2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTR8fGJ1aWxkaW5nJTIwaW4lMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&w=1000&q=80', 'Offering the finest cold wallet services on the market since the crypto value started', 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8YnVzaW5lc3MlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fA%3D%3D&w=1000&q=80', 'Selected offices for the best managers yet to come in the industry', 'https://wallpaper.dog/large/20407836.jpg', 'Precise statistics and accounting on every field you can imagine, of course in financial aspect primarily', '2022-11-16 02:18:37'),
(15, 'https://www.springboard.com/blog/wp-content/uploads/2022/01/is-programming-hard-a-guide-to-getting-started-in-2022-scaled-1.jpeg', 'CXPT', 'Programmes Assemble', 'We are looking for the best programming enthusiasts who are willing to go even further than they imagine ', 123123123, 'Stockholm', 'Services', 'Whether you have a CV or not, we can make a reasonable meeting and see for ourselves whether or not you are a qualified candidate for a job, or just take some courses with us', 'https://www.linkedin.com', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.google.com/', 'https://next-cdn.codementor.io/images/pair-programming/pair-programming-hero.png', 'Coding courses in all languages and mentoring in the whole process', 'https://assets-api.kathmandupost.com/thumb.php?src=https://assets-cdn.kathmandupost.com/uploads/source/news/2022/opinion/shutterstock1914164533-1652959735.jpg&w=900&height=601', 'Assisted project development training and mentoring throughout the whole process', 'https://static1.smartbear.co/smartbearbrand/media/images/blog/what%E2%80%99s-the-best-programming-language-to-learn-first.png?ext=.png', 'Job applications and connecting the programmer with the world', '2022-11-16 02:22:12'),
(16, 'https://agcdn-2mrybbgckm7omi0k.netdna-ssl.com/wp-content/uploads/2016/12/alphagamma-The-easiest-way-to-start-a-car-selling-business-entrepreneurship.jpg', 'Fast and furious', 'If you are looking for the perfect car, you have come to the right place', 'We are a car dealership and service provider with a long term experience and the best professional car mechanics at our disposal, feel free to check out our salons ', 123123123, 'Berlin', 'Products', 'You can find us at www.example.example, check out our latest brands and car parts we are sure you can find something to your own liking', 'https://www.linkedin.com', 'https://www.facebook.com', 'https://twitter.com/', 'https://www.google.com/', 'https://img.philkotse.com/2019/10/05/zySfJtDY/buy-and-sell-1-3856.jpg', 'We offer the latest electric engines in SUV and Offroad vehicles customized for your taste', 'https://www.designhill.com/design-blog/wp-content/uploads/2017/10/2-min-6.jpg', 'Best payment methods and customized payment offers with everything you could imagine', 'https://www.startingbusiness.com/blog/uploads/article/709/car-dealership.jpg', 'The best fine tuning car parts and selected materials for your taste ', '2022-11-19 21:12:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
