-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 09:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(4) NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_hours` int(3) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `total_hours`, `start_date`, `end_date`, `institution`, `attachment`, `notes`) VALUES
(2, 'Dart', 13, '2022-05-12', '2022-05-12', 'Udemy', 'img\\UC-dart certificate.jpg', 'This certificate approves that Mariam successfully completed the course The Dart Learning Guide on 05/15/2022. Trainer:  Hassan Fulaih.'),
(3, 'Front-End Web', 10, '2019-10-25', '2020-01-02', 'Udemy', 'https://udemy-certificate.s3.amazonaws.com/image/UC-0639d4f3-ccff-4c12-a556-3c751680a9a2.jpg', ' The course includes html+Css +bootstrap+Javascript.'),
(4, 'Network management admin', 50, '2019-10-25', '2020-01-02', 'training center', '', ' Trainer: eng. Mohammed El-Dalo.'),
(5, 'Java', 50, '2020-06-10', '2020-09-15', 'Riyada Center', '', 'The course includes Java 1+2 using netbeans editor. trainer: Eng. Mohammed Salha.');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(4) NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `training_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_month` date NOT NULL,
  `end_month` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `job_title`, `training_place`, `experience_category`, `start_month`, `end_month`, `description`) VALUES
(0, 'web development', 'Al-azhar Universty', 'Job', '0000-00-00', '0000-00-00', 'I worked as web developer in the university website and moodle developer, end I have a good practice in report generating as neoded. Iworked as web developer ih the university website and moodle developer, and I have a good practice in report genersting as neede. I worked as web developer in tte university website and moodle developer, and I have a good practice in report generating as needed. I worked web developer in the university website and moodle developer, and 1 have a good practice in report generating as needed. I worked as web developer in the university website and moodle devefoper, and I have a good prectice in report geherating as neede. '),
(0, 'web development', 'Al-azhar Universty', 'FreeLancer', '0000-00-00', '0000-00-00', 'I worked as web developer in the university website and moodle developer, end I have a good practice in report generating as neoded. Iworked as web developer ih the university website and moodle developer, and I have a good practice in report genersting as neede. I worked as web developer in tte university website and moodle developer, and I have a good practice in report generating as needed. I worked web developer in the university website and moodle developer, and 1 have a good practice in report generating as needed. I worked as web developer in the university website and moodle devefoper, and I have a good prectice in report geherating as neede.\r\n\r\n'),
(0, 'web development', 'Al-azhar Universty', 'self learning', '0000-00-00', '0000-00-00', ' \r\nI worked as web developer in the university website and moodle developer, end I have a good practice in report generating as neoded. Iworked as web developer ih the university website and moodle developer, and I have a good practice in report genersting as neede. I worked as web developer in tte university website and moodle developer, and I have a good practice in report generating as needed. I worked web developer in the university website and moodle developer, and 1 have a good practice in report generating as needed. I worked as web developer in the university website and moodle devefoper, and I have a good prectice in report geherating as neede.'),
(0, 'web development', 'Al-azhar Universty', 'Other', '0000-00-00', '0000-00-00', 'I worked as web developer in the university website and moodle developer, end I have a good practice in report generating as neoded. Iworked as web developer ih the university website and moodle developer, and I have a good practice in report genersting as neede. I worked as web developer in tte university website and moodle developer, and I have a good practice in report generating as needed. I worked web developer in the university website and moodle developer, and 1 have a good practice in report generating as needed. I worked as web developer in the university website and moodle devefoper, and I have a good prectice in report geherating as neede.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `future_job` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `years_experience` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `gender`, `birth_date`, `place_of_birth`, `nationality`, `future_job`, `years_experience`, `image`) VALUES
(1, 'Mariam kamal Al-Ashqar', 'female', '2001-06-27', 'Gaza', 'palestininan', 'software engineer', '3.5', 'img/person.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
