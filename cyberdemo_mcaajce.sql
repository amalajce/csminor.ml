-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 29, 2023 at 04:56 AM
-- Server version: 10.3.38-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cyberdemo_mcaajce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `login_id` int(11) NOT NULL,
  `login_email` varchar(100) NOT NULL,
  `login_password` varchar(100) NOT NULL,
  `login_role` varchar(50) NOT NULL,
  `login_photo` varchar(100) NOT NULL,
  `login_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `login_email`, `login_password`, `login_role`, `login_photo`, `login_name`) VALUES
(1, 'admin@mca.ajce.in', 'Admin@2023', 'Admin', 'https://m.ajce.in/300x300png.png', 'MCA-AJCE'),
(2, 'amalkjose@amaljyothi.ac.in', 'Amal@0324', 'User', 'https://ajce.irins.org/assets/profile_images/280995.jpg', 'Amal K jose'),
(4, 'demo@mca.ajce.in', 'Mca@2023', 'User', 'https://www.ajce.in/mca/images/Amace.png', 'Demo MCA User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(100) NOT NULL,
  `team_logo` varchar(100) NOT NULL,
  `team_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_teams`
--

INSERT INTO `tbl_teams` (`team_id`, `team_name`, `team_logo`, `team_description`) VALUES
(1, 'Ettercap', 'https://www.kali.org/tools/ettercap/images/ettercap-logo.svg', 'Ettercap supports active and passive dissection of many protocols (even encrypted ones) and includes many feature for network and host analysis.\n\nData injection in an established connection and filtering (substitute or drop a packet) on the fly is also possible, keeping the connection synchronized.\n\nMany sniffing modes are implemented, for a powerful and complete sniffing suite. It is possible to sniff in four modes: IP Based, MAC Based, ARP Based (full-duplex) and PublicARP Based (half-duplex).\n\nEttercap also has the ability to detect a switched LAN, and to use OS fingerprints (active or passive) to find the geometry of the LAN.\n\nThis package contains the Common support files, configuration files, plugins, and documentation. You must also install either ettercap-graphical or ettercap-text-only for the actual GUI-enabled or text-only ettercap executable, respectively.'),
(2, 'Hashcat', 'https://www.kali.org/tools/hashcat/images/hashcat-logo.svg', 'Hashcat supports five unique modes of attack for over 300 highly-optimized hashing algorithms. hashcat currently supports CPUs, GPUs, and other hardware accelerators on Linux, and has facilities to help enable distributed password cracking.\r\n\r\nExamples of hashcat supported hashing algorithms are: MD5, HMAC-MD5, SHA1, HMAC-SHA1, MySQL323, MySQL4.1/MySQL5, phpass, MD5(Wordpress), MD5(phpBB3), MD5(Joomla), md5crypt, MD5(Unix), FreeBSD MD5, Cisco-IOS, MD4, NTLM, Domain Cached Credentials (DCC), MS Cache, SHA256, HMAC-SHA256, md5apr1, MD5(APR), Apache MD5, SHA512, HMAC-SHA512, Cisco-PIX, Cisco-ASA, WPA/WPA2, Double MD5, bcrypt, Blowfish(OpenBSD), MD5(Sun), ect\r\n'),
(3, 'Spiderfoot', 'https://www.kali.org/tools/spiderfoot/images/spiderfoot-logo.svg', 'This package contains an open source intelligence (OSINT) automation tool. Its goal is to automate the process of gathering intelligence about a given target, which may be an IP address, domain name, hostname, network subnet, ASN, e-mail address or person’s name.\r\n\r\nSpiderFoot can be used offensively, i.e. as part of a black-box penetration test to gather information about the target, or defensively to identify what information you or your organisation are freely providing for attackers to use against you.'),
(4, 'TheMole', 'https://1.bp.blogspot.com/-sjxte39rFh4/U6xTI7X77yI/AAAAAAAACu8/F0o-3InD12U/s1600/the+mole.png', 'The Mole is a python based automatic SQL Injection exploitation tool developed by Nasel. All you need to do is to provide a vulnerable URL and a valid string on the site it and it can detect the injection and exploit it, either by using the union technique or a boolean query based technique.\r\n'),
(5, 'Sqlmap', 'https://www.kali.org/tools/sqlmap/images/sqlmap-logo.svg', 'sqlmap goal is to detect and take advantage of SQL injection vulnerabilities in web applications. Once it detects one or more SQL injections on the target host, the user can choose among a variety of options to perform an extensive back-end database management system fingerprint, retrieve DBMS session user and database, enumerate users, password hashes, privileges, databases, dump entire or user’s specific DBMS tables/columns, run his own SQL statement, read specific files on the file system and more.'),
(6, 'Burpsuite\r\n', 'https://www.kali.org/tools/burpsuite/images/burpsuite-logo.svg', 'Burp Suite is an integrated platform for performing security testing of web applications. Its various tools work seamlessly together to support the entire testing process, from initial mapping and analysis of an application’s attack surface, through to finding and exploiting security vulnerabilities.\r\n\r\nBurp gives you full control, letting you combine advanced manual techniques with state-of-the-art automation, to make your work faster, more effective, and more fun.'),
(7, 'Beef', 'https://www.kali.org/tools/beef-xss/images/beef-xss-logo.svg', 'BeEF is short for The Browser Exploitation Framework. It is a penetration testing tool that focuses on the web browser.\r\n\r\nAmid growing concerns about web-born attacks against clients, including mobile clients, BeEF allows the professional penetration tester to assess the actual security posture of a target environment by using client-side attack vectors. Unlike other security frameworks, BeEF looks past the hardened network perimeter and client system, and examines exploitability within the context of the one open door: the web browser. BeEF will hook one or more web browsers and use them as beachheads for launching directed command modules and further attacks against the system from within the browser context.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
