-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_name` varchar(20) NOT NULL,
  `a_email` varchar(200) NOT NULL,
  `a_password` varchar(300) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1,	'Neshat Imam',	'neshatimam123@hotmail.com',	'612bb165133bc2832931973025b894fe'),
(2,	'Medge Miller',	'vevyvajece@mailinator.net',	'd41d8cd98f00b204e9800998ecf8427e'),
(20,	'',	'',	'd41d8cd98f00b204e9800998ecf8427e'),
(21,	'Forrest Odonnell',	'gacan@mailinator.net',	'd41d8cd98f00b204e9800998ecf8427e');

DROP TABLE IF EXISTS `bidding`;
CREATE TABLE `bidding` (
  `bidd_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `job_detail_id` int(11) NOT NULL,
  `bidd_cnf_budget` double NOT NULL,
  PRIMARY KEY (`bidd_id`),
  KEY `u_id` (`u_id`),
  KEY `job_detail_id` (`job_detail_id`),
  CONSTRAINT `bidding_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  CONSTRAINT `bidding_ibfk_2` FOREIGN KEY (`job_detail_id`) REFERENCES `job_detail` (`job_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `bidding` (`bidd_id`, `u_id`, `job_detail_id`, `bidd_cnf_budget`) VALUES
(181,	118,	25,	22000),
(182,	118,	21,	9000),
(183,	100,	24,	15000),
(185,	121,	22,	10000),
(186,	117,	22,	12000),
(187,	117,	25,	25000),
(188,	7,	23,	17000),
(189,	7,	24,	14500),
(190,	100,	21,	8500),
(191,	7,	26,	4),
(192,	11,	26,	10),
(193,	117,	26,	7),
(194,	100,	26,	8),
(195,	7,	21,	5000);

