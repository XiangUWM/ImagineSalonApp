DROP DATABASE IF EXISTS `imagine_salon`;
CREATE DATABASE `imagine_salon`;
USE `imagine_salon`;

CREATE TABLE `customer` (
    `customer_id`   int(4) NOT NULL AUTO_INCREMENT,
    `first`         varchar(35) NOT NULL,
    `last`          varchar(35) NOT NULL,
    `email`         varchar(50),
    `address`       varchar(75),
    `city`          varchar(50),
    `state`         char(2),
    `zip`           char(5),
    `phone`         varchar(12),
    `notes`         varchar(255),
    `preferred_staff`    int(4),
    `discount_type`     int(4),
    `referral_source`   varchar(50),
    PRIMARY KEY         (`customer_id`)
); 
    
CREATE TABLE `appointment` (
    `appointment_id`    int(8) NOT NULL AUTO_INCREMENT,
    `service_id`        int(4),
    `customer_id`       int(4) NOT NULL,
    `promotion_id`      int(4),
    `notes`             varchar(255),
    `start_timestamp`   timestamp NOT NULL,
    `end_timestamp`     timestamp,
    `repeat`            boolean,
    `staff_id`          int(4),
    `resources`         varchar(255),
    `status_code`       int(4),
    `check_in`          timestamp,
    PRIMARY KEY         (`appointment_id`)
); 

CREATE TABLE `staff` (
    `staff_id`      int(4) NOT NULL AUTO_INCREMENT,
    `first`         varchar(35) NOT NULL,
    `last`          varchar(35) NOT NULL,
    `email`         varchar(50),
    `address`       varchar(75),
    `city`          varchar(50),
    `state`         char(2),
    `zip`           char(5),
    `phone`         varchar(12) NOT NULL,
    `role_id`       int(4) NOT NULL,
    `services`      varchar(255),
    `status_code`   int(4),
    PRIMARY KEY     (`staff_id`)
); 
    
CREATE TABLE `service` (
    `service_id`    int(4) NOT NULL AUTO_INCREMENT,
    `name`          varchar(35) NOT NULL,
    `category`      varchar(35) NOT NULL,
    `service_code`  char(4) NOT NULL,
    `add_on`        int(4),
    `timeblock`     int(3) NOT NULL,
    `role_id`       char(2) NOT NULL,
    `price`         decimal(5,2) NOT NULL,
    `availability_id` int(4),
    `status_code`     int(4),
    PRIMARY KEY       (`service_id`)
); 

CREATE TABLE `product` (
    `product_id`    int(4) NOT NULL AUTO_INCREMENT,
    `name`          varchar(35) NOT NULL,
    `upc_code`      int(25) NOT NULL,
    `category`      varchar(35),
    `size`          varchar(35),
    `notes`         varchar(255),
    `vendor_id`     int(4) NOT NULL,
    `quantity`      int(3) NOT NULL DEFAULT 0,
    `status_code`   int(4) NOT NULL,
    `wholesale_cost` decimal(5,2) NOT NULL DEFAULT 0.00,
    `retail_price`   decimal(5,2) NOT NULL DEFAULT 0.00,
    `brand`          varchar(35) NOT NULL,
    PRIMARY KEY      (`product_id`)
); 

CREATE TABLE `vendor` (
    `vendor_id`     int(4) NOT NULL AUTO_INCREMENT,
    `name`          varchar(35) NOT NULL,
    `order_details` varchar(255),
    `notes`         varchar(255),
    PRIMARY KEY     (`vendor_id`)
); 

CREATE TABLE `resource` (
    `resource_id` int(4) NOT NULL AUTO_INCREMENT,
    `name`              varchar(35) NOT NULL,
    `description`       varchar(255),
    `notes`             varchar(255),
    `type`              varchar(35) NOT NULL,
    `availability_id`   int(4),
    `status_code`       int(4),
    PRIMARY KEY         (`resource_id`)
); 

CREATE TABLE `promotion` (
`promotion_id`      int(4) NOT NULL AUTO_INCREMENT,
`name`              varchar(35) NOT NULL,
`description`       varchar(255),
`start_date`        date,
`end_date`          date,
`discount_type`     int(4),
`available`         boolean,
`limit`             int(4),
`require_code`      boolean,
`valid_codes`       varchar(255),
`valid_services`    varchar(255),
PRIMARY KEY (`promotion_id`)
); 

CREATE TABLE `shift` (
    `shift_id`      int(4) NOT NULL AUTO_INCREMENT,
    `shift_start`   timestamp NOT NULL,
    `shift_end`     timestamp,
    `staff_id`      int(4),
    PRIMARY KEY     (`shift_id`)
); 

CREATE TABLE `add_on_service` (
    `add_on_id` int(4) NOT NULL AUTO_INCREMENT,
    `name`      varchar(35) NOT NULL,
    `timeblock` int(3) NOT NULL,
    PRIMARY KEY (`add_on_id`)
); 

CREATE TABLE `role` (
    `role_id`   int(4) NOT NULL AUTO_INCREMENT,
    `name`      varchar(35) NOT NULL,
    PRIMARY KEY (`role_id`)
); 

