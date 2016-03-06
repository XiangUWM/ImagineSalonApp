# ************************************************************

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table example_phpmvc
# ------------------------------------------------------------


DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
    `customer_id` int(4) NOT NULL AUTO_INCREMENT,
    `first` varchar(35) NOT NULL,
    `last` varchar(35) NOT NULL,
    `email` varchar(50),
    `address` varchar(75),
    `city` varchar(50),
    `state` char(2),
    `zip` char(5),
    `phone` varchar(12),
    `notes` varchar(255),
    `prefered_staff` int(4),
    `discount_type` int(4),
    `referral_source` varchar(50),
    PRIMARY KEY (`customer_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `customer` (`customer_id`, `first`, `last`, `email`, `address`, `city`, `state`, `zip`, `phone`)
VALUES
	(),
    (),
    ();
    
DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
    `appointment_id` int(8) NOT NULL AUTO_INCREMENT,
    `service_id` int(4),
    `customer_id` int(4) NOT NULL,
    `promotion_id` int(4),
    `notes` varchar(255),
    `start_time` time NOT NULL,
    `end_time` time,
    `repeat` boolean,
    `staff_id` int(4),
    `resources` varchar(255),
    `date` date NOT NULL,
    `status_code` int(4),
    `check_in` timestamp WITH LOCAL TIMEZONE DEFAULT NULL,
    PRIMARY KEY (`appointment_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `apontment` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `appointment` (`appointment_id`, `service_id`, `customer_id`, `staff_id`, `status_code`, `date`, `start_time`, `end_time`)
VALUES
	(),
    (),
    ();

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
    `staff_id` int(4) NOT NULL AUTO_INCREMENT,
    `first` varchar(35) NOT NULL,
    `last` varchar(35) NOT NULL,
    `email` varchar(50),
    `address` varchar(75),
    `city` varchar(50),
    `state` char(2),
    `zip` char(5),
    `phone` varchar(12) NOT NULL,
    `role_id` int(4) NOT NULL,
    `services` varchar(255),
    `availability_id` int(4),
    `status_code` int(4),
    PRIMARY KEY (`staff_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `staff` (`staff_id`, `first`, `last`, `email`, `address`, `city`, `state`, `zip`, `phone`, `role_id`)
VALUES
	(),
    (),
    ();
    
DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
    `service_id` int(4) NOT NULL AUTO_INCREMENT,
    `name` varchar(35) NOT NULL,
    `category` varchar(35) NOT NULL,
    `service_code` char(4) NOT NULL,
    `add_on` int(4),
    `timeblock` int(3) NOT NULL,
    `role_id` char(2) NOT NULL,
    `price` decimal(5,2) NOT NULL,
    `availability_id` int(4),
    `status_code` int(4),
    PRIMARY KEY (`service_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `service` (`service_id`, `name`, `category`, `service_code`, `timeblock`, `role_id`, `price`)
VALUES
	(),
    (),
    ();
    
DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
    `product_id` int(4) NOT NULL AUTO_INCREMENT,
    `name` varchar(35) NOT NULL,
    `upc_code` int(25) NOT NULL,
    `category` varchar(50),
    `size` varchar(15),
    `notes` varchar(255),
    `vendor_id` int(4) NOT NULL,
    `quantity` int(3) NOT NULL DEFAULT 0,
    `status_code` int(4) NOT NULL,
    `wholesale_cost` decimal(5,2) NOT NULL,
    `retail_price` decimal(5,2),
    `brand` varchar(35) NOT NULL,
    PRIMARY KEY (`product_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `product` (`product_id`, `name`, `upc_code`, `category`, `size`, `vendor_id`, `status_code`, `wholesale_cost`, `retail_price`, `brand`)
VALUES
	(),
    (),
    ();

DROP TABLE IF EXISTS `vendor`;

CREATE TABLE `vendor` (
    `vendor_id` int(4) NOT NULL AUTO_INCREMENT,
    `name` varchar(35) NOT NULL,
    `order_details` varchar(255),
    `notes` varchar(255),
    PRIMARY KEY (`vendor_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `vendor` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `vendor` (`vendor_id`, `name`, `order_details`, `notes`)
VALUES
	(),
    (),
    ();

CREATE TABLE `resource` (
    `resource_id` int(4) NOT NULL AUTO_INCREMENT,
    `name` varchar(35) NOT NULL,
    `description` varchar(255),
    `notes` varchar(255),
    `type` varchar(35) NOT NULL,
    `availability_id` int(4),
    `status_code` int(4),
    PRIMARY KEY (`resouce_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `resource` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `resource` (`resource_id`, `name`, `description`, `notes`, `type`, `availability_id`)
VALUES
	(),
    (),
    ();
    
    CREATE TABLE `promotion` (
    `promotion_id` int(4) NOT NULL AUTO_INCREMENT,
    `name` varchar(35) NOT NULL,
    `description` varchar(255),
    `start_date` date DEFAULT current_date,
    `end_date` date,
    `discount_type` int(4),
    `available` boolean,
    `limit` int(4),
    `require_code` boolean,
    `valid_codes` varchar(255),
    `valid_services` varchar(255),
    PRIMARY KEY (`promotion_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `promotion` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `promotion_id` (`promotion_id`, `name`, `description`, `start_date`, `end_date`, `discount_type`, `available`, `limit`, `require_code`, `valid_codes`, `valid_services`)
VALUES
	(),
    (),
    ();

DROP TABLE IF EXISTS `shift`;

CREATE TABLE `shift` (
    `shift_id` int(4) NOT NULL AUTO_INCREMENT,
    `shift_start` timestamp WITH LOCAL TIMEZONE NOT NULL,
    `shift_end` timestamp,
    `staff_id` int(4),
    PRIMARY KEY (`shift_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `shift` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `shift` (`shift_id`, `shift_start`, `shift_end`, `staff_id`)
VALUES
	(),
    (),
    ();

DROP TABLE IF EXISTS `add_on_service`;

CREATE TABLE `add_on_service` (
    `add_on_id` int(4) NOT NULL AUTO_INCREMENT,
    `name` varchar(35) NOT NULL,
    `timeblock` int(3) NOT NULL,
    PRIMARY KEY (`add_on_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `add_on_service` WRITE;
/*!40000 ALTER TABLE `example_phpmvc` DISABLE KEYS */;

INSERT INTO `add_on_service` (`shift_id`, `shift_start`, `shift_end`, `staff_id`)
VALUES
	(),
    (),
    ();

/*!40000 ALTER TABLE `example_phpmvc` ENABLE KEYS */;
UNLOCK TABLES;

/* ALTER TABLE: FOREIGN KEYS */
ALTER TABLE customer
FOREIGN KEY (discount_type) 
REFERENCES discount(discount_type),

FOREIGN KEY (preferred_staff)
REFERENCES staff(staff_id);

ALTER TABLE appointment
FOREIGN KEY (service_id)
REFERENCES service(service_id),

FOREIGN KEY (customer_id)
REFERENCES customer(customer_id),

FOREIGN KEY (promotion_id)
REFERENCES promotion(promotion_id),

FOREIGN KEY (staff_id)
REFERENCES staff(staff_id),

FOREIGN KEY (status_code)
REFERENCES status(status_code);

ALTER TABLE staff
FOREIGN KEY (role_id)
REFERENCES role(role_id),

FOREIGN KEY (availability_id)
REFERENCES availability(availability_id);



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;