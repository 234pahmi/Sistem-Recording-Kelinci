-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Sep 2019 pada 09.54
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertumbuhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hycole`
--

CREATE TABLE `hycole` (
  `id` int(11) NOT NULL,
  `betina` varchar(10) NOT NULL,
  `bangsa_betina` varchar(10) NOT NULL,
  `jantan` varchar(10) NOT NULL,
  `bangsa_jantan` varchar(10) NOT NULL,
  `ls_lahir` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `f` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ear_tag` int(11) NOT NULL,
  `no_indv` varchar(10) NOT NULL,
  `minggu_5` varchar(20) NOT NULL,
  `minggu_7` varchar(20) NOT NULL,
  `minggu_9` varchar(20) NOT NULL,
  `minggu_11` varchar(20) NOT NULL,
  `minggu_13` varchar(20) NOT NULL,
  `minggu_15` varchar(20) NOT NULL,
  `minggu_17` varchar(20) NOT NULL,
  `minggu_19` varchar(20) NOT NULL,
  `minggu_21` varchar(20) NOT NULL,
  `minggu_23` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hycole`
--

INSERT INTO `hycole` (`id`, `betina`, `bangsa_betina`, `jantan`, `bangsa_jantan`, `ls_lahir`, `tgl_lahir`, `sex`, `f`, `angkatan`, `ear_tag`, `no_indv`, `minggu_5`, `minggu_7`, `minggu_9`, `minggu_11`, `minggu_13`, `minggu_15`, `minggu_17`, `minggu_19`, `minggu_21`, `minggu_23`, `ket`) VALUES
(1, 'PP 214', 'Hycole', 'PPP 22', 'Hycole', 9, '2018-07-27', 'betina', 1, 1, 1, '11 P 1', '484', '780', '1135', '1507', '1784', '1980', '2125', '2359', '2800', '3000', ''),
(2, 'PP 214', 'Hycole', 'PPP 22', 'Hycole', 9, '2018-07-27', 'betina', 1, 1, 2, '11 P 2', '458', '645', '760', '1058', '1354', '1721', '1965', '2033', '2800', '3000', ''),
(3, 'PP 214', 'Hycole', 'PPP 22', 'Hycole', 9, '2018-07-27', 'betina', 1, 1, 3, '11 P 3', '514', '690', '910', '1135', '1504', '1776', '1972', '2201', '2800', '3000', ''),
(4, 'PPP 10', 'Hycole', 'PPP 22', 'Hycole', 8, '2018-07-27', 'betina', 1, 1, 7, '11 P 4', '307', '510', '860', '1098', '1112', '1440', '1643', '1889', '2800', '3000', ''),
(5, 'PPP 10', 'Hycole', 'PPP 22', 'Hycole', 8, '2018-07-27', 'betina', 1, 1, 8, '11 P 5', '366', '570', '935', '1325', '1468', '1810', '1987', '2170', '2800', '3000', ''),
(6, 'PPP 10', 'Hycole', 'PPP 22', 'Hycole', 8, '2018-07-27', 'betina', 1, 1, 9, '11 P 6', '495', '550', '820', '1083', '1220', '1497', '1625', '1704', '2800', '3000', ''),
(7, 'PPP 2', 'Hycole', 'PPP 25', 'Hycole', 5, '2018-09-10', 'betina', 1, 1, 20, '11 P 8', '600', '950', '1388', '1615', '2098', '2398', '2411', '2487', '2800', '3000', ''),
(8, 'PPP163', 'Hycole', 'PPP 18', 'Hycole', 7, '2018-09-10', 'betina', 1, 1, 27, '11 P 10', '440', '645', '1059', '1236', '1715', '1890', '2138', '2345', '2800', '3000', ''),
(9, 'PPP163', 'Hycole', 'PPP 18', 'Hycole', 7, '2018-09-10', 'betina', 1, 1, 28, '11 P 11', '530', '860', '1186', '1312', '1729', '1855', '2059', '2114', '2800', '3000', ''),
(10, 'PPP 115', 'Hycole', 'PPP 8', 'Hycole', 0, '2018-09-10', 'betina', 1, 1, 32, '11 P 13', '575', '905', '970', '1214', '1668', '1825', '2051', '2120', '2800', '3000', ''),
(11, 'PPP 115', 'Hycole', 'PPP 8', 'Hycole', 0, '2018-09-10', 'betina', 1, 1, 33, '11 P 14', '575', '980', '1250', '1403', '1808', '1950', '2208', '2326', '2800', '3000', ''),
(12, 'PP 217', 'Hycole', 'PPP 27', 'Hycole', 7, '2018-09-10', 'betina', 1, 1, 39, '11 P 15', '410', '690', '1004', '1160', '1566', '1820', '2058', '2178', '2800', '3000', ''),
(13, 'PP 18', 'Hycole', 'PPP 4', 'Hycole', 12, '2018-09-24', 'betina', 1, 1, 47, '11 P 17', '545', '876', '907', '1225', '1428', '1794', '1951', '2381', '2800', '3000', ''),
(14, 'PP 18', 'Hycole', 'PPP 4', 'Hycole', 12, '2018-09-24', 'betina', 1, 1, 48, '11 P 18', '530', '776', '830', '1188', '1226', '1407', '1664', '2057', '2800', '3000', ''),
(15, 'PP 18', 'Hycole', 'PPP 4', 'Hycole', 12, '2018-09-24', 'betina', 1, 1, 49, '11 P 19', '625', '841', '846', '1157', '1345', '1697', '1846', '2122', '2800', '3000', ''),
(16, 'PP 18', 'Hycole', 'PPP 4', 'Hycole', 12, '2018-09-24', 'betina', 1, 1, 50, '11 P 20', '670', '1016', '967', '1320', '1574', '1942', '2050', '2416', '2800', '3000', ''),
(17, 'PPP 17', 'Hycole', 'PPP 27', 'Hycole', 3, '2018-09-24', 'betina', 1, 1, 53, '11 P 21', '850', '892', '1068', '1245', '1305', '1498', '1666', '1995', '2800', '3000', ''),
(18, 'PP 208', 'Hycole', 'PP 18', 'Hycole', 8, '2018-09-24', 'betina', 1, 1, 58, '11 P 23', '650', '906', '1215', '1532', '1786', '2114', '2263', '2596', '2800', '3000', ''),
(19, 'PP 208', 'Hycole', 'PP 18', 'Hycole', 8, '2018-09-24', 'betina', 1, 1, 59, '11 P 24', '790', '1075', '1224', '1522', '1602', '1754', '1918', '2205', '2800', '3000', ''),
(20, 'PP 210', 'Hycole', 'PPP 22', 'Hycole', 8, '2018-09-24', 'betina', 1, 1, 65, '11 P 26', '515', '711', '775', '1041', '1421', '1808', '1955', '2084', '2800', '3000', ''),
(21, 'PP 210', 'Hycole', 'PPP 22', 'Hycole', 8, '2018-09-24', 'betina', 1, 1, 68, '11 P 27', '770', '1175', '1359', '1637', '1787', '1926', '1968', '1855 /sakit', '2800', '3000', ''),
(22, 'PPP 8', 'Hycole', 'PPP 8', 'Hycole', 8, '2018-09-24', 'betina', 1, 1, 74, '11 P 29', '395', '654', '734', '958', '1226', '1602', '1709', '2079', '2800', '3000', ''),
(23, 'PPP 8', 'Hycole', 'PPP 8', 'Hycole', 8, '2018-09-24', 'betina', 1, 1, 76, '11 P 30', '420', '701', '882', '1182', '1424', '1774', '1928', '2235', '2800', '3000', ''),
(24, 'PP 199', 'Hycole', 'PP 212', 'Hycole', 5, '2018-10-07', 'betina', 1, 1, 78, '11P 32', '648', '804', '1083', '1345', '1831', '1938', '2514', '2708', '2800', '3000', ''),
(25, 'PP 199', 'Hycole', 'PP 212', 'Hycole', 5, '2018-10-07', 'betina', 1, 1, 80, '11P 34', '616', '808', '1084', '1354', '1730', '1876', '1902', '2179', '2800', '3000', ''),
(26, 'PP 199', 'Hycole', 'PP 212', 'Hycole', 5, '2018-10-07', 'betina', 1, 1, 81, '11P 35', '485', '726', '1108', '1263', '1765', '1901', '2188', '2539', '2800', '3000', ''),
(27, 'PPP 25/27', 'Hycole', 'PPP 23', 'Hycole', 8, '2018-10-29', 'betina', 1, 2, 86, '12 P 2', '553', '654', '890', '1127', '1325', '1569', '1735', '2072', '2800', '3000', ''),
(28, 'PPP 25/27', 'Hycole', 'PPP 23', 'Hycole', 8, '2018-10-29', 'betina', 1, 2, 88, '12 P 3', '614', '754', '874', '1185', '1416', '1529', '1799', '2224', '2800', '3000', ''),
(29, 'PPP 25/27', 'Hycole', 'PPP 23', 'Hycole', 8, '2018-10-29', 'betina', 1, 2, 89, '12 P 4', '487', '586', '695', '835', '1130', '1412', '1630', '2148', '2800', '3000', ''),
(30, 'PPP 10', 'Hycole', 'PPP 25', 'Hycole', 6, '2018-11-09', 'betina', 1, 2, 94, '12 P 6', '427', '587', '773', '870', '958', '1076', '1396', '1632', '2800', '3000', ''),
(31, 'PPP 13', 'Hycole', 'PPP 16', 'Hycole', 7, '2018-11-09', 'betina', 1, 2, 101, '12P 8', '570', '655', '806', '1030', '1355', '1678', '2152', '2242', '2800', '3000', ''),
(32, 'PPP 13', 'Hycole', 'PPP 16', 'Hycole', 7, '2018-11-09', 'betina', 1, 2, 102, '12P 9', '526', '781', '908', '1169', '1366', '1681', '2032', '2276', '2800', '3000', ''),
(33, 'PPP 13', 'Hycole', 'PPP 16', 'Hycole', 7, '2018-11-09', 'betina', 1, 2, 103, '12P 10', '562', '642', '797', '924', '1164', '1364', '1809', '2029', '2800', '3000', ''),
(34, 'PPP 219', 'Hycole', 'PP 194', 'Hycole', 6, '2018-11-24', 'betina', 1, 2, 111, '12P 12', '545', '718', '896', '1209', '1372', '1547', '2000', '2381', '2800', '3000', ''),
(35, 'PPP 219', 'Hycole', 'PP 194', 'Hycole', 6, '2018-11-24', 'betina', 1, 2, 113, '12P 13', '538', '821', '694', '1019', '1193', '1563', '1902', '2245', '2800', '3000', ''),
(36, 'PP 2', 'Hycole', 'PP 25', 'Hycole', 9, '2018-11-24', 'betina', 1, 2, 118, '12P 16', '351', '542', '711', '1051', '1303', '1595', '1916', '2529', '2800', '3000', ''),
(37, 'PP 2', 'Hycole', 'PP 25', 'Hycole', 9, '2018-11-24', 'betina', 1, 2, 120, '12P 17', '416', '597', '827', '1123', '1215', '1582', '1862', '2541', '2800', '3000', ''),
(38, 'PP 2', 'Hycole', 'PP 25', 'Hycole', 9, '2018-11-24', 'betina', 1, 2, 121, '12P 18', '356', '588', '741', '962', '1136', '1330', '1595', '1999', '2800', '3000', ''),
(39, 'PP 2', 'Hycole', 'PP 25', 'Hycole', 9, '2018-11-24', 'betina', 1, 2, 122, '12P 19', '442', '615', '838', '1204', '1401', '1734', '1816', '2418', '2800', '3000', ''),
(40, 'PP 29', 'Hycole', 'PP 27', 'Hycole', 8, '2018-11-24', 'betina', 1, 2, 126, '12P 21', '518', '678', '848', '1135', '1277', '1606', '1525', '2363', '2800', '3000', ''),
(41, 'PP 29', 'Hycole', 'PP 27', 'Hycole', 8, '2018-11-24', 'betina', 1, 2, 127, '12P 22', '438', '579', '765', '1003', '1221', '1388', '1840', '2439', '2800', '3000', ''),
(42, 'PP 208', 'Hycole', 'PP 25', 'Hycole', 9, '2018-12-07', 'betina', 1, 2, 132, '12P 24', '430', '630', '844', '1058', '1223', '1574', '2149', '2575', '2800', '3000', ''),
(43, 'PP 208', 'Hycole', 'PP 25', 'Hycole', 9, '2018-12-07', 'betina', 1, 2, 133, '12P 25', '483', '591', '999', '1220', '1336', '1815', '2246', '2497', '2800', '3000', ''),
(44, 'PP 208', 'Hycole', 'PP 25', 'Hycole', 9, '2018-12-07', 'betina', 1, 2, 134, '12P 26', '465', '631', '874', '978', '1214', '1703', '2175', '2450', '2800', '3000', ''),
(45, 'PP 206', 'Hycole', 'PP 88', 'Hycole', 4, '2018-12-07', 'betina', 1, 2, 139, '12P 28', '585', '787', '1135', '1328', '1631', '1814', '2013', '2247', '2800', '3000', ''),
(46, 'PP 206', 'Hycole', 'PP 88', 'Hycole', 4, '2018-12-07', 'betina', 1, 2, 140, '12P 29', '553', '719', '1124', '1405', '1679', '2012', '2348', '2503', '2800', '3000', ''),
(47, 'PP 163', 'Hycole', 'PP 22', 'Hycole', 8, '2018-12-07', 'betina', 1, 2, 143, '12P 31', '573', '832', '1095', '1268', '1599', '1834', '2168', '2397', '2800', '3000', ''),
(48, 'PP 163', 'Hycole', 'PP 22', 'Hycole', 8, '2018-12-07', 'betina', 1, 2, 144, '12P 32', '496', '652', '914', '1079', '1426', '1786', 'mati', 'x', '2800', '3000', ''),
(49, 'PP 163', 'Hycole', 'PP 22', 'Hycole', 8, '2018-12-07', 'betina', 1, 2, 145, '12P 33', '517', '669', '892', '1019', '1212', '1406', '1908', 'mati', '2800', '3000', ''),
(50, 'PP 217', 'Hycole', 'PP 27', 'Hycole', 7, '2018-12-07', 'betina', 1, 2, 147, '12P 35', '535', '684', '943', '1033', '1107', '1614', 'mati', '', '', '', ''),
(51, 'PP 217', 'Hycole', 'PP 27', 'Hycole', 7, '2018-12-07', 'betina', 1, 2, 148, '12P 36', '493', '640', '877', '1071', '1395', '1434', 'mati', '', '', '', ''),
(52, 'PP 217', 'Hycole', 'PP 27', 'Hycole', 7, '2018-12-07', 'betina', 1, 2, 151, '12P 37', '511', '645', '866', '1027', '1300', '1552', 'mati', '', '', '', ''),
(53, 'PP 4', 'Hycole', 'PP 25', 'Hycole', 11, '2018-12-14', 'betina', 1, 2, 155, '12P 39', '430', '679', '870', '1212', '1625', '1835', '2370', '2716', '2800', '3000', ''),
(54, 'PP 4', 'Hycole', 'PP 25', 'Hycole', 11, '2018-12-14', 'betina', 1, 2, 156, '12P 40', '426', '667', '792', '1093', '1348', '1673', '1984', '2607', '2800', '3000', ''),
(102, 'PPP 163', 'Hycole', 'PPP 18', 'Hycole', 7, '2018-09-10', 'Jantan', 1, 1, 23, '11 P 9', '600', '995', '1331', '1445', '1932', '1998', '2011', '2048', '2830', '2900', ''),
(103, 'PPP 115', 'Hycole', 'PPP 8', 'Hycole', 0, '2018-09-10', 'Jantan', 1, 1, 30, '11 P 12', '580', '935', '1311', '1606', '1978', '2015', '2314', '2318', '2830', '2900', ''),
(104, 'PP 18', 'Hycole', 'PPP 4', 'Hycole', 12, '2018-09-24', 'Jantan', 1, 1, 44, '11 P 16', '580', '892', '864', '995', '1246', '1915', '2076', '2294', '2830', '2900', ''),
(105, 'PP 208', 'Hycole', 'PP 18', 'Hycole', 8, '2018-09-24', 'Jantan', 1, 1, 55, '11 P 22', '795', '1148', '1448', '1656', '1826', '1916', '2029', '2398', '2830', '2900', ''),
(106, 'PPP 8', 'Hycole', 'PPP 8', 'Hycole', 8, '2018-09-24', 'Jantan', 1, 1, 69, '11 P 28', '535', '773', '1014', '1456', '1550', '1696', '1898', '2205', '2830', '2900', ''),
(107, 'PP 199', 'Hycole', 'PP 212', 'Hycole', 5, '2018-10-07', 'Jantan', 1, 2, 77, '11 P 31', '567', '687', '943', '1227', '1663', '1814', '1906', '2296', '2830', '2900', ''),
(108, 'PPP 25/27', 'Hycole', 'PPP 23', 'Hycole', 8, '2018-10-29', 'Jantan', 1, 2, 83, '12 P 1', '611', '736', '976', '1234', '1492', '1705', '1922', '2349', '2830', '2900', ''),
(109, 'PPP 10', 'Hycole', 'PPP 25', 'Hycole', 6, '2018-11-09', 'Jantan', 1, 2, 91, '12 P 5', '616', '753', '997', '1346', '1538', '1814', '2301', '2490', '2830', '2900', ''),
(110, 'PPP 13', 'Hycole', 'PPP 16', 'Hycole', 7, '2018-11-09', 'Jantan', 1, 2, 98, '12 P 7', '540', '658', '870', '1031', '1218', '1585', '1908', '2025', '2830', '2900', ''),
(111, 'PPP 219', 'Hycole', 'PP 194', 'Hycole', 6, '2018-11-24', 'Jantan', 1, 2, 108, '12P 11', '577', '811', '934', '1082', '1296', '1648', '1973', '2583', '2830', '2900', ''),
(112, 'PP 2', 'Hycole', 'PP 25', 'Hycole', 9, '2018-11-24', 'Jantan', 1, 2, 114, '12P 14', '416', '620', '785', '1056', '1325', '1524', '1858', '2430', '2830', '2900', ''),
(113, 'PP 2', 'Hycole', 'PP 25', 'Hycole', 9, '2018-11-24', 'Jantan', 1, 2, 116, '12P 15', '386', '647', '851', '1118', '1325', '1663', '2085', '2614', '2830', '2900', ''),
(114, 'PP 29', 'Hycole', 'PP 27', 'Hycole', 8, '2018-11-24', 'Jantan', 1, 2, 124, '12P 20', '458', '564', '775', '1027', '1178', '1467', '2108', '2553', '2830', '2900', ''),
(115, 'PP 208', 'Hycole', 'PP 25', 'Hycole', 9, '2018-12-07', 'Jantan', 1, 2, 128, '12P 23', '364', '554', '832', '1181', '1243', '1410', 'mati', 'x', 'x', '2900', ''),
(116, 'PP 206', 'Hycole', 'PP 88', 'Hycole', 4, '2018-12-07', 'Jantan', 1, 2, 136, '12P 27', '472', '663', '991', '1196', '1528', '1831', '2735', '2473', '2830', '2900', ''),
(117, 'PP 163', 'Hycole', 'PP 22', 'Hycole', 8, '2018-12-07', 'Jantan', 1, 2, 141, '12P 30', '472', '647', '825', '921', '1248', '1675', '1924', '2455', '2830', '2900', ''),
(118, 'PP 217', 'Hycole', 'PP 27', 'Hycole', 7, '2018-12-07', 'Jantan', 1, 2, 146, '12P 34', '579', '785', '1065', '1228', '1453', '1210', 'mati', '', '2830', '2900', ''),
(119, 'PP 4', 'Hycole', 'PP 25', 'Hycole', 11, '2018-12-14', 'Jantan', 1, 2, 152, '12P 38', '390', '678', '848', '1198', '1673', '1945', '2516', '2698', '2830', '2900', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hyla`
--

