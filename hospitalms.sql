-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Mar 2025, 02:45:36
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hospitalms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(12, 14, 'Ferhat', 'Mavi', 'Male', 'frh@gmail.com', '7412225680', 'mlk', 435, '2021-07-06', '10:00:00', 1, 1),
(1, 15, 'Can', 'Hakan', 'Male', 'cnh@gmail.com', '7410000010', 'kml', 440, '2021-07-05', '14:00:00', 0, 1),
(1, 16, 'Caberk', 'Halil', 'Male', 'cnth@gmail.com', '7410000010', 'kml', 440, '2021-07-05', '10:00:00', 1, 1),
(11, 17, 'Kiraz', 'Ayla', 'Female', 'krza@gmail.com', '7850002580', 'lyl', 280, '2021-07-05', '10:00:00', 1, 1),
(13, 18, 'Baran', 'Refah', 'Male', 'brn@gmail.com', '7012569999', 'kzm', 450, '2021-07-06', '08:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Demo', 'demo@demail.com', '7014500000', 'this is a demo test');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doctb`
--

CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `doctorname`, `email`, `spec`, `docFees`) VALUES
('WillWilliams', 'password', 'Will Williams', 'williams@gmail.com', 'Cardiologist', 435),
('Ralph', 'password', 'Ralphn Bh', 'ralph@gmail.com', 'Neurologist', 450),
('ryan', 'password', 'Ryan Chandler', 'ryanc@gmail.com', 'Pediatrician', 440),
('lewis', 'password', 'Lou Lewis', 'lewis@gmail.com', 'Gynecologist', 280),
('chris', 'password', 'Chris Olivas', 'chris@gmail.com', 'Oncologist', 580),
('danial', 'password', 'Danial Rivera', 'danial@gmail.com', 'Neurologist', 210),
('abc', '123', 'Zeynep Bal', '123@gmail.com', 'Gynecologist', 400);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Crl', 'Hhc', 'Male', 'crlch@gmail.com', '7410000010', 'pass', 'pass'),
(2, 'Eml', 'Szn', 'Female', 'emlsz@gmail.com', '7896541222', 'pass', 'pass'),
(3, 'Rabi', 'kck', 'Male', 'rabikc@gmail.com', '7014744444', 'pass', 'pass'),
(4, 'Mnk', 'Fvr', 'Male', 'mnkfvr@gmail.com', '7023696969', 'pass', 'pass'),
(5, 'Vck', 'Olr', 'Male', 'vclr@gmail.com', '7897895500', 'pass', 'pass'),
(6, 'smt', 'Calkt', 'Male', 'smtclk@gmail.com', '7530001250', 'pass', 'pass'),
(7, 'Elanr', 'Mkbr', 'Female', 'emkb@gmail.com', '7850001250', 'pass', 'pass'),
(8, 'Dvd', 'Frk', 'Male', 'dvdfrk@gmail.com', '7301450000', 'pass', 'pass'),
(9, 'Brkcn', 'Mrtl', 'Male', 'brkcmrt@gmail.com', '7026969500', 'pass', 'pass'),
(10, 'Trkn', 'Sllri', 'Male', 'trksllr@gmail.com', '7900145300', 'pass', 'pass'),
(11, 'Kzbn', 'Akbnz', 'Female', 'kzbnakn@gmail.com', '7850002580', 'pass', 'pass'),
(12, 'tgy', 'Mvn', 'Male', 'tgymvn@gmail.com', '7412225680', 'password', 'password'),
(13, 'Brn', 'Rvzllr', 'Male', 'brnrvzllr@gmail.com', '7012569999', 'password', 'password'),
(14, 'kml', 'lmk', 'Male', 'kml@gmail.com', '1111111111', '123456', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('WillWilliams', 12, 14, 'Liam', 'Moore', '2021-07-06', '10:00:00', 'Congenital heart disease', 'rhinoconjunctivitis', 'trandolapril (Mavik)'),
('ryan', 1, 16, 'Curtis', 'Hicks', '2021-07-05', '10:00:00', 'Tuberculosis', 'lumpy rash on the legs - or lupus vulgaris which gives lumps or ulcers', 'Isoniazid, Ethambutol (Myambutol), Linezolid (Zyvox)'),
('lewis', 11, 17, 'Kathryn', 'Anderson', '2021-07-05', '10:00:00', 'Ovarian cysts', '00000000', 'Narcotic analgesics and nonsteroidal anti-inflammatory drugs'),
('Ralph', 13, 18, 'Brian', 'Rowe', '2021-07-06', '08:00:00', 'Cerebral Aneurysm', '0000000', 'Nimodipine - empty stomach, at least 1 hour before a meal or 2 hours after a meal');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
