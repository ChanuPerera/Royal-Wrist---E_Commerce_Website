-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2022 at 02:33 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(11) NOT NULL AUTO_INCREMENT,
  `useradmin` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `useradmin`, `password`, `type`) VALUES
(1, 'admin@gmail.com', '123', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(2) NOT NULL,
  `price` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `productID` int(10) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertb`
--

DROP TABLE IF EXISTS `ordertb`;
CREATE TABLE IF NOT EXISTS `ordertb` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `proname` varchar(500) NOT NULL,
  `amount` int(10) NOT NULL,
  `paymenttype` varchar(200) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertb`
--

INSERT INTO `ordertb` (`orderID`, `username`, `email`, `contact`, `address`, `proname`, `amount`, `paymenttype`) VALUES
(3, 'royal wrist holdings', 'royalwrist@gmail.com', 112547025, 'no 24/B, Borella Road, Colombo 10.', 'Casio Edifice Enticer', 44700, ''),
(4, 'royal wrist holdings', 'royalwrist@gmail.com', 112547025, 'no 24/B, Borella Road, Colombo 10.', 'Citizen Eco-Drive Axiom', 124800, ''),
(5, 'royal wrist holdings', 'royalwrist@gmail.com', 112547025, 'no 24/B, Borella Road, Colombo 10.', 'BATMAN STAINLESS BLACK', 86378, ''),
(6, 'royal wrist holdings', 'royalwrist@gmail.com', 112547025, 'no 24/B, Borella Road, Colombo 10.', 'Casio G-Shock- GA-100GBX-1A9DR', 42899, 'CREDIT/DEBIT'),
(7, 'royal wrist holdings', 'royalwrist@gmail.com', 112547025, 'no 24/B, Borella Road, Colombo 10.', 'Casio Edifice Enticer', 44700, 'CREDIT/DEBIT'),
(8, 'Chanu Perera', 'chanukaperera53@gmail.com', 775906032, '817/1 Gamunu Mawatha', 'Casio G-Shock- GA-100GBX-1A9DR', 42899, 'CASH ON DELIVERY'),
(9, 'Nimal Perera', 'nimalperera404@gmail.com', 112547025, 'colombo 10', 'ROLEX - COSMOGRAPH DAYTONA', 780999, 'CASH ON DELIVERY'),
(10, 'royal wrist holdings', 'royalwrist@gmail.com', 112547025, 'no 24/B, Borella Road, Colombo 10.', 'Casio Edifice Enticer', 44700, 'CASH ON DELIVERY');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(250) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(10) NOT NULL,
  `imgpath` varchar(300) NOT NULL,
  `prodtype` varchar(10) NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `description`, `price`, `imgpath`, `prodtype`) VALUES
