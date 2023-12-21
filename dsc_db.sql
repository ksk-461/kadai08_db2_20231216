-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 12 月 21 日 10:59
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `dsc_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `dsc_request`
--

CREATE TABLE `dsc_request` (
  `id` int(12) NOT NULL,
  `company` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `size` varchar(64) NOT NULL,
  `sum_a` int(12) NOT NULL,
  `sum_b` int(11) NOT NULL,
  `sum_c` int(11) NOT NULL,
  `sum_d` int(11) NOT NULL,
  `sum_e` int(11) NOT NULL,
  `assign` varchar(64) NOT NULL,
  `status` int(12) NOT NULL,
  `request_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `dsc_request`
--

INSERT INTO `dsc_request` (`id`, `company`, `name`, `email`, `date`, `size`, `sum_a`, `sum_b`, `sum_c`, `sum_d`, `sum_e`, `assign`, `status`, `request_date`) VALUES
(1, '〇〇スーパー', '田中', 'tanaka@test.com', '2023-12-18', 'B4', 10000, 50000, 0, 0, 0, '立川', 1, '2023-12-15 02:06:44'),
(2, '△△観光', '木村', 'kimura@mail.com', '2023-12-18', 'B4', 0, 0, 60000, 0, 0, '林家', 2, '2023-12-15 02:11:40'),
(3, '◇◇商店街', '阿部', 'abe@mail.com', '2023-12-18', 'B4', 0, 0, 0, 0, 50000, '', 0, '2023-12-15 02:11:50'),
(4, '☆☆製薬', '藤井', 'fuji@test.com', '2023-12-18', 'B4', 300000, 100500, 120000, 130000, 140000, '桂', 1, '2023-12-15 02:12:54'),
(5, '××商事', '中川', 'nakagawa@test.com', '2023-12-18', 'B4', 200000, 100000, 0, 0, 0, '森乃', 2, '2023-12-15 02:16:50'),
(6, '▽▽パン', '白井', 'shirai@test.com', '2023-12-18', 'B3', 0, 60000, 0, 0, 0, '三遊亭', 2, '2023-12-15 02:17:25'),
(7, 'ちょわちょわラーメン', '森田', 'morita@test.com', '2023-12-18', 'B2', 30000, 5000, 5000, 0, 0, '', 0, '2023-12-15 02:20:43'),
(8, '／／歯科', '斎藤', 'saito@test.com', '2023-12-18', 'B4', 5000, 50000, 20000, 2000, 0, '笑福亭', 1, '2023-12-15 02:21:52'),
(9, 'カレーハウス●●', 'カーン', 'khan@test.com', '2023-12-18', 'B4', 0, 0, 3000, 40000, 2000, '', 0, '2023-12-15 02:22:21'),
(10, '！！選挙応援事務局', '林田', 'hayashida@test.com', '2023-12-18', 'B3', 0, 200000, 2000, 3000, 50000, '明石家', 1, '2023-12-15 02:23:14'),
(11, '＋＋飲料', '宇崎', 'uzaki@test.com', '2023-12-18', 'B4', 10000, 20000, 0, 50000, 60000, '', 0, '2023-12-15 02:23:28'),
(12, '△△広告', '田村', 'tamura@mail.com', '2023-12-21', 'B3', 0, 20000, 0, 0, 10000, '', 0, '2023-12-15 03:27:10'),
(19, '北海道〇〇サービス', '六車', 'mug@test.com', '2023-12-31', 'B2', 0, 0, 0, 20000, 30000, '高石', 2, '2023-12-21 18:44:43');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `dsc_request`
--
ALTER TABLE `dsc_request`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `dsc_request`
--
ALTER TABLE `dsc_request`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
