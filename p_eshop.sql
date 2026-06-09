-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2026 at 06:49 AM
-- Server version: 8.0.45-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p_eshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `desct` text NOT NULL,
  `price` int NOT NULL,
  `category` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `desct`, `price`, `category`) VALUES
(1, 'Pikachu', 'img/Pikachu.jpg', 'Tato plyšová figurka o velikosti dlaně je zábavný a okouzlující způsob, jak ukázat svého oblíbeného Pokémona Electric typu, kterého jste původně objevili v Kantu!', 359, 'plushie'),
(2, 'Garchomp', 'img/garchomp.jpg', 'Tato plyšová figurka o velikosti dlaně je zábavný a okouzlující způsob, jak ukázat svého oblíbeného Pokémona Dragon a Ground typu, který byl objeven v Sinnoh!', 359, 'plushie'),
(3, 'Crustle', 'img/crustle.jpg', 'Tato plyšová figurka o velikosti dlaně je zábavný a okouzlující způsob, jak ukázat svého oblíbeného Pokémona Bug a Rock typu, který byl původně objeven v Unově!', 359, 'plushie'),
(4, 'Cynthia & Garchomp', 'img/cynthia_garchomp.jpg', 'Tato detailní figurka, zachycená během silného útoku jejího partnera Garchompa, vnese do vaší sbírky výrazný prvek.', 1399, 'figures'),
(5, 'Lance & Dragonite', 'img/lance_dragonite.jpg', 'Tato figurka, zachycená uprostřed útoku, vnese do vaší sbírky výrazný prvek a připomene vám, že v růstu je radost, zvláště když se Pokémoni a trenéři vyvíjejí společně!', 1399, 'figures'),
(6, 'Leon & Dragapult', 'img/leon_dragapult.jpg', 'achycen po boku svého milovaného Dragapulta v zápalu bitvy, Leon vnáší do vaší sbírky ducha magnetismu a síly.', 1399, 'figures'),
(7, 'Umbreon Jersey', 'img/umbreon_jersey.jpg', 'Jak lépe oslavit odpoledne plné venkovní zábavy než s Moonlight Pokémonem? Tento síťovaný dres má vpředu a uprostřed loga Umbreon a nahoře loga Pokémon a PUMA.', 949, 'cloths'),
(8, 'First Partner Trousers', 'img/trousers.jpg', 'Tyto klasicky střižené kalhoty, které se hodí do každého ročního období, zdobí pixelová grafika Bulbasaura, Charmandera, Squirtla a Pikachua.', 2709, 'cloths'),
(9, 'Rowlet Necklace', 'img/rowlet_necklace.jpg', 'Přívěsek je vyroben z jasně leštěného sterlingového stříbra s černěnými detaily a zelenými smaltovanými lístky. Tento noční Pokémon bude skvělým doplňkem vašeho šatníku!', 2199, 'cloths');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
