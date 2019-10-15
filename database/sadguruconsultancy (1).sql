-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 10:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadguruconsultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `type` varchar(100) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `date`, `time`, `type`, `type_name`, `message`) VALUES
(1, '', '', 0, '0000-00-00', '00:00:00', 'online', '', ''),
(2, '', '', 0, '0000-00-00', '00:00:00', 'online', '', ''),
(3, 'zeel', 'admin@admin.com', 2147483647, '0000-00-00', '14:30:00', 'online', '', 'hi'),
(4, 'g gg', 'a@gmail.com', 2147483647, '2019-09-14', '08:00:00', '20', '', 'gffgf'),
(5, 'g gg', 'a@gmail.com', 2147483647, '2019-09-14', '08:00:00', '20', 'hair-cut', 'gffgf'),
(6, 'zzz', 'harry@den.com', 1234567890, '2019-08-14', '12:30:00', '17', 'Hair Package', 'sds');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cat_slug` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`, `status`) VALUES
(25, 'Hair Cutting', 'xyz', 0),
(27, 'Hair Straightening', 'Hair Straightening', 0),
(28, 'Women', 'Hair Shower', 1),
(29, 'Men', 'Makeup / Facial', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `name`, `phone`, `address`, `message`) VALUES
(1, 'harish@gmail.com', 'harish', 2147483647, 'vadodara', ''),
(2, 'dhruvish@gmail.com', 'druvish druvish', 123456789, 'vadodara, hk-243/8,vadodara.', ''),
(3, '', 'ds', 2147483647, '', 'fdfdfd'),
(4, '', 'ds', 2147483647, '', 'fdfdfd'),
(5, '', 'ds', 2147483647, '', 'fdfdfd'),
(6, 'e@gmail.com', 'e', 2147483647, '', 'effdsgfdsgregr'),
(7, 's@e.r', 's', 2147483647, 'sss', 'ssss');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countrycode` char(3) NOT NULL,
  `countryname` varchar(200) NOT NULL,
  `code` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countrycode`, `countryname`, `code`) VALUES
