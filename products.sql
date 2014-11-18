-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2014 at 10:44 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productId` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `stock` int(10) NOT NULL,
  `cost` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tier` int(11) NOT NULL,
  `rating` float(11,1) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `name`, `description`, `category`, `sku`, `stock`, `cost`, `price`, `image`, `tier`, `rating`, `active`) VALUES
(1, 'A Fistful of Fingers', 'A Fistful of Fingers (1995) is a remake of one of Edgar Wright’s student films, but with better funding. It’s a comedy western about a cowboy who seeks out the man who killed his horse. This one is for the die-hard Edgar Wright fan boys, who wish to see his developmental years.', 'Movie', 'EW-01', 1, 4, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/edgar1.jpg', 1, 0.0, 0),
(2, 'Shaun of the Dead', 'The First of the Cornetto Trilogy, Shaun of the Dead (2004) is a comedy set during the zombie apocalypse. The protagonist, Shaun, is trying to turn his life around in order to win back his ex-girlfriend, all the while trying to survive the undead trying to eat him.', 'Movie', 'EW-02', 1, 8, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/edgar2.jpg', 1, 0.0, 0),
(3, 'Hot Fuzz', 'Hot Fuzz (2007) is an action-packed comedy that follows the investigation of an uptight police officer who is transferred to a sleepy, country village. He is paired with a clueless partner and expected to settle in, but a string of murders leads him to suspect a conspiracy involving the entire town.', 'Movie', 'EW-03', 1, 10, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/edgar3.jpg', 1, 0.0, 0),
(4, 'Scott Pilgrim vs. the World', 'Scott Pilgrim’s life gets shaken up when he meet’s and chases Ramona, the new girl in town. Based on a critically-acclaimed graphic novel series, Scott must defeat Ramona’s seven evil exes in order to win her heart. This highly-stylized film is doused in hipster and video game culture, made complete by well-executed special effects.', 'Movie', 'EW-04', 1, 10, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/edgar4.jpg', 2, 0.0, 0),
(5, 'The World''s End', 'Gary King reunites his childhood friends and convinces them to return to their home town to complete the 12-stop pub crawl they were never able to finish. They unearth an alien invasion of body-snatchers, and must survive the night—made difficult by King’s insistence to finish the pub crawl.', 'Movie', 'EW-05', 1, 15, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/edgar5.jpg', 2, 0.0, 0),
(6, 'Batman Begins', 'The soundtrack to Batman Begins (2005) features 12 tracks and was composed by Hans Zimmer and James Newton Howard. The two composers collaborated on separate themes for the split-personality of Bruce Wayne and Batman. The score is a combination of orchestra and electronic music, and Zimmer focused on the action sequences while Howard focused on the Drama.', 'Music', 'HZ-01', 1, 8, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hans1.jpg', 1, 0.0, 0),
(7, 'The Da Vinci Code', 'The Soundtrack to The Da Vinci Code (2006) features 14 tracks. Because of the religious theme of the movie, Zimmer used a massive orchestra and chorus to achieve the appropriate score. The deeply layered music was well reviewed and earned Zimmer a nomination at the 2007 Golden Globes.', 'Music', 'HZ-02', 1, 10, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hans2.jpg', 1, 0.0, 0),
(8, 'Sherlock Holmes', 'The Soundtrack to Sherlock Holmes (2009) came about from the director using Zimmer’s score from The Dark Knight as a temporary score during editing. For this soundtrack, Zimmer used various unorthodox instruments such as banjos, squeaky violins and a broken piano. He describes the finished score as a mix between Celtic punk and a Romanian orchestra.', 'Music', 'HZ-03', 1, 13, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hans3.jpg', 1, 0.0, 0),
(9, 'Gladiator', 'Zimmer won the Golden Globe for Best Original Score with this soundtrack. This score is known for its use of wailing female vocals, and its style has been imitated in subsequent ancient war movies. The commercial success of this soundtrack led to a second CD, More Music From Gladiator, as well as a Special Anniversary Edition release.', 'Music', 'HZ-04', 1, 15, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hans4.jpg', 2, 0.0, 0),
(10, 'Pirates of the Caribbean', 'The soundtrack for Pirates of the Caribbean: The Curse of the Black Pearl (2003) was produced by Zimmer, but he ended up collaborating with the composer to write most of primary themes. Though the soundtrack received mixed reviews, it has long since become a fan favorite.', 'Music', 'HZ-05', 1, 15, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hans5.jpg', 2, 0.0, 0),
(11, 'Jedi Outcast', 'Star Wars Jedi Knight II: Jedi Outcast (2002) takes place after Return of the Jedi and follows Kyle Katarn, an ex-jedi mercenary who must now reconnect with The Force. Gameplay places emphasis on lightsaber combat and the player unlocks Force powers as he levels up.', 'Game', 'SW-01', 1, 5, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/star1.jpg', 1, 0.0, 0),
(12, 'Star Wars: Starfighter', 'Star Wars: Starfighter (2001) is an aerial dogfighting game set around the events of Phantom Menace, with the player piloting several different star ships to try to stop the Trade Federation from invading Naboo.', 'Game', 'SW-02', 1, 5, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/star2.jpg', 1, 0.0, 0),
(13, 'Battlefront II', 'Star Wars: Battlefront II (2005) is a first and third-person shooter video game from the point of view of an Imperial Stormtrooper who served in Both the Galactic Republic and the Empire.. The game is the sequel to the successful Star Wars: Battlefront and features new vehicles, characters, game mechanics, maps, and missions.', 'Game', 'SW-03', 1, 8, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/star3.jpg', 1, 0.0, 0),
(14, 'The Force Unleashed', 'Star Wars: The Force Unleashed (2008) is a third-person action game that  focuses on Darth Vader’s secret apprentice, who uses his strong Force powers to devastating effect. The game bridges the two Star Wars trilogies, acting as the origin story for both the united Rebel Alliance and the Galactic Civil War depicted in the Original Trilogy.', 'Game', 'SW-04', 1, 13, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/star4.jpg', 2, 0.0, 0),
(15, 'The Old Republic', 'Star Wars: The Old Republic (2011) is a massively multiplayer online role-playing game (MMORPG) set in the Star Wars universe. The game takes place during a cold-war between the re-emerging Sith and the Old republic Jedi struggling to maintain power.', 'Game', 'SW-05', 1, 25, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/star5.jpg', 2, 0.0, 0),
(16, 'The Hitchhiker''s Guide to the Galaxy', 'The Hitchhiker''s Guide to the Galaxy (1979) is the first of five books in a series written by Douglas Adams, which were adapted from the first four episodes of Adam’s radio series. The story follows Arthur Dent who embarks s on a galactic adventure after his neighbor gets them on an alien spaceship shortly before the Earth is destroyed.', 'Book', 'HG-01', 1, 14, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hitch1.jpg', 1, 0.0, 0),
(17, 'The Restaurant at the End of the Universe', 'The Restaurant at the End of the Universe (1980) continues where the first book left off and covers the remaining material in Adams’ radio series. The book focuses on finding out who the secret ruler of the universe is, and the group gets into some time-travel shenanigans.', 'Book', 'HG-02', 1, 8, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hitch2.jpg', 1, 0.0, 0),
(18, 'Life, the Universe and Everything', 'Life, the Universe and Everything (1982) follows the group as they manage to escape prehistoric Earth and are enlisted to aid in preventing galactic war, by stopping the imprisoned Krikkit people from escaping.', 'Book', 'HG-03', 1, 5, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hitch3.jpg', 1, 0.0, 0),
(19, 'So Long, and Thanks for All the Fish', 'So Long, and Thanks for All the Fish (1984) follows Arthur as he returns home to a replacement Earth built by dolphins. Arthur is once again invited to hitchhike and see God’s Final Message to His Creation, accompanied by Marvin who thinks reading the message will cheer him up before he dies.', 'Book', 'HG-04', 1, 10, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hitch4.jpg', 2, 0.0, 0),
(20, 'Mostly Harmless', ' Mostly Harmless (1992) is the last of the books in the series written by Adams. Vogons take over The Hitchhiker’s guide in order to once and for all destroy Earth. Arthur who has settled for a happy life as the town sandwich-maker in a village on planet Lamuella, is once again called to adventure when he receives a powerful object for safekeeping.', 'Book', 'HG-05', 1, 5, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/hitch5.jpg', 2, 0.0, 0),
(21, 'Season 1', 'Angel: Season 1 beings with Angel moving to Los Angeles and grouping up with two others to form Angel Investigations, a detective agency that helps those in need. Wolfram & Hart, a law firm of demons, starts to take notice of Angel and tries to tempt him.', 'TV', 'AL-01', 1, 13, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/angel1.jpg', 1, 0.0, 0),
(22, 'Season 2', 'Angel: Season 2 has Charles Gunn, a vampire-hunter originally sent to kill Angel, join his crew. Wolfram & Hart primes the resurrected Darla to take down Angel. Angel is seduced by Darla and begins to grow darker.', 'TV', 'AL-02', 1, 10, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/angel2.jpg', 1, 0.0, 0),
(23, 'Season 3', 'Angel: Season 3 sees the return of Angel after months in isolation. Darla is apparently pregnant with Angel’s son and a dark prophecy surrounds the child. Meanwhile, Holtz, an old enemy of both Angel and Darla, is resurrected by a demon so he can seek his revenge.', 'TV', 'AL-03', 1, 8, 1, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/angel3.jpg', 1, 0.0, 0),
(24, 'Season 4', 'In Angel: Season 4 The Beast, a demon, comes to Los Angeles and blots the sun out. The Beast kills all the staff at Wolfram & Hart. A newcomer, Jasmine, is revealed to be controlling The Beast for the purpose of enslaving humanity. The team must find a way to break her spiritual enslavement over the people of L.A.', 'TV', 'AL-04', 1, 8, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/angel4.jpg', 2, 0.0, 0),
(25, 'Season 5', 'In Angel: Season 5 the gang has reluctantly settled in to their new jobs at the restructured Wolfram & Hart. Angel receives a vision from a higher power and now must infiltrate The Circle of the Black Thorn, a secret society tasked with bringing about the apocalypse.', 'TV', 'AL-05', 1, 13, 2, 'http://sulley.cah.ucf.edu/~jo805427/dig4530c_group02/A/img/angel5.jpg', 2, 0.0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
