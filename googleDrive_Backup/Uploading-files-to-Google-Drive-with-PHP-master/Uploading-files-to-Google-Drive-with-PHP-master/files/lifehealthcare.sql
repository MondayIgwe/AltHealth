-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 01:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifehealthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `Appointment_Date` varchar(50) NOT NULL,
  `Client_booking_id` varchar(13) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`Appointment_Date`, `Client_booking_id`, `Time`) VALUES
('Monday, August 8, 2020', '2709110853083', '7:00 - 9:00'),
('Friday, January 14, 2019', '2808250506083', '8:00 - 10:00'),
('Friday, April 8, 2020', '3602250350086', '13:00 - 14:00'),
('Sunday, March 6, 2019', '4003100886084', '10:00 - 12:00'),
('Friday, September 9, 2019', '4512030696084', '7:00 - 9:00'),
('Saturday, June 25, 2019', '4708110702087', '9:00 - 10:00'),
('Sunday, January 16, 2019', '4804180882084', '8:00 - 10:00'),
('Saturday, January 1, 2020', '490705046088', '10:00 - 12:00'),
('Saturday, May 28, 2020', '5507140417085', '13:00 - 14:00'),
('Saturday, January 1, 2020', '650402056081', '10:00 - 12:00'),
('Tuesday, May 3, 2019', '8009100659085', '9:00 - 10:00'),
('Monday, July 11, 2019', '8707021656188', '13:00 - 14:00'),
('Monday, March 14, 2020', '8707062112182', '10:00 - 12:00'),
('Monday, July 19, 2020', '8807130418086', '7:00 - 9:00'),
('Monday, March 14, 2020', '8809083749180', '10:00 - 12:00'),
('Thursday, August 5, 2019', '9001024703183', '9:00 - 10:00'),
('Friday, August 13, 2010', '9003280235085', '9:00 - 10:00'),
('Saturday, February 5, 2020', '9202010527088', '8:00 - 10:00'),
('Saturday, August 27, 2020', '9204240981082', '13:00 - 14:00'),
('Monday, July 4, 2019', '9710230788081', '7:00 - 9:00'),
('Sunday, March 6, 2019', '9805052419184', '13:00 - 14:00');

-- --------------------------------------------------------

--
-- Table structure for table `clientdata`
--

