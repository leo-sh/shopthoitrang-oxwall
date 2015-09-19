<?php
// $path = OW::getPluginManager()->getPlugin('fashionshop')->getRootDir() . 'langs.zip';
// BOL_LanguageService::getInstance()->importPrefixFromZip($path, 'fashionshop');

  $query = "SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
  SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
  SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
  -- -----------------------------------------------------
  -- Table `persons`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_persons` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_persons` (
    `id` INT NOT NULL COMMENT '',
    `name` VARCHAR(255) NULL COMMENT '',
    `alias` MEDIUMTEXT NULL COMMENT '',
    `email` VARCHAR(255) NULL COMMENT '',
    `phone` VARCHAR(255) NOT NULL COMMENT '',
    `sex` VARCHAR(45) NOT NULL COMMENT '',
    `birthday` TIMESTAMP NULL COMMENT '',
    `hobby` VARCHAR(255) NULL COMMENT '',
    `avartar` VARCHAR(255) NULL COMMENT '',
    `address` VARCHAR(255) NULL COMMENT '',
    `city` VARCHAR(255) NULL COMMENT '',
    `country` VARCHAR(255) NULL COMMENT '',
    `zip` INT NULL COMMENT '',
    `created` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `products`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_products` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_products` (
    `id` INT NOT NULL COMMENT '',
    `name` VARCHAR(255) NULL COMMENT '',
    `description` TEXT NULL COMMENT 'chi tiet sp',
    `intro` TEXT NULL COMMENT 'cau gioi thieu sp ngan gon',
    `picture` VARCHAR(255) NULL COMMENT 'hinh hien thi sp',
    `state` VARCHAR(45) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci' NULL COMMENT 'sp: state: con hay het.\n',
    `price` INT NULL COMMENT '',
    `price_bonus` FLOAT NULL COMMENT '',
    `unit` VARCHAR(45) NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `fashions`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_fashions` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_fashions` (
    `id` INT NOT NULL COMMENT '',
    `type` VARCHAR(255) NULL COMMENT '',
    `code` VARCHAR(45) NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `fashion_tools`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_fashion_tools` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_fashion_tools` (
    `id` INT NOT NULL COMMENT '',
    `type` VARCHAR(255) NULL COMMENT '',
    `code` VARCHAR(45) NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `cosmetics`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_cosmetics` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_cosmetics` (
    `id` INT NOT NULL COMMENT '',
    `type` VARCHAR(45) NULL COMMENT '',
    `code` VARCHAR(45) NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `hand_make_products`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_hand_make_products` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_hand_make_products` (
    `id` INT NOT NULL COMMENT '',
    `type` VARCHAR(255) NULL COMMENT '',
    `code` VARCHAR(45) NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `product_types`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_product_types` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_product_types` (
    `id` INT NOT NULL COMMENT '',
    `products_id` INT NOT NULL COMMENT '',
    `fashion_id` INT NOT NULL COMMENT '',
    `fashion_tools_id` INT NOT NULL COMMENT '',
    `cosmetics_id` INT NOT NULL COMMENT '',
    `hand_make_products_id` INT NOT NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '',
    INDEX `fk_product_types_products1_idx` (`products_id` ASC)  COMMENT '',
    INDEX `fk_product_types_fashion1_idx` (`fashion_id` ASC)  COMMENT '',
    INDEX `fk_product_types_fashion_tools1_idx` (`fashion_tools_id` ASC)  COMMENT '',
    INDEX `fk_product_types_cosmetics1_idx` (`cosmetics_id` ASC)  COMMENT '',
    INDEX `fk_product_types_hand_make_products1_idx` (`hand_make_products_id` ASC)  COMMENT '',
    CONSTRAINT `fk_product_types_products1`
      FOREIGN KEY (`products_id`)
      REFERENCES `products` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
    CONSTRAINT `fk_product_types_fashion1`
      FOREIGN KEY (`fashion_id`)
      REFERENCES `fashions` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
    CONSTRAINT `fk_product_types_fashion_tools1`
      FOREIGN KEY (`fashion_tools_id`)
      REFERENCES `fashion_tools` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
    CONSTRAINT `fk_product_types_cosmetics1`
      FOREIGN KEY (`cosmetics_id`)
      REFERENCES `cosmetics` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
    CONSTRAINT `fk_product_types_hand_make_products1`
      FOREIGN KEY (`hand_make_products_id`)
      REFERENCES `hand_make_products` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION)
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `ships`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_ships` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_ships` (
    `id` INT NOT NULL COMMENT '',
    `address` VARCHAR(255) NULL COMMENT '',
    `state` VARCHAR(45) NULL COMMENT '',
    `time` TIMESTAMP NULL COMMENT '',
    `phone` VARCHAR(255) NULL COMMENT '',
    `note` TEXT NULL COMMENT '',
    `persons_id` INT NOT NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '',
    INDEX `fk_ships_persons1_idx` (`persons_id` ASC)  COMMENT '',
    CONSTRAINT `fk_ships_persons1`
      FOREIGN KEY (`persons_id`)
      REFERENCES `persons` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION)
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `carts`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_carts` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_carts` (
    `id` INT NOT NULL COMMENT '',
    `number` INT NULL COMMENT '',
    `note` TEXT NULL COMMENT '',
    `status` VARCHAR(45) NULL COMMENT '',
    `products_id` INT NOT NULL COMMENT '',
    `ships_id` INT NOT NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '',
    INDEX `fk_carts_products1_idx` (`products_id` ASC)  COMMENT '',
    INDEX `fk_carts_ships1_idx` (`ships_id` ASC)  COMMENT '',
    CONSTRAINT `fk_carts_products1`
      FOREIGN KEY (`products_id`)
      REFERENCES `products` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
    CONSTRAINT `fk_carts_ships1`
      FOREIGN KEY (`ships_id`)
      REFERENCES `ships` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION)
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `guest_types`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_guest_types` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_guest_types` (
    `id` INT NOT NULL COMMENT '',
    `type` VARCHAR(45) NULL COMMENT '',
    `bonus` FLOAT NULL COMMENT '',
    `bonus_detail` TEXT NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '')
  ENGINE = InnoDB;


  -- -----------------------------------------------------
  -- Table `guests`
  -- -----------------------------------------------------
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_guests` ;

  CREATE TABLE IF NOT EXISTS `" . OW_DB_PREFIX . "fashionshop_guests` (
    `id` INT NOT NULL COMMENT '',
    `password` VARCHAR(255) NULL COMMENT '',
    `username` VARCHAR(255) NULL COMMENT '',
    `persons_id` INT NOT NULL COMMENT '',
    `guest_types_id` INT NOT NULL COMMENT '',
    PRIMARY KEY (`id`)  COMMENT '',
    INDEX `fk_guests_persons1_idx` (`persons_id` ASC)  COMMENT '',
    INDEX `fk_guests_guest_types1_idx` (`guest_types_id` ASC)  COMMENT '',
    CONSTRAINT `fk_guests_persons1`
      FOREIGN KEY (`persons_id`)
      REFERENCES `persons` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION,
    CONSTRAINT `fk_guests_guest_types1`
      FOREIGN KEY (`guest_types_id`)
      REFERENCES `guest_types` (`id`)
      ON DELETE NO ACTION
      ON UPDATE NO ACTION)
  ENGINE = InnoDB;


  SET SQL_MODE=@OLD_SQL_MODE;
  SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
  SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;";

OW::getDbo()->query($query);