(35, 'Rolex Explorer II White Dial', 'This watch is 100% Unworn and comes with the Original Box, Booklets, Green Chronometer Tag, and Warranty Card. The watch does not come with a Bezel Protector or the White Serial Tag.', 489800, 'watch2.png', 'A'),
(36, 'ROLEX - YACHT-MASTER 40', 'THE OYSTER PERPETUAL YACHT-MASTER 40 IN 18 CT EVEROSE GOLD WITH AN OYSTERFLEX BRACELET.', 88000, 'watch3.png', 'A'),
(37, 'Casio G-SHOCK - GA-100CF-8ADR', 'From the popular big, bold GA-100 Series comes a new collection of models that feature a camouflage pattern face. Basic black or gray coloring is offset by the metallic camouflage pattern of the face, which is further accented by the silver or gold coloring of the hands and hour markers.', 28900, 'watch4.png', 'A'),
(38, 'CASIO G-SHOCK ANALOG-DIGITAL', 'A model combining analog and digital, esteemed for its wide face. Simple white and black are used for the matte-finish case and band. ', 37999, 'watch5.png', 'A'),
(39, 'Casio G-Shock- GA-100GBX-1A9DR', 'From G-SHOCK, the watch brand that is constantly setting new standards for timekeeping toughness, come new additions to the standard model lineup.', 42899, 'watch6.png', 'A'),
(40, 'Citizen Eco-Drive Radio Controlled ', 'Radio technology takes this work off your hands and makes your life a little bit easier. Once a day, it automatically receives a time signal on the basis of an atomic clock and updates itself to the right time. ', 244999, 'watch7.png', 'A'),
(41, 'ROLEX - COSMOGRAPH DAYTONA', 'This chronograph was designed to be the ultimate timing tool for endurance racing drivers. More than 50 years after its creation, the Cosmograph Daytona remains in a class of its own among sport chronographs and continues to transcend time.', 780999, 'watch8.png', 'A'),
(42, 'Citizen Eco-Drive Axiom', 'Axiom\'s refined yet sleek design offers a day-to-night fashion options for the avid trendsetter. This Black Out model is featured in stainless steel with', 124800, 'watch9.png', 'A'),
(43, 'Rolex Submariner', 'The Oyster Perpetual Submariner is a reference among divers watches; it is the watch that unlocked the deep.', 520600, 'watch10.png', 'A'),
(44, 'Casio G-SHOCK - GA-100CF-8ADR', 'From the popular big, bold GA-100 Series comes a new collection of models that feature a camouflage pattern face. Basic black or gray coloring is offset by the metallic camouflage pattern of the face, which is further accented by the silver or gold coloring of the hands and hour markers.', 25900, 'watch14.png', 'B'),
(45, 'G-Shock GA-100MM Marble Edition', 'GA-100MM Marble Edition Camouflage Series for February. These GA-100 watches have a marble-like mixed color design on the bezel and band that is the result of a special mixed molding process', 108600, 'watch11.png', 'B'),
(46, 'ANALOG-DIGITAL - GA-400 ', 'A brightly colored model from G-SHOCK, which continues to evolve in the pursuit of toughness.  \r\nThe big case, which is emblematic of its tough design, is combined with the model\'s iconic large rotary switch. There are also two LCD screens placed at the top and bottom of the three-dimensional dial, which features layers of small parts. Finished with a design that combines power with precision.  ', 40899, 'watch12.png', 'B'),
(47, 'MASTER OF G - AIR GRAVITYMASTER ', 'This is a model from the G-Shock Gravitymaster Series for pilots who work in harsh conditions. It comes with an advanced World Time feature. It is an aviation watch for pilots who require different kinds of information and need to be able to display and check time information for a different time zone. ', 49999, 'watch13.png', 'B'),
(48, 'WATCH 5', 'WATCH 5', 2000, 'watch15.png', 'B'),
(49, 'WATCH 6', 'WATCH 6', 20000, 'watch16.png', 'B'),
(50, 'WATCH 7', 'WATCH 7', 20000, 'watch17.png', 'B'),
(51, 'Richard Mille RM 011 Felipe Massa', 'You can carry a piece of true elegance everywhere you go; from a sporty Richard Mille to sophisticated and elegant Patek Philippe.\r\nOur clients come to us for an extension of their luxury lifestyle, and we are eager to provide it.', 957500, 'watch18.png', 'B'),
(52, 'omega-speedmaster', 'It was with OMEGas maritime legacy in mind that the brand launched its Planet Ocean line in 2005. Today, the stylish OMEGA Seamaster Planet Ocean 600M Master Chronometer pays homage to OMEGAs dive watch heritage.', 880000, 'watch19.png', 'B'),
(56, 'BATMAN STAINLESS BLACK', 'fsfgdrgtr', 86378, 'watch35.png', 'a'),
(57, 'BATMAN', 'DADADADADADA', 30000000, 'WATCH35.PNG', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

DROP TABLE IF EXISTS `qa`;
CREATE TABLE IF NOT EXISTS `qa` (
  `qID` int(11) NOT NULL AUTO_INCREMENT,
  `userName` varchar(150) NOT NULL,
  `comment` varchar(300) NOT NULL,
  PRIMARY KEY (`qID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`qID`, `userName`, `comment`) VALUES
(17, 'royalwrist@gmail.com', ' How long you take to repair a watch?'),
(9, 'royalwrist@gmail.com', ' can I visit and buy?'),
(8, 'royalwrist@gmail.com', ' warranty period please?'),
(18, 'nimalperera404@gmail.com', ' Delivery charge?'),
(20, 'nimalperera404@gmail.com', ' ARE YOU OPEN ON POYA DAYS?');

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

DROP TABLE IF EXISTS `quantity`;
CREATE TABLE IF NOT EXISTS `quantity` (
  `productID` int(10) NOT NULL,
  `quantity` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temporder`
--

DROP TABLE IF EXISTS `temporder`;
CREATE TABLE IF NOT EXISTS `temporder` (
  `tempid` int(11) NOT NULL AUTO_INCREMENT,
  `tempName` varchar(200) NOT NULL,
  `tempEmail` varchar(500) NOT NULL,
  `tempContact` varchar(500) NOT NULL,
  `tempAddress` varchar(500) NOT NULL,
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporder`
--

INSERT INTO `temporder` (`tempid`, `tempName`, `tempEmail`, `tempContact`, `tempAddress`) VALUES
(21, 'royal wrist holdings', 'royalwrist@gmail.com', '0112547025', 'no 24/B, Borella Road, Colombo 10.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(150) NOT NULL,
  `fullName` varchar(150) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `fullName`, `password`, `contact`, `address`, `type`) VALUES
('captain@gmail.com', 'captain hadcok', '123', '011231354', 'colombo', 'C'),
('chanukaperera53@gmail.com', 'Chanu Perera', '123', '0775906032', '817/1 Gamunu Mawatha', ''),
('dead@gmail.com', 'dasun perera', '123', '01232454', 'dawd 2qd 23', ''),
('doom@gmail.com', 'don tom', '123', '0775906032', '', ''),
('nimalperera404@gmail.com', 'Nimal Perera', '123', '0112547025', 'colombo 10', 'C'),
('nipun@gmail.com', 'nipun de silva', '123', '35456465', '', ''),
('royalwrist@gmail.com', 'royal wrist holdings', '1234', '0112547025', 'no 24/B, Borella Road, Colombo 10.', ''),
('supun@gmail.com', 'supun fdo', '123', '0123214578', 'colombo', 'C'),
('tintin@gmail.com', 'tin tin', '123', '01232454', 'colombo', 'C'),
('tom@gmail.com', 'tom havit', '123', '01232454', 'colombo 10', ''),
('yuki@gmail.com', 'yuyuy', '123', '654564', 'awdad', 'C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