CREATE TABLE `hyla` (
  `id` int(11) NOT NULL,
  `betina` varchar(10) NOT NULL,
  `bangsa_betina` varchar(10) NOT NULL,
  `jantan` varchar(10) NOT NULL,
  `bangsa_jantan` varchar(10) NOT NULL,
  `ls_lahir` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `f` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ear_tag` int(11) NOT NULL,
  `no_indv` varchar(10) NOT NULL,
  `minggu_5` varchar(20) NOT NULL,
  `minggu_7` varchar(20) NOT NULL,
  `minggu_9` varchar(20) NOT NULL,
  `minggu_11` varchar(20) NOT NULL,
  `minggu_13` varchar(20) NOT NULL,
  `minggu_15` varchar(20) NOT NULL,
  `minggu_17` varchar(20) NOT NULL,
  `minggu_19` varchar(20) NOT NULL,
  `minggu_21` varchar(20) NOT NULL,
  `minggu_23` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hyla`
--

INSERT INTO `hyla` (`id`, `betina`, `bangsa_betina`, `jantan`, `bangsa_jantan`, `ls_lahir`, `tgl_lahir`, `sex`, `f`, `angkatan`, `ear_tag`, `no_indv`, `minggu_5`, `minggu_7`, `minggu_9`, `minggu_11`, `minggu_13`, `minggu_15`, `minggu_17`, `minggu_19`, `minggu_21`, `minggu_23`, `ket`) VALUES
(1, 'CCC  3', 'Hyla', 'CCC 5', 'Hyla', 8, '0000-00-00', 'Betina', 1, 1, 6, '11 C 2', '431', '735', '879', '1170', '1540', '2043', '2232', '2554', '3000', '3500', ''),
(2, 'CCC  3', 'Hyla', 'CCC 5', 'Hyla', 8, '2019-07-25', 'Betina', 1, 1, 7, '11 C 3', '416', '676', '815', '1085', '1340', '1890', '2154', '2356', '2800', '3000', ''),
(3, 'CCC  3', 'Hyla', 'CCC 5', 'Hyla', 8, '2018-07-27', 'Betina', 1, 1, 8, '11 C 4', '368', '660', '956', '1320', '1700', '2134', '2350', '2684', '2800', '3000', ''),
(4, 'CCC  4', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-07-27', 'Betina', 1, 1, 12, '11 C 6', '346', '532', '720', '1130', '1465', '1405', '1656', '2142', '2800', '3000', ''),
(5, 'CCC  4', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-07-27', 'Betina', 1, 1, 13, '11 C 7', '487', '735', '905', '1385', '1725', '1700', '1885', '2363', '2800', '3000', ''),
(6, 'CC  26', 'Hyla', 'CCC 9', 'Hyla', 7, '2018-07-27', 'Betina', 1, 1, 18, '11 C 9', '326', '505', '582', '940', '1265', '1735', '1843', '2163', '2800', '3000', ''),
(7, 'CC  26', 'Hyla', 'CCC 9', 'Hyla', 7, '2018-07-27', 'Betina', 1, 1, 20, '11 C 10', '363', '546', '675', '945', '1300', '1772', '1843', '2142', '2800', '3000', ''),
(8, 'CC  21', 'Hyla', 'CC 24', 'Hyla', 5, '2018-08-10', 'Betina', 1, 1, 23, '11 C 12', '398', '551', '910', '1255', '1605', '1845', '2315', '2368', '2800', '3000', ''),
(9, 'CCC 17', 'Hyla', 'CCC 7', 'Hyla', 0, '2018-08-10', 'Betina', 1, 1, 28, '11 C 14', '386', '575', '935', '1275', '1783', '1994', '2208', '2485', '2800', '3000', ''),
(10, 'CCC 27', 'Hyla', 'CC 24', 'Hyla', 6, '2018-08-24', 'Betina', 1, 1, 33, '11 C 17', '696', '990', '1270', '1210', '1461', '1863', '1813', '2168', '2800', '3000', ''),
(11, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 1, 1, 40, '11 C 19', '327', '600', '905', '1326', '1650', '1970', '2086', '2256', '2800', '3000', ''),
(12, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 1, 1, 41, '11 C 20', '338', '610', '900', '1361', '1532', '2085', '2010', '2153', '2800', '3000', ''),
(13, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 1, 1, 42, '11 C 21', '275', '505', '805', '1165', '1453', '1968', '1956', '2170', '2800', '3000', ''),
(14, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 1, 1, 44, '11 C 22', '337', '510', '750', '1273', '1545', '1843', '2185', '2450', '2800', '3000', ''),
(15, 'CCC 13', 'Hyla', 'CCC 7', 'Hyla', 8, '2018-08-24', 'Betina', 1, 1, 45, '11 C 23', '627', '860', '925', '1308', '1601', '2098', '2012', '2209', '2800', '3000', ''),
(16, 'CC 16', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-09-10', 'Betina', 1, 1, 48, '11 C 24', '640', '940', '1077', '1178', '1348', '1602', '1888', '2043', '2800', '3000', ''),
(17, 'CC 16', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-09-10', 'Betina', 1, 1, 49, '11 C 25', '630', '985', '1094', '1155', '1403', '1588', '1832', '1936', '2800', '3000', ''),
(18, 'CC 16', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-09-10', 'Betina', 1, 1, 50, '11 C 26', '765', '1160', '1345', '1494', '1469', '2113', '2395', '2444', '2800', '3000', ''),
(19, 'CC 22', 'Hyla', 'CC 24', 'Hyla', 0, '2018-09-10', 'Betina', 1, 1, 54, '11 C 28', '740', '1185', '1264', '1451', '1914', '2137', '2402', '2426', '2800', '3000', ''),
(105, 'CCC  3', 'Hyla', 'CCC 5', 'hyla', 8, '2018-07-27', 'Jantan', 1, 1, 4, '11 C 1', '424', '674', '950', '1430', '1820', '2054', '2185', '2540', '2922', '3000', ''),
(106, 'CC  26', 'Hyla', 'CCC 9', 'hyla', 7, '2018-07-27', 'Jantan', 1, 1, 14, '11 C 8', '385', '586', '782', '1190', '1590', '2086', '2205', '2493', '2922', '3000', ''),
(107, 'CC  21', 'Hyla', 'CC 24', 'hyla', 5, '2018-08-10', 'Jantan', 0, 0, 21, '11 C 5', '597', '898', '1175', '1575', '2019', '2165', '2350', 'mati', 'mati', '3000', ''),
(108, 'CC  21', 'Hyla', 'CC 24', 'hyla', 0, '2018-08-10', 'Jantan', 1, 1, 24, '11 C 13', '438', '643', '945', '1230', '1650', '1696', '2096', '2122', '2922', '3000', ''),
(109, 'CCC 27', 'Hyla', 'CC 24', 'hyla', 6, '2018-08-24', 'Jantan', 1, 1, 29, '11 C 15', '515', '850', '1230', '1312', '1544', '1932', '1985', '2276', '2922', '3000', ''),
(110, 'CCC 27', 'Hyla', 'CC 24', 'hyla', 6, '2018-08-24', 'Jantan', 1, 1, 32, '11 C 16', '690', '950', '780', '1331', '1598', '2024', '2110', '2364', '2922', '3000', ''),
(111, 'CCC 20', 'Hyla', 'CCC 9', 'hyla', 10, '2018-08-24', 'Jantan', 1, 1, 39, '11 C 18', '382', '610', '920', '1375', '1675', '1886', '2021', '2126', '2922', '3000', ''),
(112, 'cc 22', 'Hyla', 'cc 24', 'hyla', 0, '2018-09-10', 'Jantan', 1, 1, 51, '11 C 27', '735', '1225', '1085', '1319', '1967', '1962', '2248', '2288', '2922', '3000', ''),
(209, 'CCC  3', 'Hyla', 'CCC 5', 'hyla', 8, '2018-07-27', 'Jantan', 2, 1, 4, '11 C 1', '424', '674', '950', '1430', '1820', '2054', '2185', '2540', '2922', '3000', ''),
(210, 'CC  26', 'Hyla', 'CCC 9', 'hyla', 7, '2018-07-27', 'Jantan', 2, 1, 14, '11 C 8', '385', '586', '782', '1190', '1590', '2086', '2205', '2493', '2922', '3000', ''),
(211, 'CC  21', 'Hyla', 'CC 24', 'hyla', 5, '2018-08-10', 'Jantan', 2, 0, 21, '11 C 5', '597', '898', '1175', '1575', '2019', '2165', '2350', 'mati', 'mati', '3000', ''),
(212, 'CC  21', 'Hyla', 'CC 24', 'hyla', 0, '2018-08-10', 'Jantan', 2, 1, 24, '11 C 13', '438', '643', '945', '1230', '1650', '1696', '2096', '2122', '2922', '3000', ''),
(213, 'CCC 27', 'Hyla', 'CC 24', 'hyla', 6, '2018-08-24', 'Jantan', 2, 1, 29, '11 C 15', '515', '850', '1230', '1312', '1544', '1932', '1985', '2276', '2922', '3000', ''),
(214, 'CCC 27', 'Hyla', 'CC 24', 'hyla', 6, '2018-08-24', 'Jantan', 2, 1, 32, '11 C 16', '690', '950', '780', '1331', '1598', '2024', '2110', '2364', '2922', '3000', ''),
(215, 'CCC 20', 'Hyla', 'CCC 9', 'hyla', 10, '2018-08-24', 'Jantan', 2, 1, 39, '11 C 18', '382', '610', '920', '1375', '1675', '1886', '2021', '2126', '2922', '3000', ''),
(216, 'cc 22', 'Hyla', 'cc 24', 'hyla', 0, '2018-09-10', 'Jantan', 2, 1, 51, '11 C 27', '735', '1225', '1085', '1319', '1967', '1962', '2248', '2288', '2922', '3000', ''),
(313, 'CCC  3', 'Hyla', 'CCC 5', 'Hyla', 8, '2018-07-27', 'Betina', 2, 1, 6, '11 C 2', '431', '735', '879', '1170', '1540', '2043', '2232', '2554', '2800', '3000', ''),
(314, 'CCC  3', 'Hyla', 'CCC 5', 'Hyla', 8, '2018-07-27', 'Betina', 2, 1, 7, '11 C 3', '416', '676', '815', '1085', '1340', '1890', '2154', '2356', '2800', '3000', ''),
(315, 'CCC  3', 'Hyla', 'CCC 5', 'Hyla', 8, '2018-07-27', 'Betina', 2, 1, 8, '11 C 4', '368', '660', '956', '1320', '1700', '2134', '2350', '2684', '2800', '3000', ''),
(316, 'CCC  4', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-07-27', 'Betina', 2, 1, 12, '11 C 6', '346', '532', '720', '1130', '1465', '1405', '1656', '2142', '2800', '3000', ''),
(317, 'CCC  4', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-07-27', 'Betina', 2, 1, 13, '11 C 7', '487', '735', '905', '1385', '1725', '1700', '1885', '2363', '2800', '3000', ''),
(318, 'CC  26', 'Hyla', 'CCC 9', 'Hyla', 7, '2018-07-27', 'Betina', 2, 1, 18, '11 C 9', '326', '505', '582', '940', '1265', '1735', '1843', '2163', '2800', '3000', ''),
(319, 'CC  26', 'Hyla', 'CCC 9', 'Hyla', 7, '2018-07-27', 'Betina', 2, 1, 20, '11 C 10', '363', '546', '675', '945', '1300', '1772', '1843', '2142', '2800', '3000', ''),
(320, 'CC  21', 'Hyla', 'CC 24', 'Hyla', 5, '2018-08-10', 'Betina', 2, 1, 23, '11 C 12', '398', '551', '910', '1255', '1605', '1845', '2315', '2368', '2800', '3000', ''),
(321, 'CCC 17', 'Hyla', 'CCC 7', 'Hyla', 0, '2018-08-10', 'Betina', 2, 1, 28, '11 C 14', '386', '575', '935', '1275', '1783', '1994', '2208', '2485', '2800', '3000', ''),
(322, 'CCC 27', 'Hyla', 'CC 24', 'Hyla', 6, '2018-08-24', 'Betina', 2, 1, 33, '11 C 17', '696', '990', '1270', '1210', '1461', '1863', '1813', '2168', '2800', '3000', ''),
(323, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 2, 1, 40, '11 C 19', '327', '600', '905', '1326', '1650', '1970', '2086', '2256', '2800', '3000', ''),
(324, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 2, 1, 41, '11 C 20', '338', '610', '900', '1361', '1532', '2085', '2010', '2153', '2800', '3000', ''),
(325, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 2, 1, 42, '11 C 21', '275', '505', '805', '1165', '1453', '1968', '1956', '2170', '2800', '3000', ''),
(326, 'CCC 20', 'Hyla', 'CCC 9', 'Hyla', 10, '2018-08-24', 'Betina', 2, 1, 44, '11 C 22', '337', '510', '750', '1273', '1545', '1843', '2185', '2450', '2800', '3000', ''),
(327, 'CCC 13', 'Hyla', 'CCC 7', 'Hyla', 8, '2018-08-24', 'Betina', 2, 1, 45, '11 C 23', '627', '860', '925', '1308', '1601', '2098', '2012', '2209', '2800', '3000', ''),
(328, 'CC 16', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-09-10', 'Betina', 2, 1, 48, '11 C 24', '640', '940', '1077', '1178', '1348', '1602', '1888', '2043', '2800', '3000', ''),
(329, 'CC 16', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-09-10', 'Betina', 2, 1, 49, '11 C 25', '630', '985', '1094', '1155', '1403', '1588', '1832', '1936', '2800', '3000', ''),
(330, 'CC 16', 'Hyla', 'CCC 7', 'Hyla', 5, '2018-09-10', 'Betina', 2, 1, 50, '11 C 26', '765', '1160', '1345', '1494', '1469', '2113', '2395', '2444', '2800', '3000', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskelinci`
--

CREATE TABLE `jeniskelinci` (
  `id` int(11) NOT NULL,
  `bangsa` varchar(15) NOT NULL,
  `link` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jeniskelinci`
--

INSERT INTO `jeniskelinci` (`id`, `bangsa`, `link`) VALUES
(1, 'Hyla', 'index.php?menu=dataKelinci&jenis=hyla'),
(2, 'Hycole', 'index.php?menu=dataKelinci&jenis=hycole'),
(3, 'NZW', 'index.php?menu=dataKelinci&jenis=nzw'),
(4, 'Reksi', 'index.php?menu=dataKelinci&jenis=reksi'),
(5, 'Reza', 'index.php?menu=dataKelinci&jenis=reza'),
(6, 'Satin', 'index.php?menu=dataKelinci&jenis=satin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karkas`
--

CREATE TABLE `karkas` (
  `id` int(11) NOT NULL,
  `ternak` varchar(20) NOT NULL,
  `bangsa` varchar(20) NOT NULL,
  `induk` varchar(20) NOT NULL,
  `jantan` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_potong` date NOT NULL,
  `umur` varchar(20) NOT NULL,
  `perlakuan` varchar(125) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `potong` varchar(20) NOT NULL,
  `karkas` varchar(20) NOT NULL,
  `kulit_bulu` varchar(20) NOT NULL,
  `hati` varchar(20) NOT NULL,
  `ginjal` varchar(20) NOT NULL,
  `kepala_kaki` varchar(20) NOT NULL,
  `daging` varchar(20) NOT NULL,
  `tulang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karkas`
--

INSERT INTO `karkas` (`id`, `ternak`, `bangsa`, `induk`, `jantan`, `tgl_lahir`, `tgl_potong`, `umur`, `perlakuan`, `sex`, `ket`, `potong`, `karkas`, `kulit_bulu`, `hati`, `ginjal`, `kepala_kaki`, `daging`, `tulang`) VALUES
(5, 'AA1', 'Hycole', 'CC1', 'CC10', '0000-00-00', '0000-00-00', '300', 'test', 'Betina', '-', '11', '12', '13', '14', '15', '16', '17', '18'),
(7, 'CC10', 'NZW', 'CC1', 'CC04', '2018-07-26', '2018-11-30', '', '-', 'Betina', '-', '1', '2', '3', '4', '5', '6', '6', '7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nzw`
--

CREATE TABLE `nzw` (
  `id` int(11) NOT NULL,
  `betina` varchar(10) NOT NULL,
  `bangsa_betina` varchar(10) NOT NULL,
  `jantan` varchar(10) NOT NULL,
  `bangsa_jantan` varchar(10) NOT NULL,
  `ls_lahir` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `f` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ear_tag` int(11) NOT NULL,
  `no_indv` varchar(10) NOT NULL,
  `minggu_5` varchar(20) NOT NULL,
  `minggu_7` varchar(20) NOT NULL,
  `minggu_9` varchar(20) NOT NULL,
  `minggu_11` varchar(20) NOT NULL,
  `minggu_13` varchar(20) NOT NULL,
  `minggu_15` varchar(20) NOT NULL,
  `minggu_17` varchar(20) NOT NULL,
  `minggu_19` varchar(20) NOT NULL,
  `minggu_21` varchar(20) NOT NULL,
  `minggu_23` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nzw`
--

INSERT INTO `nzw` (`id`, `betina`, `bangsa_betina`, `jantan`, `bangsa_jantan`, `ls_lahir`, `tgl_lahir`, `sex`, `f`, `angkatan`, `ear_tag`, `no_indv`, `minggu_5`, `minggu_7`, `minggu_9`, `minggu_11`, `minggu_13`, `minggu_15`, `minggu_17`, `minggu_19`, `minggu_21`, `minggu_23`, `ket`) VALUES
(1, 'NZW01', 'NZW', 'NZW02', 'NZW', 1, '2019-07-28', 'Jantan', 1, 1, 10, '20', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `id` int(11) NOT NULL,
  `id_bangsa` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`id`, `id_bangsa`, `id_user`) VALUES
(10, 1, 27),
(11, 2, 27),
(12, 3, 27),
(13, 6, 28),
(14, 5, 28),
(15, 4, 28);

-- --------------------------------------------------------

--
-- Struktur dari tabel `reksi`
--

CREATE TABLE `reksi` (
  `id` int(11) NOT NULL,
  `betina` varchar(10) NOT NULL,
  `bangsa_betina` varchar(10) NOT NULL,
  `jantan` varchar(10) NOT NULL,
  `bangsa_jantan` varchar(10) NOT NULL,
  `ls_lahir` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `f` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ear_tag` int(11) NOT NULL,
  `no_indv` varchar(10) NOT NULL,
  `minggu_5` varchar(20) NOT NULL,
  `minggu_7` varchar(20) NOT NULL,
  `minggu_9` varchar(20) NOT NULL,
  `minggu_11` varchar(20) NOT NULL,
  `minggu_13` varchar(20) NOT NULL,
  `minggu_15` varchar(20) NOT NULL,
  `minggu_17` varchar(20) NOT NULL,
  `minggu_19` varchar(20) NOT NULL,
  `minggu_21` varchar(20) NOT NULL,
  `minggu_23` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reksi`
--

INSERT INTO `reksi` (`id`, `betina`, `bangsa_betina`, `jantan`, `bangsa_jantan`, `ls_lahir`, `tgl_lahir`, `sex`, `f`, `angkatan`, `ear_tag`, `no_indv`, `minggu_5`, `minggu_7`, `minggu_9`, `minggu_11`, `minggu_13`, `minggu_15`, `minggu_17`, `minggu_19`, `minggu_21`, `minggu_23`, `ket`) VALUES
(2, 'R 001', 'Reksi', 'RR 001', 'Reksi', 5, '0000-00-00', 'Jantan', 1, 2, 2, '2', '584', '600', '600', '600', '600', '600', '600', '600', '600', '600', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reza`
--

CREATE TABLE `reza` (
  `id` int(11) NOT NULL,
  `betina` varchar(10) NOT NULL,
  `bangsa_betina` varchar(10) NOT NULL,
  `jantan` varchar(10) NOT NULL,
  `bangsa_jantan` varchar(10) NOT NULL,
  `ls_lahir` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `f` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ear_tag` int(11) NOT NULL,
  `no_indv` varchar(10) NOT NULL,
  `minggu_5` varchar(20) NOT NULL,
  `minggu_7` varchar(20) NOT NULL,
  `minggu_9` varchar(20) NOT NULL,
  `minggu_11` varchar(20) NOT NULL,
  `minggu_13` varchar(20) NOT NULL,
  `minggu_15` varchar(20) NOT NULL,
  `minggu_17` varchar(20) NOT NULL,
  `minggu_19` varchar(20) NOT NULL,
  `minggu_21` varchar(20) NOT NULL,
  `minggu_23` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satin`
--

CREATE TABLE `satin` (
  `id` int(11) NOT NULL,
  `betina` varchar(10) NOT NULL,
  `bangsa_betina` varchar(10) NOT NULL,
  `jantan` varchar(10) NOT NULL,
  `bangsa_jantan` varchar(10) NOT NULL,
  `ls_lahir` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `f` int(11) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ear_tag` int(11) NOT NULL,
  `no_indv` varchar(10) NOT NULL,
  `minggu_5` varchar(20) NOT NULL,
  `minggu_7` varchar(20) NOT NULL,
  `minggu_9` varchar(20) NOT NULL,
  `minggu_11` varchar(20) NOT NULL,
  `minggu_13` varchar(20) NOT NULL,
  `minggu_15` varchar(20) NOT NULL,
  `minggu_17` varchar(20) NOT NULL,
  `minggu_19` varchar(20) NOT NULL,
  `minggu_21` varchar(20) NOT NULL,
  `minggu_23` varchar(20) NOT NULL,
  `ket` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `img` varchar(255) NOT NULL,
  `tgl_buat` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `img`, `tgl_buat`, `role_id`) VALUES
(1, 'Pahmi Alifya Bahri', 'pahmi1998@gmail.com', '$2y$10$aCdn2jokWjs/jHRrEJtb1.rIDfAymicJQJuX4Fg/vx/HU7jXmrxZu', '5d301637bdab7.png', 1562644977, 1),
(27, 'pahmi alifya bahri', 'pahmi1998@unpak.ac.id', '$2y$10$x1xwGl0fx91lk2JrPrcXRua0Ncg2PWiTicdcYD6HsRU8VJgUsBwCu', 'default.jpg', 1566470860, 2),
(28, 'aku', 'aku@aku', '$2y$10$orcvgldZn5McfPQwbmdDk.f1n1MpQ3u6bdwSME.oIEK6faDe/Aljy', 'default.jpg', 1566471108, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Peneliti');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hycole`
--
ALTER TABLE `hycole`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hyla`
--
ALTER TABLE `hyla`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jeniskelinci`
--
ALTER TABLE `jeniskelinci`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `karkas`
--
ALTER TABLE `karkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nzw`
--
ALTER TABLE `nzw`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reksi`
--
ALTER TABLE `reksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reza`
--
ALTER TABLE `reza`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `satin`
--
ALTER TABLE `satin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hycole`
--
ALTER TABLE `hycole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `hyla`
--
ALTER TABLE `hyla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT untuk tabel `jeniskelinci`
--
ALTER TABLE `jeniskelinci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karkas`
--
ALTER TABLE `karkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nzw`
--
ALTER TABLE `nzw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `reksi`
--
ALTER TABLE `reksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reza`
--
ALTER TABLE `reza`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `satin`
--
ALTER TABLE `satin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
