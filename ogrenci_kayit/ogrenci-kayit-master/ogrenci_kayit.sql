-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Ağu 2018, 17:33:14
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ogrenci_kayit`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenciler`
--

CREATE TABLE `ogrenciler` (
  `id` int(11) NOT NULL,
  `isim` varchar(64) NOT NULL,
  `soyisim` varchar(64) NOT NULL,
  `no` smallint(6) NOT NULL,
  `sinif` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenciler`
--

INSERT INTO `ogrenciler` (`id`, `isim`, `soyisim`, `no`, `sinif`) VALUES
(7, 'Ahmet', 'Tanpınar', 123, 10);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ogrenciler`
--
ALTER TABLE `ogrenciler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ogrenciler`
--
ALTER TABLE `ogrenciler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
