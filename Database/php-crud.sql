CREATE DATABASE IF NOT EXISTS `php-crud`;
USE `php-crud`;

CREATE TABLE `php-crud`.`task` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY  (`id`))
    ENGINE = InnoDB;