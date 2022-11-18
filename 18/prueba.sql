-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 01:04 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prueba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablaprueba`
--

CREATE TABLE `tablaprueba` (
  `ID` int(11) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `PUNTOS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablaprueba`
--

INSERT INTO `tablaprueba` (`ID`, `NOMBRE`, `PUNTOS`) VALUES
(2, 'MARTA GARCIA', 27),
(3, 'CARLOS DE SANTIS', 77),
(4, 'LAURA RULLAN', 98),
(1, 'PEDRO GONZALEZ', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tablasecreta`
--

CREATE TABLE `tablasecreta` (
  `ID` int(11) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `CuentaBancaria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tablasecreta`
--

INSERT INTO `tablasecreta` (`ID`, `Contraseña`, `CuentaBancaria`) VALUES
(1, '32contra$172%27a', '2367-8391-2738-1234'),
(2, 'fhe2uspasswordkwu263', '5667-8999-2456-1265'),
(3, '1contraseña1', '1627-1282-7183-4718'),
(4, 'micontrasena12345678', '6723-7893-1728-3458');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
