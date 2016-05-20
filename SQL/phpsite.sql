-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 20 2016 г., 15:16
-- Версия сервера: 10.1.8-MariaDB
-- Версия PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpsite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `meta_d`, `meta_k`, `date`, `description`, `text`, `author`) VALUES
(1, 'UCL final', 'UCL final 2016', 'UCL, FINAL, 2016', '2016-05-11', '<p><img src="articles/11052016/ucl/1.jpg" width="270px" height="170px"></p>\r\n<p>Today we gonna talk about UCL final 2016</p>\r\n', '<p align="center">Today''s article is about talking about UCL Final 2016 in MILAN</p>\r\n<p align="center"><img src="articles/11052016/ucl/1.jpg" width="480px" height="300px"></p>\r\n<p>IN A CURRENT YEAR IN THE UCL FINAL WILL PLAY TEAMS BOTH FROM MADRID. THEY ARE REAL MADRID AND ATLETICO MADRID</p>', 'Marselo Abrenhio'),
(2, 'EUROPA LEAGUE', 'EUROPA', 'EUROPA, EUROPE, LEAGUE', '2016-05-11', '<p><img src="articles/11052016/europe/1.jpg" width="270px" height="170px"></p>\r\n<p>ARTICLE ABOUT THE FINAL OF EUROPE UEFA LIGUE</p>\r\n', '<p align="center">This article is about UEFA EUROPE LEAGUE FINAL BETWEEN TWO TEAMS</p><p><img src="articles/11052016/europe/1.jpg" width="480px" height="300px></p>\r\n<p align = "center">SO WHAT DO YOU THINK WHO WILL WIN THE TROPHEY THIS YEAR LADIES AND GENTLEMAN WWWWWWWWOOOOOHHHHHOOOO</p>', 'JURGEN KLOBB');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `comment_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `comment_id`, `user_name`, `comment_text`) VALUES
(33, 1, 'Max', 'maga kalaysyn'),
(34, 2, 'Max', 'che tama'),
(35, 1, 'Max', 'kj'),
(36, 1, 'Max', 'sadfsadf'),
(37, 1, 'Max', 'sdfasfda'),
(38, 2, 'Max', 'Hey maga where are you'),
(39, 1, 'maga', 'Watsapp?'),
(40, 1, 'Max', 'Her just answer me'),
(41, 2, 'Max', 'Wher are you???'),
(42, 1, 'Max', 'Be qucik'),
(43, 1, 'Max', 'heeey'),
(44, 1, 'Max', 'wooo'),
(45, 2, 'Max', 'maga kalaysyn'),
(46, 2, 'maga', 'zhaksy ozin she'),
(47, 1, 'maga', 'ne boldy?');

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `meta_d`, `meta_k`, `date`, `description`, `text`, `author`) VALUES
(1, 'How to get money with Google ADSENSE!!', 'Step by step instruction', 'Google adsense', '2016-05-09', '<p>In this lesson alfkndsf assf as.dasf asnaf\r\n	a,mfndm, a,mfnsdmf a,mfnd,msfn sfmdsfsdf nsdfmnsd,mfnsdf \r\n	sdfsdf</p>', '<p>In this lesson alfkndsf assf as.dasf asnaf\r\n	a,mfndm, a,mfnsdmf a,mfnd,msfn sfmdsfsdf nsdfmnsd,mfnsdf \r\n	sdfsdf</p>\r\n\r\n	<p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Rules of afdslf\r\n	  afdfsdsdf sdfsd sdfsdf sdfsdfsdf sdfsdfsdf s dfsdfsdf sdfsdfsd sf dsf sdf\r\n	  afsfdsdfs:</strong></font></p>\r\n\r\n		<p align="center"><img src="lessons/09052016/google/1.gif" width="330" height="125" alt=""/></p>\r\n	<p>fhdff hfgf hvghfghfghfghffghf hgfghfghfghfghfghfg\r\n	  jhgjhgjhghjg jhghjgjh jhghjgh jhghjghjhj</p>\r\n	<p>System sjhjdsf ajhfsjdf <strong>Google Adsense</strong>.</p>\r\n	 <p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>How\r\n	aslf asjjdsf ?</strong></font></p>\r\n	<p>sfn lsfjsdl lsdfnsdljf slkdfnlsdnfds l\r\n	sdfnsd lskdjfks <strong>Google Adsense</strong>. After registration\r\n	anbdsf a,bfn JAVASCRIPT CODE sm,dnfmsd ,msdnfm,sd ,msdfnm,sd \r\n	sdfsdfsdfdsf sdfsdfsdfsdfdsf assafsd sdfsdf sdf asfdsfdsfdsf</p>\r\n	<p> asnfds bfjkdsf kjsdfjksd sjdfdsjkfjkdsfjkdsbfk kjsdbfjkdsbkfbsdfd\r\n	  sfdsfdsfdsfds sdfsdfdsf sdfsdfdsf sdfsdfdsfds sdfsdfdsfdsf sdfsdfdsfds s fs df </p>\r\n	<p>Examples of my sites:</p>\r\n<p align="center"><img src="lessons/09052016/google/2.png" width="300" height="300" alt=""/></p>\r\n<p align="left">Advertisement asfsf afsdfds afsdfsd </p>\r\n<p align="center"><img src="lessons/09052016/google/3.jpg" width="240" height="176" alt=""/></p>\r\n	<p align="left">JHGJHjhghj jhagdshf jagdsf jgfdsf jgf hj</p>\r\n<p>a,bndsmf ,dnsbfndsb sdmbfmnsdbfmnds bsdfnsdmnfbdmnsbfnmds sdmnfbs  sdfs \r\nsdfds sdfds </p>\r\n<p align="center"><img src="lessons/09052016/google/4.png" width="259" height="194" alt=""/></p>\r\n	<p>mfnds jsdfnjdsnjf sdjkfjksdfjkdsjkf\r\nsdlfdsjkfdjskfjkds skdjfjksdfjksdfjkdshjkfdskjdsjkfdsjkfdskjhf skjdfkjsdhfjkdsfjkdsh\r\ns,dfbjdsfjdsjkf skjdfjdksfjkdsfjkdsjkf skdjfjdskhfjkdshfj\r\nsdnfbsdbfjkdsfjkdsfkjs skdjfhkjsdhfjkdshfkjdshfjkshd kjhsdfjkhsdjkfdskjfjkdshjksdf\r\nsdfdskjfjkds skjdhfjkdshfjh ksdjfhjkdf</p>\r\n	<p align="center"><img src="lessons/09052016/google/5.jpg" width="225" height="225" alt=""/></p>\r\n', 'James Keane'),
(2, 'How to meet Spidy', 'Spiderman', 'spider, man, spiderman', '2016-05-09', '<p>whaaaat here is the Spiderman ladies and gentleman!</p>', '<p>In this lesson alfkndsf assf as.dasf asnaf\r\n	a,mfndm, a,mfnsdmf a,mfnd,msfn sfmdsfsdf nsdfmnsd,mfnsdf \r\n	sdfsdf</p>\r\n\r\n	<p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>Rules of afdslf\r\n	  afdfsdsdf sdfsd sdfsdf sdfsdfsdf sdfsdfsdf s dfsdfsdf sdfsdfsd sf dsf sdf\r\n	  afsfdsdfs:</strong></font></p>\r\n\r\n		<p align="center"><img src="lessons/09052016/spidy/1.jpg" width="480" height="270" alt=""/></p>\r\n	<p>fhdff hfgf hvghfghfghfghffghf hgfghfghfghfghfghfg\r\n	  jhgjhgjhghjg jhghjgjh jhghjgh jhghjghjhj</p>\r\n	<p>System sjhjdsf ajhfsjdf <strong>Google Adsense</strong>.</p>\r\n	 <p align="center"><font size="4" face="Verdana, Arial, Helvetica, sans-serif"><strong>How\r\n	aslf asjjdsf ?</strong></font></p>\r\n	<p>sfn lsfjsdl lsdfnsdljf slkdfnlsdnfds l\r\n	sdfnsd lskdjfks <strong>Google Adsense</strong>. After registration\r\n	anbdsf a,bfn JAVASCRIPT CODE sm,dnfmsd ,msdnfm,sd ,msdfnm,sd \r\n	sdfsdfsdfdsf sdfsdfsdfsdfdsf assafsd sdfsdf sdf asfdsfdsfdsf</p>\r\n	<p> asnfds bfjkdsf kjsdfjksd sjdfdsjkfjkdsfjkdsbfk kjsdbfjkdsbkfbsdfd\r\n	  sfdsfdsfdsfds sdfsdfdsf sdfsdfdsf sdfsdfdsfds sdfsdfdsfdsf sdfsdfdsfds s fs df </p>\r\n	<p>Examples of my sites:</p>\r\n<p align="center"><img src="lessons/09052016/spidy/2.gif" width="384" height="216" alt=""/></p>\r\n<p align="left">Advertisement asfsf afsdfds afsdfsd </p>\r\n<p align="center"><img src="lessons/09052016/spidy/3.gif" width="469" height="200" alt=""/></p>\r\n	<p align="left">JHGJHjhghj jhagdshf jagdsf jgfdsf jgf hj</p>\r\n<p>a,bndsmf ,dnsbfndsb sdmbfmnsdbfmnds bsdfnsdmnfbdmnsbfnmds sdmnfbs  sdfs \r\nsdfds sdfds </p>\r\n<p align="center"><img src="lessons/09052016/spidy/4.jpg" width="347" height="145" alt=""/></p>\r\n	<p>mfnds jsdfnjdsnjf sdjkfjksdfjkdsjkf\r\nsdlfdsjkfdjskfjkds skdjfjksdfjksdfjkdshjkfdskjdsjkfdsjkfdskjhf skjdfkjsdhfjkdsfjkdsh\r\ns,dfbjdsfjdsjkf skjdfjdksfjkdsfjkdsjkf skdjfjdskhfjkdshfj\r\nsdnfbsdbfjkdsfjkdsfkjs skdjfhkjsdhfjkdshfkjdshfjkshd kjhsdfjkhsdjkfdskjfjkdshjksdf\r\nsdfdskjfjkds skjdhfjkdshfjh ksdjfhjkdf</p>\r\n	<p align="center"><img src="lessons/09052016/spidy/5.gif" width="363" height="200" alt=""/></p> ', 'Batman and Superman'),
(3, 'Javascript', 'How to learn javascript', 'Javascript, learn', '2016-05-13', '<p>Olalalalaala</p>', '<p>Olalalalaala</p>\r\n<p>AFDSBFMNB</p>', 'Richard Manson');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(2) NOT NULL,
  `page` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_d` varchar(255) NOT NULL,
  `meta_k` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `page`, `title`, `meta_d`, `meta_k`, `text`) VALUES
