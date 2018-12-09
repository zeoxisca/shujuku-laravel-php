CREATE TABLE `users`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `union_id` VARCHAR(20) NOT NULL,
  `nick_name` VARCHAR(64) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `addr` TEXT NOT NULL DEFAULT '',
  `pwd` VARCHAR(256) NOT NULL,
  `sex` BOOLEAN NOT NULL DEFAULT 0,
  `head_img` TEXT DEFAULT '',
  `email` VARCHAR(200) NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)CHARSET = UTF8 ENGINE = INNODB COMMENT 'userInfo';


CREATE TABLE `products`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` INT(20) NOT NULL,
  `product_name` VARCHAR(64) NOT NULL,
  `imgs` TEXT DEFAULT '',
  `nums` BIGINT UNSIGNED NOT NULL,
  `type2price` TEXT NOT NULL,
  `tags` TEXT NOT NULL,
  `seen` INT DEFAULT 0,
  `freight` INT DEFAULT 0,
  `sale_nums` INT DEFAULT 0,
  `from_where` VARCHAR(64),
  `details` TEXT DEFAULT '',
  `comment_count` INT NOT NULL DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)CHARSET = UTF8 ENGINE = INNODB COMMENT 'productsInfo';



CREATE TABLE `orders`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` VARCHAR(64) NOT NULL,
  `union_id` VARCHAR(64) NOT NULL,
  `order_price` INT DEFAULT 0,
  `freight` INT DEFAULT 0,
  `buy_num` INT DEFAULT 0,
  `addr` TEXT NOT NULL,
  `province` VARCHAR(64) NOT NULL,
  `user_name` VARCHAR(64),
  `phone` VARCHAR(15),
  `status` INT DEFAULT 0, # 未付款; 1 已付款; 2 已发货; 3 已收货(成交); 4 已退货; 5 已结束
  `payed_at` TIMESTAMP NOT NULL,
  `sended_at` TIMESTAMP NOT NULL,
  `dealed_at` TIMESTAMP NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)CHARSET = UTF8 ENGINE = INNODB COMMENT 'orderInfo';


CREATE TABLE `buys`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` VARCHAR(64) NOT NULL,
  `union_id` VARCHAR(64) NOT NULL,
  `product_id` VARCHAR(64) NOT NULL,
  `buy_num` INT DEFAULT 0,
  `buy_price` INT DEFAULT 0,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)CHARSET = UTF8 ENGINE = INNODB COMMENT 'buydetails';

CREATE TABLE `carts`(
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `union_id` VARCHAR(64) NOT NULL,
  `product_id` VARCHAR(64) NOT NULL,
  `nums` INT DEFAULT 0 NOT NULL,
  `product_name` INT NOT NULL,
  `price` INT DEFAULT 0 NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT current_timestamp,
  `deleted_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
)CHARSET = UTF8 ENGINE = INNODB COMMENT 'carts';