('ABW', 'Aruba', 'AW'),
('AFG', 'Afghanistan', 'AF'),
('AGO', 'Angola', 'AO'),
('AIA', 'Anguilla', 'AI'),
('ALA', 'Åland', 'AX'),
('ALB', 'Albania', 'AL'),
('AND', 'Andorra', 'AD'),
('ARE', 'United Arab Emirates', 'AE'),
('ARG', 'Argentina', 'AR'),
('ARM', 'Armenia', 'AM'),
('ASM', 'American Samoa', 'AS'),
('ATA', 'Antarctica', 'AQ'),
('ATF', 'French Southern Territories', 'TF'),
('ATG', 'Antigua and Barbuda', 'AG'),
('AUS', 'Australia', 'AU'),
('AUT', 'Austria', 'AT'),
('AZE', 'Azerbaijan', 'AZ'),
('BDI', 'Burundi', 'BI'),
('BEL', 'Belgium', 'BE'),
('BEN', 'Benin', 'BJ'),
('BES', 'Bonaire', 'BQ'),
('BFA', 'Burkina Faso', 'BF'),
('BGD', 'Bangladesh', 'BD'),
('BGR', 'Bulgaria', 'BG'),
('BHR', 'Bahrain', 'BH'),
('BHS', 'Bahamas', 'BS'),
('BIH', 'Bosnia and Herzegovina', 'BA'),
('BLM', 'Saint Barthélemy', 'BL'),
('BLR', 'Belarus', 'BY'),
('BLZ', 'Belize', 'BZ'),
('BMU', 'Bermuda', 'BM'),
('BOL', 'Bolivia', 'BO'),
('BRA', 'Brazil', 'BR'),
('BRB', 'Barbados', 'BB'),
('BRN', 'Brunei', 'BN'),
('BTN', 'Bhutan', 'BT'),
('BVT', 'Bouvet Island', 'BV'),
('BWA', 'Botswana', 'BW'),
('CAF', 'Central African Republic', 'CF'),
('CAN', 'Canada', 'CA'),
('CCK', 'Cocos [Keeling] Islands', 'CC'),
('CHE', 'Switzerland', 'CH'),
('CHL', 'Chile', 'CL'),
('CHN', 'China', 'CN'),
('CIV', 'Ivory Coast', 'CI'),
('CMR', 'Cameroon', 'CM'),
('COD', 'Democratic Republic of the Congo', 'CD'),
('COG', 'Republic of the Congo', 'CG'),
('COK', 'Cook Islands', 'CK'),
('COL', 'Colombia', 'CO'),
('COM', 'Comoros', 'KM'),
('CPV', 'Cape Verde', 'CV'),
('CRI', 'Costa Rica', 'CR'),
('CUB', 'Cuba', 'CU'),
('CUW', 'Curacao', 'CW'),
('CXR', 'Christmas Island', 'CX'),
('CYM', 'Cayman Islands', 'KY'),
('CYP', 'Cyprus', 'CY'),
('CZE', 'Czech Republic', 'CZ'),
('DEU', 'Germany', 'DE'),
('DJI', 'Djibouti', 'DJ'),
('DMA', 'Dominica', 'DM'),
('DNK', 'Denmark', 'DK'),
('DOM', 'Dominican Republic', 'DO'),
('DZA', 'Algeria', 'DZ'),
('ECU', 'Ecuador', 'EC'),
('EGY', 'Egypt', 'EG'),
('ERI', 'Eritrea', 'ER'),
('ESH', 'Western Sahara', 'EH'),
('ESP', 'Spain', 'ES'),
('EST', 'Estonia', 'EE'),
('ETH', 'Ethiopia', 'ET'),
('FIN', 'Finland', 'FI'),
('FJI', 'Fiji', 'FJ'),
('FLK', 'Falkland Islands', 'FK'),
('FRA', 'France', 'FR'),
('FRO', 'Faroe Islands', 'FO'),
('FSM', 'Micronesia', 'FM'),
('GAB', 'Gabon', 'GA'),
('GBR', 'United Kingdom', 'GB'),
('GEO', 'Georgia', 'GE'),
('GGY', 'Guernsey', 'GG'),
('GHA', 'Ghana', 'GH'),
('GIB', 'Gibraltar', 'GI'),
('GIN', 'Guinea', 'GN'),
('GLP', 'Guadeloupe', 'GP'),
('GMB', 'Gambia', 'GM'),
('GNB', 'Guinea-Bissau', 'GW'),
('GNQ', 'Equatorial Guinea', 'GQ'),
('GRC', 'Greece', 'GR'),
('GRD', 'Grenada', 'GD'),
('GRL', 'Greenland', 'GL'),
('GTM', 'Guatemala', 'GT'),
('GUF', 'French Guiana', 'GF'),
('GUM', 'Guam', 'GU'),
('GUY', 'Guyana', 'GY'),
('HKG', 'Hong Kong', 'HK'),
('HMD', 'Heard Island and McDonald Islands', 'HM'),
('HND', 'Honduras', 'HN'),
('HRV', 'Croatia', 'HR'),
('HTI', 'Haiti', 'HT'),
('HUN', 'Hungary', 'HU'),
('IDN', 'Indonesia', 'ID'),
('IMN', 'Isle of Man', 'IM'),
('IND', 'India', 'IN'),
('IOT', 'British Indian Ocean Territory', 'IO'),
('IRL', 'Ireland', 'IE'),
('IRN', 'Iran', 'IR'),
('IRQ', 'Iraq', 'IQ'),
('ISL', 'Iceland', 'IS'),
('ISR', 'Israel', 'IL'),
('ITA', 'Italy', 'IT'),
('JAM', 'Jamaica', 'JM'),
('JEY', 'Jersey', 'JE'),
('JOR', 'Jordan', 'JO'),
('JPN', 'Japan', 'JP'),
('KAZ', 'Kazakhstan', 'KZ'),
('KEN', 'Kenya', 'KE'),
('KGZ', 'Kyrgyzstan', 'KG'),
('KHM', 'Cambodia', 'KH'),
('KIR', 'Kiribati', 'KI'),
('KNA', 'Saint Kitts and Nevis', 'KN'),
('KOR', 'South Korea', 'KR'),
('KWT', 'Kuwait', 'KW'),
('LAO', 'Laos', 'LA'),
('LBN', 'Lebanon', 'LB'),
('LBR', 'Liberia', 'LR'),
('LBY', 'Libya', 'LY'),
('LCA', 'Saint Lucia', 'LC'),
('LIE', 'Liechtenstein', 'LI'),
('LKA', 'Sri Lanka', 'LK'),
('LSO', 'Lesotho', 'LS'),
('LTU', 'Lithuania', 'LT'),
('LUX', 'Luxembourg', 'LU'),
('LVA', 'Latvia', 'LV'),
('MAC', 'Macao', 'MO'),
('MAF', 'Saint Martin', 'MF'),
('MAR', 'Morocco', 'MA'),
('MCO', 'Monaco', 'MC'),
('MDA', 'Moldova', 'MD'),
('MDG', 'Madagascar', 'MG'),
('MDV', 'Maldives', 'MV'),
('MEX', 'Mexico', 'MX'),
('MHL', 'Marshall Islands', 'MH'),
('MKD', 'Macedonia', 'MK'),
('MLI', 'Mali', 'ML'),
('MLT', 'Malta', 'MT'),
('MMR', 'Myanmar [Burma]', 'MM'),
('MNE', 'Montenegro', 'ME'),
('MNG', 'Mongolia', 'MN'),
('MNP', 'Northern Mariana Islands', 'MP'),
('MOZ', 'Mozambique', 'MZ'),
('MRT', 'Mauritania', 'MR'),
('MSR', 'Montserrat', 'MS'),
('MTQ', 'Martinique', 'MQ'),
('MUS', 'Mauritius', 'MU'),
('MWI', 'Malawi', 'MW'),
('MYS', 'Malaysia', 'MY'),
('MYT', 'Mayotte', 'YT'),
('NAM', 'Namibia', 'NA'),
('NCL', 'New Caledonia', 'NC'),
('NER', 'Niger', 'NE'),
('NFK', 'Norfolk Island', 'NF'),
('NGA', 'Nigeria', 'NG'),
('NIC', 'Nicaragua', 'NI'),
('NIU', 'Niue', 'NU'),
('NLD', 'Netherlands', 'NL'),
('NOR', 'Norway', 'NO'),
('NPL', 'Nepal', 'NP'),
('NRU', 'Nauru', 'NR'),
('NZL', 'New Zealand', 'NZ'),
('OMN', 'Oman', 'OM'),
('PAK', 'Pakistan', 'PK'),
('PAN', 'Panama', 'PA'),
('PCN', 'Pitcairn Islands', 'PN'),
('PER', 'Peru', 'PE'),
('PHL', 'Philippines', 'PH'),
('PLW', 'Palau', 'PW'),
('PNG', 'Papua New Guinea', 'PG'),
('POL', 'Poland', 'PL'),
('PRI', 'Puerto Rico', 'PR'),
('PRK', 'North Korea', 'KP'),
('PRT', 'Portugal', 'PT'),
('PRY', 'Paraguay', 'PY'),
('PSE', 'Palestine', 'PS'),
('PYF', 'French Polynesia', 'PF'),
('QAT', 'Qatar', 'QA'),
('REU', 'Réunion', 'RE'),
('ROU', 'Romania', 'RO'),
('RUS', 'Russia', 'RU'),
('RWA', 'Rwanda', 'RW'),
('SAU', 'Saudi Arabia', 'SA'),
('SDN', 'Sudan', 'SD'),
('SEN', 'Senegal', 'SN'),
('SGP', 'Singapore', 'SG'),
('SGS', 'South Georgia and the South Sandwich Islands', 'GS'),
('SHN', 'Saint Helena', 'SH'),
('SJM', 'Svalbard and Jan Mayen', 'SJ'),
('SLB', 'Solomon Islands', 'SB'),
('SLE', 'Sierra Leone', 'SL'),
('SLV', 'El Salvador', 'SV'),
('SMR', 'San Marino', 'SM'),
('SOM', 'Somalia', 'SO'),
('SPM', 'Saint Pierre and Miquelon', 'PM'),
('SRB', 'Serbia', 'RS'),
('SSD', 'South Sudan', 'SS'),
('STP', 'São Tomé and Príncipe', 'ST'),
('SUR', 'Suriname', 'SR'),
('SVK', 'Slovakia', 'SK'),
('SVN', 'Slovenia', 'SI'),
('SWE', 'Sweden', 'SE'),
('SWZ', 'Swaziland', 'SZ'),
('SXM', 'Sint Maarten', 'SX'),
('SYC', 'Seychelles', 'SC'),
('SYR', 'Syria', 'SY'),
('TCA', 'Turks and Caicos Islands', 'TC'),
('TCD', 'Chad', 'TD'),
('TGO', 'Togo', 'TG'),
('THA', 'Thailand', 'TH'),
('TJK', 'Tajikistan', 'TJ'),
('TKL', 'Tokelau', 'TK'),
('TKM', 'Turkmenistan', 'TM'),
('TLS', 'East Timor', 'TL'),
('TON', 'Tonga', 'TO'),
('TTO', 'Trinidad and Tobago', 'TT'),
('TUN', 'Tunisia', 'TN'),
('TUR', 'Turkey', 'TR'),
('TUV', 'Tuvalu', 'TV'),
('TWN', 'Taiwan', 'TW'),
('TZA', 'Tanzania', 'TZ'),
('UGA', 'Uganda', 'UG'),
('UKR', 'Ukraine', 'UA'),
('UMI', 'U.S. Minor Outlying Islands', 'UM'),
('URY', 'Uruguay', 'UY'),
('USA', 'United States', 'US'),
('UZB', 'Uzbekistan', 'UZ'),
('VAT', 'Vatican City', 'VA'),
('VCT', 'Saint Vincent and the Grenadines', 'VC'),
('VEN', 'Venezuela', 'VE'),
('VGB', 'British Virgin Islands', 'VG'),
('VIR', 'U.S. Virgin Islands', 'VI'),
('VNM', 'Vietnam', 'VN'),
('VUT', 'Vanuatu', 'VU'),
('WLF', 'Wallis and Futuna', 'WF'),
('WSM', 'Samoa', 'WS'),
('XKX', 'Kosovo', 'XK'),
('YEM', 'Yemen', 'YE'),
('ZAF', 'South Africa', 'ZA'),
('ZMB', 'Zambia', 'ZM'),
('ZWE', 'Zimbabwe', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `dr_tbladmin`
--

CREATE TABLE `dr_tbladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dr_tbladmin`
--

INSERT INTO `dr_tbladmin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `name`, `image`, `descrip`, `status`) VALUES
(40, '', '904843.jpg', '', 1),
(41, '', '240076.jpg', '', 1),
(42, '', '529503.jpg', '', 1),
(43, '', '517966.jpg', '', 1),
(44, '', '505375.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `get_appointment`
--

CREATE TABLE `get_appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `get_appointment`
--

INSERT INTO `get_appointment` (`id`, `name`, `email`, `subject`, `message`) VALUES
(9, 'ff', 'ff111@g.gg', 'ddd', 'dfbdfgsd');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `i_id` int(11) NOT NULL,
  `service_id` varchar(11) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`i_id`, `service_id`, `project_id`, `name`, `email`, `phone`, `city`, `address`) VALUES
