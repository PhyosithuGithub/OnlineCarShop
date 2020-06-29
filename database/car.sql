-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 03, 2019 at 12:29 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin123'),
(2, 'su@gmail.com', 'su123');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `year` datetime NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mileage` varchar(100) NOT NULL,
  `fuel_type` varchar(100) NOT NULL,
  `seat` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `cat_id`, `model`, `type`, `year`, `color`, `price`, `mileage`, `fuel_type`, `seat`, `image`) VALUES
(15, 3, 'Mercedes-Benz GLC 300', 'sport', '2018-08-03 00:00:00', 'White', '200 lakhs', '10 - 15k Km', 'Desel', 4, 'Mercedes2.jpg'),
(16, 3, 'Mercedes-Benz GLA 180', 'sport', '2015-01-17 00:00:00', 'Black', '320 lakhs', '25 - 30k Km', 'Desel', 3, 'Mercedes3.JPG'),
(17, 3, 'Mercedes-Benz S550 ', 'sport', '2013-12-05 00:00:00', 'Black', '520 lakhs', '20 - 25k Km', 'Pedro', 4, 'Mercedes4.JPG'),
(18, 10, 'Toyota Crown Royal Saloon ', 'sport', '2005-09-17 00:00:00', 'Black', '220 lakhs', '155 - 160k Km', 'Diesel', 3, 'toyota1.JPG'),
(19, 10, 'Toyota Kluger', 'sport', '2003-10-18 00:00:00', 'Black', '500 lakhs', '120 - 125k Km', 'Petro', 4, 'toyota2.JPG'),
(20, 10, 'Toyota Hilux', 'sport', '2007-09-14 00:00:00', 'Black', '310 lakhs', '155 - 160k Km', 'fuel', 2, 'toyota1.JPG'),
(21, 6, 'Honda Fit', 'Sport', '2014-09-04 00:00:00', 'Black', ' 230 Lakh', '65 - 70k Km', 'Petrol', 4, 'honda1.JPG'),
(22, 6, 'Honda Fit Shuttle Hybrid ', '', '2013-11-12 00:00:00', 'Grey', ' 368 Lakh ', '50 - 55k Km', 'Petrol', 3, 'honda2.JPG'),
(23, 9, 'Nissan Note Rider', 'Sport', '2012-11-07 00:00:00', 'Black', ' 205 Lakh', '125 - 130k Km', 'Petrol', 4, 'nissan1.JPG'),
(24, 9, 'Nissan Note ', 'Sport', '2009-12-01 00:00:00', 'White', '157 lakh', '120 - 125k Km', 'Petrol', 4, 'nissan2.jpg'),
(25, 9, 'Nissan Fairlady Z ', 'Sport', '0000-00-00 00:00:00', 'Grey', '260 Lakh', '105 - 110k Km', 'Petrol', 4, 'nissan3.JPG'),
(26, 19, 'Mitsubishi Delica D2 ', '', '2011-11-11 00:00:00', 'Grey', ' 225 Lakh ', '80 - 85k Km', 'Petrol', 4, 'mitsubishi1.JPG'),
(27, 19, 'Mitsubishi RVR', 'Sport', '2011-09-10 00:00:00', 'White', ' 350 Lakh ', '60 - 65k Km', 'Petrol', 4, 'mitsubishi2.jpg'),
(28, 4, 'BMW 318i ', 'Sport', '2016-12-05 00:00:00', 'White', ' 1000 Lakh', '75 - 80k Km', 'Petrol', 4, 'bmw1.jpg'),
(29, 4, 'BMW X4', 'Sport', '2016-08-01 00:00:00', 'Black', ' 1650 Lakh', '15 - 20k Km', 'Petrol', 4, 'bmw2.JPG'),
(30, 21, 'Chevrolet Spin ', '', '2015-04-04 00:00:00', 'Black', ' 415 Lakh', '25 - 30k Km', 'Petrol', 4, 'chevrolet1.jpg'),
(31, 21, 'Chevrolet Equinox', 'Sport', '2017-02-10 00:00:00', 'Black', ' 700 Lakh', '20 - 25k Km', 'Petrol', 4, 'chevrolet2.jpg'),
(32, 17, 'Suzuki Ciaz ', 'Sport', '0000-00-00 00:00:00', 'Black', ' 255 Lakh', '20 - 25k Km', 'Petrol', 4, 'suzuki1.jpg'),
(33, 17, 'Suzuki Swift', 'Sport', '2018-12-03 00:00:00', 'White', ' 250 Lakh', '60 - 65k Km', 'Petrol', 4, 'suzuki2.jpg'),
(34, 8, 'Volkswagen Golf ', 'Sport', '2014-10-07 00:00:00', 'White', '350 Lakh', '80 - 85k Km', 'Petrol', 4, 'volkswagen1.JPG'),
(35, 8, 'Volkswagen Beetle', 'Sport', '2013-03-10 00:00:00', 'White', '350 Lakh', '70 - 75k Km', 'Petrol', 4, 'volkswagen12.JPG'),
(36, 7, 'Ford Ranger Double Cab ', 'Sport', '2017-11-05 00:00:00', 'Light Grey', ' 655 Lakh', '0 - 5k Km', 'Diesel', 5, 'ford1.jpg'),
(37, 7, 'Ford F150', 'Sport', '2015-08-09 00:00:00', 'Red', '1700 lakh', '5 - 10k Km', 'Petrol', 4, 'ford2.JPG'),
(38, 5, 'Hyundai Sonata ', 'Sport', '2017-09-09 00:00:00', 'White', ' 520 Lakh', '50 - 55k Km', 'Petrol', 4, 'hyundai1.JPG'),
(39, 5, 'Hyundai Grandeur ', '', '2011-11-18 00:00:00', 'White', ' 380 Lakh', '50 - 55k Km', 'Petrol', 4, 'hyundai2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `brand`, `reg_date`) VALUES
(3, 'Mercedes-Benz', '2019-07-31 00:00:00'),
(4, 'BMW', '2019-07-31 00:00:00'),
(5, 'Hyundai', '2019-01-02 00:00:00'),
(6, 'Honda', '2019-01-07 00:00:00'),
(7, 'Ford', '2005-02-15 00:00:00'),
(8, 'Volkswagen', '2016-02-10 00:00:00'),
(9, 'Nissan', '2018-08-17 00:00:00'),
(10, 'Toyota', '2004-08-20 00:00:00'),
(16, 'Kia', '2019-07-18 00:00:00'),
(17, 'Suzuki', '2019-03-12 00:00:00'),
(18, 'Mazda', '2010-11-14 00:00:00'),
(19, 'Mitsubishi', '2001-06-15 00:00:00'),
(20, 'Isuzu', '2006-05-10 00:00:00'),
(21, 'Chevrolet', '2019-08-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Kyaw Kyaw', 'kyaw@gmail.com', '097777777777', 'I like this page. It helps me a lot'),
(2, 'Aye Aye', 'aye@gmail.com', '096366353536', 'IT is good. It helps a lot.'),
(3, 'Bo Bo', 'bo@gmail.com', '0937373773', 'My name is Bo Bo. I am form Burma.'),
(4, 'Kyaing Kyaing', 'kyaing@gmail.com', '09888888888', 'My name is Kyaing Kyaing. I am from Burma.'),
(5, 'Su Hlaing', 'suhlaing@gmail.com', '09373763663', 'I am Su Hlaing.'),
(6, 'Mg Mg', 'mg@gmail.com', '09333773737', 'This is a maung maung. I am customer.'),
(7, 'lay lay', 'lay@gmail.com', '093737737', 'This is a Lay Lay. I am customer.'),
(8, 'Si Thu', 'sithu@gmail.com', '0938738838', 'This is a sithu.'),
(9, 'jj', 'jj@ll.vv', '67567', 'hfjhfjfgj');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `address` varchar(200) NOT NULL,
  `order_no` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `model`, `price`, `name`, `phone`, `date`, `address`, `order_no`) VALUES
(1, 'Mercedes-Benz GLC 300', '200 lakhs', 'Myo Naing', '0888888', '2008-10-11 00:00:00', 'Ygn', 'order462'),
(2, 'Mercedes-Benz GLA 180', '320 lakhs', 'Myo Naing', '09837363663', '2006-11-14 00:00:00', 'Bago', 'order273'),
(3, 'Hyundai Grandeur ', ' 380 Lakh', 'MrBrown', '093635353', '2014-04-05 00:00:00', 'New York', 'order203'),
(4, 'Volkswagen Golf ', '350 Lakh', 'MrBrown', '09837363663', '2013-12-16 00:00:00', 'New York', 'order486'),
(5, 'Mitsubishi Delica D2 ', ' 225 Lakh ', 'Khin', '0955333333', '2008-03-07 00:00:00', 'Bago', 'order337'),
(6, 'Suzuki Ciaz ', ' 255 Lakh', 'Thet Naing Soe', '0934356444', '1977-05-25 00:00:00', 'Mdy', 'order226');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `reg_date` datetime NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`user_id`, `name`, `email`, `password`, `reg_date`, `gender`, `country`, `city`, `contact`, `address`) VALUES
(7, 'Thet Naing Soe', 'thet@gmail.com', 'thet123', '2012-11-11 00:00:00', 'male', 'Myanmar', 'Lamine', '0966633333', 'Lamine'),
(8, 'Phyo Si Thu', 'phyosithu@gmail.com', 'phyo123', '1995-07-14 00:00:00', 'male', 'Myanmar', 'Ye', '09444222222', 'Ye Township'),
(9, 'Myo Naing', 'myo@gmail.com', 'myo123', '2008-07-04 00:00:00', 'male', 'Myanmar', 'LoiKaw', '097376367677', 'LoiKaw'),
(10, 'Chit Phoo Ngone', 'chit@gmail.com', 'chit123', '2000-09-22 00:00:00', 'female', 'Myanmar', 'Pa-Hpa', '0933737737', 'No(33), Bala Street, Pa-Hpa.'),
(11, 'Mr. James', 'jame@gmail.com', 'jame123', '1977-09-09 00:00:00', 'male', 'American', 'New York', '0983838383', 'No(22) Amazing Road, New York'),
(12, 'Mrs.Brown', 'brown@gmail.com', 'brown123', '1999-02-26 00:00:00', 'female', 'USA', 'Califonia', '89337377373', 'No(39), bar bar street, Califonia, USA'),
(13, 'U Win Chit Chit', 'winchit@gmail.com', 'win123', '1988-06-22 00:00:00', 'male', 'Myanmar', 'Bago', '097777464522', 'No(17), Hnin Se street, Bago'),
(14, 'Aaron Lewis', 'aaron@gmail.com', 'aron123', '1991-09-02 00:00:00', 'male', 'USA', 'Texas', '097765342', 'NO(76), Kar Kar Street, Texas, USA'),
(15, 'Daw Khin San Yee', 'khin@gmail.com', 'khin123', '1987-03-01 00:00:00', 'female', 'Myanmar', 'SitTway', '09373737377', 'NO(54), Daung Daung Street, Sit Tway, Arkaine state.'),
(16, 'Dr.John', 'john@gmail.com', 'john', '1982-04-17 00:00:00', 'male', 'UK', 'Landon', '0937373773', 'Landon, UK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