(1, 'index', 'Main', 'Welcome to the site about PHP, HTML, CSS', 'PHP, HTML, CSS', '<p>Our planet is the only place where a human being might live. Unfortunately, scientists haven’t yet discovered other planets, to where a person may move and live the rest of life. That’s why we have to take care of the Earth and look after our nature and surroundings as well as possible. </p>\r\n                    <p>A human being is able not only to create but also to destroy. Especially our earth suffers badly from pernicious actions of man. This applies to both people’s neglectful attitude to the nature – dropping of cigarette ends, rubbish on the earth – and industrial factories and natural appearances (e.g. acid rains).</p>\r\n                    <p>As I said earlier, I’m responsible mainly for the dogs in the house. Every day I take them for a walk twice. At the first opportunity I play with a ball with them or throw an artificial bone to them. My dogs are very smart and know a lot of tricks.</p>\r\n                    <p>Factories regularly emit harmful chemicals into the air. Petrol and gas, that are used by our drivers, also leave much to be desired. Apart from air pollution, water and soil are subjected to pollutions as well. When such fuels as coal and oil burn, they emit very dangerous smoke.</p>\r\n                    <p>A person destroys not only environment, plants, animals, but also himself. Faster and faster man’s health starts worsening; children of weak immune system are being given birth. Forests are being cut down, and animals from the Red Book are gradually dying out. What will be next in our world of progressive technology remains undecided. Let’s protect the nature. Nature is our friend!</p>\r\n                    <p>Advantages:</p>\r\n                    <p>1. Your site will be cool <br>\r\n                      2.Everything will be clear.<br>\r\n                      3. In your site you will have a navbar.<br>\r\n                      4. Don''t worry, be gappy-happy.<br>\r\n                      5. Get your head to the mountains.<br>\r\n                      6. Whaaat, you think that i''m going crazy<br>\r\n                      7. Believe me i''m not.<br>\r\n                      8.So do I, just look at me prudotion.</p>\r\n                    <p>Minuses: <br>\r\n                      1. Just pay through 1-50 dollars.<br>\r\n                  2. The time is going on my friend.</p>'),
(2, 'articles', 'Articles', 'Articles about web-development', 'articles', '<p>IN this site I wrote napisal about the articles of this page balam zhane balashka, ou ouo ouououououo uou kohgfh lkdfksld</p>'),
(3, 'lessons', 'Lessons About Programming', 'Lessons about web-development', 'lessons', '<p>About lessons my ladies and gentleman, just look over the all of this inform buro</p>'),
(4, 'contacts', 'About Us', 'Page about author of the site', 'author', '<p>This is page about contacts. Here has to be lots of ingormation. But I just couldn''t find anything, really believe me just simply.</p>\r\n              <p>This structured list of commonly used English <em>transition words</em> — approximately 200, can be considered as quasi complete. It can be used (by students and teachers alike) to find the right expression. English transition words are essential, since they not only connect ideas, but also can introduce a certain shift, contrast or opposition, emphasis or agreement, purpose, result or conclusion, etc. in the line of argument. <br>\r\n                The transition words and phrases have been assigned only once to somewhat artificial categories, although some words belong to more than one category.</p>\r\n              <p>There is some overlapping with preposition and postposition, but for the purpose of clarity and completeness of this concise guide, I did not differentiate.</p>');

-- --------------------------------------------------------

--
-- Структура таблицы `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(255) NOT NULL,
  `PostalCode` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Дамп данных таблицы `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Bernard Hopkins', 'Addressing', 'Almaty', '00255', 'Kaz');

-- --------------------------------------------------------

--
-- Структура таблицы `userlist`
--

CREATE TABLE `userlist` (
  `id` int(3) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Дамп данных таблицы `userlist`
--

INSERT INTO `userlist` (`id`, `user`, `pass`) VALUES
(1, 'phpuser', 'php');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=swe7;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `login`, `password`) VALUES
(1, 'Max', 'max?max', '2ffe4e77325d9a7152f7086ea7aa5114'),
(2, 'maga', 'maga?maga', 'ca2f848f64fecd2159026ef8c0d71363');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Индексы таблицы `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