(18, '26', '', 'zeel', 'z@gmail.com', '7859641230', 'vvn', 'dcbjdcjdhdhfh'),
(22, '', '8', 'sss', 'A@GDHHD.dcc', '1230456987', 'asds', 'sds'),
(24, '26', '', 'ddd', 'a@j.d', '7894561230', 'sdsd', 'sss'),
(25, '', '5', 'ss', 'zeel@gmail.com', '1234567890', 'dddese', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_descri` varchar(255) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_descri`, `news_image`, `status`) VALUES
(1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar justo quam, in consequat velit mollis at.', '644104.jpg', 1),
(2, 'We Work Every Day a Week', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pulvinar justo quam, in consequat velit mollis at.', '115511.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pquantity` varchar(255) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productprice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `pid`, `pquantity`, `orderid`, `productprice`) VALUES
(17, 16, '1', 21, '250'),
(18, 5, '1', 22, '500'),
(19, 9, '1', 22, '150'),
(20, 0, '1', 23, '150');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `totalprice` varchar(255) NOT NULL,
  `orderstatus` varchar(255) NOT NULL,
  `paymentmode` varchar(255) NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `totalprice`, `orderstatus`, `paymentmode`, `timestamp`) VALUES
(21, 10, '250', 'Cancelled', 'on', '2019-07-20 12:46:40'),
(22, 10, '650', 'Order Placed', 'on', '2019-07-24 16:54:42'),
(23, 11, '150', 'Order Placed', 'on', '2019-08-16 10:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `ordertracking`
--

CREATE TABLE `ordertracking` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertracking`
--

INSERT INTO `ordertracking` (`id`, `orderid`, `status`, `message`, `timestamp`) VALUES
(7, 21, 'Cancelled', ' not satisfied', '2019-07-20 13:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_by` int(11) NOT NULL,
  `modify_on` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `cat_id`, `name`, `descrip`, `image`, `price`, `created_by`, `created_on`, `modify_by`, `modify_on`, `status`) VALUES
(1, 1, 'xyz', 'helloo!!<div><br></div>', '3493.png', 100, 0, '2019-06-22 05:49:02', 0, '0000-00-00', 0),
(6, 0, 'Furnituer', 'zdgdgfg', '922219.jpg', 6000, 0, '2019-07-15 06:29:02', 0, '0000-00-00', 0),
(7, 0, 'Hair ', 'sdfsgg', '513166.jpg', 450, 0, '2019-07-15 11:25:57', 0, '0000-00-00', 0),
(8, 28, 'Hair ', 'sdfsgg', '829539.jpg', 500, 0, '2019-07-15 11:26:48', 0, '0000-00-00', 0),
(9, 28, 'LADY SALOON Shampoo', '<br>', '86214.jpg', 500, 0, '2019-07-17 08:48:54', 0, '0000-00-00', 1),
(10, 27, 'Roots Sonic HD22 2200 Watts Hair Dryer, 1 pc', '<h1 class=\"GrE04\" style=\"margin-top: 0px; margin-bottom: 10px; padding-top: 0.6rem; overflow: hidden', '747126.jpg', 2800, 0, '2019-07-17 08:53:31', 0, '0000-00-00', 0),
(11, 25, 'Himalaya Protein Hair Cream, 100 ml', '<h1 class=\"GrE04\" style=\"margin-top: 0px; margin-bottom: 10px; padding-top: 0.6rem; overflow: hidden', '698799.jpg', 68, 0, '2019-07-17 08:54:25', 0, '0000-00-00', 0),
(12, 29, 'Roots Professional Ceramic Barrel Brush ', '<h1 class=\"GrE04\" style=\"margin-top: 0px; margin-bottom: 10px; padding-top: 0.6rem; overflow: hidden', '489790.jpg', 334, 0, '2019-07-17 08:55:33', 0, '0000-00-00', 0),
(13, 25, 'scissor', '<b style=\"color: rgb(34, 34, 34); font-family: sans-serif; font-size: 14px;\">Scissors</b>', '22081.jpg', 250, 0, '2019-07-18 05:25:51', 0, '0000-00-00', 1),
(14, 25, 'comb', '<span style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: small;\">A comb is a ', '864347.jpg', 200, 0, '2019-07-18 05:28:11', 0, '0000-00-00', 0),
(15, 27, 'hair sprey', '<br>', '196552.jpg', 1000, 0, '2019-07-18 05:28:47', 0, '0000-00-00', 1),
(16, 25, 'comb', 'f', '130943.jpg', 250, 0, '2019-07-18 11:42:24', 0, '0000-00-00', 1),
(17, 29, 'facial kit', 'fruit facial', '303648.jpg', 350, 0, '2019-07-19 04:47:05', 0, '0000-00-00', 1),
(18, 27, 'Driyer', 'driyer', '301515.jpg', 2000, 0, '2019-07-19 04:47:50', 0, '0000-00-00', 1),
(19, 29, 'hardware', 'dfdfdd', '258468.jpeg', 10000, 0, '2019-07-24 06:05:38', 0, '0000-00-00', 1),
(20, 28, 'hair-cut', 'stylist hair cut', '531859.png', 500, 0, '2019-07-24 08:28:22', 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `review` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `pid`, `uid`, `review`, `timestamp`) VALUES
(1, 1, 6, 'It&#39;s an awesome Product...', '2017-10-30 15:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`id`, `name`, `status`) VALUES
(1, 'Business  Consultant', 1),
(2, 'Market  Research', 1),
(3, 'Bank Investment', 1),
(4, 'Online Consultant', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallary`
--

CREATE TABLE `tbl_gallary` (
  `id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallary`
--

INSERT INTO `tbl_gallary` (`id`, `pro_id`, `image`, `status`) VALUES
(17, 1, 'images.jpg', 1),
(18, 1, 'download (1).jpg', 1),
(19, 1, 'download (2).jpg', 0),
(20, 6, '277259.jpg', 1),
(21, 6, '168526.jpg', 1),
(22, 6, '171849.jpg', 1),
(23, 6, '574858.jpg', 1),
(24, 6, '20389.jpg', 1),
(25, 1, '6999477c1a212249a411b7e536887da2_800x800.jpg', 1),
(26, 16, '137944.png', 0),
(27, 11, '3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `p_id` int(11) NOT NULL,
  `pro_id` varchar(250) NOT NULL,
  `package_name` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `price` int(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `modify_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modify_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_package`
--

INSERT INTO `tbl_package` (`p_id`, `pro_id`, `package_name`, `description`, `price`, `created_on`, `created_by`, `modify_on`, `modify_by`, `status`) VALUES
(17, '1,6,', 'Hair Package', 'hair cut free', 6100, '2019-07-17 06:53:18', 0, '2019-07-17 06:53:18', 0, 1),
(18, '1,5,', 'hair coloring spa', 'washing free', 600, '2019-07-17 07:16:01', 0, '2019-07-17 07:16:01', 0, 1),
(19, '1,5,', 'xyz', 'sdddd', 600, '2019-07-24 06:08:44', 0, '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_by` int(11) NOT NULL,
  `modify_on` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `name`, `descrip`, `price`, `image`, `created_by`, `created_on`, `modify_by`, `modify_on`, `status`) VALUES
(1, 'title', 'hhvhvhhhvhvhvvhvh', 100, '797590.png', 0, '2019-06-22 05:36:28', 0, '0000-00-00', 0),
(2, 'Richard Spark', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut l', 0, '842945.jpg', 0, '2019-06-22 08:54:47', 0, '0000-00-00', 0),
(3, 'Joseph Goh', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut l', 574, '845407.jpg', 0, '2019-06-22 08:55:18', 0, '0000-00-00', 0),
(4, 'Hair cut', 'wwwwwwwstgrrgfg', 0, '639872.jpg', 0, '2019-07-15 05:05:19', 0, '0000-00-00', 0),
(5, 'manicure', 'Aenean eu nisl ut neque commodo volutpat at eu magna. Nulla at bibendum eros.', 500, '888245.jpg', 0, '2019-07-15 11:39:22', 0, '0000-00-00', 0),
(6, 'gjghj', 'fhdghgh', 0, '863967.jpg', 0, '2019-07-17 11:03:28', 0, '0000-00-00', 0),
(7, 'traditional haircuts', 'Vivamus dignissim interdum ex quis tincidunt. Sed vitae felis tellus. Mauris tristique nisl ut quam', 0, '965813.jpg', 0, '2019-07-17 11:03:37', 0, '0000-00-00', 0),
(8, 'head shaves', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla', 0, '892180.jpg', 0, '2019-07-18 05:13:23', 0, '0000-00-00', 0),
(9, 'raser', 'Integer ultricies magna ac elementum condimentum. Aliquam molestie rhoncus', 150, '251509.jpg', 0, '2019-07-18 05:13:47', 0, '0000-00-00', 0),
(10, 'hair color', 'xxx', 50, '322307.png', 0, '2019-07-19 06:22:33', 0, '0000-00-00', 0),
(11, ' hair  driyer', '<div>gfgf</div><div></div>', 120, '609631.jpg', 0, '2019-07-19 06:24:03', 0, '0000-00-00', 0),
(12, '', 'sds', 0, '304694.jpg', 0, '2019-07-24 09:24:06', 0, '0000-00-00', 0),
(13, 'comb', 'sds', 100, '432013.jpg', 0, '2019-07-24 09:24:36', 0, '0000-00-00', 0),
(14, '1234', 'degfdg', 120, '737165.jpg', 0, '2019-07-24 09:34:48', 0, '0000-00-00', 0),
(15, 'Industry camical company', 'We help agencies to define their new business objectives and then create the road map to get them th', 0, '820432.jpg', 0, '2019-08-23 06:21:39', 0, '0000-00-00', 1),
(16, 'Gas industry complete mision', 'We help agencies to define their new business objectives and then create the road map to get them th', 0, '274027.jpg', 0, '2019-08-23 06:22:28', 0, '0000-00-00', 1),
(17, 'Electricity can be proper', 'We help agencies to define their new business objectives and then create the road map to get them th', 0, '983033.jpg', 0, '2019-08-23 06:22:55', 0, '0000-00-00', 1),
(18, 'Forest and river project', 'We help agencies to define their new business objectives and then create the road map to get them th', 0, '287339.jpg', 0, '2019-08-23 06:23:10', 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `t_id` varchar(100) NOT NULL,
  `descrip` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `modify_by` int(11) NOT NULL,
  `modify_on` date NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `t_id`, `descrip`, `image`, `created_by`, `created_on`, `modify_by`, `modify_on`, `status`) VALUES
(25, '2', 'hello', '632393.jpg', 0, '2019-08-21 05:53:13', 0, '0000-00-00', 0),
(26, '1', 'ashffffxhvchvhzbchascsacsccushcjxbjhvhjzxbnbxbcuhscnjxZfffffffffffffffffffffffffffffffffffffffffffff', '25207.jpg', 0, '2019-08-21 10:35:14', 0, '0000-00-00', 0),
(27, '1', 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.', '399514.jpg', 0, '2019-08-23 06:18:34', 0, '0000-00-00', 1),
(28, '2', 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.', '734419.jpg', 0, '2019-08-23 06:18:53', 0, '0000-00-00', 1),
(29, '3', 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.', '911030.jpg', 0, '2019-08-23 06:19:06', 0, '0000-00-00', 1),
(30, '4', 'Aspernatur sit adipisci quaerat unde at neque Redug Lagre dolor sit amet.', '299444.jpg', 0, '2019-08-23 06:19:23', 0, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `timestamp`) VALUES
(1, 'vivek@codingcyber.com', '26e0eca228b42a520565415246513c0d', '2017-10-27 12:05:10'),
(2, 'vivek1@codingcyber.com', '$2y$10$cMzHNUFGKma96MywHmVMbekuJZb1tSNLsevHzLnSRbcRicQVhEC6a', '2017-10-27 12:24:25'),
(6, 'vivek2@codingcyber.com', '$2y$10$apI7l.1wAS5pgbG4YfMrN.jNd5T3XmhecFuSV2M6UNdoUHImPXNxm', '2017-10-27 12:28:20'),
(7, 'zeelmshah1@gmail.com', '$2y$10$cauO7Smz.plMt7Wm1wlaUuObyBwhUX8glwsMQ/5W2zbwXhDKVJWJe', '2019-07-12 14:22:20'),
(8, 'admin@admin.com', '$2y$10$UXWyYIiJTYOa1W9D7tPrF.8W7Us5LOklbwvJJYvM2yCfwZhILzWom', '2019-07-16 14:18:30'),
(9, 'admin1@gmail.com', '$2y$10$U4Qzcxs/AxXGwUnnY6ZfN.MBlhGG76EWdQZtkiMNzeLFnenblWbNS', '2019-07-16 14:45:50'),
(10, 'a@gmail.com', '$2y$10$94UwrQjisgtV9U8x1TW8U.oOXZQk4/C.FBkjFlfdS6P53hW.MlLga', '2019-07-16 16:45:02'),
(11, 'payalrana@gmail.com', '$2y$10$rvvg/vqJ11byJFjSi5RYvOa08G.3UweZ/MGsEUoID/67dxSJTTITe', '2019-07-17 09:54:05'),
(12, 'dhruvish@gmail.com', '$2y$10$6oj.iQ/TU6djgsu16.9KsegyjtMSiU6Jj4YMxUeTSb1PTXcoVcuDu', '2019-07-17 11:05:48');

-- --------------------------------------------------------

--
-- Table structure for table `usersmeta`
--

CREATE TABLE `usersmeta` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `ship_firstname` varchar(100) NOT NULL,
  `ship_lastname` varchar(255) NOT NULL,
  `ship_company` varchar(255) NOT NULL,
  `ship_address1` varchar(255) NOT NULL,
  `ship_address2` varchar(255) NOT NULL,
  `ship_city` varchar(255) NOT NULL,
  `ship_country` varchar(255) NOT NULL,
  `ship_post_code` varchar(255) NOT NULL,
  `ship_order_note` varchar(255) NOT NULL,
  `ship_state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersmeta`
--

INSERT INTO `usersmeta` (`id`, `uid`, `firstname`, `lastname`, `company`, `address1`, `address2`, `city`, `state`, `country`, `zip`, `mobile`, `ship_firstname`, `ship_lastname`, `ship_company`, `ship_address1`, `ship_address2`, `ship_city`, `ship_country`, `ship_post_code`, `ship_order_note`, `ship_state`) VALUES
(1, 2, 'Vivek', 'V', 'Coding Cyber', 'Hyd', 'Hyd', 'Hyderabad', 'Telangana', '', '500060', '', '', '', '', '', '', '', '', '', '', ''),
(2, 6, 'Vivek', 'Vengala', 'Coding Cyber', '#201', 'DSNR', 'Hyderabad', 'Telangana', '', '500060', '9876543211', '', '', '', '', '', '', '', '', '', ''),
(3, 0, '$fname', '$lname', '$company', '$address1', '$address2', '$city', '$state', '$country', '$zip', '$phone', '$ship_firstname', '$ship_lastname', '$ship_company', '$ship_address1', '$ship_address2', '$ship_city', '$ship_country', '$ship_post_code', '$ship_order_note', '$ship_state'),
(4, 10, 'druvish', 'druvish', 'xyz', 'vadodara', 'hk-243/8,vadodara.', 'Vadodara', 'gujrat', 'AR', '360025', '123456789', 'g', 'gg', 'egdasg', 'qsss', 'csdgrehg', 'sss', 'TF', '390025', 'dssg', 'ssss'),
(5, 12, 'druvish', 'druvish', 'xyz', 'vadodara', 'hk-243/8,vadodara.', 'Vadodara', 'gujrat', 'IN', '360025', '123456789', 'druvish', 'druvish', 'xyz', 'vadodara', 'hk-243/8,vadodara.', 'vadodara', 'IN', '360024', 'please ', 'gujrat'),
(6, 11, 'd', 'd', 'sdff', 'asdasfd', 'fwff', 'vss', 'eee', 'YT', '', '1234567890', 'w', 'ww', 'wws', 'ssss', 'ssssz', 'wefwed', 'AX', '85965', 'qwd', 'qwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countrycode`);

--
-- Indexes for table `dr_tbladmin`
--
ALTER TABLE `dr_tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_appointment`
--
ALTER TABLE `get_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertracking`
--
ALTER TABLE `ordertracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `usersmeta`
--
ALTER TABLE `usersmeta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dr_tbladmin`
--
ALTER TABLE `dr_tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `get_appointment`
--
ALTER TABLE `get_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ordertracking`
--
ALTER TABLE `ordertracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_gallary`
--
ALTER TABLE `tbl_gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usersmeta`
--
ALTER TABLE `usersmeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
