USE `customer_db`;

CREATE TABLE `customer_db`.`customer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(14) NOT NULL,
  `address` VARCHAR(100) NOT NULL,
  `gender` VARCHAR(1) NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`));
