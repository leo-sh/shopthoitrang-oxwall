<?php
$query = "
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "persons` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "products` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashions` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "fashion_tools` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "cosmetics` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "hand_make_products` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "product_types` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "ships` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "carts` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "guest_types` ;
  DROP TABLE IF EXISTS `" . OW_DB_PREFIX . "guests`;";

OW::getDbo()->query($query);