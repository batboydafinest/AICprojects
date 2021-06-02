CREATE TABLE IF NOT EXISTS `mememon` (
  `id` int NOT NULL AUTO_INCREMENT,
  `meme` text,
  `type` text,
  `hp` int,
  `spd` int,
  `atk` int,
  `lvl` int DEFAULT 1,
  `exp` int DEFAULT 0,
  `imgpath` text,
  PRIMARY KEY (`id`)
);


INSERT INTO `mememon`
	(`meme`, `type`, `hp`, `spd`, `atk`, `imgpath`)
VALUES
	('Bob Ross', 'Spicy', '98', '8', '51', 'images/bobross.jpg'),
	('Distracted Boyfriend', 'Spicy', '102', '5', '49', 'images/boyfriend.jpg'),
  ('Knuckles', 'Cool', '103', '10', '50', 'images/knuckles.jpg'),
  ('Expanding Brain', 'Cool', '107', '4', '48', 'images/brain.jpg'),
  ('Sanic', 'Dank', '95', '11', '54', 'images/sanic.jpg'),
  ('Salt Bae', 'Dank', '99', '1', '50', 'images/saltbae.jpeg'),
  ('Zucc', 'Tech', '106', '9', '49', 'images/zucc.jpg'),
  ('Snapchat Hotdog', 'Tech', '101', '7', '49', 'images/hotdog.jpg'),
  ('Deez Nuts', 'Terrible', '104', '3', '50', 'images/deeznuts.jpg'),
  ('Rick Astley', 'Terrible', '98', '6', '51', 'images/rickastley.jpg'),
  ('Justin Bieber', 'Terrible', '110', '2', '51', 'images/bieber.jpg');


  CREATE TABLE IF NOT EXISTS `player` (
  	`id` int NOT NULL AUTO_INCREMENT,
  	`name` varchar(20),
    `pass` text,
    `nick` varchar(20),
    `hat` text,
    `currentx` int DEFAULT 30,
    `currenty` int DEFAULT 8,
    `currentlocation` int DEFAULT 1,
    `beatmason` int DEFAULT 0,
    `beatbob` int DEFAULT 0,
    `beatjeff` int DEFAULT 0,
    `beatbigboi` int DEFAULT 0,
    `currenthp` int DEFAULT 0,
    `maxhp` int,
  	PRIMARY KEY (`id`)
  );

  INSERT INTO `player`
  	(`name`, `pass`, `nick`, `currenthp`)
  VALUES
  	('BigBoiBoss', '$2y$10$dXIfN97EoCJYFsuFvoKhhOZ2p5PsoL0iTUEE0Nj9RXthnkWYbK2kG', 'BigBoiBoss', '103'),
  	('Jeff', '$2y$10$o0P4K1iyKYEgoXdWOHZgr.L8p2lEiURnpCSRN9wTM0uNZL9nhS2ee' , 'Jeff', '104'),
    ('Bob', '$2y$10$9VkJ3rrBm4NwGNcBB/7lN.2lSCkufU0xeDGRkeJT3dv8y.YQTgU7K', 'Bob', '110'),
    ('Mason', '$2y$10$53rA6ceQRe1/ul6Up/O8Gu.KwXyCmHasa3zDAe7mOhO46he0J2GDu', 'Mason', '99'),
    ('justin', '$2y$10$46VadtBL1PzoUqfPSs1QCuO7BQryZtu0qTM05.Iyi6tntOfhjBWWi', 'Justin', '95'),
    ('admin', '$2y$10$Y2k7u0qPS2cKzrJ8zMXbLeLkGeNm3sMT5df8d7xDOKYlB/UWLdiEu', 'admin', '40');

    INSERT INTO `player`
    	(`name`, `pass`, `nick`, `currenthp`, `beatmason`, `beatbob`, `beatjeff`, `beatbigboi`)
    VALUES
      ('one', '$2y$10$Y2k7u0qPS2cKzrJ8zMXbLeLkGeNm3sMT5df8d7xDOKYlB/UWLdiEu', 'admin', '40', '1', '0', '0', '0'),
      ('two', '$2y$10$Y2k7u0qPS2cKzrJ8zMXbLeLkGeNm3sMT5df8d7xDOKYlB/UWLdiEu', 'admin', '40', '1', '1', '0', '0'),
      ('three', '$2y$10$Y2k7u0qPS2cKzrJ8zMXbLeLkGeNm3sMT5df8d7xDOKYlB/UWLdiEu', 'admin', '40', '1', '1', '1', '0'),
      ('four', '$2y$10$Y2k7u0qPS2cKzrJ8zMXbLeLkGeNm3sMT5df8d7xDOKYlB/UWLdiEu', 'admin', '40', '1', '1', '1', '1');


  CREATE TABLE IF NOT EXISTS `ownership` (
  	`id` int NOT NULL AUTO_INCREMENT,
  	`player_id` int,
  	`mememon_id` int,
  	PRIMARY KEY (`id`)
  );

  INSERT INTO `ownership`
  	(`player_id`, `mememon_id`)
  VALUES
  	('5', '5'),
    ('1', '3'),
    ('2', '9'),
    ('3', '11'),
    ('4', '6'),
    ('6', '5'),
    ('7', '5'),
    ('8', '5'),
    ('9', '5'),
    ('10', '5');