CREATE TABLE `clientdata` (
  `Client_id` varchar(13) NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `C_surname` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Code` varchar(50) NOT NULL,
  `C_Tel_H` varchar(50) NOT NULL,
  `C_Tel_W` varchar(50) NOT NULL,
  `C_Tel_Cell` varchar(50) NOT NULL,
  `C_Email` varchar(50) NOT NULL,
  `C_Reference` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientdata`
--

INSERT INTO `clientdata` (`Client_id`, `C_name`, `C_surname`, `Address`, `Code`, `C_Tel_H`, `C_Tel_W`, `C_Tel_Cell`, `C_Email`, `C_Reference`) VALUES
('1003250239088', 'Brian ', 'Kekana', '116 Selbourne Avenue Parow', '7500', '(047)-(773)-(5345)', '(080)-(450)-(8061)', '(087)-(708)-(7445)', 'Brian @rbiworld.co.za', 'WORD OF MOUTH'),
('2605150205088', 'Busisiwe', 'Du Plessis', '1 Kliprivier Avenue Secunda Secunda', '2302', '(066)-(762)-(2975)', '(086)-(193)-(7436)', '(058)-(901)-(5043)', 'Busisiwe@gmail.com', 'Website'),
('3602250350086', 'Moyahabo ', 'Mbonani', '11 Gallinule Avenue Rooihuiskraal', '157', '(084)-(780)-(3175)', '(030)-(900)-(6360)', '(026)-(724)-(4857)', 'Moyahabo@mweb.co.za', 'WORD OF MOUTH'),
('4003100886084', 'George ', 'Mhatlhe', '1206 Kuskoraal Avenue Moregloed', '186', '(090)-(901)-(7137)', '(071)-(557)-(1855)', '(074)-(336)-(2832)', '', 'WORD OF MOUTH'),
('490705046088', 'Ayanda', 'Mlawuli', '39 Wellington Avenue Goodwood', '7960', '', '', '0832602972', 'ayanda@gmail.com', 'MOUTH'),
('5002080660085', 'Tlou ', 'Mabotja', '1158 Manchester Crescent Lenasia South', '1829', '(047)-(389)-(5659)', '(082)-(606)-(7726)', '(013)-(473)-(6015)', 'Tlou @rbiworld.co.za', 'WORD OF MOUTH'),
('5206110625085', 'Mduduzi', 'Mangena', '11 Mayibuye House No 19326 Joburg Ivory Park Ext 1', '1685', '(060)-(112)-(2791)', '(040)-(808)-(8039)', '(011)-(887)-(0096)', 'Mduduzi@rbiworld.co.za', 'WORD OF MOUTH'),
('5304280232082', 'Nthateng ', 'Songo', '11399 Mphophoma Str Klipfontein View', '1685', '(083)-(279)-(1103)', '(037)-(364)-(4960)', '(053)-(664)-(0353)', 'Nthateng @hotmail.com', 'Website'),
('5505064661187', 'Augustus', 'Blue', '89 Turfontein', '2004', '', '', '0980987653', 'augustus@hotmail.com', 'Website'),
('6308240548084', 'Mduduzi ', 'Buys', '06 Baileybridge Unit 9 Stonebridge Phoenix', '9068', '', '', '(067)-(592)-(4440)', 'Mduduzi @mweb.co.za', 'Website\r\n'),
('6502022225188', 'Irene', 'Van', '768 Randburg', '2007', '', '', '098987654', 'ireneV@gmail.com', 'Word of Mouth'),
('6609073174189', 'Francis', 'linda', '45 Brown Street', '3400', '', '', '023456383', 'francis@hotmail.com', 'Word'),
('7306050161086', 'Kishan', 'Masala', '129 Himalaya Street Shallcross', '9093', '(038)-(200)-(0327)', '(013)-(149)-(3803)', '(098)-(716)-(3189)', '', 'WORD OF MOUTH'),
('8302042874182', 'Promise', 'Maraglo', '09303 ledig STREET', 'Sun City', '', '', '090860484', 'promise@mweb.com', 'Word of Mouth'),
('8701022055185', 'Thabo', 'Musa', '123 Unisa Street', '2009', '', '', '0620429818', 'thabo@yahoo.com', 'Website'),
('8707062112182', 'Bright', 'Brown', '343 Maude Street', '2001', '', '', '078987654', 'bright@absa.co.za', 'Word of Mouth'),
('8807220928188', 'Smangele', 'Nkateko', '8474 Florida Street', '2009', '', '', '0987654567', 'smag@gmail.com', 'Word of Mouth'),
('9000707015908', 'Gumbi', 'Ntombi', 'East stret', 'East Rand', '', '', '09098874734', 'gumbi@gmail.com', 'Word'),
('9001024703182', 'Brown ', 'James', 'east rand', '2109', '', '', '0909878765', 'john@yahoo.com', 'Word Of Mouth'),
('9001024703183', 'Raju', 'Ravi', '55 MorningSide', '2009', '', '', '0645342535', 'raju@Nedbank.co.za', 'Word'),
('9001024703189', 'Azi', 'Ntom', '356 Street', '20019', '', '', '0756534231', 'azi@yahoo.com', ''),
('9007094725187', 'Thando', 'Mabaso', '65 ', '20001', '', '', '09898765452', 'thando@nedbank.co.za', 'Mouth'),
('9009090059181', 'Lesego ', 'Maragelo', '497 The William', '2001', '', '', '0645675893', 'lmara@gmail.com', 'Word Of Mouth'),
('9110230494081', 'Nonjabulo', 'Horwell', '39 Rose Avenue Florida Ext', '1709', '', '', '0688474612', 'Nonjabulo@stteresas.co.za', 'WORD OF MOUTH'),
('9706130545082', 'Josaya ', 'Chauke', '12 Tweevingergras Danville', '183', '(024)-(396)-(9177)', '(015)-(456)-(6491)', '(048)-(560)-(9024)', 'Josaya @gmail.com', 'Website'),
('9805052419184', 'Brandy', 'Moola', '34 Mola Street', 'Yeoville', '', '', '0785647857', 'brandy@absa.co.za', 'Word of Mouth'),
('9907280115082', 'Paul ', 'Phakathi', '11 Rutstein Avenue Ben Kamma', '6025', '(056)-(331)-(7137)', '(058)-(553)-(6363)', '(014)-(552)-(0288)', '', 'WORD OF MOUTH');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_info`
--

CREATE TABLE `invoice_info` (
  `INVNUM` varchar(50) NOT NULL,
  `Inv_date` varchar(50) NOT NULL,
  `Client_id` varchar(50) NOT NULL,
  `Consultation` varchar(50) NOT NULL,
  `Suppl1` varchar(50) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Price_Supplement_1` varchar(50) NOT NULL,
  `Suppl2` varchar(50) NOT NULL,
  `Price2` varchar(50) NOT NULL,
  `Quantity2` varchar(50) NOT NULL,
  `Price_Supplement_2` varchar(50) NOT NULL,
  `Suppl3` varchar(50) NOT NULL,
  `Price3` varchar(50) NOT NULL,
  `Quantity3` varchar(50) NOT NULL,
  `Price_Supplement_3` varchar(50) NOT NULL,
  `Suppl4` varchar(50) NOT NULL,
  `Price4` varchar(50) NOT NULL,
  `Quantity4` varchar(50) NOT NULL,
  `Price_Supplement_4` varchar(50) NOT NULL,
  `Suppl5` varchar(50) NOT NULL,
  `Price5` varchar(50) NOT NULL,
  `Quantity5` varchar(50) NOT NULL,
  `Price_Supplement_5` varchar(50) NOT NULL,
  `Suppl6` varchar(50) NOT NULL,
  `Price6` varchar(50) NOT NULL,
  `Quantity6` varchar(50) NOT NULL,
  `Price_Supplement_6` varchar(50) NOT NULL,
  `Suppl7` varchar(50) NOT NULL,
  `Price7` varchar(50) NOT NULL,
  `Quantity7` varchar(50) NOT NULL,
  `Price_Supplement_7` varchar(50) NOT NULL,
  `Total(Suppl)` varchar(50) NOT NULL,
  `Total` varchar(50) NOT NULL,
  `Client_id_fk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_info`
--

INSERT INTO `invoice_info` (`INVNUM`, `Inv_date`, `Client_id`, `Consultation`, `Suppl1`, `Price`, `Quantity`, `Price_Supplement_1`, `Suppl2`, `Price2`, `Quantity2`, `Price_Supplement_2`, `Suppl3`, `Price3`, `Quantity3`, `Price_Supplement_3`, `Suppl4`, `Price4`, `Quantity4`, `Price_Supplement_4`, `Suppl5`, `Price5`, `Quantity5`, `Price_Supplement_5`, `Suppl6`, `Price6`, `Quantity6`, `Price_Supplement_6`, `Suppl7`, `Price7`, `Quantity7`, `Price_Supplement_7`, `Total(Suppl)`, `Total`, `Client_id_fk`) VALUES
('INV0001', 'Thursday, January 28, 2010', '1512140600088', '300.00', 'Supplement-65', '65.00', '3', '195.00', 'Supplement-156', '80.00', '2', '160.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 355.00 ', ' R 655.00 ', ''),
('INV0002', 'Wednesday, April 7, 2010', '7309060944088', '500.20', 'Supplement-150', '150.00', '3', '450.00', 'Supplement-147', '120.00', '5', '600.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,050.00 ', ' R 1,050.00 ', ''),
('INV0003', 'Thursday, May 6, 2010', '9003280235085', '1050', 'Supplement-104', '320.00', '5', '1600.00', 'Supplement-180', '115.00', '4', '460.00', 'Supplement-18', '45.00', '4', '180.00', 'Supplement-39', '170.00', '5', '850.00', 'Supplement-169', '170.00', '2', '340.00', '', '', '', '', '', '', '', '', ' R 3,430.00 ', ' R 3,430.00 ', ''),
('INV0004', 'Saturday, July 10, 2010', '5002080660085', '300.00', 'Supplement-32', '65.00', '1', '65.00', 'Supplement-146', '130.00', '3', '390.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 455.00 ', ' R 755.00 ', ''),
('INV0005', 'Monday, July 19, 2010', '8807130418086', '300.00', 'Supplement-70', '135.00', '2', '270.00', 'Supplement-42', '300.00', '1', '300.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 570.00 ', ' R 870.00 ', ''),
('INV0006', 'Sunday, August 1, 2010', '6308240548084', '300.00', 'Supplement-24', '110.00', '4', '440.00', 'Supplement-243', '100.00', '1', '100.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 540.00 ', ' R 840.00 ', ''),
('INV0007', 'Thursday, August 5, 2010', '8610120779086', '300.00', 'Supplement-187', '90.00', '2', '180.00', 'Supplement-224', '170.00', '4', '680.00', 'Supplement-241', '100.00', '2', '200.00', 'Supplement-125', '80.00', '2', '160.00', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,220.00 ', ' R 1,520.00 ', ''),
('INV0008', 'Friday, August 13, 2010', '9003280235085', '300.00', 'Supplement-145', '150.00', '3', '450.00', 'Supplement-245', '205.20', '4', '820.80', 'Supplement-22', '60.00', '2', '120.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,390.80 ', ' R 1,690.80 ', ''),
('INV0009', 'Wednesday, December 22, 2010', '4104200140083', '', 'Supplement-181', '121.13', '5', '605.63', 'Supplement-77', '150.00', '2', '300.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 905.63 ', ' R 905.63 ', ''),
('INV0010', 'Saturday, January 1, 2011', '650402056081', '320.00', 'Supplement-197', '236.60', '4', '946.40', 'Supplement-26', '181.18', '3', '543.54', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,489.94 ', ' R 1,809.94 ', ''),
('INV0944', 'Thursday, June 4, 2015', '9911090794084', '450.00', 'Supplement-141', '218.98', '1', '218.98', 'Supplement-226', '142.50', '4', '570.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 788.98 ', ' R 1,238.98 ', ''),
('INV0956', 'Thursday, June 18, 2015', '2012200849081', '', 'Supplement-7', '283.52', '4', '1134.08', 'Supplement-70', '244.06', '1', '244.06', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,378.14 ', ' R 1,378.14 ', ''),
('INV0958', 'Friday, June 19, 2015', '5212190473083', '450.00', 'Supplement-4', '214.50', '5', '1072.50', 'Supplement-214', '245.10', '2', '490.20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,562.70 ', ' R 2,012.70 ', ''),
('INV0959', 'Monday, June 22, 2015', '4204250189082', '450.00', 'Supplement-17', '264.78', '3', '794.33', 'Supplement-186', '242.92', '2', '485.84', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,280.17 ', ' R 1,730.17 ', ''),
('INV0961', 'Tuesday, June 23, 2015', '6408200513081', '', 'Supplement-198', '231.78', '3', '695.34', 'Supplement-142', '141.10', '1', '141.10', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 836.44 ', ' R 836.44 ', ''),
('INV0962', 'Wednesday, June 24, 2015', '4307190367081', '450.00', 'Supplement-20', '225.82', '1', '225.82', 'Supplement-182', '279.40', '1', '279.40', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 505.22 ', ' R 955.22 ', ''),
('INV0966', 'Friday, July 3, 2015', '6404210377085', '', 'Supplement-104', '396.64', '2', '793.28', 'Supplement-182', '279.40', '1', '279.40', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,072.68 ', ' R 1,072.68 ', ''),
('INV0968', 'Thursday, July 9, 2015', '4403190822084', '', 'Supplement-111', '119.70', '1', '119.70', 'Supplement-209', '233.80', '2', '467.60', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 587.30 ', ' R 587.30 ', ''),
('INV0969', 'Monday, July 13, 2015', '7312050486084', '450.00', 'Supplement-159', '260.02', '2', '520.04', 'Supplement-213', '253.70', '5', '1268.50', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,788.54 ', ' R 2,238.54 ', ''),
('INV0972', 'Wednesday, July 22, 2015', '8009100659085', '', 'Supplement-96', '194.86', '2', '389.72', 'Supplement-168', '251.34', '4', '1005.36', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,395.08 ', ' R 1,395.08 ', ''),
('INV0974', 'Saturday, July 25, 2015', '5008230824086', '450.00', 'Supplement-244', '298.78', '2', '597.56', 'Supplement-157', '256.86', '5', '1284.30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,881.86 ', ' R 2,331.86 ', ''),
('INV0975', 'Monday, July 27, 2015', '1501200671081', '450.00', 'Supplement-182', '279.40', '3', '838.20', 'Supplement-172', '201.88', '4', '807.52', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,645.72 ', ' R 2,095.72 ', ''),
('INV0981', 'Friday, August 7, 2015', '2709110853083', '450.00', 'Supplement-80', '285.10', '1', '285.10', 'Supplement-193', '249.66', '4', '998.64', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 1,283.74 ', ' R 1,733.74 ', ''),
('INV0985', 'Friday, August 14, 2015', '8512050670085', '', 'Supplement-80', '285.10', '4', '1140.40', 'Supplement-61', '264.58', '4', '1058.32', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' R 2,198.72 ', ' R 2,198.72 ', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplements`
--

CREATE TABLE `supplements` (
  `Suppl_id` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Cost_excl` varchar(50) NOT NULL,
  `Cost_incl` varchar(50) NOT NULL,
  `Perc_inc` varchar(50) NOT NULL,
  `Cost_client` varchar(50) NOT NULL,
  `Supplier_id` varchar(50) NOT NULL,
  `Min_levels` varchar(50) NOT NULL,
  `Stock_levels` varchar(50) NOT NULL,
  `Nappi-code` varchar(50) NOT NULL,
  `supplier_id_fk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplements`
--

INSERT INTO `supplements` (`Suppl_id`, `Description`, `Cost_excl`, `Cost_incl`, `Perc_inc`, `Cost_client`, `Supplier_id`, `Min_levels`, `Stock_levels`, `Nappi-code`, `supplier_id_fk`) VALUES
('Supplement-1', '90', 'R 313.00', 'R 356.82', 'R 30.00', 'R 386.82', 'SUPPLIER A', '10', '28', '', ''),
('Supplement-10', '180g powder', 'R 195.86', 'R 223.28', 'R 60.00', 'R 283.28', 'SUPPLIER C', '4', '2', '', ''),
('Supplement-11', '200g panado', 'R 147.85', 'R 168.55', 'R 60.00', 'R 228.55', 'SUPPLIER C', '7', '49', '', ''),
('Supplement-12', '150 foot patch', 'R 262.00', 'R 298.68', 'R 15.00', 'R 313.68', 'SUPPLIER A', '1', '13', '', ''),
('Supplement-13', 'Syrup 10g', 'R 136.00', 'R 155.04', 'R 15.00', 'R 170.04', 'SUPPLIER B', '8', '44', '', ''),
('Supplement-14', '113g', 'R 278.13', 'R 317.07', 'R 25.00', 'R 342.07', 'SUPPLIER D', '6', '37', '', ''),
('Supplement-15', '110g', 'R 330.00', 'R 376.20', 'R 15.00', 'R 391.20', 'SUPPLIER C', '7', '37', '', ''),
('Supplement-16', 'Two Month supply', 'R 245.00', 'R 279.30', 'R 15.00', 'R 294.30', 'SUPPLIER A', '5', '25', '', ''),
('Supplement-17', '118ml', 'R 230.33', 'R 262.58', 'R 25.00', 'R 287.58', 'SUPPLIER C', '8', '36', '', ''),
('Supplement-18', '30', 'R 153.00', 'R 174.42', 'R 40.00', 'R 214.42', 'SUPPLIER B', '3', '38', '', ''),
('Supplement-19', '750ml', 'R 107.00', 'R 121.98', 'R 40.00', 'R 161.98', 'SUPPLIER B', '4', '40', '', ''),
('Supplement-2', '60', 'R 215.00', 'R 245.10', 'R 40.00', 'R 285.10', 'SUPPLIER B', '1', '41', '', ''),
('Supplement-20', '60', 'R 173.00', 'R 197.22', 'R 40.00', 'R 237.22', 'SUPPLIER B', '4', '18', '', ''),
('Supplement-21', '30 one month suupply', 'R 263.00', 'R 299.82', 'R 30.00', 'R 329.82', 'SUPPLIER A', '6', '17', '', ''),
('Supplement-22', '60', 'R 163.00', 'R 185.82', 'R 40.00', 'R 225.82', 'SUPPLIER B', '6', '36', '', ''),
('Supplement-23', '240', 'R 500.00', 'R 570.00', 'R 40.00', 'R 610.00', 'SUPPLIER B', '9', '29', '', ''),
('Supplement-3', '60', 'R 216.81', 'R 247.16', 'R 35.00', 'R 282.16', 'SUPPLIER C', '1', '22', '', ''),
('Supplement-4', '60', 'R 222.00', 'R 253.08', 'R 15.00', 'R 268.08', 'SUPPLIER B', '10', '13', '', ''),
('Supplement-5', '60', 'R 201.00', 'R 229.14', 'R 40.00', 'R 269.14', 'SUPPLIER B', '8', '1', '', ''),
('Supplement-6', '60', 'R 259.00', 'R 295.26', 'R 20.00', 'R 315.26', 'SUPPLIER A', '5', '36', '', ''),
('Supplement-7', '60', 'R 221.00', 'R 251.94', 'R 35.00', 'R 286.94', 'SUPPLIER C', '1', '34', '', ''),
('Supplement-8', '60', 'R 171.00', 'R 194.94', 'R 40.00', 'R 234.94', 'SUPPLIER B', '1', '27', '', ''),
('Supplement-9', '90', 'R 326.00', 'R 371.64', 'R 15.00', 'R 386.64', 'SUPPLIER A', '8', '33', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suppl_info`
--

CREATE TABLE `suppl_info` (
  `Supplier_id` varchar(50) NOT NULL,
  `Contact Person` varchar(50) NOT NULL,
  `Tel` varchar(50) NOT NULL,
  `Cell` varchar(50) NOT NULL,
  `Fax` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Bank` varchar(50) NOT NULL,
  `Branch Code` varchar(50) NOT NULL,
  `Account Number` varchar(50) NOT NULL,
  `Type of Account` varchar(50) NOT NULL,
  `Comments` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppl_info`
--

INSERT INTO `suppl_info` (`Supplier_id`, `Contact Person`, `Tel`, `Cell`, `Fax`, `Email`, `Bank`, `Branch Code`, `Account Number`, `Type of Account`, `Comments`) VALUES
('SUPPLIER A', 'John Adams', '(011)-(863)-(0056)', '', '(011)-(863)-(0051)', 'johnadams@suppliera.co.za', 'Standard Bank', '11813', '01887092', 'Cheque', ''),
('SUPPLIER B', 'Mary Nkosi', '(011)-(894)-(9004)', '', '', 'mary@webmail.com', 'Standard Bank', '23460', '420315985', 'Cheque', ''),
('SUPPLIER C', 'Ben Coasta', '(012)-(456)-(2345)', '', '(012)-(456)-(2346)', 'benC@costa.co.za', 'Capitec', '470010', '4063452826', 'Cheque', ''),
('SUPPLIER D', 'Freddy Nell', '', '(081)-(345)-(1268)', '', 'fr@openview.co.za', 'FNB', '4322323', '212133098', 'Cheque', ''),
('SUPPLIER E', 'Linda', '(011)-(543)-(1136)', '', '', 'suppliere@absamail.co.za', 'ABSA', '226282', '4063467827', 'Cheque', ''),
('SUPPLIER F', 'John or Gert', '(012)-(766)-(3333)', '', '(012)-(766)-(4102)', 'johnmalan@mweb.co.za', 'ABSA', '979272', '4028764343', 'Cheque', ''),
('SUPPLIER G', 'Adam Brown', '(011)-(875)-(1256)', '', '', 'ab@gmail.com', 'FNB', '393839', '6207262726', 'Cheque', ''),
('SUPPLIER H', 'Feddrick ', '(011)-(803)-(1156)', '', '', 'fedrick@jazz.co.za', 'Nedbank', '109091', '76529289282', 'Cheque', ''),
('SUPPLIER I', 'Ronaldo Austine', '(012)-(236)-(8765)', '', '', 'ra@gmail.com', 'Capitec', '191711', '76534272622', 'Cheque', ''),
('SUPPLIER J', 'James Lucky', '(012)-(106)-(3665)', '(081)-(398)-(1760)', '', 'jl@gmail.com', 'Standard Bank', '252762', '43635272782', 'Cheque', ''),
('SUPPLIER K', 'Chucks Johnson', '', '(081)-(543)-(1387)', '', 'cj@mweb.com', 'Nedbank', '948944', '72522522022', 'Cheque', ''),
('SUPPLIER L', 'Francis Frank', '', '(081)-(000)-(1111)', '', 'ff@mweb.com', 'Standard Bank', '546534', '82726252472', 'Cheque', ''),
('SUPPLIER M', 'Timothy Duke', '', '(081)-(322)-(3145)', '', 'td@mweb.com', 'ABSA', '97876', '25262526251', 'Cheque', ''),
('SUPPLIER N', 'Quency Jones', '', '(081)-(909)-(2902)', '', 'qj@mweb.com', 'Capitec', '333123', '29383938393', 'Cheque', ''),
('SUPPLIER O', 'Pamella Rose', '', '(081)-(900)-(7902)', '', 'pr@mweb.com', 'ABSA', '777333', '25276272628', 'Cheque', ''),
('SUPPLIER P', 'Peter Peter', '', '(081)-(322)-(2222)', '', 'pp@mweb.com', 'FNB', '98000', '909282812', 'Cheque', ''),
('SUPPLIER Q', 'Carlos Carr', '', '(081)-(552)-(3331)', '', 'cc@mweb.com', 'FNB', '466478', '8272266222', 'Cheque', ''),
('SUPPLIER R', 'Edmond Daniel', '', '(081)-(440)-(6501)', '', 'ed@mweb.com', 'ABSA', '423112', '30394875875', 'Cheque', ''),
('SUPPLIER S', 'Khumo Langa', '', '(081)-(040)-(3578)', '', 'kl@mweb.com', 'Capitec', '497282', '2727287282', 'Cheque', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`Client_booking_id`);

--
-- Indexes for table `clientdata`
--
ALTER TABLE `clientdata`
  ADD PRIMARY KEY (`Client_id`);

--
-- Indexes for table `invoice_info`
--
ALTER TABLE `invoice_info`
  ADD PRIMARY KEY (`INVNUM`),
  ADD KEY `Client_id_fk` (`Client_id_fk`);

--
-- Indexes for table `supplements`
--
ALTER TABLE `supplements`
  ADD PRIMARY KEY (`Suppl_id`),
  ADD KEY `supplier_id_fk` (`supplier_id_fk`);

--
-- Indexes for table `suppl_info`
--
ALTER TABLE `suppl_info`
  ADD PRIMARY KEY (`Supplier_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
