DROP DATABASE IF EXISTS computer;
CREATE DATABASE computer;
USE computer;

DROP TABLE IF EXISTS `host`;
CREATE TABLE `host` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `host`
  (`name`, `address`)
VALUES
  ('www.google.com', '216.58.222.100');


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `users`
  (`login`, `password`)
VALUES
  ('luiz', '$2y$10$junqDoWA.P5pccmUpcZ83uF1DzdJiOEtJ40wpk1a7U0fzZ8qqioou'),
  ('lucas', '$2y$10$mEn5XV9ZUFZDIMTL0ivwCuSS7YZ5XtJK4gtAOIs8k8nUqGkiN.WVm');
