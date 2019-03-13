-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 март 2019 в 17:27
-- Версия на сървъра: 10.1.36-MariaDB
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `films`
--

-- --------------------------------------------------------

--
-- Структура на таблица `cinemas`
--

CREATE TABLE `cinemas` (
  `id` int(11) NOT NULL,
  `cinema_name` varchar(125) NOT NULL,
  `places` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `date_deleted`) VALUES
(1, 'USA', NULL),
(2, 'Great Britain', NULL),
(3, 'France', NULL),
(4, 'Spain', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `directors`
--

CREATE TABLE `directors` (
  `director_id` int(11) NOT NULL,
  `director_name` varchar(250) NOT NULL,
  `diirector_bio` text NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `directors`
--

INSERT INTO `directors` (`director_id`, `director_name`, `diirector_bio`, `date_deleted`) VALUES
(1, 'J.J. Abrams', 'Producer | Writer | Music Department\nJ.J. Abrams was born on June 27, 1966 in New York City, New York, USA as Jeffrey Jacob Abrams. He is a producer and writer, known for Star Wars: Episode VII - The Force Awakens (2015), Lost (2004) and Super 8 (2011). He has been married to Katie McGrath since 1996. They have three children.', NULL),
(2, 'Peter Jackson', 'Peter Jackson was born as an only child in a small coast-side town in New Zealand in 1961. When a friend of his parents bought him a super 8 movie camera (because she saw how much he enjoyed taking photos), the then eight-year-old Peter instantly grabbed the thing to start recording his own movies, which he made with his friends. They were usually... ', NULL),
(3, 'Francis Lawrence', 'Producer | Director | Writer\nFrancis Lawrence was born on March 26, 1971 in Vienna, Austria. He is a producer and director, known for The Hunger Games: Catching Fire (2013), I Am Legend (2007) and The Hunger Games: Mockingjay - Part 1 (2014).', NULL),
(4, 'Alfonso Cuarón ', 'Alfonso Cuarón Orozco was born on November 28th in Mexico City, Mexico. From an early age, he yearned to be either a film director or an astronaut. However, he did not want to enter the army, so he settled for directing. He didn\'t receive his first camera until his twelfth birthday, and then immediately started to film everything he saw, showing ', NULL),
(5, 'James Cameron', 'James Francis Cameron was born on August 16, 1954 in Kapuskasing, Ontario, Canada. He moved to the United States in 1971. The son of an engineer, he majored in physics at California State University but, after graduating, drove a truck to support his screenwriting ambition. He landed his first professional film job as art director, miniature-set ...', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `films`
--

CREATE TABLE `films` (
  `film_id` int(11) NOT NULL,
  `film_name` varchar(150) NOT NULL,
  `imdb_index` float NOT NULL,
  `plot` text NOT NULL,
  `year_of_production` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL,
  `screenwriter_id` int(11) NOT NULL,
  `tickets_sold` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `films`
--

INSERT INTO `films` (`film_id`, `film_name`, `imdb_index`, `plot`, `year_of_production`, `producer_id`, `director_id`, `screenwriter_id`, `tickets_sold`, `country_id`, `date_deleted`) VALUES
(1, 'Titanik', 7.7, '84 years later, a 101-year-old woman named Rose DeWitt Bukater tells the story to her granddaughter Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell and Anatoly Mikailavich on the Keldysh about her life set in April 10th 1912, on a ship called Titanic when young Rose boards the departing ship with the upper-class passengers and her mother, Ruth DeWitt Bukater, and her fiancé, Caledon Hockley. Meanwhile, a drifter and artist named Jack Dawson and his best friend Fabrizio De Rossi win third-class tickets to the ship in a game. And she explains the whole story from departure until the death of Titanic on its first and last voyage April 15th, 1912 at 2:20 in the morning. ', 1997, 1, 5, 1, 10255230, 1, NULL),
(2, 'Gravity', 7.8, 'A medical engineer and an astronaut work together to survive after an accident leaves them adrift in space. ', 2013, 2, 4, 2, 252539993, 1, NULL),
(3, 'The Hunger Games: Catching Fire', 7.6, 'Katniss Everdeen and Peeta Mellark become targets of the Capitol after their victory in the 74th Hunger Games sparks a rebellion in the Districts of Panem. ', 2013, 5, 3, 3, 14252366, 1, NULL),
(4, 'The Hunger Games: Mockingjay - Part 1 (2014)', 6.7, 'Katniss Everdeen is in District 13 after she shatters the games forever. Under the leadership of President Coin and the advice of her trusted friends, Katniss spreads her wings as she fights to save Peeta and a nation moved by her courage. ', 2014, 4, 3, 3, 78859996, 1, NULL),
(5, 'The Lord of the Rings: The Fellowship of the Ring', 8.8, 'A meek Hobbit and eight companions set out on a journey to destroy the One Ring and the Dark Lord Sauron. ', 2001, 3, 2, 4, 891116333, 2, NULL),
(6, 'Star Wars: Episode VII - The Force Awakens', 8.4, 'Three decades after the defeat of the Galactic Empire, a new threat arises. The First Order attempts to rule the galaxy and only a ragtag group of heroes can stop them, along with the help of the Resistance. ', 2015, 2, 1, 5, 1352447, 1, NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`, `date_deleted`) VALUES
(1, 'comedy', NULL),
(2, 'drama', NULL),
(3, 'sci-fi', NULL),
(4, 'musical', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `producers`
--

CREATE TABLE `producers` (
  `producer_id` int(11) NOT NULL,
  `producer_name` varchar(250) NOT NULL,
  `birth_year` int(11) NOT NULL,
  `producer_bio` text NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `producers`
--

INSERT INTO `producers` (`producer_id`, `producer_name`, `birth_year`, `producer_bio`, `date_deleted`) VALUES
(1, 'Steven Spielberg', 1946, 'Undoubtedly one of the most influential film personalities in the history of film, Steven Spielberg is perhaps Hollywood\'s best known director and one of the wealthiest filmmakers in the world. Spielberg has countless big-grossing, critically acclaimed credits to his name, as producer, director and writer. Steven Allan Spielberg was born in 1946 in... ', NULL),
(2, 'Jerry Bruckheimer', 1943, 'Jerry Bruckheimer was born on September 21, 1943 in Detroit, Michigan, USA as Jerome Leon Bruckheimer. He is a producer, known for CSI: Crime Scene Investigation (2000), The Amazing Race (2001) and Pirates of the Caribbean: The Curse of the Black Pearl (2003). He is married to Linda Bruckheimer. He was previously married to Bonnie Bruckheimer.', NULL),
(3, 'Martin Scorsese', 1942, 'Martin Charles Scorsese was born on November 17, 1942, in New York City, to Italian-American parents Catherine (Cappa) and Charles Scorsese. He was raised in the neighborhood of Little Italy, which later provided the inspiration for several of his films. Scorsese earned a B.S. degree in film communications in 1964, followed by an M.A. in the same ...', NULL),
(4, 'Ridley Scott', 1937, 'Ridley Scott was born in South Shields, Tyne and Wear (then County Durham) on 30 November 1937. His father was an officer in the Royal Engineers and the family followed him as his career posted him throughout the UK and Europe before they eventually returned to Teesside. Scott wanted to join Army (his elder brother Frank had already joined the', NULL),
(5, 'Quentin Tarantino', 1963, 'Quentin Jerome Tarantino was born in Knoxville, Tennessee. His father, Tony Tarantino, is an Italian-American actor and musician from New York, and his mother, Connie (McHugh), is a nurse from Tennessee. Quentin moved with his mother to Torrance, California, when he was four years old. In January of 1992, first-time writer-director Tarantino\'s ...', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `screenwriters`
--

CREATE TABLE `screenwriters` (
  `screenwriter_id` int(11) NOT NULL,
  `sceenwriter_name` varchar(200) NOT NULL,
  `screenwriter_bio` text NOT NULL,
  `number_of_screenwritigs` int(11) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `screenwriters`
--

INSERT INTO `screenwriters` (`screenwriter_id`, `sceenwriter_name`, `screenwriter_bio`, `number_of_screenwritigs`, `date_deleted`) VALUES
(1, 'James Cameron', 'James Francis Cameron was born on August 16, 1954 in Kapuskasing, Ontario, Canada. He moved to the United States in 1971. The son of an engineer, he majored in physics at California State University but, after graduating, drove a truck to support his screenwriting ambition. He landed his first professional film job as art director, miniature-set ...', 10, NULL),
(2, 'Alfonso Cuarón', 'Alfonso Cuarón Orozco was born on November 28th in Mexico City, Mexico. From an early age, he yearned to be either a film director or an astronaut. However, he did not want to enter the army, so he settled for directing. He didn\'t receive his first camera until his twelfth birthday, and then immediately started to film everything he saw, showing ', 5, NULL),
(3, 'Gary Ross', 'Gary Ross is an American writer, director and actor born November 3rd, 1956 in Los Angeles, California. His father was screenwriter Arthur A. Ross (1920 - 2008). After writing for television series Deadly Nightmares (1983) in 1986, Ross broke through by penning the Tom Hanks hit Big (1988), his first screenplay to be made into a feature film. Ross...', 7, NULL),
(4, 'Fran Walsh', 'Fran Walsh was born on January 10, 1959 in Wellington, New Zealand. She is known for her work on The Lord of the Rings: The Return of the King (2003), The Lord of the Rings: The Fellowship of the Ring (2001) and The Lord of the Rings: The Two Towers (2002). She has been married to Peter Jackson since 1987. They have two children.', 15, NULL),
(5, 'Lawrence Kasdan \n	\n', 'Lawrence Kasdan was born on January 14, 1949 in Miami, Florida, USA. He is a writer and producer, known for Star Wars: Episode V - The Empire Strikes Back (1980), Star Wars: Episode VI - Return of the Jedi (1983) and Raiders of the Lost Ark (1981). He has been married to Meg Kasdan since November 28, 1971. They have two children. ', 10, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country` (`country_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `director_id` (`director_id`),
  ADD KEY `director_id_2` (`director_id`),
  ADD KEY `screenwriter_id` (`screenwriter_id`),
  ADD KEY `producer_id` (`producer_id`),
  ADD KEY `producer_id_2` (`producer_id`),
  ADD KEY `producer_id_3` (`producer_id`),
  ADD KEY `director_id_3` (`director_id`),
  ADD KEY `screenwriter_id_2` (`screenwriter_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `producers`
--
ALTER TABLE `producers`
  ADD PRIMARY KEY (`producer_id`);

--
-- Indexes for table `screenwriters`
--
ALTER TABLE `screenwriters`
  ADD PRIMARY KEY (`screenwriter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `producers`
--
ALTER TABLE `producers`
  MODIFY `producer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `screenwriters`
--
ALTER TABLE `screenwriters`
  MODIFY `screenwriter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `cinemas`
--
ALTER TABLE `cinemas`
  ADD CONSTRAINT `cinemas_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`);

--
-- Ограничения за таблица `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_ibfk_1` FOREIGN KEY (`producer_id`) REFERENCES `producers` (`producer_id`),
  ADD CONSTRAINT `films_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`),
  ADD CONSTRAINT `fk_director_id` FOREIGN KEY (`director_id`) REFERENCES `directors` (`director_id`),
  ADD CONSTRAINT `fk_screenwriter_id` FOREIGN KEY (`screenwriter_id`) REFERENCES `screenwriters` (`screenwriter_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
