
--
-- Database: `18011644_given_mnguni`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

DROP TABLE IF EXISTS `tbl_customers`;
CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`cid`, `fname`, `lname`, `email`, `password`) VALUES
(1, 'Kamogelo', 'Mnguni', 'mngunigiven59@gmail.com', 'Msweswe\n'),
(2, 'Steven', 'Jonson', 'Steve01@gmail.com', 'Admin1\n'),
(3, 'Stanley', 'Williams', 'Willy@gmail.com', '123\n'),
(4, 'Jones', 'Mayengane', 'Jonny@gmail.com', 'J0n3y\n'),
(5, 'Peter', 'Maluleka', 'Petoza98@gmail.com', 'Up62\n'),
(6, 'Shane', 'Wilson', 'wilson05@gmail.com', 'shane321\n'),
(7, 'Modiegi', 'Lekala', 'lekalamodiegi1@gmail.com', 'Moddy\n'),
(8, 'Caroline', 'Nkwoana', 'caronkwana223@gmail.com', 'Candy\n'),
(9, 'Tumelo', 'Mashiane', 'Tumi100@gmail.com', 'Tza\n'),
(10, 'Given', 'Kutumela', 'Kutumela121@gmail.com', 'SWAT37\n'),
(11, 'Given', 'Dladla', 'Dladla67@gmail.com', 'Mgisto\n'),
(12, 'Given', 'Mnguni', 'Given123@gmail.com', 'GiyaNca\n'),
(13, 'Bongani', 'Sbiya', 'Sbeko00@gmail.com', 'Dzwamari\n'),
(14, 'Tebogo', 'Makhosa', 'Tebza90@gmail.com', 'T3bza\n'),
(15, 'Lethabo', 'Dube', 'Prince59@gmail.com', 'zwai\n'),
(16, 'Bongani', 'Mahlangu', 'hlangu1000@gmail.com', 'Khoks\n'),
(17, 'Tshepiso', 'Nkadimeng', 'Z1@gmail.com', 'D1\n'),
(18, 'Mandla', 'Mgidi', 'Korry1@gmail.com', 'ABC123\n'),
(19, 'Dineo', 'Magana', 'Magana190@gmail.com', 'YOU80\n'),
(20, 'Xolile', 'Mthimunye', 'xoli09@gmail.com', 'Candy121\n'),
(21, 'Scelo', 'Mtshweni', 'sceluthando500@gmail.com', 'Duga\n'),
(22, 'Lindiwe', 'Kabini', 'lindo12@gmail.com', 'naledi987\n'),
(23, 'Leon', 'Mtukudzi', 'tau356@gmail.com', 'Leon\n'),
(24, 'Kagiso', 'Mavuso', 'vuso88@gmail.com', 'KG\n'),
(25, 'Ruth', 'Mfuma', 'mfumaruth171@gmail.com', 'ruth6\n'),
(26, 'Njabulo', 'Maluleka', 'maluleka090@gmail.com', 'Nm\n'),
(27, 'Lindokuhle', 'Jiyane', 'ljiyane5000@gmail.com', 'LJ031\n'),
(28, 'Sobukwe', 'Mkhwanazi', 'mkhwanazi01@gmail.com', 'kwe900\n'),
(29, 'Nelson', 'Ali', 'nelsonli66@gmail.com', 'NELSONNN\n'),
(30, 'Tony', 'Mwale', 'mwaletony22@gmail.com', 'toni\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

DROP TABLE IF EXISTS `tbl_item`;
CREATE TABLE IF NOT EXISTS `tbl_item` (
  `i_id` int(10) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(50) NOT NULL,
  `qnty` int(10) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`i_id`, `pname`, `price`, `image`, `qnty`) VALUES
(1, 'Apple', '18.00', 'imageA.jpg', 5),
(2, 'Banana', '22.00', 'image.jpg', 10),
(3, 'strewberry', '25.00', 'imageSb.jpg', 5),
(4, 'watermelon', '60.00', 'imageW.jpg', 20),
(5, 'Kiwi fruit each', '3.50', 'imagek.jpg', 6),
(6, 'Beef chuck per Kg', '94.99', 'imageCh.jpg', 50),
(7, 'Beef Oxtail per Kg', '99.99', 'imageox.jpg', 30),
(8, 'Beef Mince per Kg', '65.99', 'imagemm.jpg', 10),
(9, 'Pork Cabanossi  per Kg', '280.99', 'imagekb.jpg', 5),
(10, 'Beef Boerewors  per Kg', '99.99', 'imagew.jpg', 15),
(11, 'Carrots per Kg', '19.00', 'imageC.jpg', 6),
(12, 'Onion per Kg', '49.99', 'imageo.jpg', 6),
(13, 'Potatoes per Kg', '44.16', 'imagep.jpg', 6),
(14, 'Broccoli per Kg', '34.00', 'imageBb.jpg', 6),
(15, 'Cucumber each', '12.50', 'imageCc.jpg', 6),
(16, 'Ostrich biltong', '360.00', 'imageA.jpg', 16),
(17, 'Firelighters', '29.00', 'image.jpg', 10),
(18, 'Charcoal', '50.00', 'imageSb.jpg', 5),
(19, 'Oranges', '60.00', 'imageW.jpg', 20),
(20, 'Grapes', '13.50', 'imagek.jpg', 6),
(21, 'Sixgun spice', '94.99', 'imageCh.jpg', 50),
(22, 'Switch energy drink', '12.00', 'imageox.jpg', 30),
(23, 'Mofaya energy drink', '9.99', 'imagemm.jpg', 10),
(24, 'Dragon energy drink', '10.00', 'imagekb.jpg', 5),
(25, 'Coke 2L', '24.99', 'imagew.jpg', 15),
(26, 'Avacado', '20.00', 'imageC.jpg', 6),
(27, 'Pear fruit', '22.99', 'imageo.jpg', 6),
(28, 'Mango', '50.00', 'imagep.jpg', 6),
(29, 'Chicken feets', '24.00', 'imageBb.jpg', 6),
(30, 'Chicken necks', '22.50', 'imageCc.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orders`
--

DROP TABLE IF EXISTS `tbl_orders`;
CREATE TABLE IF NOT EXISTS `tbl_orders` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `qnty` int(10) NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_orders`
--

INSERT INTO `tbl_orders` (`oid`, `cid`, `qnty`) VALUES
(1, 1, 2),
(2, 6, 2),
(3, 23, 1),
(4, 13, 1),
(5, 24, 5),
(6, 12, 3),
(7, 9, 2),
(8, 15, 1),
(9, 26, 6),
(10, 27, 1),
(11, 3, 1),
(12, 28, 1),
(13, 8, 2),
(14, 19, 3),
(15, 29, 1),
(16, 22, 4),
(17, 5, 2),
(18, 11, 1),
(19, 20, 1),
(20, 30, 1),
(21, 25, 1),
(22, 17, 1),
(23, 14, 1),
(24, 16, 2),
(25, 4, 1),
(26, 7, 1),
(27, 10, 1),
(28, 18, 1),
(29, 2, 2),
(30, 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

DROP TABLE IF EXISTS `tbl_order_item`;
CREATE TABLE IF NOT EXISTS `tbl_order_item` (
  `oid` int(10) NOT NULL,
  `i_id` int(10) NOT NULL,
  PRIMARY KEY (`oid`,`i_id`),
  KEY `i_id` (`i_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`oid`, `i_id`) VALUES
(1, 6),
(2, 6),
(3, 2),
(4, 4),
(5, 9),
(6, 3),
(7, 6),
(8, 10),
(9, 13),
(10, 12),
(11, 12),
(12, 10),
(13, 9),
(14, 9),
(15, 9),
(16, 9),
(17, 9),
(18, 6),
(19, 2),
(20, 3),
(21, 1),
(22, 4),
(23, 4),
(24, 1),
(25, 4),
(26, 15),
(27, 9),
(28, 14),
(29, 6),
(30, 3);



