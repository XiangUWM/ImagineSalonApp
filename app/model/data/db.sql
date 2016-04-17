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
    `alt_phone`     varchar(12),
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
    `staff_id`      int(4) NOT NULL,
    `first`         varchar(35) NOT NULL,
    `last`          varchar(35) NOT NULL,
    `email`         varchar(50),
    `address`       varchar(75),
    `city`          varchar(50),
    `state`         char(2),
    `zip`           char(5),
    `phone`         varchar(12) NOT NULL,
    `alt_phone`     varchar(12),
    `role_id`       int(4) NOT NULL,
    `services`      varchar(255),
    `status_code`   int(4),
    PRIMARY KEY     (`staff_id`)
); 
    
CREATE TABLE `service` (
    `service_id`    int(4) NOT NULL,
    `name`          varchar(35) NOT NULL,
    `category`      varchar(35) NOT NULL,
    `service_code`  char(4) NOT NULL,
    `add_on`        int(4),
    `timeblock`     int(3) NOT NULL,
    `role_id`       int(4) NOT NULL,
    `base_price`         decimal(5,2) NOT NULL,
    `availability_id` int(4),
    `status_code`     int(4),
    PRIMARY KEY       (`service_id`)
); 

CREATE TABLE `product` (
    `product_id`    int(4) NOT NULL AUTO_INCREMENT,
    `name`          varchar(50) NOT NULL,
    `upc_code`      bigint(12) NOT NULL,
    `category`      varchar(35),
    `size`          varchar(35),
    `notes`         varchar(255),
    `vendor_id`     int(4) NOT NULL,
    `quantity`      int(3) DEFAULT 0,
    `status_code`   int(4) DEFAULT 400,
    `wholesale_cost` decimal(5,2) NOT NULL DEFAULT 0.00,
    `retail_price`   decimal(5,2) NOT NULL DEFAULT 0.00,
    `brand`          varchar(35) NOT NULL,
    PRIMARY KEY      (`product_id`)
); 

CREATE TABLE `vendor` (
    `vendor_id`     int(4) NOT NULL,
    `name`          varchar(35) NOT NULL,
    `order_details` varchar(255),
    `notes`         varchar(255),
    PRIMARY KEY     (`vendor_id`)
); 

CREATE TABLE `resource` (
    `resource_id` int(4) NOT NULL,
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
    `add_on_id` int(4) NOT NULL,
    `name`      varchar(35) NOT NULL,
    `timeblock` int(3) NOT NULL,
    PRIMARY KEY (`add_on_id`)
); 

CREATE TABLE `role` (
    `role_id`   int(4),
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
    `class`       char(10), 
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
    `is_undone`         boolean,
    PRIMARY KEY         (`change_id`)
); 

CREATE TABLE `inventory_count` (
    `count_id`               int(6) NOT NULL AUTO_INCREMENT,
    `count_timestamp`        timestamp NOT NULL DEFAULT current_timestamp,
    `count_date`             date NOT NULL,
    `period`                 char(5) NOT NULL,
    `count_data`             longtext,
    `is_erroneous`           boolean,
    PRIMARY KEY              (`count_id`)
);

CREATE TABLE `order` (
    `order_id`              int(6) NOT NULL AUTO_INCREMENT,
    `vendor_id`             int(4) NOT NULL,
    `product_list`          mediumtext,
    `order_timestamp`       timestamp,
    `expected_timestamp`    timestamp,
    `shipped_timestamp`     timestamp,
    `arrival_timestamp`     timestamp,
    `is_shipped`            boolean,
    `is_accepted`           boolean,
    PRIMARY KEY             (`order_id`)
);

CREATE TABLE `removed_product` (
    `removal_id`          int(6) NOT NULL AUTO_INCREMENT,
    `product_id`          int(4) NOT NULL,
    `quantity_removed`    int(4) NOT NULL,
    `removal_timestamp`   timestamp NOT NULL DEFAULT current_timestamp,
    `reason`              char(10) NOT NULL,
    `sold_for`            decimal(5,2),
    PRIMARY KEY           (`removal_id`)
);

CREATE TABLE `example_phpmvc` (
  `group_id`        int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_parent`    int(11) NOT NULL DEFAULT '0',
  `group_name`      varchar(220) DEFAULT NULL,
  PRIMARY KEY       (`group_id`)
);


    
