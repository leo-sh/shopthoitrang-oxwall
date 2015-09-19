<?php
$value = "DELETE FROM `oxwall`.`ow_base_language_value` WHERE `ow_base_language_value`.`id` = 63512";
$value= "DELETE FROM `oxwall`.`ow_base_language_key` WHERE `ow_base_language_key`.`id` = 20082";
$prefix ="DELETE FROM `oxwall`.`ow_base_language_prefix` WHERE `ow_base_language_prefix`.`id` = 266";
$query = "
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_persons` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_products` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_fashions` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_fashion_tools` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_cosmetics` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_hand_make_products` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_product_types` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_ships` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_carts` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_guest_types` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashionshop_guests`;";

OW::getDbo()->query($query);