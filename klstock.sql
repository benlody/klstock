CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `product_name` text,
  `customer_id` int(11) DEFAULT '0',
  `group_id` int(11) DEFAULT '0',
  `packing` int(11) DEFAULT '0',
  `price` int(11) DEFAULT '0',
  `payment` int(11) DEFAULT '0',
  `unit` text ,
  `remark` text 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `customer` (
`customer_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `customer_name` text,
  `remark` text 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `group` (
`group_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `group_name` text,
  `customer_id` int(11) DEFAULT '0',
  `remark` text 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE IF NOT EXISTS `address` (
`address_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT '0',
  `contact` text ,
  `tel` text ,
  `address` text ,
  `company_name` text ,
  `remark` text 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `stock` (
`product_id` int(11) NOT NULL PRIMARY KEY UNIQUE,
  `qty` int(11) DEFAULT '0',
  `remark` text 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


