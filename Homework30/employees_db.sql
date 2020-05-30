-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.29-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for employees_db
CREATE DATABASE IF NOT EXISTS `employees_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `employees_db`;

-- Dumping structure for table employees_db.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `emmployee_id` int(11) DEFAULT NULL,
  `name` varchar(14) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.departments: ~5 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`emmployee_id`, `name`, `from_date`, `to_date`) VALUES
	(1, 'business_dev', '2011-08-10', '2013-08-15'),
	(5, 'it_services', '2014-12-09', NULL),
	(3, 'product_dev', '2000-01-25', '2020-02-10'),
	(4, 'research_dev', '1999-10-06', '2009-05-12'),
	(2, 'business_dev', '2010-05-25', '2015-06-30');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table employees_db.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(14) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hire_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.employees: ~5 rows (approximately)
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`id`, `firstname`, `lastname`, `birthdate`, `gender`, `hire_date`) VALUES
	(1, 'lena', 'smith', '1990-05-30', 'f', '2010-06-10'),
	(2, 'nikol', 'green', '1987-02-22', 'f', '2009-02-23'),
	(3, 'tom', 'taylor', '1965-09-10', 'm', '2000-01-25'),
	(4, 'alen', 'lee', '1978-07-07', 'm', '1999-10-06'),
	(5, 'david', 'king', '1993-11-14', 'm', '2014-12-09');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;

-- Dumping structure for table employees_db.salaryes
CREATE TABLE IF NOT EXISTS `salaryes` (
  `employee_id` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.salaryes: ~5 rows (approximately)
/*!40000 ALTER TABLE `salaryes` DISABLE KEYS */;
INSERT INTO `salaryes` (`employee_id`, `salary`, `from_date`, `to_date`) VALUES
	(1, 1850, '2010-06-10', '2018-09-15'),
	(2, 1600, '2009-02-23', '2015-06-30'),
	(3, 4200, '2000-01-25', '2020-02-10'),
	(4, 2300, '1999-10-06', '2009-05-12'),
	(5, 1800, '2014-12-09', NULL);
/*!40000 ALTER TABLE `salaryes` ENABLE KEYS */;

-- Dumping structure for table employees_db.titles
CREATE TABLE IF NOT EXISTS `titles` (
  `employee_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table employees_db.titles: ~5 rows (approximately)
/*!40000 ALTER TABLE `titles` DISABLE KEYS */;
INSERT INTO `titles` (`employee_id`, `title`, `from_date`, `to_date`) VALUES
	(1, 'digital marketing manager', '2011-08-10', '2013-08-15'),
	(2, 'social media manager', '2010-05-25', '2015-06-30'),
	(3, 'seo consultant', '2000-01-25', '2020-02-10'),
	(4, 'web analytics developer', '1999-10-06', '2009-05-12'),
	(5, 'system administrator', '2014-12-09', NULL);
/*!40000 ALTER TABLE `titles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