CREATE TABLE `availability` (
    `availability_id`   int(4) NOT NULL AUTO_INCREMENT,
    `staff_id`          int(4),
    `resource_id`       int(4),
    `service_id`        int(4),
    `monday_start`      timestamp NOT NULL,
    `tuesday_start`     timestamp NOT NULL,
    `wedday_start`      timestamp NOT NULL,
    `thursday_start`    timestamp NOT NULL,
    `friday_start`      timestamp NOT NULL,
    `saturday_start`    timestamp NOT NULL,
    `sunday_start`      timestamp NOT NULL,
    `monday_end`        timestamp NOT NULL,
    `tuesday_end`       timestamp NOT NULL,
    `wedday_end`        timestamp NOT NULL,
    `thursday_end`      timestamp NOT NULL,
    `friday_end`        timestamp NOT NULL,
    `saturday_end`      timestamp NOT NULL,
    `sunday_end`        timestamp NOT NULL,
    PRIMARY KEY         (`availability_id`)
); 

CREATE TABLE `discount` (
    `discount_type` int(4) NOT NULL AUTO_INCREMENT,
    `name`          varchar(35) NOT NULL,
    `percentage`    decimal(5,2),
    `amount`        decimal(5,2),
    PRIMARY KEY     (`discount_type`)
); 

CREATE TABLE `status` (
    `status_code` int(4) NOT NULL AUTO_INCREMENT,
    `name`        varchar(35) NOT NULL,
    PRIMARY KEY   (`status_code`)
); 

CREATE TABLE `change` (
    `change_id`         int(4) NOT NULL AUTO_INCREMENT,
    `name`              varchar(35) NOT NULL,
    `table_name`        varchar(35) NOT NULL,
    `column_name`       varchar(35) NOT NULL,
    `previous_value`    varchar(255) NOT NULL,
    `current_value`     varchar(255) NOT NULL,
    `change_timestamp`  timestamp DEFAULT current_timestamp,
    `is_undone`         boolean DEFAULT false,
    PRIMARY KEY         (`change_id`)
); 

CREATE TABLE `example_phpmvc` (
  `group_id`        int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_parent`    int(11) NOT NULL DEFAULT '0',
  `group_name`      varchar(220) DEFAULT NULL,
  PRIMARY KEY       (`group_id`)
);

LOCK TABLES `example_phpmvc` WRITE;

INSERT INTO `example_phpmvc` (`group_id`, `group_parent`, `group_name`)
VALUES
	(1,0,'Bookmarks Menu'),
	(2,0,'Web Dev'),
	(3,0,'School'),
	(4,0,'Work'),
	(8,0,'Music'),
	(9,0,'News'),
	(10,2,'CSS'),
	(11,2,'PHP'),
	(12,2,'HTML'),
	(13,2,'jQuery'),
	(14,2,'Graphics'),
	(15,8,'Production Tools'),
	(16,8,'Samples'),
	(17,8,'Forums'),
	(18,8,'Labels'),
	(19,2,'Tools'),
	(20,2,'Tips'),
	(21,2,'User Interface'),
	(22,2,'Resources'),
	(23,0,'Shopping'),
	(24,0,'Travel'),
	(25,2,'SEO'),
	(26,24,'Properties'),
	(27,2,'Databases'),
	(28,2,'MySQL');

UNLOCK TABLES;

ALTER TABLE customer
ADD FOREIGN KEY (discount_type) 
REFERENCES discount(discount_type),
    ADD FOREIGN KEY (preferred_staff)
    REFERENCES staff(staff_id);

ALTER TABLE appointment
ADD FOREIGN KEY (service_id)
REFERENCES service(service_id),
    ADD FOREIGN KEY (customer_id)
    REFERENCES customer(customer_id),
    ADD FOREIGN KEY (promotion_id)
    REFERENCES promotion(promotion_id),
    ADD FOREIGN KEY (staff_id)
    REFERENCES staff(staff_id),
    ADD FOREIGN KEY (status_code)
    REFERENCES status(status_code);

ALTER TABLE staff
ADD FOREIGN KEY (role_id)
REFERENCES role(role_id),
    ADD FOREIGN KEY (status_code)
    REFERENCES status(status_code);
    
ALTER TABLE service
ADD FOREIGN KEY (add_on)
REFERENCES add_on_service(add_on_id),
    ADD FOREIGN KEY (role_id)
    REFERENCES role(role_id),
    ADD FOREIGN KEY (availability_id)
    REFERENCES availability(availability_id),
    ADD FOREIGN KEY (status_code)
    REFERENCES status(status_code);
    
ALTER TABLE product
ADD FOREIGN KEY (vendor_id)
REFERENCES vendor(vendor_id),
    ADD FOREIGN KEY (status_code)
    REFERENCES status(status_code);
    
ALTER TABLE resource
ADD FOREIGN KEY (availability_id)
REFERENCES availability(availability_id),
    ADD FOREIGN KEY (status_code)
    REFERENCES status(status_code);
    
ALTER TABLE promotion
ADD FOREIGN KEY (discount_type)
REFERENCES discount(discount_type);

ALTER TABLE shift
ADD FOREIGN KEY (staff_id)
REFERENCES staff(staff_id);

ALTER TABLE availability
ADD FOREIGN KEY (staff_id)
REFERENCES staff(staff_id),
    ADD FOREIGN KEY (resource_id)
    REFERENCES resource(resource_id),
    ADD FOREIGN KEY (service_id)
    REFERENCES service(service_id);
    
