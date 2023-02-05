-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 05, 2023 at 02:17 AM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arielles_bookish`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `quote` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `genre`, `quote`) VALUES
(1, 'The Fault in Our Stars', 'Romance', 'OK'),
(2, 'It', 'Horror', 'You\'ll float too.'),
(3, 'Catcher in the Rye', 'Coming of Age', 'The mark of the immature man is that he wants to die nobly for a cause, while the mark of the mature man is that he wants to live humbly for one.'),
(4, 'A Court of Thorns and Roses', 'Fantasy', 'I was burning through books every day – stories about people and places I’d never heard of. They were perhaps the only thing that kept me from teetering into utter despair.'),
(5, 'Heir of Fire', 'Fantasy', 'She was the heir of ash and fire, and she would bow to no one.'),
(6, 'To Kill a Mockingbird', 'Thriller', 'The one thing that doesn\\\'t abide by majority rule is a person\\\'s conscience.'),
(7, 'Throne of Glass', 'Fantasy ', 'Libraries were full of ideas ― perhaps the most dangerous and powerful of all weapons.'),
(8, 'The Sun Also Rises', 'Historical Fiction', 'I can\\\'t stand it to think my life is going so fast and I\\\'m not really living it.'),
(9, 'The 48 Laws of Power', 'Self-help', 'If you are unsure of a course of action, do not attempt it. Your doubts and hesitations will infect your execution. Timidity is dangerous: Better to enter with boldness. '),
(10, 'A shadow in the Ember', 'Fantasy ', 'I know what I am. I’ve always known. I am one of the worse sort. A monster … But don’t you ever tell me how I feel.'),
(11, 'A light in the Flame', 'Fantasy', 'Forgiveness benefits the forgiver, and it’s easy. Understanding is acceptance, and that is far harder.'),
(12, 'The Lovely Bones', 'Horror', 'Last night it had been my father who had finally said it, ‘She’s never coming home.’ A clear and easy piece of truth that everyone who had ever known me had accepted. But he needed to say it...'),
(13, 'Looking for Alaska', 'Young Adult ', 'Thomas Edison\\\'s last words were \\\"It\\\'s very beautiful over there\\\". I don\\\'t know where there is, but I believe it\\\'s somewhere, and I hope it\\\'s beautiful.'),
(14, 'Crank', 'Young Adult', 'The problem with resolutions is they\\\'re only as solid as the person making them.'),
(15, 'The Summer I Turned Pretty', 'Fiction', 'It was a summer I would never, ever forget. It was the summer everything began. It was the summer I turned pretty. Because for the first time, I felt it.'),
(16, 'A Court of Mist and Fury ', 'Fantasy ', 'Don’t let the hard days win.'),
(17, 'A Walk in the Woods', 'Travel', 'That\\\'s the trouble with losing your mind; by the time it\\\'s gone, it\\\'s too late to get it back.'),
(18, 'Moby Dick ', 'Adventure', 'It is not down on any map; true places never are.'),
(19, 'Slaughterhouse V ', 'War Story ', 'And I asked myself about the present: how wide it was, how deep it was, how much was mine to keep.'),
(20, 'The Art of War', 'Treatise', 'Appear weak when you are strong, and strong when you are weak.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