DROP TABLE IF EXISTS `job_detail`;
CREATE TABLE `job_detail` (
  `job_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `job_title` tinytext NOT NULL,
  `job_description` text NOT NULL,
  `job_type` enum('full time','part time','contract') NOT NULL,
  `job_address` text NOT NULL,
  `job_budget` double NOT NULL,
  `job_exp` date NOT NULL,
  `bidd_id` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`job_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `job_detail` (`job_detail_id`, `u_id`, `job_title`, `job_description`, `job_type`, `job_address`, `job_budget`, `job_exp`, `bidd_id`, `status`) VALUES
(21,	11,	'Lael Kirk',	'Irure animi aliquam minim incidunt cum',	'contract',	'Ut praesentium voluptates nostrum enim voluptatem Recusandae Esse cupiditate ipsum',	8700,	'2018-08-28',	182,	1),
(22,	100,	'Halee Riley',	'Quisquam fugiat dolor quisquam alias reprehenderit repudiandae in eveniet Nam et modi nisi',	'part time',	'Consequatur Illo autem irure eveniet exercitation ipsa voluptatibus harum sunt dolor',	7000,	'2018-08-07',	0,	0),
(23,	7,	'Rowan Conley',	'Sit ipsam pariatur Quidem nostrum enim quidem reiciendis quisquam quisquam iusto ullam totam maxime consectetur',	'full time',	'Repellendus Temporibus commodi quibusdam ducimus irure et distinctio Dolor optio qui anim eaque dolor non ipsa facere consequuntur aperiam ducimus',	15000,	'2018-08-21',	188,	1),
(24,	1,	'Montana Delaney',	'Porro optio magna facilis qui et quis dolores quis quia voluptas magnam',	'part time',	'Itaque et quis qui officiis',	14000,	'2018-08-06',	0,	0),
(25,	15,	'Aquila Douglas',	'Accusantium dignissimos ratione ipsum ut',	'full time',	'Et voluptate similique voluptatem libero vitae minima quo ipsa laboriosam sapiente ad lorem culpa debitis',	20000,	'2018-08-07',	0,	0),
(26,	7,	'Lewis Simon',	'Blanditiis tempor quia libero ut fugiat ipsum dignissimos pariatur Cupidatat',	'contract',	'Velit voluptatem omnis dolores nulla vitae odit',	5,	'2017-08-26',	193,	1);

DROP TABLE IF EXISTS `otp`;
CREATE TABLE `otp` (
  `otp_id` int(11) NOT NULL AUTO_INCREMENT,
  `otp` int(11) NOT NULL,
  `otp_status` tinyint(1) NOT NULL,
  `u_id` int(11) NOT NULL,
  PRIMARY KEY (`otp_id`),
  KEY `u_id` (`u_id`),
  CONSTRAINT `otp_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_mobile` varchar(20) NOT NULL,
  `u_dob` date NOT NULL,
  `u_password` varchar(200) NOT NULL,
  `u_sex` varchar(50) NOT NULL,
  `u_address` text NOT NULL,
  `u_image` varchar(30) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_mobile`, `u_dob`, `u_password`, `u_sex`, `u_address`, `u_image`) VALUES
(1,	'neshat',	'qwer@gmail.com',	'9876543210',	'2018-06-06',	'809f09f73d5a61070477b1d676155e25',	'male',	'G7 sharma building nehru gradenkodha colony ghaziabad',	'f9.jpg'),
(7,	'Neshat Imam',	'neshatimammgs@gmail.com',	'9717455394',	'1996-01-16',	'a4f241635d7f9b8b7d845955e651b7f8',	'Male',	'G7 sharma building nehru graden, kodha colony ghaziabad',	'my.jpg'),
(8,	'neshat imam',	'neshatimammgs@gmail.com',	'9717455394',	'1999-02-15',	'ac9f31026266f65c9ec6348ae606bce9',	'Male',	'G7 sharma building nehru graden\r\nkodha colony ghaziabad',	''),
(9,	'devil',	'devil231@gmail.com',	'8844502314',	'1999-08-15',	'd7dcd9c792bce7798357a6c2861de056',	'Male',	'378/AB Indian Institute Colony\r\nMughalsarai\r\nIndia',	''),
(10,	'saurabh kumar',	'saurabhkumar@gmail.com',	'9935212610',	'2018-06-11',	'mko14789',	'male',	'G7 sharma building nehru graden\r\nkodha colony ghaziabad',	''),
(11,	'annu',	'annu123@gmail.com',	'8808145632',	'1999-02-12',	'9fe4b0b7b6fbcd2a1da0445a44fd4125',	'Female',	'123/AB new apartment mohan nager new delhi',	'pic4.jpg'),
(12,	'siraj',	'siraj123@gmail.com',	'9899428778',	'1999-02-12',	'61aebd790bf900ef8e78bb52da16aa4b',	'male',	'378/AB Indian Institute Colony\nMughalsarai\nIndia',	''),
(13,	'Laith Blair',	'riqucoryv@mailinator.com',	'79',	'1984-06-01',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Totam qui sint ratione elit et repellendus Saepe non',	'NULL'),
(15,	'Sushmita Sharma',	'sushmitaa23shrma@gmail.com',	'9717455394',	'1993-10-25',	'34de29fcd26649fa26e6bf6a4d21ddc0',	'Female',	'G7 sharma building nehru graden, kodha colony ghaziabad',	'f4.jpg'),
(16,	'Uriah Finch',	'nutefa@mailinator.net',	'9717455394',	'1980-08-01',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Female',	'Tenetur accusamus et velit velit provident consequatur nisi ipsa quis',	'NULL'),
(17,	'Hadley Parks',	'kosuvi@mailinator.com',	'9717455394',	'1970-05-06',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Non omnis et ipsam deleniti veritatis iste similique facere voluptatem labore deserunt sequi',	'NULL'),
(18,	'Maisie Hale',	'bepu@mailinator.net',	'9717455394',	'1985-05-06',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Et dolore quae facilis sed dolorum quia quia ea accusamus velit sapiente reiciendis quisquam exercitation',	'NULL'),
(19,	'Samson Burch',	'hucyb@mailinator.net',	'9717455394',	'1997-10-23',	'd8578edf8458ce06fbc5bb76a58c5ca4',	'Others',	'Aut odit labore et est neque aliquip maxime aliquam consectetur adipisci ipsa nulla ipsum',	'NULL'),
(20,	'Nicholas Tucker',	'haluvacapu@mailinator.net',	'9717455394',	'1972-10-05',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'Quo sint a facere quia qui deserunt nihil anim saepe tempora deserunt duis cupidatat reprehenderit',	'NULL'),
(21,	'Norman Oliver',	'cebynek@mailinator.com',	'9717455394',	'1975-06-03',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'Soluta ratione culpa ratione maxime in proident autem fugiat culpa illo do nobis in',	'NULL'),
(22,	'Nathaniel Boyle',	'tovek@mailinator.com',	'57',	'1982-11-28',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Ut et in reprehenderit non ratione possimus ex minus dolore blanditiis officia proident autem unde modi sed',	'NULL'),
(23,	'Slade Carey',	'hojadu@mailinator.com',	'52',	'1984-03-05',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Female',	'Nihil tempor pariatur Eos dolorem a id dolore voluptatem deserunt ratione',	'NULL'),
(24,	'Graham Palmer',	'lujujaza@mailinator.net',	'21',	'1974-01-04',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'Recusandae Sunt nihil delectus doloremque quia minim mollit facere aut id animi et et iusto',	'NULL'),
(25,	'Bert Oconnor',	'gopoxi@mailinator.net',	'4',	'1979-06-25',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'Est quo sed omnis debitis provident voluptates soluta vel fugiat et omnis corrupti sit facere veniam ea eius laudantium',	'NULL'),
(26,	'Kasimir Welch',	'zeki@mailinator.com',	'77',	'2006-09-13',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Female',	'Aliquid atque est explicabo Distinctio Fuga Ut',	'NULL'),
(27,	'Barry Sweeney',	'saxariny@mailinator.net',	'62',	'2011-11-07',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'Sint tenetur sed sint cupidatat assumenda cupidatat est et eaque voluptatibus corrupti voluptas deleniti',	'NULL'),
(28,	'Robert Jackson',	'gaqawudy@mailinator.net',	'9717455394',	'1971-02-13',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'Duis assumenda culpa sunt ab nobis quae possimus cupiditate dignissimos',	'NULL'),
(39,	'Kato Whitehead',	'miqe@mailinator.com',	'9717455394',	'2015-09-25',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Female',	'Doloremque ab dolorem qui aliqua Corrupti ex dolor',	'NULL'),
(63,	'Levi Mullen',	'gyrykar@mailinator.com',	'9717455394',	'1990-04-05',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Male',	'In est consequuntur sunt eius animi consequat Ullam',	'NULL'),
(64,	'Ebony Mann',	'netazanyti@mailinator.com',	'9717455394',	'2001-11-22',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Quisquam laboris nihil eligendi dolores tenetur est similique officia non ab temporibus sed proident odio est blanditiis rerum ut',	'NULL'),
(99,	'Bryar Schneider',	'gucybetyj@mailinator.com',	'9717455394',	'1988-05-23',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Sint voluptatem sint soluta est nesciunt qui ut et fugiat mollit accusantium excepturi ipsum nisi exercitation consequatur cumque nihil',	'NULL'),
(100,	'harry potter',	'harry123@gmail.com',	'9717455394',	'2004-02-03',	'70906c1a90bcdf3023663a9dec1578c9',	'Male',	'Voluptatem amet aut sint qui est qui hic dolore in necessitatibus aliquip consectetur eos est',	'NULL'),
(115,	'Casey Underwood',	'ruse@mailinator.net',	'9717455394',	'1974-09-06',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Incidunt excepturi sed ad aut doloribus voluptate nostrum nobis ut veniam',	'NULL'),
(116,	'Yoshio Keith',	'qufipycod@mailinator.com',	'9717455394',	'2008-02-11',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'Others',	'Sed numquam voluptas sapiente qui et commodo perspiciatis',	'NULL'),
(117,	'nittin panday',	'nittin_n12@gmail.com',	'8823135640',	'1999-08-10',	'f25080014b4085d4a135f519ff49b066',	'male',	'378/AB Indian Institute ColonyMughalsaraiIndia',	'f8.jpg'),
(118,	'Cadman Haynes',	'dedaqe@mailinator.net',	'9717455394',	'1979-04-23',	'6ebe76c9fb411be97b3b0d48b791a7c9',	'Male',	'Deserunt est in ea in laboris eius',	'NULL'),
(119,	'Lionel Price',	'cotymybel@mailinator.com',	'9717455394',	'1998-02-24',	'a9503c3f1633dc41946d91ceb6f2b1f9',	'Male',	'Qui et non qui sed velit inventore est in quam eos doloribus ut et ut',	'NULL'),
(120,	'Ralph Juarez',	'gyriqucu@mailinator.net',	'9717455394',	'1983-01-03',	'e2282829f546bbcb216693e2a5659a79',	'Female',	'Ex in cumque minima a iste est aut deserunt ut aut nisi nihil quia perspiciatis nulla dicta',	'NULL'),
(121,	'Shravan Gupta',	'shravan365@gmail.com',	'9717455394',	'1995-10-08',	'f39d0e90cca0c3f56a302354532a11df',	'Male',	'Road no.08-new flat vasundhra saket colony',	'NULL'),
(128,	'Sierra Fletcher',	'kanicyt@mailinator.net',	'9717455394',	'1982-05-09',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'female',	'Mollitia possimus incidunt placeat labore veniam ducimus',	'NULL'),
(129,	'Ciara Sosa',	'zofavali@mailinator.com',	'9717455394',	'1993-03-12',	'f5826a36ece786c3499698f05274aae0',	'others',	'Minus impedit illo non numquam temporibus minima recusandae Aut ut magna ut enim quia tempor',	'NULL'),
(130,	'Diana Hodges',	'hakor@mailinator.net',	'9717455394',	'1997-02-01',	'f3ed11bbdb94fd9ebdefbaf646ab94d3',	'female',	'Vel voluptatem ut lorem voluptate in distinctio Rem dolore tenetur ea ut eiusmod cupiditate mollit rerum unde earum reprehenderit',	'NULL'),
(131,	'Renee Kinney',	'vetih@mailinator.net',	'9717455394',	'2002-01-24',	'b70ce709d880053445933f7803f5fa0c',	'female',	'Consequuntur veritatis asperiores et impedit officia sint ullamco molestiae sequi esse sequi quaerat dolor deserunt',	'NULL');

-- 2018-08-05 13:53:47
