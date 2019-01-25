-- --------------------------------------------------------
-- Poslužitelj:                  127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Verzija:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table videoteka.cijenik: ~2 rows (approximately)
/*!40000 ALTER TABLE `cijenik` DISABLE KEYS */;
INSERT INTO `cijenik` (`id`, `vrsta`, `cijena`) VALUES
	(1, 'Hit film', '15'),
	(2, 'Nije hit', '10'),
	(3, 'Stari film', '8');
/*!40000 ALTER TABLE `cijenik` ENABLE KEYS */;

-- Dumping data for table videoteka.clanovi_videoteke: ~0 rows (approximately)
/*!40000 ALTER TABLE `clanovi_videoteke` DISABLE KEYS */;
INSERT INTO `clanovi_videoteke` (`id`, `ime`, `prezime`, `oib`, `adresa`, `mjesto`) VALUES
	(1, 'Marko', 'Drnasin', 0, 'Zrinske gore 29', 'Osijek'),
	(2, 'Pero', 'Perić', 0, 'Reisnerova 76', 'Osijek');
/*!40000 ALTER TABLE `clanovi_videoteke` ENABLE KEYS */;

-- Dumping data for table videoteka.filmovi: ~6 rows (approximately)
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
INSERT INTO `filmovi` (`id`, `ime`, `žanr`, `izdanje`, `cijenik`) VALUES
	(1, 'A simple favour', 'Komedija', 'DVD', 2),
	(2, 'A simple favour', 'Komedija', 'BlueRay', 2),
	(4, 'Bird Box', 'Akcija', 'DVD', 1),
	(6, 'Bird Box', 'Akcija', 'BlueRay', 1),
	(7, 'Scary Movie', 'Horor', 'DVD', 3),
	(8, 'Scary Movie', 'Horor', 'BlueRay', 3);
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping data for table videoteka.posudba: ~6 rows (approximately)
/*!40000 ALTER TABLE `posudba` DISABLE KEYS */;
INSERT INTO `posudba` (`id`, `Kupac_id`, `Film_id`, `vrijeme_podizanja`, `vrijeme_vracanja`, `zakasnina`) VALUES
	(1, 1, 1, '2019-01-04', '2019-01-06', 0),
	(4, 1, 2, '2019-01-06', '2019-01-09', 0),
	(5, 1, 4, '2019-01-06', '2019-01-07', 0),
	(6, 1, 4, '2019-01-05', '2019-01-05', 0),
	(7, 2, 4, '2002-07-21', '2002-07-25', 0),
	(8, 2, 8, '2019-01-06', '2019-01-06', 0),
	(9, 2, 8, '2019-01-06', '2019-01-07', 0);
/*!40000 ALTER TABLE `posudba` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
